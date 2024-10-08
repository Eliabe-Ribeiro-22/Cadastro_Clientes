<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membro extends Model
{
    use HasFactory;

    protected $cast = [
        'items' => 'array',
    ];

    protected $fillable = ['nome', 'cpf', 'endereco', 'cidade', 'celular'];
}
