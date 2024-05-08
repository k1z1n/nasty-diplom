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
                <a href="{{ route('admin.product') }}" class="profile-head__links-item">Услуги</a>
                <a href="{{ route('admin.category') }}" class="profile-head__links-item active">Категории</a>
            </div>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" style="background-color: transparent" class="profile-head__links-exit">
                    <img class="profile-head__exit-img" src="{{ asset('assets/images/profile/exit.svg') }}" alt="">
                    <span class="profile-head__exit-text">Выход</span>
                </button>
            </form>
        </div>

        <div class="admin-servic section">
            <div class="admin-servic__header">
                <div class="admin-servic__header-title">Категории</div>
                <a href="{{ route('admin.category.create') }}" class="admin-servic__header-button">Добавить</a>
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
            @foreach($categories as $category)
                <div class="admin-servic__body">
                    <div class="admin-servic__column">{{ $category->id }}</div>
                    <div class="admin-servic__column">{{ $category->title }}</div>
                    <a href="{{ route('admin.category.edit', $category->id) }}" class="admin-servic__column" onclick="openModal('update')">Редактировать</a>
                    <div class="admin-servic__column">
                        <form action="{{ route('admin.category.delete', $category->id) }}" method="POST"
                              id="deleteForm{{ $category->id }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="admin-servic__column delete-button"
                                    style="background-color: transparent; font-size: 16px;">Удалить
                            </button>
                        </form>
                    </div>
                    <div onclick="openModal('update')" class="admin-servic__column-adaptiv">
                        <img src="{{ asset('assets/images/icons/edit.svg') }}" alt="">
                    </div>
                    <div class="admin-servic__column-adaptiv">
                        <img src="{{ asset('assets/images/icons/backet.svg') }}" alt="">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script defer>
        let deleteButtons = document.querySelectorAll('.delete-button');

        deleteButtons.forEach(function (button) {
            button.addEventListener('click', function (e) {
                e.preventDefault();
                let formId = e.target.form.id;
                let categoryId = formId.split('deleteForm')[1];
                console.log(categoryId)
                if (confirm('Вы уверены, что хотите удалить эту категорию?')) {
                    document.getElementById('deleteForm' + categoryId).submit();
                }
            });
        });
    </script>
@endsection
