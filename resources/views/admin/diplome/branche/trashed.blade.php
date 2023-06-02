<x-adminLayout>

    <header>
        <h2 class="mb-5"><a href="/admin/diplomes/{{ $diplome->id }}/branche" class="text-reset text-decoration-none text-capitalize">
                {{ $diplome->Name }}
            </a>
            <br /><span class="text-muted text-lowercase "> deleted branches</span>

        </h2>

    </header>
    <section class="cntnt">
        <div class="d-flex justify-content-around m-5 p-3 row">
            @if (count($branches) < 1)
                <div class="container d-flex align-items-center justify-content-center w-100">
                    <div class="text-center">
                        <div class="alert alert-info">
                            No branches found.
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-around  p-2 mt-3">
                    <a href="/admin/diplomes/{{ $diplome->id }}/branche" class="btn btn-outline-dark pl-5 pr-5">
                        back to branches
                    </a>
                </div>
            @else
                @foreach ($branches as $branche)
                    <div class="card m-5 col-10">

                        <h5 class="card-title card-header  d-flex justify-content-center  p-3  mb-5 text-uppercase">
                            {{ $branche->Fullname }}
                            ({{ $branche->Abreviation }})
                        </h5>
                        <p class="title d-flex justify-content-center">
                            <img class="w-45" style=" border-radius : 4em;"
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
                                        $text = $branche->Objectifs;
                                        $text = substr($text, 0, 100);
                                    @endphp
                                    <p class="card-text max-char"><b>Objectifs :</b> {{ $text }}... </p>
                                @endif
                                @if ($branche->Prerequis != null)
                                    <p class="card-text max-char"><b>Prerequis :</b> {{ $branche->Prerequis }} </p>
                                @endif
                                @if ($branche->Prespective_professionel != null)
                                    <p class="card-text max-char"><b>Prespective_professionel :</b>
                                        {{ $branche->Prespective_professionel }} </p>
                                @endif
                            </div>
                            <div class="d-flex justify-content-around  p-2 mt-3">
                                <a href="/admin/diplomes/{{ $diplome->id }}/branche/restore/{{ $branche->id }}"
                                    class="btn btn-outline-secondary pl-5 pr-5"> restore </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </section>
</x-adminLayout>
