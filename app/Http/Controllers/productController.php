<?php
// app/Http/Controllers/productController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    //
    public function index(){
        $products = [
                    [
                        'id' => 1,
                        'name' => 'Product 1',
                        'description' => 'This is product 1',
                        'price' => 19.99,
                        'stock' => 100
                    ],
                    [
                        'id' => 2,
                        'name' => 'Product 2',
                        'description' => 'This is product 2',
                        'price' => 29.99,
                        'stock' => 50
                    ],
                    [
                        'id' => 3,
                        'name' => 'Product 3',
                        'description' => 'This is product 3',
                        'price' => 39.99,
                        'stock' => 75
                    ]
                ];
        
        return view('product.index', compact('products'));
    }
    public function show($id) {
        $products = [
            ['id' => 1, 'name' => 'Product 1', 'description' => 'This is product 1', 'price' => 19.99, 'stock' => 100],
            ['id' => 2, 'name' => 'Product 2', 'description' => 'This is product 2', 'price' => 29.99, 'stock' => 50],
            ['id' => 3, 'name' => 'Product 3', 'description' => 'This is product 3', 'price' => 39.99, 'stock' => 75],
        ];
    
        $product = collect($products)->firstWhere('id', $id);
        
        if (!$product) {
            abort(404);
        }
    
        return view('product.show', compact('product'));
    }
}
