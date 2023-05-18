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

    @unless (is_null($message))
        <h3>{{ $message }}</h3>
    @endunless

    <main>
        <form method="POST" action="/admin/langues/{{ $langue->id }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h2> {{ $langue->Name }} <span class="text-lowercase">edit form</span></h2>
            <h1 class="text-danger"> </h1>
            <div class="mb-6 form-group form-group">
                <label for="Name" class="inline-block text-lg mb-2">Langue Name</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full form-control" name="Name"
                    placeholder="le nom de la Name" value="{{ $langue->Name }}" />


            </div>
            @error('Name')
                <p class="text-danger  ml-5  ">{{ $message }}</p>
            @enderror

            <div class="mb-6 form-group">
                <label for="Subtitle" class="inline-block text-lg mb-2">Subtitle</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full form-control" name="Subtitle"
                    placeholder="ajouter un sous titre" value="{{ $langue->Subtitle }}" />

            </div>
            @error('Subtitle')
                <p class="text-danger  ml-5  ">{{ $message }}</p>
            @enderror
            <div class="mb-6 form-group">
                <label for="Motivation" class="inline-block text-lg mb-2">
                    Motivation
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full form-control" name="Motivation" rows="10"
                    placeholder="pourquoi cette langue ??">{{ $langue->Motivation }}</textarea>
            </div>
            @error('Motivation')
                <p class="text-danger  ml-5  ">{{ $message }}</p>
            @enderror

            <div class="mb-6 form-group">
                <label for="Raisons" class="inline-block text-lg mb-2">Raisons</label>

                <input type="text" class="border border-gray-200 rounded p-2 w-full form-control" name="Raisons"
                    placeholder="separer les avec un '&'" value="{{ $langue->Raisons }}" />

                {{-- <ul id="chapitres-list" class="list-group pl-5">
                    <li class="list-group-item mb-2 mt-1">
                        <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                            name="Raisons[]" value="{{ old('Raisons[]') }}" />
                    </li>
                </ul>
                <div class="d-flex justify-content-center">
                    <button class="add-chapitre-btn btn btn-outline-success" type="button">Add
                        raison</button>
                </div> --}}
            </div>
            @error('Raisons')
                <p class="text-danger  ml-5  ">{{ $message }}</p>
            @enderror

            <div class="mb-6 form-group">
                <label for="Piece_frais" class="inline-block text-lg mb-2">
                    Piece frais
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full form-control" name="Piece_frais"
                    placeholder="separer les avec un '&'" value="{{ $langue->Piece_frais }}" />

            </div>
            <div id="conditions-container">
                <h3> Conditions </h2>
                    <div class="conditions-forms row">
                        <div class="mb-6 form-group row-auto m-3">
                            <label for="Conditions_Etudes" class="inline-block text-lg mb-2">
                                d' Etude
                            </label>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                                name="Conditions_Etudes" placeholder="separer les avec un '&'"
                                value="{{ $langue->Conditions_Etudes }}" />

                        </div>
                        <div class="mb-6 form-group row-auto m-3">
                            <label for="Conditions_Formation" class="inline-block text-lg mb-2">
                                de Formation
                            </label>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                                name="Conditions_Formation" placeholder="separer les avec un '&'"
                                value="{{ $langue->Conditions_Formations }}" />

                        </div>
                        <div class="mb-6 form-group row-auto m-3">
                            <label for="Conditions_Cherche_Emploi" class="inline-block text-lg mb-2">
                                de cherche d'emploi
                            </label>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                                name="Conditions_Cherche_Emploi" placeholder="separer les avec un '&'"
                                value="{{ $langue->Conditions_Cherche_Emploi }}" />

                        </div>
                    </div>

            </div>
            <div class="btn">
                <div class="mb-6 form-group">
                    <button type="submit" class="btn btn-outline-info">
                        Edit langue
                    </button>
                </div>
            </div>
        </form>
    </main>
    <script defer>
        var addChapitreButton = document.querySelector('.add-chapitre-btn');
        var chapitresList = document.querySelector('#chapitres-list');

        addChapitreButton.addEventListener('click', function() {
            var newChapitreInput = document.createElement('input');
            newChapitreInput.type = 'text';
            newChapitreInput.classList.add('border', 'border-gray-200', 'rounded', 'p-2', 'w-full', 'form-control');
            newChapitreInput.name = 'ModuleChapitre[]';
            newChapitreInput.placeholder = 'program ModuleChapitre';

            var newChapitreListItem = document.createElement('li');
            newChapitreListItem.classList.add('list-style-none');
            newChapitreListItem.appendChild(newChapitreInput);

            chapitresList.appendChild(newChapitreListItem);
        });
    </script>
</x-adminLayout>
