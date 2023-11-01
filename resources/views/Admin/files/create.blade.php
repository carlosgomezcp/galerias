@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row">
        <div class="col">
            <h1>Subir Imagen</h1>
            <div class="card mt-5">
                <div class="card-body">
                    <form action="{{route('admin.files.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="file" name="file" accept="image/*"><br>
                            @error('file')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                       <button type="submit" class="btn btn-primary mt-3 btn-sm"> subir Imagen</button>
        
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection