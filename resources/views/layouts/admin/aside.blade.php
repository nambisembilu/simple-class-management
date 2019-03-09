<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <h2>{{ config('app.name', 'Laravel') }}</h2>
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li>
                    <a href="{{ url('home') }}">
                        <i class="fas fa-calendar-alt"></i>Configure Class</a>
                </li>
                <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas  fa-list-ul"></i>Master</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
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
        </nav>
    </div>
</aside>