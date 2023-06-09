<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Lepel;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    public function lepels(): HasMany {
        return $this->hasMany(Lepel::class);
    }



    public static function getUserById(int $userId) {
        return User::where('id', $userId)->with('lepels')->first();
    }

    public static function getUserWithDateLepels(int $userId, string $date) {
        return User::where('id', $userId)->with(['lepels' => function ($q) use ($date) {
            $q->where('date', $date);
        }])->first();
    }

    public static function getUserWithTimeIntervalLepels(int $userId, $startDate, $endDate) {
        return User::where('id', $userId)->with(['lepels' => function ($q) use ($startDate, $endDate) {
            $q->where('date', '>=', $startDate)->where('date', '<=', $endDate)->orderBy('date');
        }])->first();
    }
}