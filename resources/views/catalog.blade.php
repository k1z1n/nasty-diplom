@extends('includes.template')
@section('title', '')
@section('content')
    @include('includes.header')
    @include('modals.signup')
    @include('modals.signin')
    <!-- Каталог -->
    <div class="catalog">
        <div class="catalog-block section">
            <!-- Filters -->
            <form accept="" class="catalog-block__filters">
                <div class="catalog-block__search">
                    <input placeholder="поиск..." type="text" class="catalog-block__search-input">
                    <img src="{{ asset('images/catalog/search.svg') }}" alt="" class="catalog-block__search-img">
                </div>
                <select name="" class="catalog-block__select" id="">
                    <option value="" class="catalog-block__option">Выбрать</option>
                    <option value="" class="catalog-block__option">Быстрые</option>
                    <option value="" class="catalog-block__option">Долгие</option>
                </select>
                <button type="submit" class="catalog-block__btn">Применить</button>
            </form>
            <!-- Products -->
            <div class="catalog-block__products">
                <div class="catalog-block__item">
                    <img src="{{ asset('images/catalog/product.png') }}" alt="" class="catalog-block__item-img">
                    <div class="catalog-block__item-name">Экспресс уборка</div>
                    <div class="catalog-block__item-about">Срочная уборка с выездом в течении часа</div>
                    <div class="catalog-block__item-flex">
                        <div class="catalog-block__item-time">Время работы: до 3 часов</div>
                        <div class="catalog-block__item-price"> от 130 ₽/м²</div>
                    </div>
                    <a href="product.html" class="catalog-block__item-btn">Заказать уборку</a>
                </div>
                <div class="catalog-block__item">
                    <img src="{{ asset('images/catalog/product.png') }}" alt="" class="catalog-block__item-img">
                    <div class="catalog-block__item-name">Экспресс уборка</div>
                    <div class="catalog-block__item-about">Срочная уборка с выездом в течении часа</div>
                    <div class="catalog-block__item-flex">
                        <div class="catalog-block__item-time">Время работы: до 3 часов</div>
                        <div class="catalog-block__item-price"> от 130 ₽/м²</div>
                    </div>
                    <a href="product.html" class="catalog-block__item-btn">Заказать уборку</a>
                </div>
                <div class="catalog-block__item">
                    <img src="{{ asset('images/catalog/product.png') }}" alt="" class="catalog-block__item-img">
                    <div class="catalog-block__item-name">Экспресс уборка</div>
                    <div class="catalog-block__item-about">Срочная уборка с выездом в течении часа</div>
                    <div class="catalog-block__item-flex">
                        <div class="catalog-block__item-time">Время работы: до 3 часов</div>
                        <div class="catalog-block__item-price"> от 130 ₽/м²</div>
                    </div>
                    <a href="product.html" class="catalog-block__item-btn">Заказать уборку</a>
                </div>
            </div>
        </div>
    </div>
@endsection
