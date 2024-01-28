<?php

namespace App\Controllers;

use App\Models\Users;
use eftec\bladeone\BladeOne;

class UsersController extends BaseController
{
    protected $user;
    public function __construct()
    {
        $this->user = new Users;
    }
    public function index()
    {
        $users = $this->user->listUsers();
        $this->render('user.index', ['users' => $users]);
    }
    public function create()
    {
        $this->render('user.add');
    }
    public function store()
    {
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $this->user->add($email, $username, $password);
        header("location: index.php");
    }
    public function edit($id)
    {
        $user = $this->user->detail($id);
        $this->render('user.edit', ['user' => $user]);
    }
    public function update($id)
    {
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $this->user->update($id, $email, $username, $password);
        header("location: ../index.php");
    }
    public function destroy($id)
    {
        $user = $this->user->delete($id);
        header("location: ../index.php");
    }
}
