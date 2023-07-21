<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ['nombre', 'categoria_id', 'subcategoria_id', 'existencia'];

    public function categoria(){
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }

    public function subcategoria() {
        return $this->belongsTo(Categoria::class, 'subcategoria_id');
    }
}
