<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model {
    protected $fillable = ['nombre', 'padre_id'];
    public function subcategorias() {
        return $this->hasMany(Categoria::class, 'padre_id');
    }
}