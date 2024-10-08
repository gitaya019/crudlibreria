<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;

    protected $fillable = ['nombres','apellidos'];

    public function libros(){
        return $this->hasMany(Libro::class,'id');
    }
}
