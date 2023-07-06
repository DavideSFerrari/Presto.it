<div class="container">
    <div class="row">
        @foreach ($announcements as $announcement)
            <div class=" m-3 product-card rounded-3 card-custom shadow" style="width: 18rem;">

                <a class="text-custom text-break" href="{{ route('announcements.detail', $announcement) }}">
                    <img src="http://picsum.photos/200" class="card-img-top my-3 rounded-3" alt="...">
                    <div class="product-details">
                        <h5 class="card-title text-break">{{ $announcement->title }}</h5>
                        <p class="card-text py-2 text-break text-lowercase">{{ $announcement->description }}</p>
                        <p class="card-text py-2 text-break text-uppercase">{{ $announcement->category->name }}</p>
                        <hr class="text-dark">
                        <p class="card-text product-price">{{ $announcement->price }} euro</p>
                        <p class="card-footer">Pubblicato il: {{ $announcement->created_at->format('d/m/Y') }}</p>
                </a>

            </div>
    </div>
    @endforeach
</div>

</div>
