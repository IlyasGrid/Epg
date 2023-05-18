<x-adminLayout>
    <style>
        form {
            padding: 2em;
            border-radius: 10px;
            width: fit-content;
            min-width: 60vw;
            height: fit-content;
            background-color: #f5f5f5;
        }

        h2 {
            color: rgb(91, 3, 91);
            text-transform: uppercase;
            letter-spacing: 2px;
            display: block;
            font-weight: bold;
            font-size: xx-large;
            margin-bottom: 0.5em;
            text-align: center;
        }

        main,
        .btn {
            display: flex;
            justify-content: space-around
        }
    </style>

    <main>
        <form method="POST" action="/admin/langues/{{ $langue->id }}/niveau/{{ $niveau->id }}"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h2> Langue {{ $langue->Name }}</h2>

            <div>
                <div class="d-flex justify-content-around">
                    <div class=" conditions-forms conatiner m-3 border p-3">
                        <div class="mb-6 form-group">
                            <label for="Niveau" class="inline-block text-lg mb-2">
                                Niveau de langue
                            </label>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                                maxlength="2" name="Niveau" value="{{ $niveau->Niveau }}" />

                            @error('Nivaeu')
                                <p class="text-danger  ml-5  ">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6 form-group">
                            <label for="Duree_Cours_Normal" class="inline-block text-lg mb-2">
                                Duree Cours Normal
                            </label>
                            <input type="number" class="border border-gray-200 rounded p-2 w-full form-control"
                                name="Duree_Cours_Normal" value="{{ $niveau->Duree_Cours_Normal }}" />

                            @error('Duree_Cours_Normal')
                                <p class="text-danger  ml-5  ">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6 form-group">
                            <label for="Duree_Cours_Soir" class="inline-block text-lg mb-2">
                                Duree Cours Soir
                            </label>
                            <input type="number" class="border border-gray-200 rounded p-2 w-full form-control"
                                name="Duree_Cours_Soir" value="{{ $niveau->Duree_Cours_Soir }}" />

                            @error('Duree_Cours_Soir')
                                <p class="text-danger  ml-5  ">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6 form-group">
                            <label for="Duree_Cours_Accelerer" class="inline-block text-lg mb-2">
                                Duree Cours Accelerer
                            </label>
                            <input type="number" class="border border-gray-200 rounded p-2 w-full form-control"
                                name="Duree_Cours_Accelerer" value="{{ $niveau->Duree_Cours_Accelerer }}" />


                            @error('Duree_Cours_Accelerer')
                                <p class="text-danger  ml-5  ">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-6 form-group">
                            <label for="Duree_Cours_Rapide" class="inline-block text-lg mb-2">
                                Duree Cours Rapide
                            </label>
                            <input type="number" class="border border-gray-200 rounded p-2 w-full form-control"
                                name="Duree_Cours_Rapide" value="{{ $niveau->Duree_Cours_Rapide }}" />

                            @error('Duree_Cours_Rapide')
                                <p class="text-danger  ml-5  ">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

            </div>


            <div class="btn">
                <div class="mb-6 form-group">
                    <button class="btn btn-outline-info">
                        Edit
                    </button>
                </div>
                {{-- @error('Name')
                <p class="text-danger  ml-5  ">{{ $message }}</p>
            @enderror --}}

        </form>
    </main>
</x-adminLayout>
