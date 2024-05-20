@extends('includes.template')
@section('title', '')
@section('content')
    <!-- Главный экран -->
    <div class="display">
        <!-- Шапка -->
        <div class="header transparent">
            <div class="header-block section">
                <a href="{{ route('home') }}"><img src={{asset('assets/images/icons/logo.svg')}} alt=""></a>
                <div class="header-block__menu">
                    <a href="{{ route('home') }}" class="header-block__menu-link">Главная</a>
                    <a href="{{ route('catalog') }}" class="header-block__menu-link">Услуги</a>
                    <a href="{{ route('about') }}" class="header-block__menu-link">О нас</a>
                    <a href="#footer" class="header-block__menu-link">Контакты</a>
                    <form action="{{ route('catalog') }}" class="header-search" method="get">
                        <input type="text" class="header-search__input" name="search">
                        <button type="submit" class="header-search__button"><img src="{{asset('assets/images/icons/Search.svg')}}"
                                                                                 alt=""></button>
                    </form>
                    <a onclick="openModal('reg')" class="header-block__menu-btn"><img src="{{asset('assets/images/icons/User.svg')}}"
                                                                                      alt=""></a>
                </div>
            </div>
        </div>
        <!-- Контент главного экрана -->
        <div class="display-block section">
            <div class="display-block__left">
                <div class="display-block__left-title">Чисто, свежо, комфортно
                    наша гарантия!
                </div>
                <div class="display-block__left-subtitle">ClearShine - компания, которая наведет порядок в вашем доме
                    или квартире. Уже более 5000 довольных клиентов. Мы будем рады навести комфорт в вашем месте.
                </div>
                <a href="{{ route('catalog') }}" class="display-block__left-link">заказать уборку</a>
                <div class="display-block__left-info">
                    <div class="display-block__info-item">
                        <div class="display-block__info-cercle"></div>
                        <div class="display-block__info-text">Уборка квартир от 150 ₽/м²</div>
                    </div>
                    <div class="display-block__info-item">
                        <div class="display-block__info-cercle"></div>
                        <div class="display-block__info-text">Уборка домов от 230 ₽/м²</div>
                    </div>
                </div>
            </div>
            <img class="display-block__img" src="{{asset('assets/images/display/man.png')}}">
        </div>
    </div>

    <!-- Калькулятор -->
    <div class="calculator">
        <div class="calculator-block section">
            <div class="calculator-block__title">Калькулятор стоимости уборки с точностью до 99%.</div>
            <div class="calculator-block__subtitle">Это бесплатно и ни к чему не обязывает!</div>
            <form action="" class="calculator-block__flex">
                <select name="" id="room-type" class="calculator-block__flex-input">
                    <option value="30">Квартира</option>
                    <option value="40">Частный дом</option>
                    <option value="50">Офис</option>
                </select>
                <input type="text" id="square-meters" required placeholder="м2" class="calculator-block__flex-input">
                <button type="button" class="calculator-block__flex-button" onclick="calculateCost()">Посчитать</button>
            </form>
            <div id="result" style="margin-top: 10px"></div>
        </div>

        <script>
            function calculateCost() {
                let roomType = document.getElementById('room-type').value;
                let squareMeters = document.getElementById('square-meters').value;

                if (squareMeters.trim() !== "") {
                    let result = roomType * squareMeters;
                    document.getElementById('result').innerHTML = 'Стоимость уборки: ' + result + ' руб.';
                } else {
                    document.getElementById('result').innerHTML = '';
                }
            }
        </script>
    </div>

    <!-- Преимущества -->
    <div class="feature">
        <div class="feature-block section">
            <div class="feature-block__item">
                <div class="feature-block__item-title">Экспресс<br>уборка</div>
                <div class="feature-block__item-price">от 130 ₽/м²</div>
                <div class="feature-block__item-text">Наши услуги подойдут для семейных пар с детьми, владельцев
                    животных, аллергиков, арендодателей
                </div>
                <a href="#" class="feature-block__item-link">Подробнее</a>
                <img src="{{ asset('assets/images/feature/img1.svg') }}" alt="" class="feature-block__item-img">
            </div>
            <div class="feature-block__item">
                <div class="feature-block__item-title">Уборка после<br>ремонта</div>
                <div class="feature-block__item-price">от 150 ₽/м²</div>
                <div class="feature-block__item-text">Наши услуги подойдут для семейных пар с детьми, владельцев
                    животных, аллергиков, арендодателей
                </div>
                <a href="#" class="feature-block__item-link">Подробнее</a>
                <img src="{{ asset('assets/images/feature/img2.svg') }}" alt="" class="feature-block__item-img">
            </div>
            <div class="feature-block__item">
                <div class="feature-block__item-title">Генеральная<br>уборка</div>
                <div class="feature-block__item-price">от 180 ₽/м²</div>
                <div class="feature-block__item-text">Наши услуги подойдут для семейных пар с детьми, владельцев
                    животных, аллергиков, арендодателей
                </div>
                <a href="#" class="feature-block__item-link">Подробнее</a>
                <img src="{{ asset('assets/images/feature/img3.svg') }}" alt="" class="feature-block__item-img">
            </div>
        </div>
    </div>

    <!-- Баннер -->
    <div class="banner">
        <div class="banner-block section">
            <div class="banner-block__card">
                <div class="banner-block__card-title">4 этапа
                    сотрудничества
                </div>
                <div class="banner-block__card-numeric">
                    <div class="banner-block__numeric-item">
                        <div class="banner-block__card-numb">1</div>
                        <div class="banner-block__card-text">Оставьте заявку</div>
                    </div>
                    <div class="banner-block__numeric-item">
                        <div class="banner-block__card-numb">2</div>
                        <div class="banner-block__card-text">Приезд клинеров</div>
                    </div>
                    <div class="banner-block__numeric-item">
                        <div class="banner-block__card-numb">3</div>
                        <div class="banner-block__card-text">Выполнение заказа</div>
                    </div>
                    <div class="banner-block__numeric-item">
                        <div class="banner-block__card-numb">4</div>
                        <div class="banner-block__card-text">Сдача работы</div>
                    </div>
                </div>
                <a href="{{ route('catalog') }}" class="banner-block__numeric-btn">Заказать уборку</a>
            </div>
            <img src="{{asset('assets/images/banner/img1.svg')}}" alt="" class="banner-block__img">
            <div class="banner-block__text">Проводите время с близкими,а уборка наша забота!</div>
        </div>
    </div>

    <!-- О нас -->
    <div class="about">
        <div class="about-block section">
            <div class="about-block__item">
                <div class="about-block__item-title">Честное сотрудничество</div>
                <div class="about-block__item-subtitle">Заранее рассчитаем стоимость услуг, и закрепляем наше
                    сотрудничество договором. Оплата исключительно по факту выполнения. Вы проверяете результат и
                    платите тогда, когда он вас удовлетворяет.
                </div>
                <img src="{{ asset('assets/images/about/img1.svg') }}" alt="" class="about-block__item-img">
            </div>
            <div class="about-block__item">
                <div class="about-block__item-title">Бережные моющие</div>
                <div class="about-block__item-subtitle">Внимательно подходим к выбору моющих средств. Знаем какие
                    средства использовать в конкретных случаях, чтобы не повредить мебель и сохранить прежний блеск
                    поверхностей.
                </div>
                <img src="{{ asset('assets/images/about/img2.svg') }}" alt="" class="about-block__item-img">
            </div>
            <div class="about-block__item">
                <div class="about-block__item-title">Гарантия качества</div>
                <div class="about-block__item-subtitle">На объектах работают от 2 и более опытных клинеров. Комплексная
                    уборка делается в соответствии с нормами качества. Блеск от потолка до пола!
                </div>
                <img src="{{ asset('assets/images/about/img3.svg') }}" alt="" class="about-block__item-img">
            </div>
        </div>
    </div>

    <!-- ЧАВО -->
    <div class="faq">
        <div class="faq-title section">Часто задаваемые вопросы</div>
        <div class="faq-block section">
            <div class="faq-block__item">
                <div class="faq-block__item-head">Что нужно, чтобы подготовиться к уборке?</div>
                <div class="faq-block__item-body">Что нужно, чтобы подготовиться к уборке?</div>
            </div>
            <div class="faq-block__item">
                <div class="faq-block__item-head">Могу ли я быть дома во время уборки?</div>
                <div class="faq-block__item-body">Могу ли я быть дома во время уборки?</div>
            </div>
            <div class="faq-block__item">
                <div class="faq-block__item-head">За сколько дней до приезда клинеров необходимо сделать заказ?</div>
                <div class="faq-block__item-body">За сколько дней до приезда клинеров необходимо сделать заказ?</div>
            </div>
            <div class="faq-block__item">
                <div class="faq-block__item-head">Сколько времени длится уборка?</div>
                <div class="faq-block__item-body">Сколько времени длится уборка?</div>
            </div>
        </div>
    </div>
@endsection
