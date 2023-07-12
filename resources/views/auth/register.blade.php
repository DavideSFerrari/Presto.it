<x-main>
    <div class="container ">
        <div class="row justify-content-center ">
          <div class="col-12 col-md-8 m-login-register">
            <form class="p-5 shadow rounded-4 bg-white " action="{{route('register')}}" method="POST">
              @method('POST')
              @csrf
    
              @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
              @endif
    
    
    
              <div class="mb-3">
                <label for="name" class="form-label">{{__('ui.nome')}}</label>
                <input type="text" name="name" class="form-control" id="name" required>
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">{{__('ui.email')}}</label>
                <input type="email" name="email" class="form-control" id="email" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" required>
              </div>

              <div class="mb-3">
                <label for="password_confirmation" class="form-label">{{__('ui.confermaPassw')}}</label>
                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required>
              </div>
    
              <button type="submit" class="btn btn-dark">{{__('ui.registrati')}}</button>
              <a href="{{route('login')}}" class="btn btn-outline-dark">{{__('ui.giaIscritto')}}</a>
            </form>
          </div>
        </div>
    </div>
</x-main>