@extends("layout")

@section("titulo")

@endsection

@section("contenido")
<section class="ml-4 mt-4">
		<div class="row pt-4">
			<div class="col-lg-6 col-md-6 col-xs-12 ">
				<h2>Producto</h2>

				<a href="#"><img class="img-responsive" src="globos.svg" height="300px" width="220px" alt ="image-producto"></a>
				<button type="button" class="btn btn-primary btn-block">Ver productos similares</button>
			</div>

			<div class="col-lg-5 col-md-5 col-xs-12  mt-4 mr-1">
				<table class="table table-hover table-bordered">
					<tbody>
						<thead>
							<th colspan="2">RESUMEN DE COMPRA</th>
						</thead>
						<tr>
							
							<th>Nombre</th>
							<th>Precio</th>
							<th>Cantidad</th>
						</tr>
						@if(Session::has('cart') )
						@foreach(Session::get('cart')->items as $product)
						<tr>
							
							<td>{{$product["nombre"]}}</td>
							<td>${{$product["price"]}}</td>
							<td>{{$product["qty"]}}</td>
							
						</tr>
						@endforeach
						@endif

						<tr>
							<th scope="row">TOTAL </th>
							<td>{{Session::has('cart') ? Session::get('cart')->totalPrice : "" }}</td>
						</tr>
					</tbody>
				</table>
				<button type="button" class="btn btn-primary">Continuar comprando</button>
				<button type="button" class="btn btn-outline-success float-right">Pagar</button>

			</div>
		</div>
		
	</section>


@endsection

