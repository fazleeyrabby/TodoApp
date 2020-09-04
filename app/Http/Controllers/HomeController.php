<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Items;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('clientChild');
    }

    public function usersToDo()
    {
        $id = Auth::user()->id;
        $items = Items::join('brand', 'items.brand_id', '=', 'brand.id')
            ->join('users', 'items.model_id', '=', 'users.id')
            ->where('users.id', '=', $id)
            ->select('items.*', 'brand.name as projectName', 'users.name as userName')
            ->orderBy('id', 'DESC')->get();
        return view('todo', compact('items'));
    }

    public function todoComplete($id)
    {
        $items = Items::where('id',$id)->update(['status' => 1]);
        return redirect()->back()->with('success', ' Todo has been Completed successfully');
    }

    public function todoIncomplete($id)
    {
        $items = Items::where('id',$id)->update(['status' => 0]);
        return redirect()->back()->with('success', ' Todo has been Incompleted successfully');
    }
}
