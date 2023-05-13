<x-adminLayout>

    <h2> Langue {{ $langue->Name }}</h2>
    <div class="d-flex justify-content-around m-5 p-3 ">
        <a href="/admin/langues/{{ $langue->id }}/niveau/create" class="btn btn-success align-self-start">create
            new Niveau</a>
    </div>
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
    @if ($niveaux)
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
                        <form action="/admin/langues/{{ $langue->id }}/niveau/{{ $niv->id }}" method="POST">
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
