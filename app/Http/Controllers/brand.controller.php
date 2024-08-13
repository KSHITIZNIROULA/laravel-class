<?php

namespace App\Http\Controllers;

use App\Models\brand;
use Illuminate\Http\Request;

class brandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brand = brand::all();
        // return $categories;
        return view("backend.brand.index", compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title'=>"required",
            "description"=>"required"
        ]);
        $brand = new brand();
        $brand->title = $request->title;
        $brand->description = $request->description;
        $brand->save();
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
        
        $brand = brand::find($id);
        // return $category;
        return view("backend.brand.edit", compact('brand'));
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
        $request->validate([
            'title'=>"required",
            "description"=>"required"
        ]);
        $brand = brand::find($id);
        $brand->title = $request->title;
        $brand->description = $request->description;
        $brand->save();
        return redirect()->back()->with('message', "Data Save Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand= brand::find($id);
        $brand->delete();

        return redirect()->back()->with('message', "Data Deleted Successfully");
    }
}
