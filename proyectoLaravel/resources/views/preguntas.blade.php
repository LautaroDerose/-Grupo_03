@extends("layout")
@section("links")

@endsection
@section("titulo")
	F.A.Q
@endsection
{{--preguntasAgregar para agregar, controller para guardar, preguntas.blade para mostrar--}}
@section("contenido")
<form id="preguntas" action="/preguntas/agregar" method="post"></form>
@csrf


{{--	<div class ="row justify-content-md-center mt-4">
          <div class="col-lg-4 col-md-6 col-xs-12 ">
            <form class="form-signin" action="FAQ.php" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                    <div>
                      <label for="inputTitulo">Titulo</label>
                      <input type="text" id="inputTitulo" name="titulo" class="form-control" placeholder="Titulo"  autofocus>
                    </div>

                     <div class="md-form amber-textarea active-amber-textarea-2">
                        <label for="pregunta">Ingese la pregunta</label>
                        <textarea id="pregunta" name="pregunta" class="md-textarea form-control" rows="3"></textarea>
                      </div>
                      <button type="submit" class="btn btn-success">Submit</button>
              </div>
            </form>
          </div>
      </div>
           <div class="accordion" id="accordionExample">
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

                    </button>
                  </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                  </div>
                </div>
              </div>
            </div>

--}}
@endsection
