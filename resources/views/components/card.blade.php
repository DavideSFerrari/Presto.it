<div class="container">
    <div class="row"> 
        @foreach ($announcements as $announcement)
          <div class="card m-3" style="width: 18rem;">
              <img src="http://picsum.photos/200" class="card-img-top" alt="...">
              <div class="card-body">
              <h5 class="card-title">{{$announcement->title}}</h5>
              <p class="card-text">{{$announcement->price}} euro</p>
              <p class="card-text">{{$announcement->description}}</p>
              <p class="card-text">{{$announcement->detail}}</p>
              <a href="#" class="btn btn-primary m-1">Visualizza dettaglio</a>
              <p class="card-footer">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}}</p>
              <p class="card-footer">Pubblicato da: </p>
              </div>
          </div>
          @endforeach
    </div>
    
</div>
