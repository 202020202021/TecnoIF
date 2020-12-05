<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    protected $table = 'candidatos';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'data_nascimento', 'curso', 'periodo', 'turno', 'telefone',
        'cpf', 'rg', 'file', 'banco', 'agencia', 'conta', 'endereco',
        'email', 'bairro', 'numero', 'complemento'
    ];

    public function user()
    {
        $this->belongsTo(User::class);
    }
    public function projetos(){
        $this->hasMany(Edital::class);
    }





}
