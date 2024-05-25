@extends('includes.template')
@section('title', '')
@section('content')
    @include('includes.header')
    <h1>Удалить продукт {{ $product->title }}?</h1>
    <form action="{{ route('admin.product.delete.view', $product->id) }}" method="post">
        @csrf
        @method('DELETE')
        <a href="{{ route('admin.product') }}">Отмена</a>
        <button type="submit">Удалить</button>
    </form>
@endsection
