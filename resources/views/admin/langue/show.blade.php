<x-adminLayout>


    @foreach ($langues as $langue)
        <div class="card mb-3">
            <div class="row no-gutters">
                <div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $langue->Name }}</h5>
                        <p class="card-text"> {{ $langue->Motivation }} </p>
                        {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                        <div class="d-flex justify-content-around">
                            <a href="/admin/langues/edit/{{ $langue->id }}" class="btn btn-primary pl-5 pr-5"> edit </a>
                            <a href="/admin/langues/{{ $langue->id }}/tarification" class="btn btn-primary">show
                                tarification</a>
                            <a href="/admin/langues/{{ $langue->id }}/niveau" class="btn btn-primary">show
                                niveaux</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

</x-adminLayout>
