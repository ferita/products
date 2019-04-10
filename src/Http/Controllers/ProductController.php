<?php

namespace Ferita\Products\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Ferita\Products\Models\Product;

class ProductController extends Controller
{
   
    public function index()
    {
        $products = Product::orderby('id', 'DESC')
                    ->get();

        return view( 'products::layouts.primary', [
            'page' => 'products::pages.products',
            'products' => $products,
        ]);
    }

    public function create()
    {
        $this->authorize('create-product');
        return view('products::layouts.primary', [
            'page' => 'products::pages.product_create',
            'form' => 'products::forms.product_create',
            'h1' => 'Создание нового продукта'
        ]);
    }


    public function store(Request $request)
    {
        $this->authorize('create-product');
        $request->validate([
            'name' => 'required|min:10',
            'art' => 'required|unique:products|regex:/^[a-z0-9]+$/i',
        ]);

        Product::create([
            'art' => $request->art,
            'name'=> $request->name
        ]);

        return redirect()->route('products.all');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('products::layouts.primary', [
            'page' => 'products::pages.product',
            'product' => $product
        ]);
    }

    public function edit($id)
    {
        $this->authorize('edit-delete-product');
        $product = Product::findOrFail($id);

        return view('products::layouts.primary', [
            'page' => 'products::pages.product_create',
            'form' => 'products::forms.product_edit',
            'h1' => 'Редактирование продукта',
            'product' => $product,
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->authorize('edit-delete-product');

        $product = Product::findOrFail($id);

        $request->validate([
            'name' => 'required|min:10',
            'art' => 'sometimes|required|regex:/^[a-z0-9]+$/i|unique:products,art,' . $id,
        ]);

        $product->update($request->all());

        return redirect()->route('products.all');
    }

    public function destroy($id)
    {
        $this->authorize('edit-delete-product');

        Product::findOrFail($id)->delete();

        return redirect()->route('products.all');
    }

}
