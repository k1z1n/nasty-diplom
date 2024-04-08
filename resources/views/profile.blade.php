@extends('includes.template')
@section('title', '')
@section('content')
    @include('includes.header')
    <div class="profile">
        <div class="profile-title section">ЛИЧНЫЙ КАБИНЕТ</div>
        <!-- Навигация -->
        <div class="profile-head section">
            <div class="profile-head__links">
                <a href="#" class="profile-head__links-item active">Профиль</a>
                <a href="#" class="profile-head__links-item">Заказы</a>
                <a href="#" class="profile-head__links-item">Бонусы</a>
            </div>
            <a href="#" class="profile-head__links-exit">
                <img class="profile-head__exit-img" src="assets/images/profile/exit.svg" alt="">
                <div class="profile-head__exit-text">Выход</div>
            </a>
        </div>

        <!-- Личная информация -->
        <div class="profile-info section">
            <div class="proflie-title">Личная информация</div>
            <div class="profile-info__objects">
                <div class="profile-info__object-item">
                    <div class="profile-info__objects-suptitle">Имя и Фамилия</div>
                    <div class="profile-info__objects-title">Анастасия Фадеева</div>
                </div>
                <div class="profile-info__object-item">
                    <div class="profile-info__objects-suptitle">Электроная почта</div>
                    <div class="profile-info__objects-title">mail@gmail.com</div>
                </div>
                <div class="profile-info__object-item">
                    <div class="profile-info__objects-suptitle">Телефон</div>
                    <div class="profile-info__objects-title">893843503</div>
                </div>
            </div>
            <a href="#" class="profile-info__change">
                <img src="assets/images/profile/change_profile.svg" alt="" class="profile-info__change-img">
                <div class="profile-info__change-text">Редактировать профиль</div>
            </a>

        </div>

        <!-- Бонусы -->
        <div class="profile-bonus section">
            <div class="profile-bonus__item">
                <div class="profile-bonus__card">
                    <div class="profile-bonus__card-title">Бонусная<br>карта</div>
                    <div class="profile-bonus__card-subtitle">Ваши бонусы</div>
                    <div class="profile-bonus__card-bonus">0 бонусов</div>
                    <img src="assets/images/profile/card-fone.svg" alt="" class="profile-bonus__card-img">
                </div>
                <div class="profile-bonus__info">
                    <div class="profile-bonus__info-item">
                        <img src="assets/images/profile/cashback.svg" alt="" class="profile-bonus__info-img">
                        <div class="profile-bonus__info-text">Кешбэк 5% от стоимости каждой покупки</div>
                    </div>
                    <div class="profile-bonus__info-item">
                        <img src="assets/images/profile/card.svg" alt="" class="profile-bonus__info-img">
                        <div class="profile-bonus__info-text">Дополнительная скидка до 20% при оплате бонусами</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Заказы ( NOT FOUND ) -->
        <div class="profile-not section">
            Заказы не найдены
        </div>

        <!-- Заказы ( EXIST ) -->
        <div class="profile-orders section">
            <div class="profile-orders__head">
                <div class="profile-orders__name">Название</div>
                <div class="profile-orders__date">Дата</div>
                <div class="profile-orders__time">Время</div>
                <div class="profile-orders__cost">Стоимость</div>
            </div>
            <div class="profile-orders__item">
                <div class="profile-orders__name">Генеральная уборка</div>
                <div class="profile-orders__date">07.09.2023</div>
                <div class="profile-orders__time">16:00</div>
                <div class="profile-orders__cost">2500</div>
            </div>
        </div>
    </div>
@endsection
