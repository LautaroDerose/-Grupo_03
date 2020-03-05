<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public $table = "usuarios";
    public $id = "idUsuarios";
    public $timestamps = false;
    public $guarded = [];
}
