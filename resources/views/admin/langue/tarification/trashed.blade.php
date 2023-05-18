<x-adminLayout>


    <h2 class="mb-5"><span class="text-muted text-capitalize ">Langue </span><a href="/admin/langues/"
            class="text-reset text-decoration-none">
            {{ $langue->Name }}
        </a>
        <br /><span class="text-muted text-capitalize "> deleted Tarifications</span>

    </h2>

    <style>
        h2 {
            color: rgb(91, 3, 91);
            text-transform: uppercase;
            letter-spacing: 2px;
            display: block;
            font-weight: bold;
            font-size: xx-large;
            margin-bottom: 0.5em;
            text-align: center;
        }
    </style>
    @if (count($tarifs) < 1)
        <div class="container d-flex align-items-center justify-content-center w-100">
            <div class="text-center">
                <div class="alert alert-info">
                    No trashed tarifs for found.
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-around  p-2 mt-3">
            <a href="/admin/langues/{{ $langue->id }}/tarification" class="btn btn-dark pl-5 pr-5">
                back to tarifications
            </a>
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
                            <a href="/admin/langues/{{ $langue->id }}/tarification/restore/{{ $tarif->id }}"
                                class="btn btn-outline-secondary">restore</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</x-adminLayout>
