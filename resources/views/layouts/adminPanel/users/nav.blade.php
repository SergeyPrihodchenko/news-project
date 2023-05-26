<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Последний канал</a>
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" style="cursor:pointer"
        @if(Route::has('register'))
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
        @endif
        >
          @if (Route::has('register'))
              Выйти
          @else
              Войти
          @endif
        </a>
      </li>
    </ul>
  </nav>
  <form action="{{route('logout')}}" id="logout-form" method="POST">
    @csrf
  </form>