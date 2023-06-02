<x-adminLayout>
    <style>
        .mycard {
            margin: 0;
            width: fit-content;
            /* margin: 5px; */

        }

        .header {
            margin: 0rem;
            border-radius: 0.75rem;
            box-shadow: 0 10px 15px -3px #3F51B5, 0 4px 6px -4px #3F51B5;
            background-color: #3f51b58f;
        }

        h5.header{
            box-shadow: 0 10px 15px -3px #b53f3f, 0 4px 6px -4px #b53f3f;
            background-color: #b43b3b8f;
        }
        .footer {

            background-color: #3f51b533;

        }
    </style>

    <h2 class="text-capitalize">categorie</h2>

    <div class="pl-5 pr-5 d-flex justify-content-around">
        <a href="/admin/categories/create" class="btn btn-outline-success p-2 pl-5 pr-5  w-fit-content">
            create </a>
        <a href="/admin/categories/trashed" class="btn btn-outline-secondary pl-5 pr-5 p-2  w-fit-content">
            show deleted categories </a>
    </div>
    @if (count($categories) < 1)
        <div class="container d-flex align-items-center justify-content-center w-100 ">
            <div class="text-center">
                <div class="alert alert-info">
                    No categories found.
                </div>
            </div>
        </div>
    @else
        @foreach ($categories as $categorie)
            <div class="card mycard  m-5">

                <div>
                    <h5 class="card-title header card-header d-flex justify-content-center mb-4 text-uppercase text-dark">
                        {{ $categorie->Name }}
                    </h5>
                    <div class="card-body row  ">
                        @foreach ($categorie->subCategories as $subCategorie)
                            <div class="col-sm-6">

                                <div class="card mycard  m-2 mb-4">
                                    <div class="header">
                                        <h5
                                            class="card-title card-header d-flex justify-content-center p-3 text-uppercase">
                                            {{ $subCategorie->Name }}
                                        </h5>
                                    </div>

                                    <div class="footer mt-5  ">

                                        <a href="/admin/categories/{{ $categorie->id }}/subCategorie/edit/{{ $subCategorie->id }}"
                                            class="btn m-2 btn-outline-info">edit</a>

                                        <a href="/admin/categories/{{ $categorie->id }}/subCategorie/{{ $subCategorie->id }}/formation"
                                            class="btn m-2 btn-outline-primary">show formations</a>

                                        <div>
                                            <form
                                                action="/admin/categories/{{ $categorie->id }}/subCategorie/{{ $subCategorie->id }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn m-2 btn-outline-danger">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                    <div class="d-flex card-header footer justify-content-around mt-4 mb">
                        <a href="/admin/categories/edit/{{ $categorie->id }}" class="btn btn-outline-info pl-2 pr-2">
                            edit Name
                        </a>
                        <a href="/admin/categories/{{ $categorie->id }}/subCategorie"
                            class="btn btn-outline-primary">show
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
        @endforeach
    @endif
</x-adminLayout>
