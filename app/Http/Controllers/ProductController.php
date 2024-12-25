<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{

    private $products = [

        ['id' => 1, 'name' => 'Laptop',
            'description' => 'High-performance laptop',
            'price' => 1500, 'image' => 'images/laptop.png'],

        ['id' => 2, 'name' => 'Smartphone',
            'description' => 'Latest smartphone with great features',
            'price' => 800, 'image' => 'images/phone.jpg'],

        ['id' => 3, 'name' => 'Tablet',
            'description' => 'Portable tablet for everyday use',
            'price' => 500, 'image' => 'images/tablet.jpg'],

        ['id' => 4, 'name' => 'PS5',
            'description' => 'PS5 for Gaming',
            'price' => 750, 'image' => 'images/ps5.jpeg'],

        ['id' => 5, 'name' => 'Apple Watch',
            'description' => 'Portable Apple Watch for everyday use',
            'price' => 150, 'image' => 'images/applewatch.jpg'],

        ['id' => 6, 'name' => 'Apple Vision Pro',
            'description' => 'Apple Vision Pro',
            'price' => 3000, 'image' => 'images/applevision.jpg'],

        ['id' => 7, 'name' => 'Airpod Pro 4',
            'description' => 'Airpod Pro 4 for your ears',
            'price' => 150, 'image' => 'images/airpod.jpg'],

        ['id' => 8, 'name' => 'Nintendo Switch',
            'description' => 'Nintendo Switch for Gaming or Family',
            'price' => 850, 'image' => 'images/nintendo.jpg'],

        ['id' => 9, 'name' => 'Smart TV',
            'description' => 'Smart TV LG for all Family',
            'price' => 200, 'image' => 'images/LG.jpg'],

        ['id' => 10, 'name' => 'Marshall',
            'description' => 'Marshall Woburn Bluetooth III',
            'price' => 180, 'image' => 'images/marshall.jpg'],

        ['id' => 11, 'name' => 'PC',
            'description' => 'PC Gaming Set i7-14700k RTX 4090',
            'price' => 1200, 'image' => 'images/Pc.jpg'],

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
