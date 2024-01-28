<?php

namespace App\Models;

class Categories extends BaseModel
{
    protected $table = "categories";
    public function list()
    {
        $query = "SELECT * FROM " . $this->table;
        return $this->getData($query);
    }
    public function add($name)
    {
        $query = "INSERT INTO " . $this->table . " ( `name`) 
        VALUES ('$name')";
        return $this->getData($query, false);
    }
    public function detail($id)
    {
        $query = "SELECT * FROM " . $this->table . " WHERE id=$id";
        return $this->getData($query, false);
    }
    public function update($id, $name)
    {
        $query = "UPDATE " . $this->table . " SET `id`='$id',`name`='$name' 
        WHERE id = '$id'";
        return $this->getData($query, false);
    }
    public function delete($id)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id =$id";
        return $this->getData($query);
    }
}
