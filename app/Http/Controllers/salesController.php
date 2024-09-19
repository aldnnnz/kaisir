<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class salesController extends Controller
{
    public function index(){
        $sales = [
            [
                'id' => 1,
                'customer_name' => 'John Doe',
                'product' => 'Laptop',
                'quantity' => 5,
                'total_price' => 5000000,
                'date' => '2023-05-01'
            ],
            [
                'id' => 2,
                'customer_name' => 'Jane Smith',
                'product' => 'Smartphone',
                'quantity' => 10,
                'total_price' => 7500000,
                'date' => '2023-05-02'
            ],
            [
                'id' => 3,
                'customer_name' => 'Bob Johnson',
                'product' => 'Headphones',
                'quantity' => 15,
                'total_price' => 1500000,
                'date' => '2023-05-03'
            ]
        ];

        return view('sales.index', compact('sales'));
    }
}
