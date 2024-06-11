<?php

namespace App\Controllers;

use App\Models\Proporties;
use \Core\View;
use \Core\Controller;

/**
 * Home controller
 */
class ProportiesController extends Controller
{

    public function index()
    {
        $proporties = Proporties::orderBy('id', 'desc')->get();

        View::renderTemplate('Proporties/index.html', ['proporties' => $proporties]);
    }

    public function create()
    {
        View::renderTemplate('Proporties/create.html');
    }

    public function store()
    {
        $proporties = new Proporties();
        $proporties->name = $_POST['name'];
        $proporties->save();
        header("Location: /proporties");
    }

    public function show()
    {

    }

    public function edit()
    {
        $id = $_GET['id'];
        $proporties = Proporties::findOrFail($id);

        View::renderTemplate('Proporties/edit.html',['proporties' => $proporties]);
    }

    public function update()
    {
        $id = $_POST['id'];
        $proporties = Proporties::findOrFail($id);
        $proporties->name = $_POST['name'];
        $proporties->save();
        header("Location: /proporties");
    }

    public function destroy()
    {
        $id = $_GET['id'];
        $proporties = Proporties::findOrFail($id);
        $proporties->delete();
        header("Location: /proporties");
    }

}
