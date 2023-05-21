<x-adminLayout>


    <h2> <span class="text-muted text-capitalize"> </span><a href="/admin/diplomes/{{ $diplome->id }}/branche/{{$branche->id}}/program"
            class="text-reset text-decoration-none">
            {{ $branche->Fullname }} </a> <span class="text-muted text-lowercase"> deleted programmes</span>

    </h2>


    @if (count($branche->programs) < 1)
        <div class="container d-flex align-items-center justify-content-center w-100">
            <div class="text-center">
                <div class="alert alert-info">
                    No trashed programmes found.
                </div>
            </div>
        </div>
    @else
        @foreach ($branche->programs->groupBy('Annee') as $annee => $programs)
            <div class="card-container">
                <div class="card mt-3 mb-3">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="trtd">{{ $annee }} année</h5>
                        <div>
                            <a
                                href="/admin/diplomes/{{ $diplome->id }}/branche/{{ $branche->id }}/program/restore/{{ $annee }}">
                                <button type="button"
                                    class="btn btn-sm btn-outline-secondary pl-4 pr-4 p-2    add-program">
                                    restore
                                </button>
                            </a>
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
                </div>
            </div>
        @endforeach
    @endif


</x-adminLayout>
