<x-adminLayout>



    <main>
        <form method="POST" class="form"
            action="/admin/categories/{{ $categorie->id }}/subCategorie/{{ $subCategorie->id }}/formation/{{ $subCategorie->formation->id }}"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h2><span class="text-muted text-capitalize">formation of </span> {{ $subCategorie->Name }}</h2>

            <div>
                {{-- <div class="d-flex justify-content-around">
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
                </div> --}}
                <div class="d-flex justify-content-around">
                    <div class=" conditions-forms conatiner w-100 m-3 border p-3">

                        {{-- <div class="conditions-forms conatiner w-100 border ml-3 p-3 pl-5"> --}}


                        <div class="mb-6 form-group">
                            <label for="Name" class="inline-block text-lg mb-2">
                                Name
                            </label>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                                name="Name" placeholder="subCategorie Name"
                                value="{{ $subCategorie->formation->Name }}" />

                            @error('Name')
                                <p class="text-danger  ml-5  ">{{ $message }}</p>
                            @enderror
                        </div>


                        <div class="mb-6 form-group">
                            <label for="MotivaionName" class="inline-block text-lg mb-2 w-100">
                                Subtitle for motivation (default: Synthese)
                            </label>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                                name="MotivaionName" placeholder="formation MotivaionName"
                                value="{{ $subCategorie->formation->MotivaionName }}" />

                            @error('MotivaionName')
                                <p class="text-danger  ml-5  ">{{ $message }}</p>
                            @enderror
                        </div>


                        <div class="mb-6 form-group">
                            <label for="MotivaionBody" class="inline-block text-lg mb-2">
                                Motivaion
                            </label>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                                name="MotivaionBody" placeholder="formation Motivaion"
                                value="{{ $subCategorie->formation->MotivaionBody }}" />

                            @error('MotivaionBody')
                                <p class="text-danger  ml-5  ">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6 form-group">
                            <label for="objectifs" class="inline-block text-lg mb-2">
                                objectifs
                            </label>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                                name="objectifs" placeholder="formation objectifs (separer les avec ';')"
                                value="{{ $subCategorie->formation->objectifs }}" />

                            @error('objectifs')
                                <p class="text-danger  ml-5  ">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-6 form-group">
                            <label for="tp" class="inline-block text-lg mb-2">
                                tp
                            </label>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                                name="tp" placeholder="formation tp" value="{{ $subCategorie->formation->tp }}" />

                            @error('objectifs')
                                <p class="text-danger  ml-5  ">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>
                </div>
            </div>


            <div class="btn d-flex justify-content-center">
                <div class="mb-6 form-group">
                    <button class="btn btn-primary">
                        Edit
                    </button>
                </div>
            </div>
        </form>
    </main>
</x-adminLayout>
