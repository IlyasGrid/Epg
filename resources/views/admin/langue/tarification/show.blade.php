<x-adminLayout>


    <h2> <span class="text-muted text-capitalize">Langue </span><a href="/admin/langues/"
            class="text-reset text-decoration-none">
            {{ $langue->Name }} </a> <span class="text-muted text-lowercase">tarifications</span>
    </h2>
    <div class="d-flex justify-content-around m-5 p-3 ">
        <a href="/admin/langues/{{ $langue->id }}/tarification/create"
            class="btn btn-outline-success align-self-start">create
            new Tarification</a>
        <a href="/admin/langues/{{ $langue->id }}/tarification/trashed"
            class="btn btn btn-outline-secondary align-self-start">show
            deleted Tarification</a>
    </div>

    @if (count($tarifs) < 1)
        <div class="container d-flex align-items-center justify-content-center w-100">
            <div class="text-center">
                <div class="alert alert-info">
                    No tarifs found.
                </div>
            </div>
        </div>
    @else
        @foreach ($tarifs as $tarif)
            <div class="card mb-5">
                <h5 class="card-title card-header text-centre" style="text-align: center;">
                    {{ $tarif->Type }}</h5>
                <div class="m-3  text-muted">
                    <p class="card-text  pl-3">Volume Horraire: <b>{{ $tarif->Volume_Horraire }} Séance(s) par Semaine</b> </p>
                    <p class="card-text  pl-3">Duree: <b>{{ $tarif->Temps }}</b> </p>
                    <p class="card-text  pl-3">Prix: <b>{{ $tarif->Price }} DH</b> </p>
                </div>
                <div class="d-flex justify-content-around mb-4">
                    <div class="d-flex justify-content-around">
                        <a href="/admin/langues/{{ $langue->id }}/tarification/edit/{{ $tarif->id }}"
                            class="btn btn-outline-info">edit</a>
                    </div>
                    <div>
                        <form action="/admin/langues/{{ $langue->id }}/tarification/{{ $tarif->id }}"
                            method="POST">
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
