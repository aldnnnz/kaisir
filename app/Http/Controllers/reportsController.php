<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reportsController extends Controller
{
    public function index(){
        $reports = [
            [
                'id' => 1,
                'date' => '2023-05-01',
                'product' => 'Laptop',
                'quantity' => 5,
                'total_sales' => 5000000
            ],
            [
                'id' => 2,
                'date' => '2023-05-02',
                'product' => 'Smartphone',
                'quantity' => 10,
                'total_sales' => 7500000
            ],
            [
                'id' => 3,
                'date' => '2023-05-03',
                'product' => 'Headphones',
                'quantity' => 15,
                'total_sales' => 1500000
            ]
        ];
        
        return view('reports.index', compact('reports'));
    }
}
