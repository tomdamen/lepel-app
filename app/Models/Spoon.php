<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spoon extends Model {
    use HasFactory;

    protected $fillable = [
        'description',
        'user_id',
        'date',
        'amount_spoons_used_for_activity',
        'part_of_day',
        'private',
    ];

    public static function getSpoonById(int $spoonId) {
        return Spoon::where('id', $spoonId)->first();
    }

    public static function getSpoonsByDate($user_id, $date) {
        return Spoon::where('user_id', $user_id)->where('date', $date)->get();
    }

    public static function getSpoonsByDayPart($user_id, $date, $part_of_day) {
        return Spoon::where('user_id', $user_id)->where('date', $date)->where('part_of_day', $part_of_day)->get();
    }

    public static function getSpoonsByDateInterval($user_id, $start_date, $end_date) {
        return Spoon::where('user_id', $user_id)->where('date', '>=', $start_date)->where('date', '<=', $end_date)->get();
    }
}