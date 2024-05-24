<ul class="nav flex-column">
    <li class="nav-item">
        <a class="nav-link " href="{{route('main')}}">Главная</a>
    </li>
    <li class="nav-item">
        <a class="nav-link  " href="{{route('tarif')}}"> Тарифы </a>
    </li>
    <li class="nav-item">
        <a class="nav-link  " href="{{route('document')}}">Документы</a>
    </li>
    <li class="nav-item">
        <a class="nav-link  " href="{{route('contacts')}}">Контакты</a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="{{route('water')}}">График подачи воды</a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="{{route('works')}}">Выполненные работы</a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="{{route('bus')}}">Расписание автобусов</a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="{{route('bank-details')}}">Реквизиты</a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="{{route('registr')}}">Вход</a>
    </li>
    @auth
        <li class="nav-item">
            <a class="nav-link " href="{{route('admin')}}">Администратор</a>
        </li>
    @endauth
</ul>
