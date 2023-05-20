<x-adminLayout>


    <h2>
        <a href="/admin/langues/" class="text-reset text-decoration-none">
            Soutien </a>
    </h2>
    <div class="d-flex justify-content-around m-5 p-3 ">
        <a href="/admin/soutien/create" class="btn btn-outline-success align-self-start">create
            new Tarification</a>
        <a href="/admin/soutien/trashed" class="btn btn btn-outline-secondary align-self-start">show
            deleted Tarification</a>
    </div>

    @if (count($soutiens) < 1)
        <div class="container d-flex align-items-center justify-content-center w-100">
            <div class="text-center">
                <div class="alert alert-info">
                    No tarifs found.
                </div>
            </div>
        </div>
    @else
        @foreach ($soutiens as $tarif)
            <div class="card mb-5">
                <h5 class="card-title card-header text-centre text-uppercase" style="text-align: center;">
                    {{ $tarif->type }}</h5>
                <div class="m-3  text-muted">
                    <p class="card-text  pl-3">Volume Horraire: <b>{{ $tarif->volume_horraire }} Séance(s) par
                            Semaine</b> </p>
                    <p class="card-text  pl-3">Nbr personne: <b>{{ $tarif->nbr_personne }}</b> </p>
                    <p class="card-text  pl-3">Prix: <b>{{ $tarif->price }}  DH</b> </p>
                </div>
                <div class="d-flex justify-content-around mb-4">
                    <div class="d-flex justify-content-around">
                        <a href="/admin/soutien/edit/{{ $tarif->id }}" class="btn btn-outline-info">edit</a>
                    </div>
                    <div>
                        <form action="/admin/soutien/{{ $tarif->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</x-adminLayout>
