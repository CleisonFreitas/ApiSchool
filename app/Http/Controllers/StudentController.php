<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends BaseController
{
   public function __construct()
   {
        $this->model = Student::class;
   }
}
