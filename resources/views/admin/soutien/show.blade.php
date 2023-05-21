<x-adminLayout>
    @if (count($soutiens) < 1)
        <div class="container d-flex align-items-center justify-content-center w-100">
            <div class="text-center">
                <div class="alert alert-info">
                    No tarifications found.
                </div>
            </div>
        </div>
    @else
        @foreach ($soutiens->groupBy('type') as $type => $tarifs)
            <div class="card-container">
                <div class="card mt-3 mb-3">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="trtd">{{ $type }} </h5>
                        <div>
                            <form action="/admin/soutien/{{ $type }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">Delete</button>
                            </form>
                        </div>

                    </div>
                    <div class="card-body">
                        @foreach ($tarifs as $key => $tarif)

                            <p class="card-text text-muted mb-5 pl-3">
                                <b>Nbr personne:</b> {{ $tarif->nbr_personne }}
                            </p>
                            <p class="card-text text-muted mb-5 pl-3">
                                <b>volume_horraire</b>
                                {{ $tarif->volume_horraire }}h par semaine
                            </p>
                            <p class="card-text text-muted mb-5 pl-3">
                                <b>Price</b> {{ $tarif->price }} DH
                            </p>

                        @endforeach
                    </div>
                    <div class="mt-4 d-flex justify-content-center mb-3 align-items-center">
                        <a href="/admin/soutien/{{ $type }}">
                            <button type="button" class="btn btn-sm btn-outline-info pl-4 pr-4 p-2    add-program">
                                edit
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</x-adminLayout>
