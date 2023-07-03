<x-main>

    <div class="container-fluid p-5 bg-gradient bg-success p-5 shadow mb-4">
        <div class="row">
            <div class="col-12 text-light p-5">
                <h1 class="display-2">
                    {{announcement_to_check ? 'Ecco l\'annuncio da revisionare' : 'Non ci sono annunci da revisionare'}}
                </h1>
            </div>
        </div>
    </div>
    @if ($announcement_to_check)
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="showCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="corousel-item active">
                            <img src="http://picsum.photo/id/27/1200/400" class="img-fluid p-3 rounded" alt="...">
                        </div>
                        <div class="corousel-item">
                            <img src="http://picsum.photo/id/27/1200/400" class="img-fluid p-3 rounded" alt="...">
                        </div>
                        <div class="corousel-item">
                            <img src="http://picsum.photo/id/27/1200/400" class="img-fluid p-3 rounded" alt="...">
                        </div>
                    </div>
        
    @endif
    
</x-main>