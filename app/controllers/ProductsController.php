<?php

namespace App\Controllers;

use App\Models\Categories;
use App\Models\Products;

class ProductsController extends BaseController
{
    protected $product;
    protected $categories;
    public function __construct()
    {
        $this->product = new Products;
        $this->categories = new Categories;
    }
    public function index()
    {
        $products = $this->product->list();
        $this->render('product.index', ['products' => $products]);
    }
    public function create()
    {
        $cat = $this->categories->list();
        $this->render('product.add', ['cat' => $cat]);
    }
    public function store()
    {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $id_category = $_POST['id_category'];
        $this->product->add($name, $price, $description, $id_category);
        header("location: ./");
    }
    public function edit($id)
    {
        $product = $this->product->detail($id);
        $cat = $this->categories->list();
        $this->render('product.edit', ['product' => $product, 'cat' => $cat]);
    }
    public function update($id)
    {
        $name = $_POST['name'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $id_category = $_POST['id_category'];
        $this->product->update($id, $name, $price, $description, $id_category);
        header("location: ../");
    }
    public function destroy($id)
    {
        $product = $this->product->delete($id);
        header("location: ../");
    }
}
