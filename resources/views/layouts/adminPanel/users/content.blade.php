<main class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <a class="flex-sm-fill text-sm-left nav-link active" aria-current="page" href="{{route('admin.create')}}">Добавить новость</a>
    <a class="flex-sm-fill text-sm-left nav-link active" aria-current="page" href="{{route('admin.category.create')}}">Добавить категорию</a>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Имя</th>
                    <th scope="col">Адрес почты</th>
                    <th scope="col">Статус</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $item)
                    <tr>
                        <td>{{ __($item->name) }}</td>
                        <td>{{ __($item->email) }}</td>
                        <td>{{ $item->admin == 0 ? 'Пользователь' : 'Админ'}}</td>
                        <td>
                            <a class="link-primary" href="{{ route('admin.users.edit', $item) }}">ред</a>
                            <span>/</span>
                            <form method="POST" action="{{route('admin.users.delete', $item)}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="link-danger" style="border: none; background: none;">удалить</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
