@extends('layout')



@section("titulo")
Preguntas frecuentes

@endsection


@section("titulo principal")
Preguntas frecuentes

@endsection


@section("contenido")
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
{{--
<div class ="row justify-content-md-center mt-4">
  <div class="col-lg-4 col-md-6 col-xs-12 ">
    <h2 class="form-signin-heading">Dejenos su pregunta</h2>
    <form class="form-signin" action="{{url('/preguntas/agregar')}}" method="POST" enctype="multipart/form-data">
     @csrf
     <div class="form-group">
       <label for="inputTitulo" class="sr-only">Titulo</label>
       <input type="text" id="inputTitulo" class="form-control mb-4" name="titulo" placeholder="Titulo"  value="{{ old("titulo") }}">
       @if ($errors->has("titulo"))
       <small  class="text-danger">{{ $errors->first("titulo") }} </small>
       @endif
     </div>

     <div class="form-group">
      <label for="inputPregunta" class="sr-only">pregunta</label>
      <textarea id="inputPregunta" name="pregunta" value="" class="md-textarea form-control" placeholder="Deja tu pregunta aqui" rows="3" ></textarea>
      <small  class="text-danger"> </small>

    </div>
    <input type="submit" name="" value="enviar">

  </form>--}}
</div>
<div class="">
  <ul>

  @forelse ($preguntas as $pregunta)
    <li>
{{-- <select class="" name="">
  <option value="">{{$pregunta["titulo"]}}</option>
  <option value="">{{$pregunta["pregunta"]}}</option>
</select>--}}
   <p><h2>{{$pregunta["titulo"]}}</h2></p>
      <h3>{{$pregunta["pregunta"]}}</h3>
      <h4>{{$pregunta["respuesta"]}}</h4>
    </li>
  @empty
    <p>no hay preguntas</p>
  @endforelse
  </ul>
</div>
</div>


@endsection
