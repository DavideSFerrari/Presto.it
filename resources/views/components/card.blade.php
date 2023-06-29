@foreach ($announcements as $announcement)
          <div class="card m-4" style="width: 18rem;">
              <img src="http://picsum.photos/200" class="card-img-top" alt="...">
              <div class="card-body">
              <h5 class="card-title">{{$announcement->title}}</h5>
              <p class="card-text">{{$announcement->price}} euro</p>
              <p class="card-text">{{$announcement->description}}</p>
              <p class="card-text">{{$announcement->detail}}</p>
              <a href="{{route('announcements.detail', $announcement)}}" class="btn btn-primary">Visualizza dettaglio</a>
              </div>
          </div>
          @endforeach