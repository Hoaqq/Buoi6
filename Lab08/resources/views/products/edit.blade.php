
@extends('layouts.app')
@section('content')
<h2>Sửa sản phẩm</h2>
<form method="POST" action="/products/{{ $product->id }}">
    @csrf
    @method('PUT')
    <x-input name="name" label="Tên sản phẩm" value="{{ old('name', $product->name) }}" />
    <x-input name="price" label="Giá" type="number" value="{{ old('price', $product->price) }}" />
    <x-input name="stock" label="Tồn kho" type="number" value="{{ old('stock', $product->stock) }}" />
    <label>Danh mục</label>
    <select name="category_id" class="form-control">
        @foreach($categories as $cat)
            <option value="{{ $cat->id }}" {{ old('category_id', $product->category_id) == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
        @endforeach
    </select>
    <button type="submit" class="btn btn-primary mt-2">Cập nhật</button>
</form>
@endsection