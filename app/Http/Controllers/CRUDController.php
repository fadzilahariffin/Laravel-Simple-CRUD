<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\crud;
class CRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crud_details = crud::all();
        return view('crud.index', compact('crud_details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $crud = crud::create(
            [
                'name'              => $request->name,
                'description'       => $request->description,
                'price'             => $request->price,
            ]
        );
        // dd($crud);

        return redirect('/')->with('flash_success', 'Your data successfully added!');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $crud_detail = crud::find($id);
        return view('crud.show', compact('crud_detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $crud_detail = crud::find($id);
        return view('crud.edit', compact('crud_detail'));
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
        crud::find($id)->update(
            [
                
                'name'              => $request->name,
                'description'       => $request->description,
                'price'             => $request->price,
            ]
        );

        return redirect('/')->with('flash_success', 'Product have been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        crud::destroy($id);

        return redirect('/')->with('flash_message', 'Product successfully deleted.');
    }
}
