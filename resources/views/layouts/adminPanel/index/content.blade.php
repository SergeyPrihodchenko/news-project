<main class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <a class="flex-sm-fill text-sm-left nav-link active" aria-current="page" href="{{route('admin.create')}}">Добавить новость</a>
    <a class="flex-sm-fill text-sm-left nav-link active" aria-current="page" href="{{route('admin.category.create')}}">Добавить категорию</a>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Категория</th>
                    <th scope="col">редактировать новости</th>
                    <th scope="col">редактировать категории</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $item)
                    <tr>
                        <td>{{ __($item->name) }}</td>
                        <td>
                            <a class="link-primary" href="{{ route('admin.category.news', $item) }}">выбрать новость</a>
                        </td>
                        <td>
                            <a class="link-primary" href="{{ route('admin.category.edit', $item) }}">ред</a>
                            <span>/</span>
                            <form method="POST" action="{{ route('admin.category.delete', $item) }}">
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
