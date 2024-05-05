<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container-fluid">
        <div class="collapse navbar-collapse justify-content-between" id="navbarNavDarkDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown" id="navbarDropdown">
                    <a class="nav-link dropdown-toggle text-white" href="{{route('main')}}" id="navbarDarkDropdownMenuLink" role="button" aria-expanded="false">
                        Главная
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-white" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
            {{--                    <ul class="navbar-nav">--}}
            {{--                        <li class="nav-item dropdown" id="navbarDropdown">--}}
            {{--                            <a class="nav-link dropdown-toggle text-white" href="{{route('news')}}" id="navbarDarkDropdownMenuLink" role="button" aria-expanded="false">--}}
            {{--                                Новости--}}
            {{--                            </a>--}}
            {{--                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">--}}
            {{--                                <li><a class="dropdown-item" href="#">Action</a></li>--}}
            {{--                                <li><a class="dropdown-item" href="#">Another action</a></li>--}}
            {{--                                <li><a class="dropdown-item" href="#">Something else here</a></li>--}}
            {{--                            </ul>--}}
            {{--                        </li>--}}
            {{--                    </ul>--}}
            <ul class="navbar-nav">
                <li class="nav-item dropdown" id="navbarDropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDarkDropdownMenuLink" role="button" aria-expanded="false">
                        О товариществе
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown" id="navbarDropdown">
                    <a class="nav-link dropdown-toggle text-white" href="{{route('meeting')}}" id="navbarDarkDropdownMenuLink" role="button" aria-expanded="false">
                        Решения собраний
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">1</a></li>
                        <li><a class="dropdown-item" href="#">2n</a></li>
                        <li><a class="dropdown-item" href="#">3</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown" id="navbarDropdown">
                    <a class="nav-link dropdown-toggle text-white" href="{{route('document')}}" id="navbarDarkDropdownMenuLink" role="button" aria-expanded="false">
                        Документы
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ asset('docs/Устав.pdf') }}">Устав</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown" id="navbarDropdown">
                    <a class="nav-link dropdown-toggle text-white" href="{{route('contacts')}}" id="navbarDarkDropdownMenuLink" role="button" aria-expanded="false">
                        Контакты
                    </a>

                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="" aria-label="Найти">
                <button class="btn btn-primary" type="submit">Поиск</button>
            </form>
        </div>
    </div>
</nav>
