<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $fillable = [
        'name',
        'email',
        'classroom_id'
    ];

    public $timestamps = true;


    // The method to set our relation with Classroom model
    public function Classroom()
    {
        return $this->belongsTo(Classroom::class);
    }
}
