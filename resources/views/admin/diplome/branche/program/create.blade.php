<x-adminLayout>
    <h2> <span class="text-muted text-capitalize"> </span><a href="/admin/diplomes/{{ $diplome->id }}/branche/"
            class="text-reset text-decoration-none">
            <h2 class="mb-5 text-lowercase text-center text-muted"></h2>
            {{ $branche->Fullname }}
        </a> <span class="text-muted text-lowercase"></span>
    </h2>
    <form class="form-container" method="POST"
        action="/admin/diplomes/{{ $diplome->id }}/branche/{{ $branche->id }}/program"
        enctype="multipart/form-data">
        @csrf

        <div class="conditions-forms conatiner w-100 border ml-3 p-3 pl-5">


            <div class="mb-6 form-group">
                <label for="Annee" class="inline-block text-lg mb-2">
                    Annee
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full form-control" name="Annee"
                    value="{{ old('Annee') }}"  placeholder="1ere ,2eme ..."/>

                @error('Annee')
                    <p class="text-danger  ml-5  ">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6 form-group">
                <label for="Name_module" class="inline-block text-lg mb-2">
                Module name
                </label>

                <ul id="chapitres-list" class="list-group pl-5">
                    <li class="list-group-item mb-2 mt-1">
                        <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                            name="Name_module[]" placeholder=" modules"
                            value="{{ old('Name_module[]') }}" />
                    </li>
                </ul>
                <div class="d-flex justify-content-center">
                    <button class="add-chapitre-btn btn btn-outline-success"
                        onclick="addObjectif( '#chapitres-list', 'Name_module[]', ' modules');"
                        type="button">
                        Add Module</button>
                </div>

                @error('Name_module')
                    <p class="text-danger  ml-5  ">{{ $message }}</p>
                @enderror
            </div>

        </div>

        <div class="mb-6 form-group d-flex justify-content-center mt-5">
            <button class="btn btn-outline-success">
                Create new programme
            </button>

        </div>
    </form>
</x-adminLayout>
