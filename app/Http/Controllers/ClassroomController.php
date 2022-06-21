<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends BaseController
{
    public function __construct()
   {
        $this->model = Classroom::class;
   }
}
