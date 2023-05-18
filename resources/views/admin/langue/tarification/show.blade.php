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
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title text-centre" style="text-align: center;">
                        {{ $tarif->Type }}</h5>
                    <div class="d-flex justify-content-between ">
                        <p class="card-text  p-3">Volume Horraire: <b>{{ $tarif->Volume_Horraire }} Séance(s) par
                                semaine
                                Semaine</b> </p>
                        <p class="card-text  p-3">Duree: <b>{{ $tarif->Temps }}</b> </p>
                        <p class="card-text  p-3">Prix: <b>{{ $tarif->Price }} DH</b> </p>
                    </div>
                    {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                    <div class="d-flex justify-content-around">
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
            </div>
        @endforeach
    @endif
</x-adminLayout>
