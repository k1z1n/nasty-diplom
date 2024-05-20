<div class="modal" id="reg">
    <form action="{{ route('user.register') }}" class="modal-window" method="post">
        @csrf
        <div class="close">&times;</div>
        <div class="modal-window__title">ЛИЧНЫЙ КАБИНЕТ</div>
        <div class="modal-window__nav">
            <div class="modal-window__item" onclick="openAuth()">ВХОД</div>
            <div class="modal-window__item active" onclick="openReg()">РЕГИСТРАЦИЯ</div>
        </div>
        <input type="text" name="email" placeholder="E-mail:" class="modal-window__input">
        @error('email')
        {{ $message }}
        @enderror
        <input type="text" name="username" placeholder="Имя" class="modal-window__input">
        @error('username')
        {{ $message }}
        @enderror
        <input type="text" name="surname" placeholder="Фамилия" class="modal-window__input">
        @error('surname')
        {{ $message }}
        @enderror
{{--        <input type="number" name="number" placeholder="Телефон" class="modal-window__input">--}}
{{--        @error('number')--}}
{{--        {{ $message }}--}}
{{--        @enderror--}}
        <input type="password" name="password" placeholder="Пароль" class="modal-window__input">
        @error('password')
        {{ $message }}
        @enderror
        <input type="password" name="password_confirmation" placeholder="Повторите пароль" class="modal-window__input">
        <button type="submit" class="modal-window__btn">Зарегистрироваться</button>
        <div class="modal-window_link" onclick="openAuth()">У вас есть уже аккаунт? Войти</div>
    </form>
</div>
