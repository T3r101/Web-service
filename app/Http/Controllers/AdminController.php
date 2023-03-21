<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MainModel;

class AdminController extends Controller
{
    
    public function index()
    {
       return view('admin.blogsTable',['blogs' => MainModel::all()]); 
    }

    public function create()
    {
        return view('admin.blogsCreate');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        MainModel::create($input);
        return redirect('/admin');
    }

    
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
        return view ('admin.blogsEdit',['blogs' => MainModel::find($id)]);
    }

    
    public function update(Request $request, string $id)
    {
        $blogs = Mainmodel::find($id);
        $input = $request->all();
        $blogs-> update($input);
        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MainModel::destroy($id);
        return redirect('/admin');
    }
}
