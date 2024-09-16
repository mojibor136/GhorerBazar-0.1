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

    public function StoreCategory( Request $request ) {
        dd($request->all());
        $request->validate( [
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ] );

        $imageName = '';
        if ( $image = $request->file( 'image' ) ) {
            $imageName = time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move( public_path( 'CategoryImg' ), $imageName );
        }

        dd( $imageName, $request->name );

        Category::create( [
            'category_img' => $imageName,
            'category_name' => $request->name,
            'slug' => strtolower( str_replace( ' ', '-', $request->name ) ),
        ] );

        return back();
    }
}
