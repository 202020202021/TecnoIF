<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gestor extends Model
{

    protected $table = 'gestores';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','nome','email','senha'
    ];
    public static function get($filtro = '%')
    {
        return Gestor::where('nome', 'LIKE', '%' . $filtro . '%')
            ->orWhere('gestores.email', 'LIKE', '%' . $filtro . '%')
            ->get();
    }


}
