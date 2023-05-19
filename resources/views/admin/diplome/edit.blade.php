<x-adminLayout>

    <main>
        <form method="POST" action="/admin/diplomes/{{ $diplome->id }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h2><span class="text-muted text-capitalize"> Diplome </span><a href="/admin/diplomes" class="text-reset text-decoration-none"> {{ $diplome->Name }} </a><span class="text-muted text-capitalize">edit</span></h2>
            <h1 class="text-danger"> </h1>
            <div class="mb-6 form-group form-group">
                <label for="Name" class="inline-block text-lg mb-2">Diplome Name</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full form-control" name="Name"
                    placeholder="le nom du diplome" value="{{ $diplome->Name }}" />


            </div>
            @error('Name')
                <p class="text-danger  ml-5  ">{{ $message }}</p>
            @enderror

            <div class="mb-6 form-group">
                <label for="Prerequis" class="inline-block text-lg mb-2">Prerequis</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full form-control" name="Prerequis"
                    placeholder="separer avec &" value="{{ $diplome->Prerequis }}" />

            </div>
            @error('Prerequis')
                <p class="text-danger  ml-5  ">{{ $message }}</p>
            @enderror

            <div class="mb-6 form-group">
                <label for="Duree" class="inline-block text-lg mb-2">
                    Duree (ANS)
                </label>
                <input class="border border-gray-200 rounded p-2 w-full form-control" name="Duree" rows="10"
                    type="text" placeholder="duree cette diplome ??" value=" {{ $diplome->Duree }}" />
            </div>
            @error('Duree')
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


            <div class="btn">
                <div class="mb-6 form-group">
                    <button type="submit" class="btn btn-primary">
                        Edit diplome
                    </button>
                </div>
            </div>
        </form>
    </main>
</x-adminLayout>
