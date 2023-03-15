<?php

namespace App\Controllers;

use App\Models\ProductModel;

class ProductController extends BaseController
{
    public function productData()
    {
        // echo "Product";
        return view("product/products");
    }
    public function addProduct()
    {
        // echo "Product";
        return view("product/add-product");
    }
    public function productPost()
    {
        $product = new ProductModel();
        $file = $this->request->getFile("image");

        if ($file->isValid() && ! $file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move(WRITEPATH . 'uploads/', $imageName);
        }
        $data = [
        'name' => $this->request->getPost('name'),
        'description' =>  $this->request->getPost('description'),
        'price' => $this->request->getPost('price'),
        'image' => $imageName
        ];
        $product->save($data);
         return  redirect()->to('products')->with('status','Product Data  & images saved !');
    }
}