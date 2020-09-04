<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use App\Brand;
use App\User;
Use \Carbon\Carbon;

class ModelController extends Controller
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


    public function check(Request $request)
    {
        $brand_id = $request->get('brand_id');  
        $name = $request->get('name');
        return $model =  Models::join('brand','models.brand_id','=','brand.id')->where('models.name',$name)->count();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $models = User::all();
        return view('admin.model.create', compact('models'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Models;
        $model->brand_id = $request->brand_id;
        $model->name = $request->name;
        $model->entry_date = Carbon::now();  
        $model->save();
        return redirect()->back()->with('success', ' Model has been added successfully');  
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
       //  $edit_model = Models::findOrFail($id);
       // return view('admin.model.create',compact('edit_model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function model_update(Request $request)
     {   
        $edit_model = Models::where('id',$request->emodel_id)->first();
        $edit_model->brand_id = $request->brand_id;
        $edit_model->name = $request->name;
        $edit_model->entry_date = Carbon::now();  
        $edit_model->save();
        return redirect()->back()->with('success', ' User has been Updaetd successfully');  
   }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destory($id)
    {
        $data = User::findOrFail($id);
        $data->delete($data);
        return redirect()->back()->with('success', ' User will be deleted successfully');  
    }
}
