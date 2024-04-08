<div class="header">
    <div class="header-block section">
        <a href="{{ route('home') }}"><img src={{asset('images/icons/logo.svg')}} alt=""></a>
        <div class="header-block__menu">
            <a href="{{ route('home') }}" class="header-block__menu-link">Главная</a>
            <a href="{{ route('catalog') }}" class="header-block__menu-link">Услуги</a>
            <a href="{{ route('about') }}" class="header-block__menu-link">О нас</a>
            <a href="#footer" class="header-block__menu-link">Контакты</a>
            <form action="#" class="header-search">
                <input type="text" class="header-search__input">
                <button type="submit" class="header-search__button"><img src="{{asset('images/icons/Search.svg')}}"
                                                                         alt=""></button>
            </form>
            <a onclick="openModal('reg')" class="header-block__menu-btn"><img src={{asset('images/icons/User.svg')}} alt=""></a>
        </div>
    </div>
</div>
