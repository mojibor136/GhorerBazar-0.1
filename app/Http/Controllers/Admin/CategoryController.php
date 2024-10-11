<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller {
    public function Index() {
        return view( 'admin.categorylist' );
    }

    public function AddCategory() {
        return view( 'admin.addcategory' );
    }
}
