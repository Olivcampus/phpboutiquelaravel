<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;


class ProductController extends Controller
{
    public function show ($id)
    {
        return View ('product-detail')-> with ('id', $id);
    }

    public function Product_view() : View
    {
        return View ('product-list');
    }
}
