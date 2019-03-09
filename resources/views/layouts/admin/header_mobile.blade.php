<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="/home">
                    <img src="{{ asset('images/icon/logo.png') }}" alt="CoolAdmin" />
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
                    <a href="{{ url('configure') }}">
                        <i class="fas fa-chart-bar"></i>Configure Class</a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-tachometer-alt"></i>Master</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                            <li>
                            <a href="{{ url('class') }}">Classes</a>
                        </li>
                        <li>
                            <a href="{{ url('student') }}">Students</a>
                        </li>
                        <li>
                            <a href="{{ url('teacher') }}">Teachers</a>
                        </li>
                    </ul>
                </li>
                
            </ul>
        </div>
    </nav>
</header>