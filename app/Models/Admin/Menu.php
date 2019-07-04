<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table='menu'; //Para que sepa a qué tabla está asociado el modelo
    protected $fillable = ['nombre', 'url', 'icono'];
    protected $guarded = ['id'];
}
