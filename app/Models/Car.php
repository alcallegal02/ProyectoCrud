<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
    use HasFactory;

    // Campos permitidos para asignación masiva
    protected $fillable = ['brand', 'model', 'year', 'price'];
}
