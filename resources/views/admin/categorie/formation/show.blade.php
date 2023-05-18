<x-adminLayout>


    <h2> <span class="text-muted text-capitalize"> </span><a href="/admin/categories/{{ $categorie->id }}/subCategorie"
            class="text-reset text-decoration-none">
            {{ $subCategorie->Name }} </a> <span class="text-muted text-lowercase">formations</span>
    </h2>
    <div class="d-flex justify-content-around m-5 p-3 ">
        <a href="/admin/categories/{{ $categorie->id }}/subCategorie/{{ $subCategorie->id }}/formation/create"
            class="btn btn-outline-success align-self-start">create
            new formations</a>
        <a href="/admin/categories/{{ $categorie->id }}/subCategorie/{{ $subCategorie->id }}/formation/trashed"
            class="btn btn btn-outline-secondary align-self-start">show
            deleted formations</a>
    </div>

    @if (count($subCategorie->formations) < 1)
        <div class="container d-flex align-items-center justify-content-center w-100">
            <div class="text-center">
                <div class="alert alert-info">
                    No formations found.
                </div>
            </div>
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


                    <div class="d-flex justify-content-around mt-5">
                        <div class="d-flex justify-content-around">
                            <a href="/admin/categories/{{ $categorie->id }}/subCategorie/{{ $subCategorie->id }}/formation/edit/{{ $formation->id }}"
                                class="btn btn-outline-info">edit</a>
                        </div>
                        <div class="d-flex justify-content-around">
                            <a href="/admin/categories/{{ $categorie->id }}/subCategorie/{{ $subCategorie->id }}/formation/{{ $formation->id }}/programme"
                                class="btn btn-outline-primary">show programme</a>
                        </div>
                        <div class="d-flex justify-content-around">
                            <a href="/admin/categories/{{ $categorie->id }}/subCategorie/{{ $subCategorie->id }}/formation/{{ $formation->id }}/tarif"
                                class="btn btn-outline-primary">show tarifs</a>
                        </div>
                        <div>
                            <form
                                action="/admin/categories/{{ $categorie->id }}/subCategorie/{{ $subCategorie->id }}/formation/{{ $formation->id }}"
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
