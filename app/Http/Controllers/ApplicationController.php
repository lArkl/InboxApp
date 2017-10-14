<?php

namespace App\Http\Controllers;

use App\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('applications.create')
		-> with('program', $request -> program)
		-> with('workshop', $request -> workshop_name);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $application = new Application;

	$application -> workshop = $request -> workshop;
	$application -> program = $request -> program;
	$application -> first_name = $request -> first_name;
	$application -> middle_name = $request -> middle_name;
	$application -> first_surname = $request -> first_surname;
	$application -> second_surname = $request -> second_surname;
	$application -> birth_date = $request -> birth_date;
	$application -> document = $request -> document;
	$application -> home_phone = $request -> home_phone;
	$application -> mobile_phone = $request -> mobile_phone;
	$application -> email = $request -> email;
	$application -> save();
	
	$application_message = 'Your application has been saved successfully.';

	return redirect('workshops')->with('application_message', $application_message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function show(Application $application)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function edit(Application $application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Application $application)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy(Application $application)
    {
        //
    }
}
