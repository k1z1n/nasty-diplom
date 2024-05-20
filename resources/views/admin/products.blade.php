@extends('includes.template')
@section('title', '')
@section('content')
    @include('includes.header')
    <div class="profile">
        <div class="profile-title section">АДМИНИСТРАТОР</div>
        <!-- Навигация -->
        <div class="profile-head section">
            <div class="profile-head__links">
                <a href="{{ route('admin.main') }}" class="profile-head__links-item">Заказы</a>
                <a href="{{ route('admin.product') }}" class="profile-head__links-item active">Услуги</a>
                <a href="{{ route('admin.category') }}" class="profile-head__links-item">Категории</a>
            </div>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" style="background-color: transparent" class="profile-head__links-exit">
                    <img class="profile-head__exit-img" src="{{ asset('assets/images/profile/exit.svg') }}" alt="">
                    <span class="profile-head__exit-text">Выход</span>
                </button>
            </form>
        </div>

        <!-- Админ-услуги -->
        <div class="admin-servic section">
            <div class="admin-servic__header">
                <div class="admin-servic__header-title">Услуги</div>
                <a href="{{ route('admin.product.create') }}" class="admin-servic__header-button">Добавить</a>
            </div>
            <div class="admin-servic__head">
                <div class="admin-servic__column">ID</div>
                <div class="admin-servic__column">Название</div>
                <div class="admin-servic__column">Редактировать</div>
                <div class="admin-servic__column">Удалить</div>
                <div class="admin-servic__column-adaptiv">
                    <img src="{{ asset('assets/images/icons/edit.svg') }}" alt="">
                </div>
                <div class="admin-servic__column-adaptiv">
                    <img src="{{ asset('assets/images/icons/backet.svg') }}" alt="">
                </div>

            </div>
            @foreach($products as $product)
                <div class="admin-servic__body">
                    <div class="admin-servic__column">{{ $product->id }}</div>
                    <div class="admin-servic__column">{{ $product->title }}</div>
                    <a href="{{ route('admin.product.edit', $product->id) }}" class="admin-servic__column">Редактировать</a>
                    <div class="admin-servic__column">
                        <form action="" method="POST" id="deleteForm{{ $product->id }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="admin-servic__column delete-button" style="background-color: transparent; font-size: 16px;">Удалить</button>
                        </form>
                    </div>
                    <a href="" onclick="openModal('update')" class="admin-servic__column-adaptiv">
                        <img src="{{ asset('assets/images/icons/edit.svg') }}" alt="">
                    </a>
                    <a href="" class="admin-servic__column-adaptiv">
                        <img src="{{ asset('assets/images/icons/backet.svg') }}" alt="">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <script defer>
        document.addEventListener('DOMContentLoaded', function() {
            let deleteButtons = document.querySelectorAll('.delete-button');

            deleteButtons.forEach(function(button) {
                button.addEventListener('click', function(e) {
                    e.preventDefault(); // Предотвращаем стандартное действие кнопки
                    let formId = e.target.form.id; // Получаем ID формы
                    let productId = formId.split('deleteForm')[1];
                    if (confirm('Вы уверены, что хотите удалить этот продукт?')) {
                        // Если пользователь нажал "OK", отправляем форму
                        document.getElementById('deleteForm' + productId).submit();
                    }
                });
            });
        });
    </script>
@endsection
