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


    // Schema::create('achievement_employees', function (Blueprint $table) {
    //     $table->id();
    //     $table->foreignId('achievement_id')->references('id')->on('achievements')->onDelete('cascade');
    //     $table->foreignId('employee_id')->references('id')->on('employees')->onDelete('cascade');
    //     $table->date('achievement_date');
    //     $table->timestamps();
    // });










}
