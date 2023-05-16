<x-adminLayout>


    <h2 class="mb-5"><span class="text-muted text-capitalize "> </span><a href="/admin/formations/"
            class="text-reset text-decoration-none">
            {{ $categorie->Name }}
        </a>
        <br /><span class="text-muted text-capitalize "> deleted subCategories</span>

    </h2>


    @if (count($categorie->subCategories) < 1)
        <div class="container d-flex align-items-center justify-content-center w-100">
            <div class="text-center">
                <div class="alert alert-info">
                    No trashed subCategories for found.
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-around  p-2 mt-3">
            <a href="/admin/formations/{{ $categorie->id }}/subCategorie" class="btn btn-dark pl-5 pr-5">
                back to categories
            </a>
        </div>
    @else
        @foreach ($categorie->subCategories as $subCategorie)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title text-centre" style="text-align: center;">
                        {{ $subCategorie->Name }}</h5>

                    <div class="d-flex justify-content-around">
                        <div class="d-flex justify-content-around">
                            <a href="/admin/formations/{{ $categorie->id }}/subCategorie/restore/{{ $subCategorie->id }}"
                                class="btn btn-outline-secondary">restore</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</x-adminLayout>
