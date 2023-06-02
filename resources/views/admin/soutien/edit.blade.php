<x-adminLayout>

    <header>
        <h2>
            <a href="/admin/soutien/" class="text-reset text-decoration-none text-capitalize">
                Soutien </a>
        </h2>
        <h4>
            <span class="text-muted text-capitalize"> edit Tarification </span>
        </h4>
    </header>
    <div class="h-10"></div>
    <section class=" cntnt">
        <form method="POST" class="form" action="/admin/soutien/{{ $soutien->id }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')


            <div>
                <div class="d-flex justify-content-around">
                    <div class=" conditions-forms conatiner w-100 m-3 border p-3">
                        <div class="mb-6 form-group">
                            <label for="type" class="inline-block text-lg mb-2">
                                type
                            </label>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                                name="type" placeholder="separer les avec un '&'" value="{{ $soutien->type }}" />
                            @error('type')
                                <p class="text-danger  mt-3 mb-4  ">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-6 form-group">
                            <label for="volume_horraire" class="inline-block text-lg mb-2">
                                Volume horraire
                            </label>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                                name="volume_horraire" placeholder="separer les avec un '&'"
                                value="{{ $soutien->volume_horraire }}" />
                            @error('volume_horraire')
                                <p class="text-danger  mt-3 mb-4  ">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-6 form-group">
                            <label for="nbr_personne" class="inline-block text-lg mb-2">
                                Nbr personne
                            </label>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                                name="nbr_personne" placeholder="separer les avec un '&'"
                                value="{{ $soutien->nbr_personne }}" />
                            @error('nbr_personne')
                                <p class="text-danger  mt-3 mb-4  ">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-6 form-group">
                            <label for="price" class="inline-block text-lg mb-2">
                                Prix
                            </label>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                                name="price" placeholder="separer les avec un '&'" value="{{ $soutien->price }}" />
                            @error('price')
                                <p class="text-danger  mt-3 mb-4  ">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

            </div>


            <div class="btn d-flex justify-content-center">
                <div class="mb-6 form-group">
                    <button class="btn btn-outline-info">
                        Edit
                    </button>
                </div>
            </div>
        </form>
    </section>
</x-adminLayout>
