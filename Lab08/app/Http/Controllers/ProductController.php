<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Routing\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->paginate(10);
        return view('products.index', compact('products'));
    }
    public function create()
{
    $categories = \App\Models\Category::all();
    return view('products.create', compact('categories'));
}

public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
        'stock' => 'required|integer|min:0',
        'category_id' => 'required|exists:categories,id',
    ]);
    \App\Models\Product::create($validated);
    return redirect('/products')->with('success', 'Thêm sản phẩm thành công!');
}

public function edit(\App\Models\Product $product)
{
    $categories = \App\Models\Category::all();
    return view('products.edit', compact('product', 'categories'));
}

public function update(Request $request, \App\Models\Product $product)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
        'stock' => 'required|integer|min:0',
        'category_id' => 'required|exists:categories,id',
    ]);
    $product->update($validated);
    return redirect('/products')->with('success', 'Cập nhật sản phẩm thành công!');
}
}