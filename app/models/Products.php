<?php

namespace App\Models;

class Products extends BaseModel
{
    protected $table = "products";
    public function list()
    {
        $query = "SELECT products.*, categories.name as cat_name FROM " . $this->table . " 
        JOIN categories ON categories.id = " . $this->table . ".id_category";
        return $this->getData($query);
    }
    public function add($name, $price, $description, $id_category)
    {
        $query = "INSERT INTO " . $this->table . " ( `name`, `price`, `description`,`id_category`) 
        VALUES ('$name','$price','$description','$id_category')";
        return $this->getData($query, false);
    }
    public function detail($id)
    {
        $query = "SELECT * FROM " . $this->table . " WHERE id=$id";
        return $this->getData($query, false);
    }
    public function update($id, $name, $price, $description, $id_category)
    {
        $query = "UPDATE " . $this->table . " SET `id`='$id',`name`='$name',
        `price`='$price',`description`='$description',`id_category`='$id_category' WHERE id = '$id'";
        return $this->getData($query, false);
    }
    public function delete($id)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id =$id";
        return $this->getData($query);
    }
}
