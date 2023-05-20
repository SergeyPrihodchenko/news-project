<main class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <form method="POST" @if ($categories->id)
            action="{{route('admin.category.update', $categories)}}"
        @else
            action="{{route('admin.category.store')}}"
        @endif>
            @csrf
            @if ($categories->id)
                @method('put')
            @endif
            @if ($errors->has('name'))
                <div class="alert alert-danger" role="alert">
                    @foreach($errors->get('name') as $error)
                        {{ $error }}<br>
                    @endforeach
                </div>
            @endif
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Категории</label>
            <input @if ($categories->id)
                value="{{$categories->name}}"
            @endif type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name"/>
            <div id="emailHelp" class="form-text">Название категории</div>
            </div>
            <button type="submit" class="btn btn-primary">создать</button>
        </form>
    </div>
</main>