<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function create()
    {
        return view('product.create');
    }

    public function store(ProductRequest $request)
    {
        $name = $request->name;
        $description = $request->description;
        $price = $request->price;
        $img = null;

        if ($request->file('img')) {

            $img = $request->file('img')->store('img', 'public');
        }


        Product::create([
            'name' => $name,
            'description' => $description,
            'price' => $price,
            'img' => $img
        ]);

        return redirect()->route('product.index')->with('success', 'Prodotto creato con successo!');
    }

    public function index()
    {

        $products = Product::all();

        return view('product.index', ['products' => $products]);
    }
}
