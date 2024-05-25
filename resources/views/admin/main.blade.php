@extends('includes.template')
@section('title', '')
@section('content')
    @include('includes.header')
    <div class="profile">
        <div class="profile-title section">АДМИНИСТРАТОР</div>
        <!-- Навигация -->
        <div class="profile-head section">
            <div class="profile-head__links">
                <a href="{{ route('admin.main') }}" class="profile-head__links-item active">Заказы</a>
                <a href="{{ route('admin.product') }}" class="profile-head__links-item">Услуги</a>
                <a href="{{ route('admin.category') }}" class="profile-head__links-item">Категории</a>
            </div>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" style="background-color: transparent" class="profile-head__links-exit">
                    <img class="profile-head__exit-img" src="{{ asset('assets/images/profile/exit.svg') }}" alt="">
                    <span class="profile-head__exit-text">Выход</span>
                </button>
            </form>
        </div>

        <!-- Админ-заказы -->
        <div class="admin-orders section">
            <div class="admin-orders__title">Заказы</div>
            <div class="admin-orders__head">
                <div class="admin-orders__column">
                    Услуги
                </div>
                <div class="admin-orders__column">Заказ ID</div>
                <div class="admin-orders__column">Дата</div>
                <div class="admin-orders__column">Время начала</div>
                <div class="admin-orders__column">Время конца</div>
                <div class="admin-orders__column">Пользователь</div>
                <div class="admin-orders__column">Статус</div>
                <div class="admin-orders__column">Цена</div>
            </div>
            <div class="admin-orders__items">
                @foreach($orders as $order)
                    <div class="admin-orders__body">
                        <div class="admin-orders__column">
                            {{ $order->product->title }}
                        </div>
                        <div class="admin-orders__column">#{{ $order->id }}</div>
                        <div class="admin-orders__column">{{ $order->date }}</div>
                        <div class="admin-orders__column">{{ $order->time }}</div>
                        <div class="admin-orders__column">{{ $order->time_time }}</div>
                        <div class="admin-orders__column">{{ $order->user->username }}</div>
                        <div class="admin-orders__column">
                            <span class="admin-orders__column-cercle"></span>
                            <form action="{{ route('admin.change.order.status') }}" id="myForm" method="post">
                                @csrf
                                <input type="hidden" name="order_id" value="{{ $order->id }}">
                                <select name="status" onchange="document.getElementById('myForm').submit()">
                                    @foreach($statuses as $status)
                                        <option value="{{ $status }}" {{ $order->status == $status ? 'selected' : '' }}>{{ $status }}</option>
                                    @endforeach
                                </select>
                            </form>
                        </div>
                        <div class="admin-orders__column">{{ $order->total_price }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
