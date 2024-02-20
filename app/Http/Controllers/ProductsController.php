<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $data = ['Oishi','Piatos','Cracklings'];
        $total = count($data);

        return view('products.index',[
            'fruits' => $data,
            'totalFruits'=> $total
        ]);
    }
}
