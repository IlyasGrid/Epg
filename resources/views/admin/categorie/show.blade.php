<x-adminLayout>


    @if (count($categories) < 1)
        <div class="container d-flex align-items-center justify-content-center w-100 ">
            <div class="text-center">
                <div class="alert alert-info">
                    No categories found.
                </div>
            </div>
        </div>
        <div class="pl-5 pr-5 d-flex justify-content-around">
            <a href="/admin/categories/create" class="btn btn-outline-success p-2 pl-5 pr-5  w-fit-content">
                create </a>
            <a href="/admin/categories/trashed" class="btn btn-outline-secondary pl-5 pr-5 p-2  w-fit-content">
                show deleted categories </a>
        </div>
    @else
        @foreach ($categories as $categorie)
            <div class="card mb-3">

                <div>
                    <div class="card-body">
                        <h5 class="card-title d-flex justify-content-center m-3 pb-5 text-uppercase text-dark">{{ $categorie->Name }}
                        </h5>

                        <div class="d-flex justify-content-around">
                            <a href="/admin/categories/edit/{{ $categorie->id }}" class="btn btn-outline-info pl-5 pr-5">
                                edit Name
                            </a>
                            <a href="/admin/categories/{{ $categorie->id }}/subCategorie" class="btn btn-outline-primary">show
                                subCategories</a>
                            <div>
                                <form action="/admin/categories/{{ $categorie->id }}" method="POST">
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
