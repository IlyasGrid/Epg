<x-adminLayout>


    <header>
        <h2 ><a href="/admin/langues/" class="text-reset text-decoration-none text-capitalize">
                {{ $langue->Name }}
            </a>

        </h2>
        <h4><span class="text-muted">Deleted tarifs </span></h4>
    </header>

    <section class="mt-5">
        <div class="d-flex justify-content-around m-5 p-3 row">
            @if (count($tarifs) < 1)
                <div class="container d-flex align-items-center justify-content-center w-100">
                    <div class="text-center">
                        <div class="alert alert-info">
                            No trashed tarifs for found.
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-around  p-2 mt-3">
                    <a href="/admin/langues/{{ $langue->id }}/tarification" class="btn btn-outline-dark pl-5 pr-5">
                        back to tarifications
                    </a>
                </div>
            @else

                @foreach ($tarifs as $tarif)
                    <div class="card m-5 " style="width: fit-content !important;">
                        <h5 class="card-title card-header text-centre" style="text-align: center;">
                            {{ $tarif->Type }}</h5>
                        <div class="m-3  text-muted">
                            <p class="card-text  pl-3">Volume Horraire: <b>{{ $tarif->Volume_Horraire }} Séance(s) par
                                    Semaine</b> </p>
                            <p class="card-text  pl-3">Duree: <b>{{ $tarif->Temps }}</b> </p>
                            <p class="card-text  pl-3">Prix: <b>{{ $tarif->Price }} DH</b> </p>
                        </div>
                        <div class="d-flex justify-content-around mb-4">
                            <div class="d-flex justify-content-around">
                                <a href="/admin/langues/{{ $langue->id }}/tarification/restore/{{ $tarif->id }}"
                                    class="btn btn-outline-secondary">restore</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
</x-adminLayout>
