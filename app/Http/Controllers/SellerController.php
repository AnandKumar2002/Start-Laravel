<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Seller;

class SellerController extends Controller
{
    //
    public function list() {
        // return Seller::all();
        return Seller::find(1)->product;
    }

    public function many() {
        return Seller::find(1)->products;
    }

    // public function manyToOne() {
    //     $data = Product::with('seller')->get();
    //     return $data;
    // }

    public function manyToOne() {
        $data = Seller::with('products')->get();
        return $data;
    }

}
