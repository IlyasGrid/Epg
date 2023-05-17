<x-adminLayout>


    <h2> <span class="text-muted text-capitalize"> </span><a href="/admin/categories/"
            class="text-reset text-decoration-none">
            {{ $categorie->Name }} </a> <span class="text-muted text-lowercase">subCategories</span>
    </h2>
    <div class="d-flex justify-content-around m-5 p-3 ">
        <a href="/admin/categories/{{ $categorie->id }}/subCategorie/create"
            class="btn btn-outline-success align-self-start">create
            new subCategorie</a>
        <a href="/admin/categories/{{ $categorie->id }}/subCategorie/trashed"
            class="btn btn btn-outline-secondary align-self-start">show
            deleted subCategories</a>
    </div>

    @if (count($categorie->subCategories) < 1)
        <div class="container d-flex align-items-center justify-content-center w-100">
            <div class="text-center">
                <div class="alert alert-info">
                    No tarifs found.
                </div>
            </div>
        </div>
    @else
        @foreach ($categorie->subCategories as $subCategorie)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title text-centre" style="text-align: center;">
                        {{ $subCategorie->Name }}</h5>
                    <div class="d-flex justify-content-around">
                        <div class="d-flex justify-content-around">
                            <a href="/admin/categories/{{ $categorie->id }}/subCategorie/edit/{{ $subCategorie->id }}"
                                class="btn btn-outline-info">edit</a>
                        </div>
                        <div class="d-flex justify-content-around">
                            <a href="/admin/categories/{{ $categorie->id }}/subCategorie/{{ $subCategorie->id }}/formation"
                                class="btn btn-outline-primary">show formations</a>
                        </div>
                        <div>
                            <form action="/admin/categories/{{ $categorie->id }}/subCategorie/{{ $subCategorie->id }}"
                                method="POST">
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
