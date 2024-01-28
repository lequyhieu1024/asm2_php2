<?php

namespace App\Controllers;

use App\Models\Categories;

class CategoriesController extends BaseController
{
    protected $categories;
    public function __construct()
    {
        $this->categories = new Categories();
    }
    public function index()
    {
        $categories = $this->categories->list();
        $this->render('category.index', ['categories' => $categories]);
    }
    public function create()
    {
        $this->render('category.add');
    }
    public function store()
    {
        $name = $_POST['name'];
        $this->categories->add($name);
        header("location: ./");
    }
    public function edit($id)
    {
        $categories = $this->categories->detail($id);
        $this->render('category.edit', ['categories' => $categories]);
    }
    public function update($id)
    {
        $name = $_POST['name'];
        $this->categories->update($id, $name);
        header("location: ../");
    }
    public function destroy($id)
    {
        $categories = $this->categories->delete($id);
        header("location: ../");
    }
}
