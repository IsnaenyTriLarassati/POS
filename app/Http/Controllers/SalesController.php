<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function sales()
    {
        $orderedProducts = [
            ['name' => 'Coca Cola', 'price' => 10000, 'quantity' => 2],
            ['name' => 'Pepsodent', 'price' => 15000, 'quantity' => 1],
        ];

        return view('sales', ['orderedProducts' => $orderedProducts]);
    }
}
