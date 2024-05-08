<div class="modal" id="auth">
    <form action="{{ route('user.login') }}" class="modal-window" method="post">
        @csrf
        <div class="close">&times;</div>
        <div class="modal-window__title">ЛИЧНЫЙ КАБИНЕТ</div>
        <div class="modal-window__nav">
            <div class="modal-window__item active" onclick="openAuth()">ВХОД</div>
            <div class="modal-window__item" onclick="openReg()">РЕГИСТРАЦИЯ</div>
        </div>
        <input type="email" name="email" placeholder="email" class="modal-window__input">
        <input type="password" name="password" placeholder="Пароль" class="modal-window__input">
        <button type="submit" class="modal-window__btn">Войти</button>
        <div class="modal-window_link" onclick="openReg()">Нет аккаунта? Зарегистрироваться</div>
    </form>
</div>
