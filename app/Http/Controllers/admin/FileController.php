<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\File;
use Illuminate\Http\Request;


class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.files.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.files.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        return view('admin.files.store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $file
     * @return \Illuminate\Http\Response
     */
    public function show($file)
    {
        //
        return view('admin.files.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $file
     * @return \Illuminate\Http\Response
     */
    public function edit($file)
    {
        //
        return view('admin.files.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $file)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $file
     * @return \Illuminate\Http\Response
     */
    public function destroy($file)
    {
        //
    }
}
