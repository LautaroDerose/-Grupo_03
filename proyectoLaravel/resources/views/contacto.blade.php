@extends("layout")
@section("links")
	<link rel="stylesheet" href="css/contacto.css">
@endsection

@section("titulo")
Contacto
@endsection

@section("contenido")

<form id="contact" action="" method="post">
      <h3>Contactenos</h3>
      <fieldset>
        <input placeholder="Nombre" type="text" tabindex="1" required autofocus>
      </fieldset>
      <fieldset>
        <input placeholder="E-mail" type="email" tabindex="2" required>
      </fieldset>
      <fieldset>
        <input placeholder="Celular" type="tel" tabindex="3" required>
      </fieldset>
      <fieldset>
        <textarea placeholder="Deja tu mensaje aquí..." tabindex="5" required></textarea>
      </fieldset>
      <fieldset>
        <button name="submit" type="submit" id="contact-submit" class="btn btn-lg btn-primary btn-block black-background white" data-submit="submit">Enviar</button>
      </fieldset>
    </form>


@endsection