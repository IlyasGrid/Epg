<x-adminLayout>



    <h2 class="mb-5"><span class="text-muted text-capitalize "> </span><a
            href="/admin/categories/{{ $categorie->id }}/subCategorie/{{ $subCategorie->id }}/formation"
            class="text-reset text-decoration-none">
            {{ $formation->Name }}
        </a>
        <br /><span class="text-muted text-capitalize "> deleted programmes</span>

    </h2>
    @if (count($formation->programs) < 1)
        <div class="container d-flex align-items-center justify-content-center w-100">
            <div class="text-center">
                <div class="alert alert-info">
                    No programmes found.
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-around  p-2 mt-3">
            <a href="/admin/categories/{{ $categorie->id }}/subCategorie/{{ $subCategorie->id }}/formation/{{ $formation->id }}/programme"
                class="btn btn-outline-dark pl-5 pr-5">
                back to {{ $formation->Name }}
            </a>
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
                        <ul>
                            @foreach ($chapitres as $chapitre)
                                <li class="list-style-none">{{ $chapitre }}</li>
                            @endforeach
                        </ul>
                        </p>

                    </div>
                    {{-- buttons --}}


                    <div class="d-flex mt-4 justify-content-around">
                        <div class="d-flex justify-content-around">
                            <a href="/admin/categories/{{ $categorie->id }}/subCategorie/{{ $subCategorie->id }}/formation/{{ $formation->id }}/programme/restore/{{ $program->id }}"
                                class="btn btn-outline-secondary">restore</a>
                        </div>
                    </div>

                </div>
            </div>
        @endforeach
    @endif
</x-adminLayout>
