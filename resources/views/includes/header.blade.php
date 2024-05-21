<div class="header">
    <div class="header-block section">
        <a href="{{ route('home') }}"><img src={{asset('assets/images/icons/logo.svg')}} alt=""></a>
        <div class="header-block__menu">
            <a href="{{ route('home') }}" class="header-block__menu-link">Главная</a>
            <a href="{{ route('catalog') }}" class="header-block__menu-link">Услуги</a>
            <a href="{{ route('about') }}" class="header-block__menu-link">О нас</a>
            <a href="#footer" class="header-block__menu-link">Контакты</a>
            <form action="{{ route('catalog') }}" class="header-search" method="get">
                <input type="text" class="header-search__input" name="search">
                <button type="submit" class="header-search__button"><img
                        src="{{asset('assets/images/icons/Search.svg')}}"
                        alt=""></button>
            </form>
            @guest()
                <a onclick="openModal('reg')" class="header-block__menu-btn"><img
                        src={{asset('assets/images/icons/User.svg')}} alt=""></a>
            @endguest
            @auth()

                @if(auth()->user()->role === 'admin')
                    <a href="{{ route('admin.main') }}" class="header-block__menu-btn"><img
                            src={{asset('assets/images/icons/User.svg')}} alt=""></a>
                @else
                    <a href="{{ route('profile') }}" class="header-block__menu-btn"><img
                            src={{asset('assets/images/icons/User.svg')}} alt=""></a>
                @endif
            @endauth
        </div>
    </div>
</div>
