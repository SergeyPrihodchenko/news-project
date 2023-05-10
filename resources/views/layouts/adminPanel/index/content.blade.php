<main class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Категория</th>
                    <th scope="col">Изменить название</th>
                    <th scope="col">редактировать</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $item)
                    <tr>
                        <td>{{ __($item->name) }}</td>
                        <td><a class="link-primary" href="{{ route('admin.category.news', $item) }}">новости</a>
                        </td>
                        <td>
                            <a class="link-primary" href="{{ route('admin.category.edit', $item) }}">ред</a>
                            <span>/</span>
                            <a class="link-danger" href="{{ route('admin.category.delete', $item) }}">удалить</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
