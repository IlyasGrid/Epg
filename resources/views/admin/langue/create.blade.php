<x-adminLayout>
    <style>
        form {
            padding: 2em;
            border-radius: 10px;
            width: fit-content;
            margin-left: 20%;
            background-color: rgba(128, 128, 128, 0.363)
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
    </style>
    <form method="POST" action="/admin/langues" enctype="multipart/form-data">
        @csrf
        <h2> Langue edit</h2>
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
                    <div class="mb-6 form-group row-auto">
                        <label for="Conditions_Etudes" class="inline-block text-lg mb-2">
                            d' Etude
                        </label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                            name="Conditions_Etudes" placeholder="separer les avec un '&'"
                            value="{{ old('Conditions_Etudes') }}" />

                    </div>
                    <div class="mb-6 form-group row-auto">
                        <label for="Conditions_Formation" class="inline-block text-lg mb-2">
                            de Formation
                        </label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                            name="Conditions_Formation" placeholder="separer les avec un '&'"
                            value="{{ old('Conditions_Formation') }}" />

                    </div>
                    <div class="mb-6 form-group row-auto">
                        <label for="Conditions_Cherche_Emploi" class="inline-block text-lg mb-2">
                            de cherche d'emploi
                        </label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                            name="Conditions_Cherche_Emploi" placeholder="separer les avec un '&'"
                            value="{{ old('Conditions_Cherche_Emploi') }}" />

                    </div>
                </div>
        </div>

        {{-- <div>
            <h3> niveau langue </h2>
                <div class="conditions-forms">
                    <div class="mb-6 form-group">
                        <label for="Niveau" class="inline-block text-lg mb-2">
                            Niveau
                        </label>
                        <input type="text" maxlength="2"
                            class="border border-gray-200 rounded p-2 w-full form-control" name="Niveau"
                            placeholder="A1, A2, B1, B2, C1 ou C2" value="{{ old('Niveau') }}" />

                    </div>
                    <div class="mb-6 form-group">
                        <label for="Duree_Cours_normale" class="inline-block text-lg mb-2">
                            Duree de Cours normale
                        </label>
                        <input type="number" class="border border-gray-200 rounded p-2 w-full form-control"
                            name="Duree_Cours_normale" placeholder="volume horraire  en H"
                            value="{{ old('Duree_Cours_normale') }}" />

                    </div>
                    <div class="mb-6 form-group">
                        <label for="Duree_Cours_Soir" class="inline-block text-lg mb-2">
                            Duree Cours Soir
                        </label>
                        <input type="number" class="border border-gray-200 rounded p-2 w-full form-control"
                            name="Duree_Cours_Soir" placeholder="prix en DH"
                            value="{{ old('Duree_Cours_Soir') }}" />

                    </div>
                    <div class="mb-6 form-group">
                        <label for="Duree_Cours_Accelerer" class="inline-block text-lg mb-2">
                            Duree Cours Accelerer
                        </label>
                        <input type="number" class="border border-gray-200 rounded p-2 w-full form-control"
                            name="Duree_Cours_Accelerer" placeholder="prix en DH"
                            value="{{ old('Duree_Cours_Accelerer') }}" />

                    </div>
                    <div class="mb-6 form-group">
                        <label for="Duree_Cours_Accelere_Rapide" class="inline-block text-lg mb-2">
                            Duree Cours Accelere Rapide
                        </label>
                        <input type="number" class="border border-gray-200 rounded p-2 w-full form-control"
                            name="Duree_Cours_Accelere_Rapide" placeholder="prix en DH"
                            value="{{ old('Duree_Cours_Accelere_Rapide') }}" />

                    </div>
                </div>
        </div> --}}
        <div class="mb-6 form-group">
            <button class="btn btn-primary">
                Create langue
            </button>

        </div>
    </form>
</x-adminLayout>
