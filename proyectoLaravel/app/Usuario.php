<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public $table = "usuarios";
    public $primaryKey = "idUsuario";
    public $timestamps = false;
    public $guarded = [];
}
