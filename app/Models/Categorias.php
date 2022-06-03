<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    
    use HasFactory;
    // excepción de asignación masiva
    protected $fillable=[category,create,update];
}
