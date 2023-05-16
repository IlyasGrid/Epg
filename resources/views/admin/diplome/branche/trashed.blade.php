<x-adminLayout>

    <h2 class="mb-5"><span class="text-muted text-capitalize ">diplome </span><a href="/admin/diplomes/"
            class="text-reset text-decoration-none">
            {{ $diplome->Name }}
        </a>
        <br /><span class="text-muted text-capitalize "> deleted branches</span>

    </h2>

    {{-- <h2> <span class="text-muted text-capitalize">diplome </span><a href="/admin/diplomes/"
            class="text-reset text-decoration-none">
            {{ $diplome->Name }} </a> <span class="text-muted text-lowercase">branches</span>
    </h2>
    <div class="d-flex justify-content-around m-5 p-3 ">
        <a href="/admin/diplomes/{{ $diplome->id }}/branche/create" class="btn btn-success align-self-start">create
            new branche</a>
        <a href="/admin/diplomes/{{ $diplome->id }}/branche/trashed"
            class="btn btn btn-outline-secondary align-self-start">show
            deleted branche</a>
    </div> --}}

    @if (count($branches) < 1)
        <div class="container d-flex align-items-center justify-content-center w-100">
            <div class="text-center">
                <div class="alert alert-info">
                    No branches found.
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-around  p-2 mt-3">
            <a href="/admin/diplomes/{{ $diplome->id }}/branche" class="btn btn-dark pl-5 pr-5">
                back to branches
            </a>
        </div>
    @else
        @foreach ($branches as $branche)
            <div class="card mb-3">

                <div>
                    <div class="card-body">
                        <h5 class="card-title d-flex justify-content-center m-3 text-uppercase">{{ $branche->Fullname }}
                            ({{ $branche->Abreviation }})
                        </h5>
                        <div class=" text-muted">
                            <p class="card-text max-char"><b>Motivation :</b> {{ $branche->Motivation }} </p>
                            <div class=" text-muted">
                                <p class="card-text max-char"><b>Motivation :</b> {{ $branche->Motivation }} </p>
                                <div>
                                    <p class="card-text  mb-0"><b>Prix :</b></p>
                                    <div class="d-flex justify-content-around">
                                        <p class="card-text"><b>Par Mois :</b> {{ $branche->Price_month }} DH</p>
                                        <p class="card-text"><b>Par Annee :</b> {{ $branche->Price_year }} DH</p>
                                    </div>
                                </div>
                                <p class="card-text max-char"><b>Objectifs :</b> {{ $branche->Objectifs }} </p>
                                <p class="card-text"><b>Prerequis :</b> {{ $branche->Prerequis }} </p>
                                <p class="card-text"><b>Prespective_professionel :</b>
                                    {{ $branche->Prespective_professionel }}
                                </p>
                                <p class="card-text"><b>Piece_a_fournis :</b> {{ $branche->Piece_a_fournis }} </p>
                            </div>
                            <div class="d-flex justify-content-around  p-2 mt-3">
                                <a href="/admin/diplomes/{{ $diplome->id }}/branche/restore/{{ $branche->id }}"
                                    class="btn btn-secondary pl-5 pr-5"> restore </a>
                                {{-- <a href="#" class="btn btn-primary">show
                                programme</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
        @endforeach
    @endif
</x-adminLayout>
