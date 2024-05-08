@extends('includes.template')
@section('title', '')
@section('content')
    @include('includes.header')
    @include('modals.create')
    <div class="product">
        <div class="product-main section">
            <img class="product-main__img" src="{{ asset('storage/products/' . $product->image) }}">
            <div class="product-main__right">
                <div class="product-main__right-suptitle">{{ $product->category->title }}</div>
                <div class="product-main__right-name">{{ $product->title }}</div>
                <div class="product-main__right-about">{{ $product->little_description }}</div>
                <div class="product-main__right-time">Время работы: @if($product->time_start){{$product->time_start}} -
                        @endif
                    {{ $product->time_end }}
                    часов</div>
                @guest()
                    <a onclick="openAuth()" class="product-main__right-button">заказать уборку</a>
                @endguest
                @auth()
                <a onclick="openModal('clean')" class="product-main__right-button">заказать уборку</a>
                @endauth
            </div>
        </div>
        <div class="product-info section">
            <div class="product-info__left">
                <div class="product-info__name">{{ $product->title }}</div>
                <div class="product-info__content">{{ $product->description }}
                </div>
            </div>
            <div class="product-info__right">
                <div class="product-info__right-item">
                    <img src="{{ asset('assets/images/product/img1.svg') }}" alt="" class="product-info__right-img">
                    <div class="product-info__right-text">@if($product->time_start){{$product->time_start}} -
                        @endif
                        {{ $product->time_end }} часов</div>
                </div>
                <div class="product-info__right-item">
                    <img src="{{ asset('assets/images/product/img2.svg') }}" alt="" class="product-info__right-img">
                    <div class="product-info__right-text">@if($product->cleaner_start){{$product->cleaner_start}} -
                        @endif
                        {{ $product->cleaner_end }} клинера</div>
                </div>
                <div class="product-info__right-item">
                    <img src="{{ asset('assets/images/product/img3.svg') }}" alt="" class="product-info__right-img">
                    <div class="product-info__right-text">от {{ $product->price }} руб.</div>
                </div>
            </div>
        </div>
        <a href="#" class="product-forward section">
            <div class="product-forward__text">
                Получить скидку 10% при заказе генеральной уборки
                <img src="assets/images/icons/forward.svg" alt="" class="product-forward__img">
            </div>

        </a>
    </div>
@endsection

