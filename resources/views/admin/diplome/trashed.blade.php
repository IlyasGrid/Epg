<x-adminLayout>


    <style>
        .header {

            background-color: rgb(125 125 125);
            box-shadow: 0 10px 15px -3px rgba(48, 55, 60, 0.4), 0 4px 6px -4px rgba(12, 12, 12, 0.4);
        }

        .footer {
            background-color: rgba(64, 66, 67, 0.082);
        }
    </style>

    @if (count($diplomes) < 1)
        <div class="container d-flex align-items-center justify-content-center w-100">
            <div class="text-center">
                <div class="alert alert-info">
                    No trashed diplome found.
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-around  p-2 mt-3">
            <a href="/admin/diplomes/" class="btn btn-dark pl-5 pr-5">
                show existed diplomes
            </a>
        </div>
    @else

        <div class="row " style="align-items: center">
            @foreach ($diplomes as $diplome)
                <div class="col-lg-6 no-break">

                    <div class="card m-5">
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
                        <div class="footer">
                            <a href="/admin/diplomes/restore/{{ $diplome->id }}"
                                class="btn btn-outline-secondary pl-5 pr-5">restore
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

</x-adminLayout>
