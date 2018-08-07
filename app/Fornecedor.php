<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $table = 'fornecedor';

    protected $fillable = [
        'nome', 'nif', 'morada', 'telemovel', 'email', 'tipoProduto', 'designacaoComercial',
    ];
}
