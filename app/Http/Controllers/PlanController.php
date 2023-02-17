<?php

namespace App\Http\Controllers;

use App\Models\Plan;
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
        //
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
        // dd($request['token']);
        // dd(session());
        $plan = new Plan();
        // dd($plan);
        // $formData = $request->validate([
        //     'fall' => $request->'fall',
        //     'winter' => $request->'winter'],
        //     'spring' => $request['spring'],
        //     'summer' => $request['summer'],
        //     'token' => $request['token'],
        // ]);

        $plan->fall = $request->fall;
        $plan->winter = $request->winter;
        $plan->spring = $request->spring;
        $plan->summer = $request->summer;
        $plan->token = $request->token;

        $plan->save();

        //Flash messege with session
        // Session::flash("message", "Plan created?");
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
        // dd($plan);
        $plan->fall = $request->fall;
        $plan->winter = $request->winter;
        $plan->spring = $request->spring;
        $plan->summer = $request->summer;
        $plan->token = $request->token;

        $plan->update();

        //Flash messege with session
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
        $plan->delete();
        return redirect('/')->with('message', 'The plan id ' . $plan->token . ' was deleted successfully');
    }
}
