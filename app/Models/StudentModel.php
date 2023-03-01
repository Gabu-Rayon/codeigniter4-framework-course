<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $table = "tbl_students";
    protected $primaryKey = "id";
    protected $allowedFields = [
    'name',
    'email',
     'phone',
     'course'

     ] ;
}