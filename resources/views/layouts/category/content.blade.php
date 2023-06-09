<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Только проверенная информация</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
    </div>

    <h2>Рубрики наших новостей</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>Категория</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $item)
                    <tr>
                        <td><a href="{{route('category.show', $item)}}">{{ __($item->name) }}</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
