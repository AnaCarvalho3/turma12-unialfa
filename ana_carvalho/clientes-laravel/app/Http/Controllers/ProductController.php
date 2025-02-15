<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::get();

        return view('products.index', [
            'products' => $products
        ]);
    }

    public function show(int $id) {
        $product = Product::find($id);

        return view('products.show', [
            'product' => $product
        ]);
    }

    public function create() {
        return view('products.create');
    }

    public function store(Request $request) {
        $dados = $request->except('_token');

        Product::create($dados);

        return redirect('/products');
    }
}
