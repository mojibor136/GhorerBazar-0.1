<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller {
    public function ProductView() {
        return view( 'productView' );
    }

    public function Shop() {
        return view( 'shop' );
    }
}
