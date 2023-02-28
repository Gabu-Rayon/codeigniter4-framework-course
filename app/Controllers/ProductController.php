<?php

namespace App\Controllers;


class  ProductController extends BaseController{
    
    public function Products(){
        return view("products/index");
    }
}