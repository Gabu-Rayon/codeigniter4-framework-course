<?php

namespace App\Controllers;

use App\Models\ProductModel;

class ProductController extends BaseController
{
    // public function viewProducts(){
    //     return view("product/products");
    // }
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
            $file->move('uploads/', $imageName);
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
    public function fetchProducts()
    {
        $product = new ProductModel();
        $data['products'] = $product->findAll();
        return view("product/products", $data);
    } 
      public function deleteProduct($id = null)
    {
        $product= new ProductModel();
        $product->delete($id);
        return redirect()->back()->with('status', 'Product Data Deleted');
    }
     public function deleteMeth($id = null)
    {
        $product = new ProductModel();
        $product->delete($id);
        return redirect()->back()->with('status','Product Data Deleted');
    }
     public function confirmDel($id = null)
    {
        $product = new ProductModel();
        $product->delete($id);
        $data = [
            'status'=> 'Deleted Successfully',
            'status_text'=> 'You Product Data has been deleted successfully',
            'status_icon'=> 'success'
        ];
        return $this->response->setJSON($data);        
    }
}