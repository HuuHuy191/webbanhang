<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryProductController extends Controller
{
  public function add_category_product()
  {
    // Logic to display all category products
    return view('admin.add_category_product');
  }
  public function all_category_product()
  {
    // Logic to display all category products
    return view('admin.all_category_product');
  }
}
