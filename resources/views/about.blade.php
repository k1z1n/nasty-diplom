@extends('includes.template')
@section('title', '')
@section('content')
@include('includes.header')
<div class="info">
    <div class="info-block section">
        <div class="info-block__left">
            <div class="info-block__left-title">ClearShine</div>
            <div class="info-block__left-content">-это профессионалы высокого класса. Высокая квалификация каждого
                специалиста нашей компании позволяют нам считать свой штат сотрудников слаженной командой настоящих
                профессионалов, относящихся к труду как к творчеству.<br><br>
                Практический опыт наших сотрудников, подкрепленный теоретическими знаниями, поистине бесценен. Он
                позволяет нашим рабочим выполнять клининговые, уборочные работы на самом высоком уровне.</div>
        </div>
        <div class="info-block__right">
            <img src="assets/images/about/main.png" alt="" class="info-block__right-img">
            <div class="info-block__right-items">
                <div class="info-block__right-flex">
                    <div class="info-block__right-num">5</div>
                    <div class="info-block__right-text">лет надежной работы</div>
                </div>
                <div class="info-block__right-flex">
                    <div class="info-block__right-num">200</div>
                    <div class="info-block__right-text">завершенных объектов</div>
                </div>
                <div class="info-block__right-flex">
                    <div class="info-block__right-num">4328</div>
                    <div class="info-block__right-text">более м² нами убрано</div>
                </div>
            </div>
        </div>
    </div>
    <div class="info-card section">
        <div class="info-card__item">
            <div class="info-card__item-title">Честное сотрудничество</div>
            <div class="info-card__item-content">Заранее рассчитаем стоимость услуг, и закрепляем наше
                сотрудничество договором. Оплата исключительно по факту выполнения. Вы проверяете результат и
                платите тогда, когда он вас удовлетворяет.</div>
        </div>
        <div class="info-card__item">
            <div class="info-card__item-title">Бережные моющие</div>
            <div class="info-card__item-content">Внимательно подходим к выбору моющих средств. Знаем какие средства
                использовать в конкретных случаях, чтобы не повредить мебель и сохранить прежний блеск поверхностей.
            </div>
        </div>
        <div class="info-card__item">
            <div class="info-card__item-title">Гарантия качества</div>
            <div class="info-card__item-content">На объектах работают от 2 и более опытных клинеров. Комплексная
                уборка делается в соответствии с нормами качества. Блеск от потолка до пола!</div>
        </div>
    </div>
</div>
@endsection
