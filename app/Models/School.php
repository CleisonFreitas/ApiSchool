<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    protected $table = 'schools';

    protected $fillable = [
        'name'
    ];

    public $timestamps = true;

    // The method to set our relation with Classroom
    public function hasClass() 
    {
        return $this->hasMany(Classroom::class);
    }
}
