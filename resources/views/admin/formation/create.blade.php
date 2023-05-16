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
    <form class="form-container" method="POST" action="/admin/langues" enctype="multipart/form-data">
        @csrf
        <h2 class="text-capitalize">  create new Langue</h2>
        <h1 class="text-danger"> </h1>
        <div class="mb-6 form-group form-group">
            <label for="Name" class="inline-block text-lg mb-2">Langue Name</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full form-control" name="Name"
                placeholder="le nom de la Name" value="{{ old('Name') }}" />


        </div>
        @error('Name')
            <p class="text-danger  ml-5  ">{{ $message }}</p>
        @enderror

        <div class="mb-6 form-group">
            <label for="Subtitle" class="inline-block text-lg mb-2">Subtitle</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full form-control" name="Subtitle"
                placeholder="ajouter un sous titre" value="{{ old('Subtitle') }}" />

        </div>
        @error('Subtitle')
            <p class="text-danger  ml-5  ">{{ $message }}</p>
        @enderror
        <div class="mb-6 form-group">
            <label for="Motivation" class="inline-block text-lg mb-2">
                Langue Motivation
            </label>
            <textarea class="border border-gray-200 rounded p-2 w-full form-control" name="Motivation" rows="10"
                placeholder="pourquoi cette langues ??">{{ old('Motivation') }}</textarea>
        </div>
        @error('Motivation')
            <p class="text-danger  ml-5  ">{{ $message }}</p>
        @enderror

        <div class="mb-6 form-group">
            <label for="Raisons" class="inline-block text-lg mb-2">Raisons</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full form-control" name="Raisons"
                placeholder="separer les avec un '&'" value="{{ old('Raisons') }}" />
        </div>
        @error('Raisons')
            <p class="text-danger  ml-5  ">{{ $message }}</p>
        @enderror

        <div class="mb-6 form-group">
            <label for="Piece_frais" class="inline-block text-lg mb-2">
                Piece frais
            </label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full form-control" name="Piece_frais"
                placeholder="separer les avec un '&'" value="{{ old('Piece_frais') }}" />

        </div>
        <div id="conditions-container">
            <h3> Conditions </h2>
                <div class="conditions-forms row">
                    <div class="mb-6 form-group row-auto mr-5">
                        <label for="Conditions_Etudes" class="inline-block text-lg mb-2">
                            d' Etude
                        </label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                            name="Conditions_Etudes" placeholder="separer les avec un '&'"
                            value="{{ old('Conditions_Etudes') }}" />

                    </div>
                    <div class="mb-6 form-group row-auto mr-5">
                        <label for="Conditions_Formation" class="inline-block text-lg mb-2">
                            de Formation
                        </label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                            name="Conditions_Formation" placeholder="separer les avec un '&'"
                            value="{{ old('Conditions_Formation') }}" />

                    </div>
                    <div class="mb-6 form-group row-auto mr-5">
                        <label for="Conditions_Cherche_Emploi" class="inline-block text-lg mb-2">
                            de cherche d'emploi
                        </label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                            name="Conditions_Cherche_Emploi" placeholder="separer les avec un '&'"
                            value="{{ old('Conditions_Cherche_Emploi') }}" />

                    </div>
                </div>
        </div>

        <div class="mt-5 form-group d-flex justify-content-center">
            <button class="btn btn-primary">
                Create langue
            </button>

        </div>
    </form>
</x-adminLayout>
