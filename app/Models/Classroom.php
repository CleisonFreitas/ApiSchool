<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

    protected $table = 'classrooms';

    protected $fillable = [
        'date_start',
        'level',
        'shift',
        'school_id'
    ];

    public $timestamps = true;

    // The method to set our relation with Student model
    public function hasStudent() 
    {
        return $this->hasMany(Student::class);
    }

    // The method to set our relation with School model
    public function Schools()
    {
        return $this->belongsTo(School::class);
    }
}
