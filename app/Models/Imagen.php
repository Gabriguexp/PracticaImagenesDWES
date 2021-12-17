<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    use HasFactory;
    protected $table = 'imagen';
    protected $fillable = ['idempleado', 'nombre', 'nombreoriginal', 'nuevonombre', 'mimetype', ];
    
    public function empleado(){
        return $this->belongsTo('\App\Models\Empleado', 'idempleado');
    }

}
