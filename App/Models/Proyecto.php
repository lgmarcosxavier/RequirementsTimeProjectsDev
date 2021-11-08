<?php
namespace App\Models;

class Proyecto extends Model {
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'empresa', 'contacto_correo',
        'contacto_telefono', 'estado'
    ];
}