<?php

namespace App\Models;

class Users extends BaseModel
{
    protected $table = "users";
    public function listUsers()
    {
        $query = "SELECT * FROM " . $this->table;
        return $this->getData($query);
    }
    public function add($email, $username, $password)
    {
        $query = "INSERT INTO " . $this->table . " ( `email`, `username`, `password`) 
        VALUES ('$email','$username','$password')";
        return $this->getData($query, false);
    }
    public function detail($id)
    {
        $query = "SELECT * FROM " . $this->table . " WHERE id=$id";
        return $this->getData($query, false);
    }
    public function update($id, $email, $username, $password)
    {
        $query = "UPDATE " . $this->table . " SET `id`='$id',`email`='$email',
        `username`='$username',`password`='$password' WHERE id = '$id'";
        return $this->getData($query, false);
    }
    public function delete($id)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id =$id";
        return $this->getData($query);
    }
}
