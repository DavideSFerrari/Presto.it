<x-main>

    <div class="container-fluid p-5 bg-gradient bg-success p-5 shadow mb-4">
        <div class="row">
            <div class="col-12 text-light p-5">
                <h1 class="display-2 text-center">
                    {{ $announcement_to_check ? 'Annunci da revisionare' : 'Non ci sono annunci da revisionare' }}
                </h1>
            </div>
        </div>
    </div>

    @if ($announcement_to_check)
        <div class="container">
            <div class="row">

                <div class=" m-3 product-card rounded-3 card-custom shadow" style="width: 18rem;">

                    <img src="https://picsum.photos/id/27/1200/400" class="card-img-top my-3 rounded-3" alt="..."
                        style="height: 7rem;">
                    <div class="product-details">
                        <h5 class="card-title text-break">{{ $announcement_to_check->title }}</h5>
                        <p class="card-text py-2 text-break text-lowercase">{{ $announcement_to_check->description }}
                        </p>
                        <hr class="text-dark">
                        <p class="card-footer">Pubblicato il: {{ $announcement_to_check->created_at->format('d/m/Y') }}
                        </p>

                        <div>
                            <div class="d-flex justify-content-between">
                                <form
                                    action="{{ route('revisor.accepted_announcement', ['announcement' => $announcement_to_check]) }}"
                                    method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-success shadow">Accetta</button>
                                </form>

                                <!-- <div class="col-6 col-md-3 text end"> -->
                                <form
                                    action="{{ route('revisor.reject_announcement', ['announcement' => $announcement_to_check]) }}"
                                    method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-danger shadow">Rifiuta</button>
                                </form>
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

</x-main>
