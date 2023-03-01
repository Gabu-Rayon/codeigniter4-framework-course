<?php

namespace App\Controllers;

use App\Models\StudentModel;

class StudentController extends BaseController{
    public function index(){
        $student = new StudentModel();
        $data['students'] = $student->findAll();
        return view("site/students",$data);
    }
    
}