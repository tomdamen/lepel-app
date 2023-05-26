<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lepel extends Model {
    use HasFactory;

    protected $fillable = [
        'description',
        'medient_id',
        'date',
    ];
}