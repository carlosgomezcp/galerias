@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css" integrity="sha512-+Vla3mZvC+lQdBu1SKhXLCbzoNCl0hQ8GtCK8+4gOJS/PN9TTn0AO6SxlpX8p+5Zoumf1vXFyMlhpQtVD5+eSw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')
<div class="container py-4">
    <div class="row">
        <div class="col">
            <h1>Subir Imagen</h1>
           
           {{-- opcion 1 
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
            </div> --}}
            {{--opcop 2 laraver intervetion --}}
            <form action="{{route('admin.files.store')}}" method="POST" class="dropzone" id="my-great-dropzone">
            
            </form>
            
        </div>
    </div>
</div>
@endsection
@section('js')
<script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js" integrity="sha512-U2WE1ktpMTuRBPoCFDzomoIorbOyUv0sP8B+INA3EzNAhehbzED1rOJg6bCqPf/Tuposxb5ja/MAUnC8THSbLQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>
  Dropzone.options.myGreatDropzone  = { // camelized version of the `id`
    /*paramName: "file", // The name that will be used to transfer the file
    maxFilesize: 2, // MB
    accept: function(file, done) {
      if (file.name == "justinbieber.jpg") {
        done("Naha, you don't.");
      }
      else { done(); }
    }*/
    headers:{
        'X-CSRF-TOKEN':"{{csrf_token()}}"
    },
    dictDefaultMessage:"Arraga la imgen al recuadro",
    acceptFiles:"imagen/*",
    maxFilesize:2,
    maxFiles:10,
  };
</script>
@endsection