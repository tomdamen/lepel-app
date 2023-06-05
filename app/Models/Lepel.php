<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lepel extends Model {
    use HasFactory;

    protected $fillable = [
        'description',
        'user_id',
        'date',
    ];

    public static function getLepelById(int $lepelId) {
        return Lepel::where('id', $lepelId);
    }

    public static function getLepelsByDate($user_id, $date) {
        return Lepel::where('user_id', $user_id)->where('date', $date)->get();
    }
}