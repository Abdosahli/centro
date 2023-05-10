<?php

namespace App\Http\Controllers;
use App\Models\Parente;
use Illuminate\Http\Request;

class ParentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    
        {
            $parents = Parente::all();
            return response()->json($parents);
        }
    
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
        {

        }
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $parent = new Parente;
        $parent->p_CIN = $request->input('p_CIN');
        $parent->p_image = $request->input('p_image');
        $parent->p_fname = $request->input('p_fname');
        $parent->p_lname = $request->input('p_lname');
        $parent->p_gender = $request->input('p_gender');
        $parent->p_occupation = $request->input('p_occupation');
        $parent->p_address = $request->input('p_address');
        $parent->p_phone = $request->input('p_phone');
        $parent->p_email = $request->input('p_email');
        $parent->save();
        return response()->json($parent);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    
        {
            $parent = Parente::where('p_CIN','like','%'. $id .'%' )->first();
            if (!$parent) {
                return response()->json(['error' => 'This CIN does not exist: ' . $id], 404);
            }
            return response()->json($parent);
            
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
    
        $parent = Parente::where('p_CIN', $id)->first();

        $parent->p_image = $request->input('p_image');
        $parent->p_fname = $request->input('p_fname');
        $parent->p_lname = $request->input('p_lname');
        $parent->p_gender = $request->input('p_gender');
        $parent->p_occupation = $request->input('p_occupation');
        $parent->p_address = $request->input('p_address');
        $parent->p_phone = $request->input('p_phone');
        $parent->p_email = $request->input('p_email');
        $parent->save();
        return response()->json($parent);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
        {
            $parent = Parente::where('p_CIN', $id)->first();

            if (!$parent) {
                return response()->json(['error' => 'Record not found'], 404);
            }

            $parent->delete();
            return response()->json(['success' => 'Record deleted successfully']);
        }

}
