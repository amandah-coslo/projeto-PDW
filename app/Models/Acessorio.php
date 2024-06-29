<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acessorio extends Model
{
    use HasFactory;
    protected $fillable = ['tipoItem', 'preco', 'material', 'cor', 'tamanho'];
}
