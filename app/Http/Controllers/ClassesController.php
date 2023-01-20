<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes;

class ClassesController extends Controller
{
    public function index()
    {
        $clss = Classes::all();
        return view('cls.index',compact('clss'));
    }
    public function create()
    {
        return view("cls.create");
    }
    public function save (Request $request )
    {
        $this->validate($request, [
            'title' => 'required'
        ]);
        Classes::create([
            'title' => $request->title
        ]);
        return redirect()->back()->with('status', 'Class Successfully Saved');
    }
    public function edit($id)
    {
        $cls = Classes::find($id);

        return view('cls.edit',compact('cls'));
    }
    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'title' => 'required'
        ]);

        $cls = Classes::find($id);

        $cls->title = $request->title;

        $cls->save();

        return redirect()->back()->with('status','Class successfully updated');
    }

    public function delete($id)
    {
        $cls = Classes::find($id);
        $cls->delete();

        return redirect()->back()->with('status','Class record deleted');
    }
}
