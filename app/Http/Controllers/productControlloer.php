<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use PDF;

class productControlloer extends Controller
{
    public function getAllProducts(){
        $products = Product::all();
        return view('product',compact('products'));
    }

    public function downloadPDF(){
        $products = Product::all();
        $pdf = PDF::loadView('product',compact('products'));
        return $pdf->download('products.pdf');
    }
}