<ul class="nav flex-column">
    <li class="nav-item bg-success">
        <a class="nav-link text-white"  href="#">График подачи воды</a>
    </li>
    <li class="nav-item bg-success">
        <a class="nav-link text-white" href="{{route('works')}}">Выполненные работы</a>
    </li>
    <li class="nav-item bg-success">
        <a class="nav-link text-white" href="{{route('bus')}}">Расписание автобусов</a>
    </li>
    <li class="nav-item bg-success">
        <a class="nav-link text-white" href="#">Правление</a>
    </li>
    <li class="nav-item bg-success">
        <a class="nav-link text-white" href="#">Реквизиты</a>
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
