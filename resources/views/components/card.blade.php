<div class="container">
    <div class="row"> 
        @foreach ($announcements as $announcement)
          <div class=" m-3 product-card rounded-3" style="width: 18rem;">
              <img src="http://picsum.photos/200" class="card-img-top my-3 rounded-3" alt="...">
              <div class="product-details">
                <p class="card-text product-catagory">{{$announcement->detail}}</p>
              <h5 class="card-title"><a class="text-custom" href="{{route('announcements.detail', $announcement)}}">{{$announcement->title}}</a></h5>
              <p class="py-2">{{$announcement->description}}</p>
              <hr>
              <p class="card-text product-price">{{$announcement->price}} euro</p>
              <p class="card-footer">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}}</p>
              <p class="card-footer">Pubblicato da: </p>
              </div>
          </div>
          @endforeach
    </div>
    
</div>
