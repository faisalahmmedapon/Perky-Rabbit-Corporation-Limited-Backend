<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'department_id',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function achievements()
    {
        return $this->belongsToMany(Achievement::class, 'achievement_employees')
            ->withPivot('achievement_date')
            ->withTimestamps();
    }











}
