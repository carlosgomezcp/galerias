<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;


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
        
        $files=File::where('user_id',auth()->user()->id)->paginate(24);
        
        return view('admin.files.index',compact('files'));
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
       // se comenta para activar la otra forma de guardar 
       $request->validate([
         'file'=>'required|image|max:2048'   
        ]);
        //imagen se guarda en public
        $imagen= $request->file('file')->store('public/imagenes');
        //coloca la ruta storage 
        $url=Storage::url($imagen);
        //guadar en el modelo
        File::create([
            'user_id'=>auth()->user()->id,
            'url'=>$url
        ]);
          
        /*
        $request->validate([
            'file'=>'required|image'   
           ]);
        $nombre= Str::random(10) . $request->file('file')->getClientOriginalName();
        
        $ruta=storage_path().'\app\public\imagenes/'.$nombre;
        Image::make($request->file('file'))->resize(1200, null, function ($constraint) {
            $constraint->aspectRatio();
        })->save($ruta); 
        //guardar en el modelo
         //guadar en el modelo
         File::create([
            'user_id'=>auth()->user()->id,
            'url'=>'/storage/imagenes/'.$nombre
        ]);*/
        return redirect()->route('admin.home');
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
