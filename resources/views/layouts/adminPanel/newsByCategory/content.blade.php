<main class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <p class="h3">{{ $category }}</p>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id статьи</th>
                    <th scope="col">Автор</th>
                    <th scope="col">Заголовок статьи</th>
                    <th scope="col">Текст</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($news as $item)
                    <tr>
                        <td>{{ __($item->id) }}</td>
                        <td>{{ __($item->author_name . ' ' . $item->author_surname) }}</td>
                        <td>{{ __($item->title) }}</td>
                        <td>{{ __($item->text) }}</td>
                        <td><a class="link-primary" href="{{ route('admin.edit', $item) }}">ред</a><span>/</span>
                            <form method="post" action="{{ route('admin.delete', $item) }}">
                                @csrf
                                @method('delete')
                                <button class="link-danger" style="border: none; background: none"
                                    type="submit">удалить</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
