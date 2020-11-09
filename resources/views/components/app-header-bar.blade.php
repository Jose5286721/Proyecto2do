<header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="#">
                            <img src="{{asset('assets/images/icon/logo-mini.png')}}" alt="CoolAdmin" />
                        </a>
                    </div>
                    <div class="header__navbar">
                        <ul class="list-unstyled">
                            <li class="has-sub">
                                <a href="{{route('home')}}">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard
                                    <span class="bot-line"></span>
                                </a>
                            </li>
                            <li class="has-sub">
                                <a href="#">
                                    <i class="zmdi zmdi-turning-sign"></i>
                                    <span class="bot-line"></span>Carreteras</a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="{{route('carreteras.index')}}">Listar</a>
                                    </li>
                                    <li>
                                        <a href="{{route('carreteras.create')}}">Crear</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a href="table.html">
                                    <i class="zmdi zmdi-arrow-split"></i>
                                    <span class="bot-line"></span>Tramos</a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="{{route('tramos.index')}}">Listar</a>
                                    </li>
                                    <li>
                                        <a href="{{route('tramos.create')}}">Crear</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a href="#">
                                    <i class="zmdi zmdi-accounts"></i>
                                    <span class="bot-line"></span>Comunidades</a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="{{route('comunidades.index')}}">Listar</a>
                                    </li>
                                    <li>
                                        <a href="{{route('comunidades.create')}}">Crear</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a href="#">
                                    <i class="zmdi zmdi-accounts-list"></i>
                                    <span class="bot-line"></span>Tramo Comunidad</a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="{{route('tramo_comunidades.index')}}">Listar</a>
                                    </li>
                                    <li>
                                        <a href="{{route('tramo_comunidades.create')}}">Crear</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="header__tool">
                        
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <img src="https://ui-avatars.com/api/?name={{$user->name}}" alt="{{$user->name}}" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#">{{$user->name}}</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                                <img src="https://ui-avatars.com/api/?name={{$user->name}}" alt="{{$user->name}}" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#">{{$user->name}}</a>
                                            </h5>
                                            <span class="email">{{$user->email}}</span>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="#" onclick="document.getElementById('logout-form').submit()">
                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                        <form method="POST" id="logout-form" action="{{url('logout')}}">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->

        <!-- HEADER MOBILE-->
        <header class="header-mobile header-mobile-2 d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="{{asset('assets/images/icon/logo-mini.png')}}" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="{{route('home')}}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="has-sub">
                                <a href="#" class="js-arrow">
                                    <i class="zmdi zmdi-turning-sign"></i>
                                    <span class="bot-line"></span>Carreteras</a>
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                    <li>
                                        <a href="{{route('carreteras.index')}}">Listar</a>
                                    </li>
                                    <li>
                                        <a href="{{route('carreteras.create')}}">Crear</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a href="#" class="js-arrow">
                                    <i class="zmdi zmdi-arrow-split"></i>
                                    <span class="bot-line"></span>Tramos</a>
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                    <li>
                                        <a href="{{route('tramos.index')}}">Listar</a>
                                    </li>
                                    <li>
                                        <a href="{{route('tramos.create')}}">Crear</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a href="#" class="js-arrow">
                                    <i class="zmdi zmdi-accounts"></i>
                                    <span class="bot-line"></span>Comunidades</a>
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                    <li>
                                        <a href="{{route('comunidades.index')}}">Listar</a>
                                    </li>
                                    <li>
                                        <a href="{{route('comunidades.create')}}">Crear</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a href="#" class="js-arrow">
                                    <i class="zmdi zmdi-accounts-list"></i>
                                    <span class="bot-line"></span>Tramo Comunidad</a>
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                    <li>
                                        <a href="{{route('tramo_comunidades.index')}}">Listar</a>
                                    </li>
                                    <li>
                                        <a href="{{route('tramo_comunidades.create')}}">Crear</a>
                                    </li>
                                </ul>
                            </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="sub-header-mobile-2 d-block d-lg-none">
            <div class="header__tool">
                
                <div class="account-wrap">
                    <div class="account-item account-item--style2 clearfix js-item-menu">
                        <div class="image">
                            <img src="https://ui-avatars.com/api/?name={{$user->name}}" alt="{{$user->name}}" />
                        </div>
                        <div class="content">
                            <a class="js-acc-btn" href="#">{{$user->name}}</a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                <div class="image">
                                    <a href="#">
                                        <img src="https://ui-avatars.com/api/?name={{$user->name}}" alt="{{$user->name}}" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="name">
                                        <a href="#">{{$user->name}}</a>
                                    </h5>
                                    <span class="email">{{$user->email}}</span>
                                </div>
                            </div>
                            
                            <div class="account-dropdown__footer">
                                <a href="#" onclick="document.getElementById('logout-form').submit()">
                                    <i class="zmdi zmdi-power"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END HEADER MOBILE -->