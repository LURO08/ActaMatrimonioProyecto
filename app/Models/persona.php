<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    use HasFactory;
    protected $guarded = []; // Guarded sirve para especificar los campos que no se pueden modificar
}
