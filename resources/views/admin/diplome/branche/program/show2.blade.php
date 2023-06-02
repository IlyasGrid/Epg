<x-adminLayout>

    <header>
        <h2> <span class="text-muted text-capitalize"> </span><a href="/admin/diplomes/{{ $diplome->id }}/branche/"
                class="text-reset text-decoration-none text-capitalize">
                {{ $branche->Fullname }} </a> <span class="text-muted text-lowercase">programmes</span>
        </h2>
        <div class="d-flex justify-content-around m-5 p-3 ">
            <a href="/admin/diplomes/{{ $diplome->id }}/branche/{{ $branche->id }}/program/create"
                class="btn btn-outline-success align-self-start">create
                new programme</a>
            <a href="/admin/diplomes/{{ $diplome->id }}/branche/{{ $branche->id }}/program/trashed"
                class="btn btn btn-outline-secondary align-self-start">show
                deleted programmes</a>
        </div>
    </header>
    <section class="mt-5 ">
        <div class="d-flex justify-content-around m-5 p-3 row">
            @if (count($branche->programs) < 1)
                <div class="container d-flex align-items-center justify-content-center w-100">
                    <div class="text-center">
                        <div class="alert alert-info">
                            No programmes found.
                        </div>
                    </div>
                </div>
            @else
                @foreach ($branche->programs->groupBy('Annee') as $annee => $programs)
                        <div class="card mt-3 mb-3 w-40" >
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="trtd">{{ $annee }} année</h5>
                                <div>
                                    <form
                                        action="/admin/diplomes/{{ $diplome->id }}/branche/{{ $branche->id }}/program/{{ $annee }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                                    </form>
                                </div>

                            </div>
                            <div class="card-body">
                                @foreach ($programs as $key => $program)
                                    @php
                                        $key += 1;
                                    @endphp
                                    <div class="module text-muted"><b> Module {{ $key }} :</b>
                                        <span> {{ $program->Name_module }} </span>
                                    </div>
                                @endforeach
                            </div>
                            <div class="mt-4 d-flex justify-content-center mb-3 align-items-center">
                                <a
                                    href="/admin/diplomes/{{ $diplome->id }}/branche/{{ $branche->id }}/program/edit/{{ $annee }}">
                                    <button type="button"
                                        class="btn btn-sm btn-outline-info pl-4 pr-4 p-2    add-program">
                                        edit
                                    </button>
                                </a>
                            </div>
                    </div>
                @endforeach
            @endif
        </div>
    </section>



</x-adminLayout>
