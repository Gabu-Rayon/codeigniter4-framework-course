<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = "tbl_products";
    protected $primaryKey = "id";
    
    protected $allowedFields = [
    'name',
    'description',
     'price',
     'image'
     ] ;
}