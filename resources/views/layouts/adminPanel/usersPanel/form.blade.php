<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <form class="form-signin">
            <h1 class="h3 mb-3 font-weight-normal">Редактор профился</h1>
            <label for="email" class="sr-only">Адрес почты</label>
            <input type="email" id="email" class="form-control" placeholder="Адрес почты" value="{{$user->email}}" required autofocus>
            <label for="name" class="sr-only">Адрес почты</label>
            <input type="text" id="name" class="form-control" placeholder="Имя" value="{{$user->name}}" required>
            <div class="checkbox mb-3">
              <label>
                <input type="checkbox" value="1" {{$user->admin == 0 ? '' : 'checked'}}> Права администратора
              </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button> 
          </form>
    </div>
</main>