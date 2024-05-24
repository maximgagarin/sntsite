<ul class="nav flex-column">

    <li class="nav-item bg-success">
        <a class="nav-link text-white" href="{{route('main')}}" id="navbarDarkDropdownMenuLink" role="button" aria-expanded="false">
            Главная
        </a>
    </li>

    <li class="nav-item bg-success">
        <a class="nav-link  text-white" href="{{route('tarif')}}" id="navbarDarkDropdownMenuLink" role="button" aria-expanded="false">
            Тарифы
        </a>
    </li>


    <li class="nav-item bg-success">
        <a class="nav-link  text-white" href="{{route('document')}}" id="navbarDarkDropdownMenuLink" role="button" aria-expanded="false">
            Документы
        </a>
    </li>


    <li class="nav-item bg-success">
        <a class="nav-link  text-white" href="{{route('contacts')}}" id="navbarDarkDropdownMenuLink" role="button" aria-expanded="false">
            Контакты
        </a>
    </li>

    <li class="nav-item bg-success">
        <a class="nav-link text-white"  href="{{route('water')}}">График подачи воды</a>
    </li>
    <li class="nav-item bg-success">
        <a class="nav-link text-white" href="{{route('works')}}">Выполненные работы</a>
    </li>
    <li class="nav-item bg-success">
        <a class="nav-link text-white" href="{{route('bus')}}">Расписание автобусов</a>
    </li>
    <li class="nav-item bg-success">
        <a class="nav-link text-white" href="{{route('bank-details')}}">Реквизиты</a>
    </li>
    <li class="nav-item bg-success">
        <a class="nav-link text-white" href="{{route('registr')}}">Вход</a>
    </li>



@auth
    <li class="nav-item bg-success">
        <a class="nav-link text-white" href="{{route('admin')}}">Администратор</a>
    </li>
    @endauth
</ul>
