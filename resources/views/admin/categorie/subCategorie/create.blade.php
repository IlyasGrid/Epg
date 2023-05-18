<x-adminLayout>
    <h2><a href="/admin/categories/" class="text-decoration-none"> <span class=" text-capitalize text-muted">Categorie</span> {{ $categorie->Name }} </a></h2>

    <form class="form-container" method="POST" action="/admin/categories/{{ $categorie->id }}/subCategorie"
        enctype="multipart/form-data">
        @csrf
        <h2 class="mb-5 text-lowercase text-muted">Create a subCategorie </h2>

            <div class="conditions-forms conatiner w-100 border p-3">


                <div class="mb-6 form-group">
                    <label for="Name" class="inline-block text-lg mb-2">
                        Name
                    </label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full form-control" name="Name"
                        placeholder="subCategorie Name" value="{{ old('Name') }}" />

                    @error('Name')
                        <p class="text-danger  ml-5  ">{{ $message }}</p>
                    @enderror
                </div>


            </div>

        <div class="mb-6 form-group d-flex justify-content-center mt-5">
            <button class="btn btn-outline-success">
                Create new subCategorie
            </button>

        </div>
    </form>
</x-adminLayout>
