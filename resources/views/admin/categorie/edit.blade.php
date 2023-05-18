<x-adminLayout>

    <main>
        <form method="POST" action="/admin/categories/{{ $categorie->id }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h2> {{ $categorie->Name }} <span class="text-lowercase">edit form</span></h2>
            <h1 class="text-danger"> </h1>
            <div class="mb-6 form-group form-group d-flex flex-column  ">
                <label for="Name" class="inline-block text-lg mb-2">Categorie Name</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full form-control " name="Name"
                    placeholder="le nom de la Name" value="{{ $categorie->Name }}" />


            </div>
            @error('Name')
                <p class="text-danger  ml-5  ">{{ $message }}</p>
            @enderror


            <div class="btn">
                <div class="mb-6 form-group">
                    <button type="submit" class="btn btn-outline-info">
                        Edit categorie
                    </button>
                </div>
            </div>
        </form>
    </main>
</x-adminLayout>
