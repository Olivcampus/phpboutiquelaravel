<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;


class ProductController extends Controller
{
    public function show ($id) : View
    {
        return View ('product')-> with ('id', $id);
    }

    public function Product_view()
    {
        return View ('Product_view');
    }
}
