<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Categories;
class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tailor()
    {
        return response()->json(
            Categories::where('cat_type','tailor')->get()
            );
        //return response()->json(Categories::all());
       //$cat= Categories::all()
    }
    public function shop()
    {
        return response()->json(
            Categories::where('cat_type','shop')->get()
       );
        //return response()->json(Categories::all());
       //$cat= Categories::all()
    }
    public function catid()
    {
        
        return response()->json(Categories::all());
       //$cat= Categories::all()
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
        $this->validate($request,[
            'cat_name'=>'required|unique:categories',
            ]);
         $cat= Categories::create($request->all());
   
       return response()->json(['message' => 'Successfully saved']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
