<?php

use Illuminate\Database\Seeder;

class seederFaq extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('preguntas')->insert([  
        'titulo ' => 'devolucion'  ]);
      //'pregunta' => 'como realizar una devolucion',
      //'respuesta' => 'La devolucion se realiza de este modo'],
    /*[
      'titulo ' => 'Metodos de pago',
      'pregunta' => 'Cuales son los medios de pago con lo que se puede realizar una compra ?',
      'respuesta' => 'Estos son los medios de pago'],
    [
      'titulo ' => 'Productos vencidos',
      'pregunta' => 'Que hacer si el producto recibido ya esta vencido',
      'respuesta' => 'Esto es lo que debe hacer con su producto vencido'],
    [
      'titulo ' => 'Metodos de Pago',
      'pregunta' => '¿Con que forma de pago cuentan?',
      'respuesta' => 'Estas son las formas de pago'],
    [
      'titulo ' => 'Envios',
      'pregunta' => '¿Hacen envios al interior?',
      'respuesta' => 'Si, hacemos envios al interior pore el siguiente medio'],
    [
      'titulo ' => 'Descuentos',
      'pregunta' => '¿Cuentan con alguna promocion en compras grandes?',
      'respuesta' => 'Las promociones y descuentos son los siguientes: a partir de compas mayor a'],
    [
      'titulo ' => 'devoluciones',
      'pregunta' => '¿Aceptan devoluciones en caso de disconformidad con el producto?',
      'respuesta' => 'Para devoluciones por disconformidad de producto, debe verificar los requisitos de cada categoria de productos y comenzar el tramite'],*/



    /*  $data = [
          ['respuesta' => 'La devolucion se realiza de este modo'],
          ['respuesta' => 'Estos son los medios de pago'],
          ['respuesta' => 'Esto es lo que debe hacer con su producto vencido'],
          ['respuesta' => 'Estas son las formas de pago'],
          ['respuesta' => 'Si hacemos envios al interior pore el siguiente medio'],
          ['respuesta' => 'Las promociones y descuentos son los siguientes: a partir de compas mayor a'],
          ['respuesta' => 'Para devoluciones por disconformidad de producto, debe verificar los requisitos de cada categoria de productos y comenzar el tramite'],
  ];


DB::table('preguntas')->insert($data);*/
    }
}
