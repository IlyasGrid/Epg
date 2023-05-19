<x-adminLayout>
    <h2 class="text-capitalize">langues</h2>
    <div class="d-flex justify-content-around m-5 p-3 ">
        <a href="/admin/langues/create"
            class="btn btn-outline-success align-self-start">create
            new langue</a>
        <a href="/admin/langues//trashed"
            class="btn btn btn-outline-secondary align-self-start">show
            deleted langues</a>
    </div>

    @if (count($langues) < 1)
        <div class="container d-flex align-items-center justify-content-center w-100 ">
            <div class="text-center">
                <div class="alert alert-info">
                    No langues found.
                </div>
            </div>
        </div>
        <div class="pl-5 pr-5 d-flex justify-content-around">
            <a href="/admin/langues/create" class="btn btn-outline-success p-2 pl-5 pr-5  w-fit-content">
                create </a>
            <a href="/admin/langues/trashed" class="btn btn-outline-secondary pl-5 pr-5 p-2  w-fit-content">
                show deleted langues </a>
        </div>
    @else
        @foreach ($langues as $langue)
            <div class="card mb-3">

                <div>
                    <div class="card-body">
                        <h5 class="card-title d-flex justify-content-center m-3 text-uppercase">{{ $langue->Name }}</h5>
                        <p class="card-text text-muted pl-3"> {{ $langue->Motivation }} </p>
                        {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                        <div class="d-flex justify-content-around">
                            <a href="/admin/langues/edit/{{ $langue->id }}" class="btn btn-outline-info pl-5 pr-5">
                                edit
                            </a>
                            <a href="/admin/langues/{{ $langue->id }}/tarification"
                                class="btn btn-outline-primary">show
                                tarification</a>
                            <a href="/admin/langues/{{ $langue->id }}/niveau" class="btn btn-outline-primary">show
                                niveaux</a>
                            <div>
                                <form action="/admin/langues/{{ $langue->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</x-adminLayout>
