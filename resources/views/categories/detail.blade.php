<x-main>

    <div class="row mx-5">

        <h1 class="text-center my-5 text-uppercase" style="font-family: 'EB Garamond', serif; font-weight: bold;">Esplora la categoria {{$category->name}}</h1>

        @foreach ($category->announcements as $announcement)
            <div class="product-card rounded-3 card-custom shadow" style="width: 18rem;">
                <a class="text-custom text-break" href="{{ route('announcements.detail', $announcement) }}">
                    <img src="{{!$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(300,400) : 'http://picsum.photos/200'}}" class="card-img-top my-3 rounded-3" alt="...">
                    <div class="product-details">
                        <p class="card-text product-catagory text-break">{{ $announcement->detail }}</p>
                        <h5 class="card-title text-break">{{ $announcement->title }}</h5>
                        <p class="card-text py-2 text-break text-lowercase">{{ $announcement->description }}</p>
                        <hr class="text-dark">
                        <p class="card-text product-price">{{ $announcement->price }} euro</p>
                        <p>Autore: {{$announcement->user->name ?? ''}}</p>
                    </div>
                </a>
            </div>
        @endforeach

    </div>

  </x-main> 