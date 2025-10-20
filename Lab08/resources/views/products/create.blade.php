
@extends('layouts.app')
@section('content')
<h2>Thêm sản phẩm</h2>
<form method="POST" action="/products">
    @csrf
    <x-input name="name" label="Tên sản phẩm" value="{{ old('name') }}" />
    <x-input name="price" label="Giá" type="number" value="{{ old('price') }}" />
    <x-input name="stock" label="Tồn kho" type="number" value="{{ old('stock') }}" />
    <label>Danh mục</label>
    <select name="category_id" class="form-control">
        @foreach($categories as $cat)
            <option value="{{ $cat->id }}" {{ old('category_id') == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
        @endforeach
    </select>
    <button type="submit" class="btn btn-primary mt-2">Lưu</button>
</form>
@endsection