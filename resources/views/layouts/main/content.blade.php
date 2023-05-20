<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
@if (session('success'))
<div class="alert alert-success" role="alert">
    {{session('success')}}
   </div>
@endif
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Только проверенная информация</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <a href="{{route('exportJSON')}}"><button class="btn btn-sm btn-outline-secondary">Export</button></a>
            </div>
        </div>
    </div>

    <h2>Все новости</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Заголовок</th>
                    <th>Текст</th>
                    <th>Картинка</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($news as $item)
                    <tr>
                        <td>{{ __($item->id) }}</td>
                        <td>{{ __($item->title) }}</td>
                        <td>{{ __($item->text) }}</td>
                        @isset($item->img)
                        <td><img src="{{ 'storage/' . $item->img }}" alt=""></td>
                        @endisset
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>