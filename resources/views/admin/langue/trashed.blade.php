<x-adminLayout>

    @if (count($langues) < 1)
        <div class="container d-flex align-items-center justify-content-center w-100">
            <div class="text-center">
                {{-- <h1 class="display-1 text-muted">Nothing here</h1>
                <p class="lead">No langue is deleted</p> --}}
                <div class="alert alert-info">
                    No trashed langue found.
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-around  p-2 mt-3">
            <a href="/admin/langues/" class="btn btn-dark pl-5 pr-5">
                show existed langues
            </a>
        </div>
    @else
        @foreach ($langues as $langue)
            <div class="card mb-3">

                <div>
                    <div class="card-body">
                        <h5 class="card-title d-flex justify-content-center m-3 text-uppercase">{{ $langue->Name }}</h5>
                        <p class="card-text"> {{ $langue->Motivation }} </p>
                        <div class="d-flex justify-content-around">
                            <a href="/admin/langues/restore/{{ $langue->id }}" class="btn btn-secondary pl-5 pr-5">
                                restore
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</x-adminLayout>
