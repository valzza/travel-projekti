<?php

namespace App\Controllers;

use App\Models\Category;
use \Core\View;
use \Core\Controller;

/**
 * Category controller
 */
class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::orderBy('id', 'desc')->get();

        View::renderTemplate('Categories/index.html', ['categories' => $categories]);
    }

    public function create()
    {
        View::renderTemplate('Categories/create.html');
    }

    public function store()
    {
        $category = new Category();
        $category->name = $_POST['name'];
        $category->save();
        header("Location: /categories");
    }

    public function show()
    {

    }

    public function edit()
    {
        $id = $_GET['id'];
        $category = Category::findOrFail($id);

        View::renderTemplate('Categories/edit.html',['category' => $category]);
    }

    public function update()
    {
        $id = $_POST['id'];
        $category = Category::findOrFail($id);
        $category->name = $_POST['name'];
        $category->save();
        header("Location: /categories");
    }

    public function destroy()
    {
        $id = $_GET['id'];
        $category = Category::findOrFail($id);
        $category->delete();
        header("Location: /categories");
    }

}
