<?php

namespace App\Controllers;

use App\Helper\Session;
use App\Models\Property;
use App\Models\User;
use \Core\View;
use \Core\Controller;

/**
 * Properties controller
 */
class PropertiesController extends Controller
{

    public function __construct()
    {
        $session = Session::getInstance();
        if (!$session->isSignedIn()){
            header('Location: /login');
        }
    }
    public function index()
    {
        $properties = Property::orderBy('id', 'desc')->with('user')->get();

        View::renderTemplate('Properties/index.html', ['properties' => $properties]);
    }

    public function create()
    {
        View::renderTemplate('Properties/create.html');
    }

    public function store()
    {
        $properties = new Property();
        $properties->user_id = $_SESSION['user_id'];
        $properties->title = $_POST['title'];
        $properties->description = $_POST['description'];
        $properties->location = $_POST['location'];
        $properties->price_per_night = $_POST['price_per_night'];
        $properties->save();
        header("Location: /properties");
    }

    public function show()
    {

    }

    public function edit()
    {
        $id = $_GET['id'];
        $properties = Property::findOrFail($id);

        View::renderTemplate('Properties/edit.html',['properties' => $properties]);
    }

    public function update()
    {
        $id = $_POST['id'];
        $properties = Property::findOrFail($id);
        $properties->title = $_POST['title'];
        $properties->description = $_POST['description'];
        $properties->location = $_POST['location'];
        $properties->price_per_night = $_POST['price_per_night'];
        $properties->save();
        header("Location: /properties");
    }

    public function destroy()
    {
        $id = $_POST['id'];
        $properties = Property::findOrFail($id);
        $properties->delete();
        header("Location: /properties");
    }

}
