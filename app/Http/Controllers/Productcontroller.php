<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class Productcontroller extends Controller
{
    private $products =[
        ['id' =>1,'img' => '/storage/products/cat.jpeg', 'name' => 'Laptop',
        'description' => 'High-performance laptop',
        'price' => 1500],

        ['id' =>2,'img' => '/storage/products/cat.jpeg', 'name' => 'Smartphone',
        'description' => 'Latest smartphone with great features',
        'price' => 800],

        ['id' =>3,'img' => '/storage/products/cat.jpeg', 'name' => 'Tablet',
        'description' => 'Portable tablet for everyday use',
        'price' => 500],

        ['id' => 4,'img' => '/storage/products/cat.jpeg', 'name' => 'Smartwatch',
        'description' => 'Advanced smartwatch with fitness tracking',
        'price' => 250],

        ['id' => 5,'img' => '/storage/products/cat.jpeg', 'name' => 'Headphones',
        'description' => 'Noise-cancelling wireless headphones',
        'price' => 300],

        ['id' => 6,'img' => '/storage/products/cat.jpeg', 'name' => 'Gaming Console',
        'description' => 'Next-gen gaming console with 4K support',
        'price' => 500],

        ['id' => 7,'img' => '/storage/products/cat.jpeg', 'name' => 'Camera',
        'description' => 'High-resolution digital camera',
        'price' => 1200],

        ['id' => 8,'img' => '/storage/products/cat.jpeg', 'name' => 'Bluetooth Speaker',
        'description' => 'Portable Bluetooth speaker with deep bass',
        'price' => 150],

        ['id' => 9,'img' => '/storage/products/cat.jpeg', 'name' => 'Monitor',
        'description' => '4K Ultra HD monitor for work and gaming',
        'price' => 350],

        ['id' => 10,'img' => '/storage/products/cat.jpeg', 'name' => 'Keyboard',
        'description' => 'Mechanical keyboard with RGB lighting',
        'price' => 100],

        ['id' => 11,'img' => '/storage/products/cat.jpeg', 'name' => 'Mouse',
        'description' => 'Ergonomic wireless mouse',
        'price' => 50],

        ['id' => 12,'img' => '/storage/products/cat.jpeg', 'name' => 'Router',
        'description' => 'High-speed Wi-Fi router with wide coverage',
        'price' => 200],

        ['id' => 13,'img' => '/storage/products/cat.jpeg', 'name' => 'External Hard Drive',
        'description' => '1TB external hard drive for backup and storage',
        'price' => 120],
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Products/Index',['products' => $this->products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = collect($this->products)->firstWhere('id',$id);

        if (!$product) {
            abort(404, 'Product not found');
        }

        return Inertia::render('Products/Show',['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
