<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\File;

class MainController extends Controller
{
    //

    public function index()
    {
        $files=File::paginate(5);
        return view('home',compact('files'));
    }
}
