@extends('includes.template')
@section('title', '')
@section('content')
    @include('includes.header')
    <div class="" id="add" style="display: flex; justify-content: center; margin: 40px 0">
        <form action="{{ route('admin.product.store') }}" class="modal-window" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-window__title">Добавление продукта</div>
            <input type="text" name="title" placeholder="Название" class="modal-window__input">
            <input type="text" name="little_description" placeholder="Малое описание" class="modal-window__input">
            <textarea name="description" id="" placeholder="Полное описание описание"
                      class="modal-window__input"></textarea>
            <input type="number" name="time_start" id="" placeholder="Время начала" class="modal-window__input">
            <input type="number" name="time_end" id="" placeholder="Время окончания" class="modal-window__input">
            <input type="number" name="cleaner_start" id="" placeholder="Минимальный количество уборщиков" class="modal-window__input">
            <input type="number" name="cleaner_end" id="" placeholder="Минимальное количество уборщиков" class="modal-window__input">
            <input type="number" name="price" placeholder="Цена" class="modal-window__input">
            <select name="category_id" id="" class="modal-window__input">
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                @endforeach
            </select>
            <input type="file" name="image" class="modal-window__input">
            <button type="submit" class="modal-window__btn">Добавить услугу</button>
        </form>
    </div>

@endsection
