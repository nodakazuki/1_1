<?php
namespace App\HTTP\Controllers;
use App\Category;
use App\Post;


class CategoryController extends Controller
{
    public function index(Category $category)
    {
        return view('categories.index')->with(['posts' => $category->getByCategory()]);
    }
}
