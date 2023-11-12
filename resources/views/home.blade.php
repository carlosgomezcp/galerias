@extends('layouts.app2')

@section('content')
<div class="container ">
    <div class="row">
        <div class="col">

            <div class="card-columns">
                @foreach ($files as $file)
                <div class="card">
                    <img src="{{asset($file->url)}}" class="card-img-top" alt="...">
                    
                @endforeach
               
                  
                </div>
                {{$files->links()}}
              
            </div>


        </div>
    </div>
    
</div>
@endsection