<x-Layout>
    <section>
        <style>
            section>section:after {
                content: "";
                width: 100%;
                height: 99px;
                background: url('/Diplome/Pic/Bottom.png');
                bottom: 0px;
                left: 0;
                padding-bottom: 15%;
                position: absolute;
            }
        </style>
        <div class="xe xep lpil"></div>
        <img src="/Diplome/Pic/border.png" alt="">
        <div class="xo xop"></div>


        <aside>

            <h1 style="text-transform: uppercase">{{ $diplome_name }}</h1>

        </aside>

    </section>

    <div class="container mb-6">

        @foreach ($branches as $branche)
            <a href="/Diplome/{{ $diplome_name }}/{{ $branche->Fullname }}" class="not-a">

                <div class="card mb-3 ">

                    <div class="row no-gutters">

                        <div class="col-md-4">

                            {{-- <img src="\Diplome\Pic\mm1.jpg" alt="..." style="border-radius: 10px;"> --}}
                            <img class="w-48 mr-6 mb-6"
                            src="{{ $branche->img ? asset('storage/' . $branche->img) : asset('/Diplome/Pic/mm1.jpg') }}"
                            alt="" />

                        </div>

                        <div class="col-md-8">

                            <div class="card-body">

                                <h5 class="card-title upper font-1-3" style="text-transform: uppercase">
                                    {{ $branche->Fullname }}</h5>

                                <p class="card-text font-1-1 d-flex justify-content-center">

                                    @if ($branche->Objectifs == null)
                                        @php
                                            $text = 'Conçue sous forme modulaire, cette formation prépare aux diverses carrières dans plusieurs secteurs d’activités,';
                                        @endphp
                                    @else
                                        @php
                                            $text = $branche->Objectifs;
                                            $text = substr($text, 0, 150);
                                        @endphp
                                    @endif
                                    <p>{{ $text }}...</p>
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </a>
        @endforeach

    </div>
</x-Layout>
