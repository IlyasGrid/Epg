<x-adminLayout>
    <header class="d-flex justify-content-between align-items-center ">
        <h2 class="text-capitalize">langues</h2>
        <div class="d-flex justify-content-around ">
            <a href="/admin/langues/create" class="btn btn-outline-success ml-3 align-self-start">create
                new langue</a>
            <a href="/admin/langues/trashed" class="btn btn btn-outline-secondary ml-3 align-self-start">show
                deleted langues</a>
        </div>
    </header>
    @if (count($langues) < 1)
        <div class="container d-flex align-items-center justify-content-center w-100 ">
            <div class="text-center">
                <div class="alert alert-info">
                    No langues found.
                </div>
            </div>
        </div>
    @else
        @foreach ($langues as $langue)
            <div class="card m-5">

                <div class="pb-3">
                    <h5 class="card-title card-header d-flex justify-content-center mb-3  text-uppercase">
                        {{ $langue->Name }}
                    </h5>
                    <p class="card-text text-muted mb-5 pl-3"> {{ $langue->Motivation }} </p>
                    <div class="d-flex justify-content-around">
                        <a href="/admin/langues/edit/{{ $langue->id }}" class="btn btn-outline-info pl-5 pr-5">
                            edit
                        </a>
                        <a href="/admin/langues/{{ $langue->id }}/tarification" class="btn btn-outline-primary">show
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
        @endforeach
    @endif
</x-adminLayout>
