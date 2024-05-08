@extends('includes.template')
@section('title', '')
@section('content')
    @include('includes.header')
    <div class="profile">
        <div class="profile-title section">ЛИЧНЫЙ КАБИНЕТ</div>
        <!-- Навигация -->
        <div class="profile-head section">
            <div class="profile-head__links">
                <a href="{{ route('profile') }}" class="profile-head__links-item active">Профиль</a>
                <a href="{{ route('profile.orders') }}" class="profile-head__links-item">Заказы</a>
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

        <!-- Личная информация -->
        <div class="profile-info section">
            <div class="proflie-title">Личная информация</div>
            <div class="profile-info__objects">
                <div class="profile-info__object-item">
                    <div class="profile-info__objects-suptitle">Имя и Фамилия</div>
                    <div class="profile-info__objects-title">{{ $user->username }} {{ $user->surname }}</div>
                </div>
                <div class="profile-info__object-item">
                    <div class="profile-info__objects-suptitle">Электроная почта</div>
                    <div class="profile-info__objects-title">{{ $user->email }}</div>
                </div>
                <div class="profile-info__object-item">
                    <div class="profile-info__objects-suptitle">Телефон</div>
                    <div class="profile-info__objects-title">{{ $user->number }}</div>
                </div>
            </div>
            <a href="#" class="profile-info__change">
                <img src="assets/images/profile/change_profile.svg" alt="" class="profile-info__change-img">
                <div class="profile-info__change-text">Редактировать профиль</div>
            </a>

        </div>
    </div>
@endsection
