<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $categories = [
        'food-beverage' => 'Food & Beverage',
        'beauty-health' => 'Beauty & Health',
        'home-care' => 'Home Care',
        'baby-kid' => 'Baby & Kid',
    ];
    
    private $products = [
        ['id' => 1, 'name' => 'Coca Cola', 'category' => 'food-beverage', 'price' => 10000],
        ['id' => 2, 'name' => 'Pepsi', 'category' => 'food-beverage', 'price' => 9500],
        ['id' => 3, 'name' => 'Aqua Mineral', 'category' => 'food-beverage', 'price' => 5000],
        ['id' => 4, 'name' => 'Lifebuoy Soap', 'category' => 'beauty-health', 'price' => 8000],
        ['id' => 5, 'name' => 'Pepsodent', 'category' => 'beauty-health', 'price' => 15000],
        ['id' => 6, 'name' => 'Sunlight', 'category' => 'home-care', 'price' => 12000],
        ['id' => 7, 'name' => 'Super Pel', 'category' => 'home-care', 'price' => 18000],
        ['id' => 8, 'name' => 'MamyPoko', 'category' => 'baby-kid', 'price' => 45000],
        ['id' => 9, 'name' => 'Cerelac', 'category' => 'baby-kid', 'price' => 25000],
    ];
    
    public function index()
    {
        return view('products', ['categories' => $this->categories, 'products' => []]);
    }

    public function category($category_name)
    {
        // Filter produk berdasarkan kategori
        $filteredProducts = array_filter($this->products, function ($product) use ($category_name) {
            return $product['category'] === $category_name;
        });

        return view('products', [
            'categories' => $this->categories,
            'products' => $filteredProducts,
            'selectedCategory' => $category_name
        ]);
    }
}