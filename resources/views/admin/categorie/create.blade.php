<x-adminLayout>
    <form class="form-container" method="POST" action="/admin/categories" enctype="multipart/form-data">
        @csrf
        <h2 class="text-capitalize">  create new categorie</h2>
        <h1 class="text-danger"> </h1>
        <div class="mb-6 form-group form-group">
            <label for="Name" class="inline-block text-lg mb-2">Categorie Name</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full form-control" name="Name"
                placeholder="le nom de la Name" value="{{ old('Name') }}" />


        </div>
        @error('Name')
            <p class="text-danger  ml-5  ">{{ $message }}</p>
        @enderror



        <div class="mt-5 form-group d-flex justify-content-center">
            <button class="btn btn-outline-primary">
                Create Categorie
            </button>

        </div>
    </form>
</x-adminLayout>
