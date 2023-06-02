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
    @else
        <div class="row " style="align-items: center">
            @foreach ($diplomes as $diplome)
                <div class="col-lg-6 no-break">

                    <div class="card mycard m-5">
                        <div class="header">
                            <h5 class="card-title card-header d-flex justify-content-center p-3 text-uppercase">
                                {{ $diplome->Name }}
                            </h5>
                        </div>
                        <div class="info">
                            <p class="title d-flex justify-content-center">
                                <img class="w-5 mr-6 mb-6 align-self-center"
                                    style="margin-bottom: 20px;width: 100px; height: auto; border-radius: 2px;"
                                    src="{{ $diplome->img ? asset('storage/' . $diplome->img) : asset('/Diplome/Pic/mm1.jpg') }}"
                                    alt="" />
                            </p>
                            <p>
                            <div class="     text-muted">
                                <p class="card-text"><b>Prerequis :</b> {{ $diplome->Prerequis }} </p>
                                <p class="card-text"><b>Duree :</b> {{ $diplome->Duree }} </p>
                            </div>
                            </p>
                        </div>
                        <div class="footer ">
                            <a href="/admin/diplomes/edit/{{ $diplome->id }}" class="btn btn-outline-info ml-3"> edit
                            </a>
                            <a href="/admin/diplomes/{{ $diplome->id }}/branche"
                                class="btn btn-outline-primary ml-3">show
                                branche(s)</a>
                            <div class="ml-3 d-flex justify-content-center align-items-center ">
                                <form action="/admin/diplomes/{{ $diplome->id }}" method="POST" class="mb-0">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</x-adminLayout>
