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
                <a href="{{ route('profile.orders') }}" class="profile-head__links-item">Заказы</a>
                <a href="{{ route('profile.bonus') }}" class="profile-head__links-item active">Бонусы</a>
            </div>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" style="background-color: transparent" class="profile-head__links-exit">
                    <img class="profile-head__exit-img" src="{{ asset('assets/images/profile/exit.svg') }}" alt="">
                    <span class="profile-head__exit-text">Выход</span>
                </button>
            </form>
        </div>

        <!-- Бонусы -->
        <div class="profile-bonus section">
            <div class="profile-bonus__item">
                <div class="profile-bonus__card">
                    <div class="profile-bonus__card-title">Бонусная<br>карта</div>
                    <div class="profile-bonus__card-subtitle">Ваши бонусы</div>
                    <div class="profile-bonus__card-bonus">
                        {{ auth()->user()->bonus }}
                        бонусов
                    </div>
                    <img src="{{ asset('assets/images/profile/card-fone.svg') }}" alt=""
                         class="profile-bonus__card-img">
                </div>
                <div class="profile-bonus__info">
                    <div class="profile-bonus__info-item">
                        <img src="{{ asset('assets/images/profile/cashback.svg') }}" alt=""
                             class="profile-bonus__info-img">
                        <div class="profile-bonus__info-text">Кешбэк 5% от стоимости каждой покупки</div>
                    </div>
                    <div class="profile-bonus__info-item">
                        <img src="{{ asset('assets/images/profile/card.svg') }}" alt="" class="profile-bonus__info-img">
                        <div class="profile-bonus__info-text">Дополнительная скидка до 20% при оплате бонусами</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
