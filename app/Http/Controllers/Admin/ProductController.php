<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller {
    public function Index() {
        return view( 'admin.productlist' );
    }

    public function AddProduct() {
        return view( 'admin.addproduct' );
    }
}
