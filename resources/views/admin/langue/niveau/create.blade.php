<x-adminLayout>
    {{-- <style>
        form {
            padding: 2em;
            border-radius: 10px;
            width: fit-content;
            min-width: 50%;
            margin-left: 20%;
            margin-bottom: 5em;
            background-color: rgba(128, 128, 128, 0.120)
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
    </style> --}}
    <form class="form-container" method="POST" action="/admin/langues/{{ $id_langue }}/niveau" enctype="multipart/form-data">
        @csrf
        <h2> Langue add niveau</h2>
        <h1 class="text-danger"> </h1>
        <div class="mb-6 form-group form-group">
            <label for="Niveau" class="inline-block text-lg mb-2">Niveau Name</label>
            <input type="text" placeholder="A1,A2 ...." class="border border-gray-200 rounded p-2 w-full form-control"
                maxlength="2" name="Niveau" value="{{ old('Niveau') }}" />


        </div>
        @error('Niveau')
            <p class="text-danger  ml-5  ">{{ $message }}</p>
        @enderror

        <div class="mb-6 form-group">
            <label for="Duree_Cours_Normal" class="inline-block text-lg mb-2">Duree Cours Normal (Mois)</label>
            <input type="number" class="border border-gray-200 rounded p-2 w-full form-control"
                name="Duree_Cours_Normal" value="{{ old('Duree_Cours_Normal') }}" />

        </div>
        @error('Duree_Cours_Normal')
            <p class="text-danger  ml-5  ">{{ $message }}</p>
        @enderror
        <div class="mb-6 form-group">
            <label for="Duree_Cours_Soir" class="inline-block text-lg mb-2">
                Duree Cours Soir (Mois)
            </label>
            <input class="border border-gray-200 rounded p-2 w-full form-control" name="Duree_Cours_Soir" rows="10"
                value=" {{ old('Duree_Cours_Soir') }}">
        </div>
        @error('Duree_Cours_Soir')
            <p class="text-danger  ml-5  ">{{ $message }}</p>
        @enderror

        <div class="mb-6 form-group">
            <label for="Duree_Cours_Accelerer" class="inline-block text-lg mb-2">Duree Cours Accelerer (Mois)</label>
            <input type="number" class="border border-gray-200 rounded p-2 w-full form-control"
                name="Duree_Cours_Accelerer" value="{{ old('Duree_Cours_Accelerer') }}" />

        </div>
        @error('Duree_Cours_Accelerer')
            <p class="text-danger  ml-5  ">{{ $message }}</p>
        @enderror

        <div class="mb-6 form-group">
            <label for="Duree_Cours_Rapide" class="inline-block text-lg mb-2">Duree Cours Rapide (Mois)</label>
            <input type="number" class="border border-gray-200 rounded p-2 w-full form-control"
                name="Duree_Cours_Rapide" value="{{ old('Duree_Cours_Rapide') }}" />

        </div>
        @error('Duree_Cours_Rapide')
            <p class="text-danger  ml-5  ">{{ $message }}</p>
        @enderror

        <div class="mb-6 form-group">
            <button class="btn btn-primary">
                Create niveau
            </button>

        </div>
    </form>
</x-adminLayout>
