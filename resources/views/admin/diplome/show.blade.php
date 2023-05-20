<x-adminLayout>

    <h2 class="text-capitalize">Diplomes</h2>
    <div class="d-flex justify-content-around m-5 p-3 ">
        <a href="/admin/diplomes/create" class="btn btn-outline-success align-self-start">create
            new diplome</a>
        <a href="/admin/diplomes/trashed" class="btn btn btn-outline-secondary align-self-start">show
            deleted diplome</a>
    </div>
    @if (count($diplomes) < 1)
        <div class="container d-flex align-items-center justify-content-center w-100 ">
            <div class="text-center">
                <div class="alert alert-info">
                    No diplomes found.
                </div>
            </div>
        </div>

        {{-- <div class="pl-5 pr-5 d-flex justify-content-around">
            <a href="/admin/diplomes/create" class="btn btn-outline-success p-2 pl-5 pr-5  w-fit-content">
                create </a>
            <a href="/admin/diplomes/trashed" class="btn btn-outline-secondary pl-5 pr-5 p-2  w-fit-content">
                show deleted diplomes </a>
        </div> --}}
    @else
        @foreach ($diplomes as $diplome)
            <div class="card m-5">

                <div class="pb-3">
                    <h5 class="card-title card-header d-flex justify-content-center p-3 mb-5 text-uppercase">
                        {{ $diplome->Name }}
                    </h5>
                    <div class="ml-5 text-muted">
                        <p class="card-text"><b>Prerequis :</b> {{ $diplome->Prerequis }} </p>
                        <p class="card-text"><b>Duree :</b> {{ $diplome->Duree }} </p>
                    </div>
                    {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                    <div class="d-flex justify-content-around  p-2 mt-3">
                        <a href="/admin/diplomes/edit/{{ $diplome->id }}" class="btn btn-outline-info pl-5 pr-5"> edit
                        </a>
                        <a href="/admin/diplomes/{{ $diplome->id }}/branche" class="btn btn-outline-primary">show
                            branche(s)</a>
                        <div>
                            <form action="/admin/diplomes/{{ $diplome->id }}" method="POST">
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
