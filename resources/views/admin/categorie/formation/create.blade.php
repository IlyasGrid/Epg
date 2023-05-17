<x-adminLayout>
    <h2><a href="/admin/categories/{{ $categorie->id }}/subCategorie/{{ $subCategorie->id }}/formation"
            class="text-decoration-none text-reset"> <span class=" text-capitalize text-muted">subCategorie</span>
            {{ $subCategorie->Name }} </a></h2>
    <h2 class="mb-5 text-lowercase text-center text-muted">Create new Formation</h2>
    {{-- <div class="d-felx justify-content-around"> --}}
    <form class="form-container" method="POST"
        action="/admin/categories/{{ $categorie->id }}/subCategorie/{{ $subCategorie->id }}/formation"
        enctype="multipart/form-data">
        @csrf

        <div class="conditions-forms conatiner w-100 border ml-3 p-3 pl-5">


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


            <div class="mb-6 form-group">
                <label for="MotivaionName" class="inline-block text-lg mb-2 w-100">
                    Subtitle for motivation (default: Synthese)
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                    name="MotivaionName" placeholder="formation MotivaionName" value="{{ old('MotivaionName') }}" />

                @error('MotivaionName')
                    <p class="text-danger  ml-5  ">{{ $message }}</p>
                @enderror
            </div>


            <div class="mb-6 form-group">
                <label for="MotivaionBody" class="inline-block text-lg mb-2">
                    Motivaion
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                    name="MotivaionBody" placeholder="formation Motivaion" value="{{ old('MotivaionBody') }}" />

                @error('MotivaionBody')
                    <p class="text-danger  ml-5  ">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6 form-group">
                <label for="objectifs" class="inline-block text-lg mb-2">
                    objectifs
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full form-control" name="objectifs"
                    placeholder="formation objectifs (separer les avec ';')" value="{{ old('objectifs') }}" />

                @error('objectifs')
                    <p class="text-danger  ml-5  ">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6 form-group">
                <label for="tp" class="inline-block text-lg mb-2">
                    tp
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full form-control" name="tp"
                    placeholder="formation tp" value="{{ old('tp') }}" />

                @error('objectifs')
                    <p class="text-danger  ml-5  ">{{ $message }}</p>
                @enderror
            </div>

        </div>

        <div class="mb-6 form-group d-flex justify-content-center mt-5">
            <button class="btn btn-primary">
                Create new formation
            </button>

        </div>
    </form>
    {{-- </div> --}}
</x-adminLayout>
