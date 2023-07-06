<div class="container">
    <div class="row">
        
        @foreach ($announcements as $announcement)
            <div class=" m-3 product-card rounded-3 card-custom shadow" style="width: 18rem;">
                <a class="text-custom text-break" href="{{ route('announcements.detail', $announcement) }}">
                <img src="http://picsum.photos/200" class="card-img-top my-3 rounded-3" alt="...">
                <div class="product-details">
                    <h5 class="card-title text-break">{{ $announcement->title }}</h5>
                    <br>
                    <p class="card-text product-price">{{ $announcement->price }}€</p>
                    <hr class="text-dark">
                    <p class="card-text text-uppercase text-center">{{ $announcement->category->name }}</p>
                    <p class="card-text text-break text-lowercase">{{ $announcement->description }}</p>      
                    <hr class="text-dark">
                    <p class="card-footer text-lowercase text-center">Pubblicazione: {{ $announcement->created_at->format('d/m/Y')}}</p>
                </div>
                </a>
            </div>  
        @endforeach
    
    </div>
</div>

