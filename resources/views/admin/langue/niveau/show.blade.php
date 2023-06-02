<x-adminLayout>

    <header class="d-flex align-items-center justify-content-between mt-0">
        <h2> <a href="/admin/langues/"
                class="text-reset text-decoration-none text-capitalize">
                {{ $langue->Name }} </a> <span class="text-muted text-lowercase">Niveau</span>
        </h2>
        <div class="d-flex justify-content-around m-5 p-3 ">
            <a href="/admin/langues/{{ $langue->id }}/niveau/create"
                class="btn btn-outline-success ml-3 align-self-start">create
                new niveau</a>
            <a href="/admin/langues/{{ $langue->id }}/niveau/trashed"
                class="btn btn btn-outline-secondary ml-3 align-self-start">show
                deleted niveau</a>
        </div>
    </header>

    <section class="mt-5 ">
        <div class="d-flex justify-content-around m-5 p-3 row">
            @if (count($niveaux) < 1)

                <div class="container d-flex align-items-center justify-content-center mt-5 w-100">
                    <div class="text-center">
                        <div class="alert alert-info">
                            No niveaux found.
                        </div>
                    </div>
                </div>
            @else
                @foreach ($niveaux as $niv)
                    <div class="card m-5 " style="width: fit-content !important;">
                        <h5 class="card-title card-header text-centre" style="text-align: center;">
                            {{ $niv->Niveau }}
                        </h5>
                        <div class="m-3  text-muted">
                            <p class="card-text">Duree Cours Normal: <b>{{ $niv->Duree_Cours_Normal }} Mois</b> </p>
                            <p class="card-text">Duree Cours Soir: <b>{{ $niv->Duree_Cours_Soir }} Mois</b></p>
                            <p class="card-text">Duree Cours Accelerer: <b>{{ $niv->Duree_Cours_Accelerer }}
                                    Mois</b></p>
                            <p class="card-text">Duree Cours Rapide: <b>{{ $niv->Duree_Cours_Rapide }} Mois</b></p>
                        </div>
                        <div class="d-flex justify-content-around">
                            <div class="d-flex justify-content-around">
                                <a href="/admin/langues/{{ $langue->id }}/niveau/edit/{{ $niv->id }}"
                                    class="btn btn-outline-info">edit</a>
                            </div>
                            <div>
                                <form action="/admin/langues/{{ $langue->id }}/niveau/{{ $niv->id }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </section>


</x-adminLayout>
