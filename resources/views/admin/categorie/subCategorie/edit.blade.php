<x-adminLayout>



    <main>
        <form method="POST" class="form"
            action="/admin/categories/{{ $categorie->id }}/subCategorie/{{ $categorie->subCategorie->id }}"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h2><span class="text-muted text-capitalize"> subCategorie de Categorie</span> {{ $categorie->Name }}</h2>

            <div>
                <div class="d-flex justify-content-around">
                    <div class=" conditions-forms conatiner w-100 m-3 border p-3">
                        <label for="Name" class="inline-block  text-lg mb-2">
                            SubCategorie name:
                        </label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                            name="Name" value="{{ $categorie->subCategorie->Name }}" />

                        @error('Name')
                            <p class="text-danger text-center mt-3  ">{{ $message }}</p>
                        @enderror
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
    </main>
</x-adminLayout>
