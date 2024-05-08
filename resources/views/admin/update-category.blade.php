@extends('includes.template')
@section('title', '')
@section('content')
    @include('includes.header')
    <div class="cont">
        <div class="" id="add" style="display: flex; justify-content: center; margin: 40px 0">
            <form action="{{ route('admin.category.update', $category->id) }}" class="modal-window" method="post">
                @csrf
                @method('put')
                <div class="modal-window__title">Редактирвоание категории</div>
                <input type="text" name="title" placeholder="Название" class="modal-window__input" value="{{ $category->title }}">
                <button type="submit" class="modal-window__btn">Добавить услугу</button>
            </form>
        </div>
    </div>

@endsection
