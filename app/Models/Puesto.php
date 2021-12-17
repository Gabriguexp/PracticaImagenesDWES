<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puesto extends Model{
    use HasFactory;
    
    protected $table = 'puesto';
    
    protected $fillable = ['nombre', "salariomaximo", "salariominimo"];
    //puesto: id, nombre, minimo, maximo
}
