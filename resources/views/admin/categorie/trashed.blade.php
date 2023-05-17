<x-adminLayout>

    @if (count($categories) < 1)
        <div class="container d-flex align-items-center justify-content-center w-100">
            <div class="text-center">
                <div class="alert alert-info">
                    No trashed categories found.
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-around  p-2 mt-3">
            <a href="/admin/categories/" class="btn btn-dark pl-5 pr-5">
                show existed categories
            </a>
        </div>
    @else
        @foreach ($categories as $categorie)
            <div class="card mb-3">

                <div>
                    <div class="card-body">
                        <h5 class="card-title d-flex justify-content-center m-3 text-uppercase">{{ $categorie->Name }}</h5>
                        <div class="d-flex justify-content-around  p-2 mt-3">
                            <a href="/admin/categories/restore/{{ $categorie->id }}"
                                class="btn btn-outline-secondary pl-5 pr-5">restore
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif

</x-adminLayout>
