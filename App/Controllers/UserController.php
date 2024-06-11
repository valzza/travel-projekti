<?php

namespace App\Controllers;

use \Core\View;
use \Core\Controller;

/**
 * Home controller
 */
class UserController extends Controller
{

    public function index()
    {
        $users = User::orderBy('id', 'desc')->get();

        View::renderTemplate('Users/index.html', ['users' => $users]);
    }

    public function create()
    {
        View::renderTemplate('Users/create.html');
    }

    public function store()
    {
        $user = new User();
        $user->name = $_POST['name'];
        $user->save();
        header("Location: /users");
    }

    public function show()
    {

    }

    public function edit()
    {
        $id = $_GET['id'];
        $user = User::findOrFail($id);

        View::renderTemplate('User/edit.html',['user' => $user]);
    }

    public function update()
    {
        $id = $_POST['id'];
        $user = User::findOrFail($id);
        $user->name = $_POST['name'];
        $user->save();
        header("Location: /users");
    }

    public function destroy()
    {
        $id = $_GET['id'];
        $user = User::findOrFail($id);
        $user->delete();
        header("Location: /users");
    }

}
