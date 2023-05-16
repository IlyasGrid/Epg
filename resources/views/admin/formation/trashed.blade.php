<x-adminLayout>

    @if (count($categories) < 1)
        <div class="container d-flex align-items-center justify-content-center w-100">
            <div class="text-center">
                <div class="alert alert-info">
                    No trashed diplome found.
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-around  p-2 mt-3">
            <a href="/admin/diplomes/" class="btn btn-dark pl-5 pr-5">
                show existed diplomes
            </a>
        </div>
    @else
        @foreach ($diplomes as $diplome)
            <div class="card mb-3">

                <div>
                    <div class="card-body">
                        <h5 class="card-title d-flex justify-content-center m-3 text-uppercase">{{ $diplome->Name }}</h5>
                        <div class="d-flex  justify-content-around text-muted">
                            <p class="card-text"><b>Prerequis :</b> {{ $diplome->Prerequis }} </p>
                            <p class="card-text"><b>Duree :</b> {{ $diplome->Duree }} </p>
                        </div>
                        <div class="d-flex justify-content-around  p-2 mt-3">
                            <a href="/admin/diplomes/restore/{{ $diplome->id }}"
                                class="btn btn-secondary pl-5 pr-5">restore
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif

</x-adminLayout>
