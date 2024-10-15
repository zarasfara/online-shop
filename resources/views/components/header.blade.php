@php
    use \Illuminate\Support\Facades\Auth;
@endphp
<header
    class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="/" class="nav-link px-2 link-secondary">Главная</a></li>
        @auth
            <li><a href="{{ route('dashboard') }}"
                   class="nav-link px-2 link-dark">Личный кабинет</a></li>
        @endauth
    </ul>

    <div class="col-md-3 text-end">
        @guest
            <a href="#" type="button" class="btn btn-outline-primary me-2">Войти</a>
            <a href="#" class="btn btn-primary">Регистрация</a>
        @endguest
        @auth
            <div class="d-flex justify-content-end align-items-center">
                <span>{{Auth::user()->name}}</span>
                <form class="ms-3" id="logout-form" action="#" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary">Выход</button>
                </form>
            </div>
        @endauth
    </div>
</header>