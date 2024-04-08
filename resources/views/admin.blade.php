@extends('includes.template')
@section('title', '')
@section('content')
    @include('includes.header')
    <div class="profile">
        <div class="profile-title section">АДМИНИСТРАТОР</div>
        <!-- Навигация -->
        <div class="profile-head section">
            <div class="profile-head__links">
                <a href="#" class="profile-head__links-item active">Заказы</a>
                <a href="#" class="profile-head__links-item">Услуги</a>
            </div>
            <a href="#" class="profile-head__links-exit">
                <img class="profile-head__exit-img" src="assets/images/profile/exit.svg" alt="">
                <div class="profile-head__exit-text">Выход</div>
            </a>
        </div>

        <!-- Админ-заказы -->
        <div class="admin-orders section">
            <div class="admin-orders__title">Заказы</div>
            <div class="admin-orders__head">
                <div class="admin-orders__column">
                    <input class="admin-orders__column-input" type="checkbox" name="" id="">
                    Услуги
                </div>
                <div class="admin-orders__column">Заказ ID</div>
                <div class="admin-orders__column">Дата</div>
                <div class="admin-orders__column">Пользователь</div>
                <div class="admin-orders__column">Статус</div>
                <div class="admin-orders__column">Цена</div>
            </div>
            <div class="admin-orders__items">
                <div class="admin-orders__body">
                    <div class="admin-orders__column">
                        <input class="admin-orders__column-input" type="checkbox" name="" id="">
                        Lorem Ipsum
                    </div>
                    <div class="admin-orders__column">#25426</div>
                    <div class="admin-orders__column">23.03.2024</div>
                    <div class="admin-orders__column">Анастасия</div>
                    <div class="admin-orders__column">
                        <span class="admin-orders__column-cercle"></span>
                        Обработка
                    </div>
                    <div class="admin-orders__column">3500</div>
                </div>
                <div class="admin-orders__body">
                    <div class="admin-orders__column">
                        <input class="admin-orders__column-input" type="checkbox" name="" id="">
                        Lorem Ipsum
                    </div>
                    <div class="admin-orders__column">#25426</div>
                    <div class="admin-orders__column">23.03.2024</div>
                    <div class="admin-orders__column">Анастасия</div>
                    <div class="admin-orders__column">
                        <span class="admin-orders__column-cercle"></span>
                        Обработка
                    </div>
                    <div class="admin-orders__column">3500</div>
                </div>
                <div class="admin-orders__body">
                    <div class="admin-orders__column">
                        <input class="admin-orders__column-input" type="checkbox" name="" id="">
                        Lorem Ipsum
                    </div>
                    <div class="admin-orders__column">#25426</div>
                    <div class="admin-orders__column">23.03.2024</div>
                    <div class="admin-orders__column">Анастасия</div>
                    <div class="admin-orders__column">
                        <span class="admin-orders__column-cercle"></span>
                        Обработка
                    </div>
                    <div class="admin-orders__column">3500</div>
                </div>
            </div>
        </div>

        <!-- Админ-услуги -->
        <div class="admin-servic section">
            <div class="admin-servic__header">
                <div class="admin-servic__header-title">Услуги</div>
                <div class="admin-servic__header-button" onclick="openModal('add')">Добавить </div>
            </div>
            <div class="admin-servic__head">
                <div class="admin-servic__column">ID</div>
                <div class="admin-servic__column">Название</div>
                <div class="admin-servic__column">Редактировать </div>
                <div class="admin-servic__column">Удалить </div>
                <div class="admin-servic__column-adaptiv">
                    <img src="assets/images/icons/edit.svg" alt="">
                </div>
                <div class="admin-servic__column-adaptiv">
                    <img src="assets/images/icons/backet.svg" alt="">
                </div>

            </div>
            <div class="admin-servic__body">
                <div class="admin-servic__column">0</div>
                <div class="admin-servic__column">Генеральная уборка</div>
                <div class="admin-servic__column" onclick="openModal('update')">Редактировать</div>
                <div class="admin-servic__column">Удалить</div>
                <div  onclick="openModal('update')" class="admin-servic__column-adaptiv">
                    <img src="assets/images/icons/edit.svg" alt="">
                </div>
                <div class="admin-servic__column-adaptiv">
                    <img src="assets/images/icons/backet.svg" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
