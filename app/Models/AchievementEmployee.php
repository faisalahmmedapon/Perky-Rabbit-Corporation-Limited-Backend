<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AchievementEmployee extends Model
{
    use HasFactory;

    protected $fillable = [
        'achievement_id',
        'achievement_date',
        'employee_id',
    ];
}
