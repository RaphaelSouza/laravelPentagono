<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passageiros extends Model
{
    use HasFactory;
    //DESABILITANDO O CONTROLE POR TIMESTAMPS
    public $timestamps = false;
    //ASSOCIAR A MODEL A TABELA DO DB
    protected $table = "passageiros";
    //ASSOCIAR A PK DA TABELA
    protected $primaryKey = "id";
    //ASSOCIAR OS CAMPOS QUE DEVEM SER PREENCHIDOS, DEVEM SEGUIR OS MESMOS NOMES DOS CAMPOS/COLUNAS DO DB
    protected $fillable = ['nome', 'sobrenome', 'cpf', 'passaporte'];
}