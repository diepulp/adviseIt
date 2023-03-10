<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlanController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(Plan::latest()->filter((request(['token', 'search'])))->paginate(2));
        // get all plans
        //filter by the latest plan
        return view('plans.index', [
            'plans' => Plan::latest()->filter((request(['token', 'search'])))->simplePaginate(2)
        ]);
    }

    /**
     * Display the specified resource (show single plan)
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Plan $plan)
    {
        // dd($plan);
        return view('plans.show', [
            'plan' => $plan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $token = Str::random(6);

        return view('plans.new-plan', ["token" => $token]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     */
    //VALIDATION-----------------------
    // $formData = $request->validate([
    //     'KEY'=> 'value', 
    // ])

    public function store(Request $request)
    {

        $plan = new Plan();
        dd(
            $request
        );
        $plan->fall = $request->fall;
        $plan->winter = $request->winter;
        $plan->spring = $request->spring;
        $plan->summer = $request->summer;
        $plan->token = $request->token;
        $plan->user_id = auth()->id();

        $plan->save();

        //Flash messege with session
        // Session::flash("message", "Plan created?"); ... OR >
        return redirect('/')->with('message', 'Plan Created Successfully');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Plan $plan)
    {
        // dd('$plan->token');
        return view('plans.edit', ['plan' => $plan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plan $plan)
    {
        // Make sure the logged in user is the owner of the plan
        if ($plan->user_id != auth()->id()) {
            abort(403, "Unauthorized action");
        }
        // dd($request);
        $plan->fall = $request->fall;
        $plan->winter = $request->winter;
        $plan->spring = $request->spring;
        $plan->summer = $request->summer;
        $plan->token = $request->token;

        $plan->update();

        //Flash message with session
        // Session::flash("message", "Plan created?");
        // return redirect('/')->with('message', 'Plan Updated Successfully');
        return back()->with('message', 'Plan Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plan $plan)
    {
        // Make sure the logged in user is the owner of the plan
        if ($plan->user_id != auth()->id()) {
            abort(403, "Unauthorized action");
        }

        $plan->delete();
        return redirect('/')->with('message', 'The plan id ' . $plan->token . ' was deleted successfully');
    }

    // Manage Plans
    public function manage()
    {
        // dd(auth()->user());
        return view('plans.manage', ['plans' => auth()->user()->plans()->get()]);
    }
}
