@extends('includes.template')
@section('title', '')
@section('content')
    @include('includes.header')
    <div class="profile">
        <div class="profile-title section">ЛИЧНЫЙ КАБИНЕТ</div>
        <!-- Навигация -->
        <div class="profile-head section">
            <div class="profile-head__links">
                <a href="{{ route('profile') }}" class="profile-head__links-item">Профиль</a>
                <a href="{{ route('profile.orders') }}" class="profile-head__links-item active">Заказы</a>
                <a href="{{ route('profile.bonus') }}" class="profile-head__links-item">Бонусы</a>
            </div>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" style="background-color: transparent" class="profile-head__links-exit">
                    <img class="profile-head__exit-img" src="{{ asset('assets/images/profile/exit.svg') }}" alt="">
                    <span class="profile-head__exit-text">Выход</span>
                </button>
            </form>
        </div>
        @if(count($orders)>0)
            <!-- Заказы ( EXIST ) -->
            <div class="profile-orders section">
                <div class="profile-orders__head">
                    <div class="profile-orders__name">Название</div>
                    <div class="profile-orders__date">Дата</div>
                    <div class="profile-orders__time">Время начала</div>
                    <div class="profile-orders__time">Время конца</div>
                    <div class="profile-orders__cost">Стоимость</div>
                    <div class="profile-orders__cost">Статус</div>
                </div>
                @foreach($orders as $order)
                    <div class="profile-orders__item">
                        <a href="{{ route('product', $order->product->id) }}" class="profile-orders__name">{{ $order->product->title }}</a>
                        <div class="profile-orders__date">{{ $order->date }}</div>
                        <div class="profile-orders__time">{{ $order->time }}</div>
                        <div class="profile-orders__time">{{ $order->time_time }}</div>
                        <div class="profile-orders__cost">{{ $order->total_price }}</div>
                        <div class="profile-orders__cost">{{ $order->status }}</div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="profile-not section">
                Заказы не найдены
            </div>
        @endif
    </div>
@endsection
