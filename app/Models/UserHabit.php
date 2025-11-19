<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserHabit extends Model
{
    protected $table = 'user_habits';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'id_user',
        'id_habit',
        'habit_type',
    ];

    public function userGrowpath()
    {
        return $this->belongsTo(UserGrowpath::class, 'id_user', 'id_user');
    }

}
