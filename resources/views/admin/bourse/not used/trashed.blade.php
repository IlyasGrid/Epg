<x-adminLayout>


    <h2>
        <a href="/admin/langues/" class="text-reset text-decoration-none">
            Soutien </a>
    </h2>
    <div class="d-flex justify-content-around m-5 p-3 ">


        @if (count($soutiens) < 1)
            <div class="row">
                <div class="container d-flex align-items-center justify-content-center w-100">
                    <div class="text-center">
                        <div class="alert alert-info">
                            No tarifs found.
                        </div>
                    </div>

                </div>
                <div class="d-flex align-items-center justify-content-center w-100">
                    <a href="/admin/soutien/" class="btn btn btn-outline-dark align-self-start">back to
                        Tarification</a>
                </div>
            </div>
        @else
            <div class="row">
                @foreach ($soutiens as $tarif)
                    <div class="card mb-5 w-100">
                        <h5 class="card-title card-header text-centre text-uppercase" style="text-align: center;">
                            {{ $tarif->type }}</h5>
                        <div class="m-3  text-muted">
                            <p class="card-text  pl-3">Volume Horraire: <b>{{ $tarif->volume_horraire }} Séance(s) par
                                    Semaine</b> </p>
                            <p class="card-text  pl-3">Nbr personne: <b>{{ $tarif->nbr_personne }}</b> </p>
                            <p class="card-text  pl-3">Prix: <b>{{ $tarif->price }} DH</b> </p>
                        </div>
                        <div class="d-flex justify-content-around mb-4">
                            <div class="d-flex justify-content-around">
                                <a href="/admin/soutien/restore/{{ $tarif->id }}"
                                    class="btn btn-outline-secondary">restore</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
</x-adminLayout>
