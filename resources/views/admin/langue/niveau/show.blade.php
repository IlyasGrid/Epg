<x-adminLayout>


    <h2> <span class="text-muted text-capitalize">Langue </span><a href="/admin/langues/"
            class="text-reset text-decoration-none">
            {{ $langue->Name }} </a> <span class="text-muted text-lowercase">tarifications</span>
    </h2>


    @if (count($niveaux) < 1)

        <div class="container d-flex align-items-center justify-content-center mt-5 w-100">
            <div class="text-center">
                <div class="alert alert-info">
                    No niveaux found.
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-around mb-5 p-3 ">
            <a href="/admin/langues/{{ $langue->id }}/niveau/create"
                class="btn btn-outline-success align-self-start">create
                new Niveau</a>
            <a href="/admin/langues/{{ $langue->id }}/niveau/trashed"
                class="btn btn btn-outline-secondary align-self-start">show
                deleted Niveaux</a>
        </div>
    @else
        <div class="d-flex justify-content-around m-5 p-3 ">
            <a href="/admin/langues/{{ $langue->id }}/niveau/create"
                class="btn btn-outline-success align-self-start">create
                new Niveau</a>
            <a href="/admin/langues/{{ $langue->id }}/niveau/trashed"
                class="btn btn btn-outline-secondary align-self-start">show
                deleted Niveaux</a>
        </div>
        @foreach ($niveaux as $niv)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $niv->Niveau }}</h5>
                    <div class="d-flex justify-content-around">
                        <p class="card-text">Duree Cours Normal: <b>{{ $niv->Duree_Cours_Normal }} Mois</b> </p>
                        <p class="card-text">Duree Cours Soir: <b>{{ $niv->Duree_Cours_Soir }} Mois</b></p>
                        <p class="card-text">Duree Cours Accelerer: <b>{{ $niv->Duree_Cours_Accelerer }} Mois</b></p>
                        <p class="card-text">Duree Cours Rapide: <b>{{ $niv->Duree_Cours_Rapide }} Mois</b></p>
                    </div>
                    <div class="d-flex justify-content-around">
                        <div class="d-flex justify-content-around">
                            <a href="/admin/langues/edit/{{ $langue->id }}/niveau/{{ $niv->id }}"
                                class="btn btn-primary">edit</a>
                        </div>
                        <div>
                            <form action="/admin/langues/{{ $langue->id }}/niveau/{{ $niv->id }}"
                                method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif



</x-adminLayout>
