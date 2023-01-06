<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farmaco extends Model
{
    protected $fillable = [
    'nome',
    'categoria',
    'fabricacao',
    'valor',
    ];
    protected $table = 'maxxfarma';
}
