@extends('layouts.app')

@section('content')

<div class="container ">
    <div class="row">
       
        @foreach ($files as $file)
        <div class="col-4">
            <div class="card">
                <img src="{{asset($file->url)}}" class="img-fluid" alt="...">
                <div class="card-footer">
                    <a href="{{route('admin.files.edit',$file)}}" class="btn btn-primary">Editar</a>
                    <form action="{{route('admin.files.destroy',$file)}}" class="d-innline" method="post">
                       @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"> Eliminar</button>
                    </form>

                </div>

            </div>

        </div>
        
            
        @endforeach  
        <div class="col-12">
            {{$files->links()}}
        </div>
                  
                
                
              
    </div>
    
</div>
@endsection