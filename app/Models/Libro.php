<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','pais','editorials_id','autors_id'];

    public function autors(){
        return $this->belongsTo(Autor::class,'autors_id');
    }

    public function editorials(){
        return $this->belongsTo(Editorial::class,'editorials_id');
    }
}
