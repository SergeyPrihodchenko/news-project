<div class="row">
    <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Ваши новости</span>
        </h4>
        <ul class="list-group mb-3">
            <a href="">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Product name</h6>
                    </div>
                    <span class="text-muted">$12</span>
                </li>
            </a>
        </ul>
    </div>
    <div class="col-md-8 order-md-1">
        <h4 class="mb-3">Заполните поля для создания новости</h4>
        <form method="POST" class="needs-validation" novalidate
            action="@if (!$news->id) {{ route('admin.store') }}
        @else 
        {{ route('admin.update', $news) }} @endif"
            enctype="multipart/form-data">
            @csrf
            @if ($news->id)
                @method('PUT')
            @endif
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="author_name">Имя</label>
                    <input name="author_name" type="text" class="form-control" id="author_name" placeholder=""
                        value="{{ old('author_name') ?? $news->author_name }}" required>
                    <div class="invalid-feedback">
                        введите ваше имя
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="author_surname">Фамилия</label>
                    <input name="author_surname" type="text" class="form-control" id="author_surname" placeholder=""
                        value="{{ old('author_surname') ?? $news->author_surname }}" required>
                    <div class="invalid-feedback">
                        введите вашу фамилию
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-5 mb-3">
                    <label for="id_category">категория</label>
                    <select name="id_category" class="custom-select d-block w-100" id="id_category" required>
                        @foreach ($categories as $category)
                            <option @if ($category->id == $news->id_category) selected @endif value="{{ $category->id }}">
                                {{ $category->name }}</option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">
                        выберите категорию
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="title">заголовок поста</label>
                    <input name="title" type="text" class="form-control" id="title" placeholder=""
                        value="{{ old('title') ?? $news->title }}" required>
                    <div class="invalid-feedback">
                        введите текст
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="text" class="form-label">описание новости</label>
                <textarea name="text" class="form-control" id="text" rows="3">
                    {{ old('text') ?? $news->text }}
                </textarea>
            </div>
            <hr class="mb-4">

            <button class="btn btn-primary btn-lg btn-block" type="submit">опубликовать</button>
        </form>
        @if ($news->id)
            <form method="post" action="{{ route('admin.delete', $news) }}">
                @csrf
                @method('delete')
                <button class="btn btn-danger btn-lg btn-block" style="margin-top: 10px" type="submit">удалить</button>
            </form>
        @endif
    </div>
</div>
