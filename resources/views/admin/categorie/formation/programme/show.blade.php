<x-adminLayout>


    <h2> <span class="text-muted text-capitalize"> </span><a
            href="/admin/categories/{{ $categorie->id }}/subCategorie/{{ $subCategorie->id }}/formation"
            class="text-reset text-decoration-none">
            {{ $formation->Name }} </a> <span class="text-muted text-lowercase">programmes</span>
    </h2>
    <div class="d-flex justify-content-around m-5 p-3 ">
        <a href="/admin/categories/{{ $categorie->id }}/subCategorie/{{ $subCategorie->id }}/formation/{{ $formation->id }}/programme/create"
            class="btn btn-outline-success align-self-start">create
            new programme</a>
        <a href="/admin/categories/{{ $categorie->id }}/subCategorie/{{ $subCategorie->id }}/formation/{{ $formation->id }}/programme/trashed"
            class="btn btn btn-outline-secondary align-self-start">show
            deleted programmes</a>
    </div>

    @if (count($formation->programs) < 1)
        <div class="container d-flex align-items-center justify-content-center w-100">
            <div class="text-center">
                <div class="alert alert-info">
                    No programmes found.
                </div>
            </div>
        </div>
    @else
        @foreach ($formation->programs as $program)
            <div class="card mb-3">
                <div class="card-body">

                    <div class="text-muted">

                        <p class="card-text  max-char"><b>ModuleName :</b> {{ $program->ModuleName }} </p>

                        <p class="card-text  max-char"><b>ModuleChapitres :</b>
                            @php
                                $chapitres = explode(';', $program->ModuleChapitre);
                            @endphp
                        <ul class="list-group pl-5">
                            @foreach ($chapitres as $chapitre)
                                <li class="list-group-item">{{ $chapitre }}</li>
                            @endforeach
                        </ul>
                        </p>

                    </div>
                    {{-- buttons --}}
                    <div class="d-flex justify-content-around mt-5">
                        <div class="d-flex justify-content-around">
                            <a href="/admin/categories/{{ $categorie->id }}/subCategorie/{{ $subCategorie->id }}/formation/{{ $formation->id }}/programme/edit/{{ $program->id }}"
                                class="btn btn-outline-info">edit</a>
                        </div>
                        <div>
                            <form
                                action="/admin/categories/{{ $categorie->id }}/subCategorie/{{ $subCategorie->id }}/formation/{{ $formation->id }}/programme/{{ $program->id }}"
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
