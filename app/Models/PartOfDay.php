<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartOfDay extends Model {
    use HasFactory;
    public $timestamps = false;
    public $table = 'part_of_day';
}