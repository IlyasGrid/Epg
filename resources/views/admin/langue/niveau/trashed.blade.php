<x-adminLayout>



    <h2 class="mb-5"><span class="text-muted text-capitalize ">Langue </span><a href="/admin/langues/"
            class="text-reset text-decoration-none">
            {{ $langue->Name }}
        </a>
        <br /><span class="text-muted text-capitalize "> deleted Niveaux</span>

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
    @if (count($niveaux) < 1)
        <div class="container d-flex align-items-center justify-content-center w-100">
            <div class="text-center">
                <div class="alert alert-info">
                    No trashed niveaux for found.
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-around  p-2 mt-3">
            <a href="/admin/langues/{{ $langue->id }}/niveau" class="btn btn-outline-dark pl-5 pr-5">
                back to niveaux
            </a>
        </div>
    @else
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
                        <div class="d-flex justify-content-around mt-5">
                            <a href="/admin/langues/{{ $langue->id }}/niveau/restore/{{ $niv->id }}"
                                class="btn btn-outline-secondary">restore</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif



</x-adminLayout>
