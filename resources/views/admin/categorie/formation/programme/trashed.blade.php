<x-adminLayout>



    <h2 class="mb-5"><span class="text-muted text-capitalize "> </span><a
            href="/admin/categories/{{ $categorie->id }}/subCategorie" class="text-reset text-decoration-none">
            {{ $subCategorie->Name }}
        </a>
        <br /><span class="text-muted text-capitalize "> deleted formations</span>

    </h2>
    @if (count($subCategorie->formations) < 1)
        <div class="container d-flex align-items-center justify-content-center w-100">
            <div class="text-center">
                <div class="alert alert-info">
                    No formations found.
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-around  p-2 mt-3">
            <a href="/admin/categories/{{ $categorie->id }}/subCategorie/{{ $subCategorie->id }}/formation"
                class="btn btn-dark pl-5 pr-5">
                back to formations
            </a>
        </div>
    @else
        @foreach ($subCategorie->formations as $formation)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title text-centre" style="text-align: center;">
                        {{ $formation->Name }}</h5>


                    <div class="text-muted">
                        <p class="card-text"><b>{{ $formation->MotivaionName }} :</b>
                        <p class="card-text pl-5 max-char">
                            {{ $formation->MotivaionBody }}
                        </p>
                        </p>
                        <p class="card-text max-char"><b>Objectifs :</b> {{ $formation->objectifs }} </p>
                        @unless ($formation->tp == null)
                            <p class="card-text  max-char"><b>tp :</b> {{ $formation->tp }} </p>
                        @endunless
                    </div>


                    <div class="d-flex mt-4 justify-content-around">
                        <div class="d-flex justify-content-around">
                            <a href="/admin/categories/{{ $categorie->id }}/subCategorie/{{ $subCategorie->id }}/formation/restore/{{ $formation->id }}"
                                class="btn btn-outline-secondary">restore</a>
                        </div>
                    </div>

                </div>
            </div>
        @endforeach
    @endif
</x-adminLayout>
