<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends BaseController
{
    public function __construct()
   {
        $this->model = School::class;
   }
}
