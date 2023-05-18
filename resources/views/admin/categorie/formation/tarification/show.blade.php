<x-adminLayout>


    <h2> <span class="text-muted text-capitalize"> </span><a
            href="/admin/categories/{{ $categorie->id }}/subCategorie/{{ $subCategorie->id }}/formation"
            class="text-reset text-decoration-none">
            {{ $formation->Name }} </a> <span class="text-muted text-lowercase">tarifications</span>
    </h2>
    <div class="d-flex justify-content-around m-5 p-3 ">
        <a href="/admin/categories/{{ $categorie->id }}/subCategorie/{{ $subCategorie->id }}/formation/{{ $formation->id }}/tarif/create"
            class="btn btn-outline-success align-self-start">create
            new tarification</a>
        <a href="/admin/categories/{{ $categorie->id }}/subCategorie/{{ $subCategorie->id }}/formation/{{ $formation->id }}/tarif/trashed"
            class="btn btn btn-outline-secondary align-self-start">show
            deleted tarifications</a>
    </div>

    @if (count($formation->tarifs) < 1)
        <div class="container d-flex align-items-center justify-content-center w-100">
            <div class="text-center">
                <div class="alert alert-info">
                    No tarifications found.
                </div>
            </div>
        </div>
    @else
        @foreach ($formation->tarifs as $tarif)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title text-centre" style="text-align: center;">
                        {{ $tarif->Name }}</h5>
                    <div class="text-muted">

                        <p class="card-text  max-char"><b>Price :</b> {{ $tarif->Price }} DH</p>
                        <p class="card-text  max-char"><b>Type :</b> {{ $tarif->Type }} </p>
                        <p class="card-text  max-char"><b>Volume_Horraire :</b> {{ $tarif->Volume_Horraire }} H</p>
                        @unless ($tarif->Duree_formation == null)
                            <p class="card-text  max-char"><b>Duree_formation :</b> {{ $tarif->Duree_formation }} </p>
                        @endunless
                        <p class="card-text  max-char"><b>Debut_formation :</b> {{ $tarif->Debut_formation }}</p>
                        @unless ($tarif->Deroulement == null)
                            <p class="card-text  max-char"><b>Deroulement :</b> {{ $tarif->Deroulement }} </p>
                        @endunless
                        <p class="card-text  max-char"><b>Horraire :</b> {{ $tarif->Horraire }}</p>
                        @unless ($tarif->Dernier_Delais_Inscription == null)
                            <p class="card-text  max-char"><b>Dernier_Delais_Inscription :</b>
                                {{ $tarif->Dernier_Delais_Inscription }} </p>
                        @endunless
                        @unless ($tarif->repartition_heures == null)
                            <p class="card-text  max-char"><b>repartition_heures :</b> {{ $tarif->repartition_heures }}
                            </p>
                        @endunless

                    </div>
                    {{-- buttons --}}
                    <div class="d-flex justify-content-around mt-5">
                        <div class="d-flex justify-content-around">
                            <a href="/admin/categories/{{ $categorie->id }}/subCategorie/{{ $subCategorie->id }}/formation/{{ $formation->id }}/tarif/edit/{{ $tarif->id }}"
                                class="btn btn-outline-info">edit</a>
                        </div>
                        <div>
                            <form
                                action="/admin/categories/{{ $categorie->id }}/subCategorie/{{ $subCategorie->id }}/formation/{{ $formation->id }}/tarif/{{ $tarif->id }}"
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
