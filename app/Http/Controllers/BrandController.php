<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
Use \Carbon\Carbon;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    public function check(Request $request)
    {


        if($request->get('name'))
        {
            $name = $request->get('name');
            return $brand = Brand::where('name',$name)->count();
           
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $brands = Brand::orderBy('entry_date','desc')->paginate(25);
        return view('admin.brand.brand', compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $brand = new Brand;
       $brand->name = $request->name;
       $brand->entry_date = Carbon::now();  
       $brand->save();
       return redirect()->back()->with('success', ' Project has been added successfully');  
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
       $edit_brand = Brand::findOrFail($id);
       return view('admin.brand.create',compact('edit_brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       // return $aafg = $request->all();
       $edit_brand = Brand::where('id',$request->ebrandid)->first();
       $edit_brand->name = $request->name;
       $edit_brand->entry_date = Carbon::now();  
       $edit_brand->save();
       return redirect()->back()->with('success', ' Project has been Updaetd successfully');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destory($id)
    {
        $data = Brand::findOrFail($id);
        $data->delete($data);
        return redirect()->back()->with('success', ' Project will be deleted successfully');  
    }
}
