<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'id_producto';

    public $timestamps = false;

    protected $fillable = ['id_categoria','nombre','descripcion','marca','precio','stock','activo'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class,'id_categoria', 'id_categoria');
    }

    
}
