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
        // get all plans
        //filter by the latest plan
        return view('plans.index', [
            'plans' => Plan::latest()->filter((request(['token', 'search'])))->get()
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
        return redirect('/');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
