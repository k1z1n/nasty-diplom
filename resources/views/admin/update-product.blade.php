@extends('includes.template')
@section('title', '')
@section('content')
    @include('includes.header')
    <div class="" id="add" style="display: flex; justify-content: center; margin: 40px 0">
        <form action="{{ route('admin.product.update', $product->id ) }}" class="modal-window" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="modal-window__title">Редактирование продукта</div>
            <input type="text" name="title" placeholder="Название" class="modal-window__input" value="{{ $product->title }}">
            <input type="text" name="little_description" placeholder="Малое описание" class="modal-window__input" value="{{ $product->little_description }}">
            <textarea name="description" id="" placeholder="Полное описание описание"
                      class="modal-window__input">{{ $product->description }}</textarea>
            <input type="number" name="time_start" id="" placeholder="Время начала" class="modal-window__input" value="{{ $product->time_start }}">
            <input type="number" name="time_end" id="" placeholder="Время окончания" class="modal-window__input" value="{{ $product->time_end }}">
            <input type="number" name="cleaner_start" id="" placeholder="Минимальный количество уборщиков" class="modal-window__input" value="{{ $product->cleaner_start }}">
            <input type="number" name="cleaner_end" id="" placeholder="Минимальное количество уборщиков" class="modal-window__input" value="{{ $product->cleaner_end }}">
            <input type="number" name="price" placeholder="Цена" class="modal-window__input" value="{{ $product->price }}">
            <select name="category_id" id="" class="modal-window__input">
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                @endforeach
            </select>
            <input type="file" name="image" class="modal-window__input">
            <button type="submit" class="modal-window__btn">Изменить услугу</button>
        </form>
    </div>

@endsection
