<div class="sidebar-sticky">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('main') }}">
                <span data-feather="home"></span>
                Главная <span class="sr-only">(current)</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <span data-feather="file"></span>
                Категории
            </a>
            <a class="nav-link" href="{{ route('admin.create') }}">
                <span data-feather="file"></span>
                Административная панель
            </a>
        </li>
    </ul>
</div>
