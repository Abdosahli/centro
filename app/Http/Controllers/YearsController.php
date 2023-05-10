<?php

namespace App\Http\Controllers;

use App\Models\Years;
use Illuminate\Http\Request;

class YearsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $years = Years::all();
        return response()->json($years);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Not needed for API
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $year = new Years();
        $year->name_year = $request->input('name_year');
        $year->Libelleyear = $request->input('Libelleyear');
        $year->coedyear = $request->input('coedyear');
        $year->save();
        return response()->json($year);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Years  $years
     * @return \Illuminate\Http\Response
     */
    public function show(Years $year)
    {
        return response()->json($year);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Years  $years
     * @return \Illuminate\Http\Response
     */
    public function edit(Years $year)
    {
        // Not needed for API
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Years  $years
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Years $year)
    {
        $year->name_year = $request->input('name_year');
        $year->Libelleyear = $request->input('Libelleyear');
        $year->coedyear = $request->input('coedyear');
        $year->save();
        return response()->json($year);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Years  $years
     * @return \Illuminate\Http\Response
     */
    public function destroy(Years $year)
    {
        $year->delete();
        return response()->json(['message' => 'Year deleted']);
    }
}
