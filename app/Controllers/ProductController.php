<?php

namespace App\Controllers;



class ProductController extends BaseController{
    public function index(){
        // echo "Product";
        return view("site/product");
    }
    
}