<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = 'id_cliente';

    public $timestamps = false;

    protected $fillable = ['nit','nombre','apellido','direccion','fecha_nac','telefono','activo'];

    public function ordenes()
    {
        return $this->hasMany(OrdenTrabajo::class,'id_cliente', 'id_cliente');
    }

}
