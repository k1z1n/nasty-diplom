@extends('includes.template')
@section('title', '')
@section('content')
    @include('includes.header')
    @include('modals.create')
    <div class="product">
        <div class="product-main section">
            <img class="product-main__img" src="assets/images/catalog/product.png">
            <div class="product-main__right">
                <div class="product-main__right-suptitle">Уборка жилых помещений (квартира, дом)</div>
                <div class="product-main__right-name">Генеральная уборка</div>
                <div class="product-main__right-about">Комплексная уборка с удалением пыли, жира и грязи</div>
                <div class="product-main__right-time">Время работы: 5-7 часов</div>
                <a onclick="openModal('clean')" class="product-main__right-button">заказать уборку</a>
            </div>
        </div>
        <div class="product-info section">
            <div class="product-info__left">
                <div class="product-info__name">Тщательная уборка всего помещения</div>
                <div class="product-info__content">Мы оказываем услуги по генеральной уборке жилых помещений (квартира,
                    дом). Можем вымыть отдельно кухню, ванную комнату, окна и остекление балкона.
                    <br><br>
                    Обеспыливаем потолки и стены. Уборка займет от 6 до 10 часов, любая форма оплаты, заключаем договор,
                    наш инвентарь и моющие средства, работами руководит бригадир, вы можете оставить ключи и уйти
                </div>
            </div>
            <div class="product-info__right">
                <div class="product-info__right-item">
                    <img src="assets/images/product/img1.svg" alt="" class="product-info__right-img">
                    <div class="product-info__right-text">5-7 часов</div>
                </div>
                <div class="product-info__right-item">
                    <img src="assets/images/product/img2.svg" alt="" class="product-info__right-img">
                    <div class="product-info__right-text">2-3 клинера</div>
                </div>
                <div class="product-info__right-item">
                    <img src="assets/images/product/img3.svg" alt="" class="product-info__right-img">
                    <div class="product-info__right-text">от 2500 руб.</div>
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

