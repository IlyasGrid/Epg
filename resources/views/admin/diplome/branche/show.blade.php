<x-adminLayout>

    <header class="d-flex justify-content-between align-items-center mt-0">
        <h2> <a href="/admin/diplomes/" class="text-reset text-decoration-none text-capitalize">
                {{ $diplome->Name }} </a> <span class="text-muted text-lowercase">branches</span>
        </h2>
        <div class="d-flex justify-content-around m-5 p-3 ">
            <a href="/admin/diplomes/{{ $diplome->id }}/branche/create"
                class="btn btn-outline-success align-self-start m-3">create
                new branche</a>
            <a href="/admin/diplomes/{{ $diplome->id }}/branche/trashed"
                class="btn btn btn-outline-secondary align-self-start m-3">show
                deleted branche</a>
        </div>
    </header>


    <section class="mt-5">
        <div class="d-flex justify-content-around m-5 p-3 row">

            @if (count($branches) < 1)
                <div class="container d-flex align-items-center justify-content-center w-100">
                    <div class="text-center">
                        <div class="alert alert-info">
                            No branches found.
                        </div>
                    </div>
                </div>
            @else
                @foreach ($branches as $branche)
                    <div class="card m-5 col-10">

                        <h5 class="card-title card-header  d-flex justify-content-center  p-3  mb-5 text-uppercase">
                            {{ $branche->Fullname }}
                            ({{ $branche->Abreviation }})
                        </h5>
                        <p class="title d-flex justify-content-center">
                            <img class="w-45"
                                style=" border-radius : 4em;"
                                src="{{ $branche->img ? asset('storage/' . $branche->img) : asset('/Diplome/Pic/mm1.jpg') }}"
                                alt="" />
                        </p>
                        <div class="card-body">
                            <div class=" text-muted">
                                @if ($branche->Motivation != null)
                                    <p class="card-text max-char"><b>Motivation :</b> {{ $branche->Motivation }} </p>
                                @endif
                                <div>
                                    <p class="card-text mb-0"><b>Prix :</b></p>
                                    <div class="d-flex justify-content-around">
                                        <p class="card-text"><b>Par Mois :</b> {{ $branche->Price_month }} DH</p>
                                        <p class="card-text"><b>Par Annee :</b> {{ $branche->Price_year }} DH</p>
                                    </div>
                                </div>
                                @if ($branche->Objectifs != null)
                                @php
                                    $text =$branche->Objectifs;
                                    $text = substr($text, 0, 100);
                                @endphp
                                    <p class="card-text max-char"><b>Objectifs :</b> {{ $text }}... </p>
                                @endif
                                @if ($branche->Prerequis != null)
                                    <p class="card-text max-char"><b>Prerequis :</b> {{ $branche->Prerequis }} </p>
                                @endif
                                @if ($branche->Prespective_professionel != null)
                                    <p class="card-text max-char"><b>Prespective_professionel :</b> {{ $branche->Prespective_professionel }} </p>
                                @endif
                                {{-- <p class="card-text max-char"><b>Objectifs :</b> {{ $branche->Objectifs }} </p>
                                <p class="card-text"><b>Prerequis :</b> {{ $branche->Prerequis }} </p>
                                <p class="card-text"><b>Prespective_professionel :</b>
                                    {{ $branche->Prespective_professionel }}
                                </p> --}}
                            </div>
                            <div class="d-flex justify-content-around  p-2 mt-3">
                                <a href="/admin/diplomes/{{ $diplome->id }}/branche/edit/{{ $branche->id }}"
                                    class="btn btn-outline-info pl-5 pr-5"> edit </a>
                                <a href="/admin/diplomes/{{ $diplome->id }}/branche/{{ $branche->id }}/program"
                                    class="btn btn-outline-primary">show
                                    programme</a>
                                <div>
                                    <form action="/admin/diplomes/{{ $diplome->id }}/branche/{{ $branche->id }}"
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
        </div>
    </section>

</x-adminLayout>
