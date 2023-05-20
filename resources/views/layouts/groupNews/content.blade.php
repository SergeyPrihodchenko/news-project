<div class="row mb-2">
    @foreach ($news as $item)
        <div class="col-md-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                      <strong class="d-inline-block mb-2 text-primary">{{__($item->author_name . ' ' . $item->author_surname)}}</strong>
                      <h3 class="mb-0">
                        <p class="text-dark" href="#">{{__($item->title)}}</p>
                      </h3>
                      <div class="mb-1 text-muted">{{$item->updated_at}}</div>
                      <p class="card-text mb-auto">{{$item->text}}</p>
                    </div>
                    <img class="card-img-right flex-auto d-none d-md-block" src="" alt="изображения нет">
                </div>
        </div>
    @endforeach
</div>