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
        'afternoon',
    ];

    public static function getLepelById(int $lepelId) {
        return Lepel::where('id', $lepelId)->first();
    }

    public static function getLepelsByDate($user_id, $date) {
        return Lepel::where('user_id', $user_id)->where('date', $date)->get();
    }

    public static function getLepelsByDayPart($user_id, $date, $afternoon) {
        return Lepel::where('user_id', $user_id)->where('date', $date)->where('afternoon', $afternoon)->get();
    }

    public static function getLepelsByDateInterval($user_id, $start_date, $end_date) {
        return Lepel::where('user_id', $user_id)->where('date', '>=', $start_date)->where('date', '<=', $end_date)->get();
    }
}