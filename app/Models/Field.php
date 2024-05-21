<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    public $fillable = ['name', 'number', 'status'];
    use HasFactory;
}
