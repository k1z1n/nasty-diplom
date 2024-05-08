@extends('includes.template')
@section('title', '')
@section('content')
    @include('includes.header')
    @include('modals.signup')
    @include('modals.signin')

    <div class="catalog">
        <div class="catalog-block section">
            <form class="catalog-block__filters" action="{{ route('catalog') }}" method="GET">
                <div class="catalog-block__search">
                    <input type="search" class="catalog-block__search-input" name="search" value="{{ isset($request->search) ? $request->search : '' }}" placeholder="поиск...">
                    <img src="{{ asset('assets/images/catalog/search.svg') }}" alt="" class="catalog-block__search-img">
                </div>
                <select name="category" class="catalog-block__select" id="">
                    <option value="">Выбрать категорию</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" class="catalog-block__option" {{ (isset($request->category) && $request->category == $category->id) ? 'selected' : '' }}>{{ $category->title }}</option>
                    @endforeach
                </select>
                <button type="submit" class="catalog-block__btn">Применить</button>
            </form>

            <div class="catalog-block__products">
                @if (count($products)>0)
                    @foreach($products as $product)
                        <div class="catalog-block__item">
                            <img src="{{ asset('storage/products/' . $product->image) }}" alt="" class="catalog-block__item-img">
                            <div class="catalog-block__item-name">{{ $product->title }}</div>
                            <div class="catalog-block__item-about">{{ $product->little_description }}</div>
                            <div class="catalog-block__item-flex">
                                <div class="catalog-block__item-time">Время работы: до {{ $product->time_end }} часов</div>
                                <div class="catalog-block__item-price"> от {{ $product->price }} ₽/м²</div>
                            </div>
                            <a href="{{ route('product', $product->id) }}" class="catalog-block__item-btn">Заказать уборку</a>
                        </div>
                    @endforeach
                @else
                    <p class="catalog-block__no-results">По вашему запросу ничего не найдено.</p>
                @endif
            </div>
        </div>
    </div>
@endsection
