<?php

namespace App\Http\Controllers;

use App\Workshop;
use Illuminate\Http\Request;

class WorkshopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
	$search_entry = $request -> search_entry;

	if ($search_entry != NULL OR $search_entry != '')
	{
	  $search_values = preg_split('/\s+/', $search_entry, -1, PREG_SPLIT_NO_EMPTY);
          $workshops = Workshop::where(function($query) use($search_values) {
            foreach ($search_values as $value) {
               $query -> orWhere('name', 'like', "%{$value}%");//->orWhere('created_at', 'like', "%{$value}%");
            }
          }) -> paginate(8);            
          $search_placeholder = 'Results for '.$search_entry;
          
          return view('workshops.index') -> with('workshops', $workshops) -> with('search_placeholder', $search_placeholder);

	} else
	{
 	  $workshops = Workshop::paginate(8);
	 
	  return view('workshops.index') -> with('workshops', $workshops);
	}
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function show(Workshop $workshop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function edit(Workshop $workshop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Workshop $workshop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Workshop $workshop)
    {
        //
    }
}
