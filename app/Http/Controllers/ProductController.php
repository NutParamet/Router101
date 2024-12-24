<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{

    private $products = [

        ['id' => 1, 'name' => 'Laptop',
            'description' => 'High-performance laptop',
            'price' => 1500, 'image' => 'images/laptop.jpg'],

        ['id' => 2, 'name' => 'Smartphone',
            'description' => 'Latest smartphone with great features',
            'price' => 800, 'image' => 'images/phone.jpg'],

        ['id' => 3, 'name' => 'Tablet',
            'description' => 'Portable tablet for everyday use',
            'price' => 500, 'image' => 'images/tablet.jpg'],

        ['id' => 4, 'name' => 'Tablet',
            'description' => 'Portable tablet for everyday use',
            'price' => 500, 'image' => 'images/tablet.jpg'],

        ['id' => 5, 'name' => 'Tablet',
            'description' => 'Portable tablet for everyday use',
            'price' => 500, 'image' => 'images/tablet.jpg'],

        ['id' => 6, 'name' => 'Tablet',
            'description' => 'Portable tablet for everyday use',
            'price' => 500, 'image' => 'images/tablet.jpg'],

        ['id' => 7, 'name' => 'Tablet',
            'description' => 'Portable tablet for everyday use',
            'price' => 500, 'image' => 'images/tablet.jpg'],

        ['id' => 8, 'name' => 'Tablet',
            'description' => 'Portable tablet for everyday use',
            'price' => 500, 'image' => 'images/tablet.jpg'],

        ['id' => 9, 'name' => 'Tablet',
            'description' => 'Portable tablet for everyday use',
            'price' => 500, 'image' => 'images/tablet.jpg'],

        ['id' => 10, 'name' => 'Tablet',
            'description' => 'Portable tablet for everyday use',
            'price' => 500, 'image' => 'images/tablet.jpg'],

        ['id' => 11, 'name' => 'Tablet',
            'description' => 'Portable tablet for everyday use',
            'price' => 500, 'image' => 'images/tablet.jpg'],

        ['id' => 12, 'name' => 'Tablet',
            'description' => 'Portable tablet for everyday use',
            'price' => 500, 'image' => 'images/tablet.jpg'],

        ['id' => 13, 'name' => 'Tablet',
            'description' => 'Portable tablet for everyday use',
            'price' => 500, 'image' => 'images/tablet.jpg'],

    ];

    public function index(){
        return Inertia::render('Products/index', ['products' => $this->products]);
    }

    public function show($id){
        $product = collect($this->products)->firstWhere('id',$id);
        if (!$product){
            abort(404, 'Product not found');
        }
        return Inertia::render('Products/show', ['product' => $product]);
    }
}
