@extends('includes.template')
@section('title', '')
@section('content')
    @include('includes.header')
    <h1>Удалить категорию {{ $category->title }}?</h1>
    <form action="{{ route('admin.category.delete', $category->id) }}" method="post">
        @csrf
        @method('DELETE')
        <a href="{{ route('admin.category') }}">Отмена</a>
        <button type="submit">Удалить</button>
    </form>
@endsection
