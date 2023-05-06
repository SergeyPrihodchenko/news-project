<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
        </div>
    </div>

    <h2>Section title</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Заголовок</th>
                    <th>Категория</th>
                    <th>Текст</th>
                    <th>Картинка</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($news as $item)
                    <tr>
                        <td>{{ __($item->id) }}</td>
                        <td><a href="{{ route('admin.edit', $item) }}">{{ __($item->title) }}</a></td>
                        <td>{{ __($item->id_category) }}</td>
                        <td>{{ __($item->text) }}</td>
                        @isset($item->img)
                            <td>{{ __($item->img) }}</td>
                        @endisset
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
