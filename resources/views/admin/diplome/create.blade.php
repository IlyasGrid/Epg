<x-adminLayout>

    <header class="mb-5">
        <h2> <a href="/admin/diplomes/"
            class="text-reset text-decoration-none text-capitalize">Diplome</a></h2>
           <h4> <span class="text-muted text-capitalize">create</span></h4>
    </header>
    <form class="form-container" method="POST" action="/admin/diplomes" enctype="multipart/form-data">
        @csrf

        <div class="mb-6 form-group form-group">
            <label for="Name" class="inline-block text-lg mb-2">Diplome Name</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full form-control" name="Name"
                placeholder="le nom du diplome" value="{{ old('Name') }}" />


        </div>
        @error('Name')
            <p class="text-danger  ml-5  ">{{ $message }}</p>
        @enderror

        <div class="mb-6 form-group">
            <label for="Prerequis" class="inline-block text-lg mb-2">Prerequis</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full form-control" name="Prerequis"
                placeholder="" value="{{ old('Prerequis') }}" />

        </div>
        @error('Prerequis')
            <p class="text-danger  ml-5  ">{{ $message }}</p>
        @enderror

        <div class="mb-6 form-group">
            <label for="img" class="inline-block text-lg mb-2">
                Image 
            </label>
            <input type="file" class="border border-gray-200 rounded p-2 w-full form-control" name="img" />

            @error('img')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6 form-group">
            <label for="Duree" class="inline-block text-lg mb-2">
                Duree (en ANS)
            </label>
            <input class="border border-gray-200 rounded p-2 w-full form-control" name="Duree" rows="10"
                placeholder="2 ans ,1 ans..." value="{{ old('Duree') }}">
        </div>
        @error('Duree')
            <p class="text-danger  ml-5  ">{{ $message }}</p>
        @enderror



        <div class="mt-5 form-group d-flex justify-content-center">
            <button class="btn btn-outline-primary">
                Create diplome
            </button>

        </div>
    </form>
</x-adminLayout>
