<x-adminLayout>
 
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

                @php
                    $raisons = explode(';', $langue->Raisons);
                @endphp
                <ul id="raisons-list" class="list-group pl-5">
                    @foreach ($raisons as $raison)
                        <li class="list-group-item mb-2 mt-1">
                            <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                                name="Raisons[]" value="{{ $raison }}" />
                        </li>
                    @endforeach
                </ul>
                <div class="d-flex justify-content-center">
                    <button class="add-chapitre-btn btn btn-outline-success"
                        onclick="addObjectif( '#raisons-list', 'Raisons[]', 'langue raison');" type="button">Add
                        raison</button>
                </div>
            </div>
            @error('Raisons')
                <p class="text-danger  ml-5  ">{{ $message }}</p>
            @enderror

            <div class="mb-6 form-group">
                <label for="Piece_frais" class="inline-block text-lg mb-2">
                    Piece frais
                </label>

                @php
                    $Piece_frais = explode(';', $langue->Piece_frais);
                @endphp
                <ul id="pieces-list" class="list-group pl-5">
                    @foreach ($Piece_frais as $piece)
                        <li class="list-group-item mb-2 mt-1">
                            <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                                name="Piece_frais[]" value="{{ $piece }}" />
                        </li>
                    @endforeach
                </ul>
                <div class="d-flex justify-content-center">
                    <button class="add-chapitre-btn btn btn-outline-success"
                        onclick="addObjectif( '#pieces-list', 'Piece_frais[]', 'add piece');" type="button">Add
                        piece</button>
                </div>

            </div>
            @error('Piece_frais')
                <p class="text-danger  ml-5  ">{{ $message }}</p>
            @enderror



            <div id="conditions-container border">
                <h3> Conditions </h2>
                    <div class="conditions-forms row">
                        <div class="mb-6 form-group row-auto m-3">
                            <label for="Conditions_Etudes" class="inline-block text-lg mb-2">
                                d' Etude
                            </label>
                            {{-- <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                                name="Conditions_Etudes" placeholder="separer les avec un '&'"
                                value="{{ $langue->Conditions_Etudes }}" /> --}}

                            @php
                                $Conditions_Etudes = explode(';', $langue->Conditions_Etudes);
                            @endphp
                            <ul id="etude-list" class="list-group pl-5">
                                @foreach ($Conditions_Etudes as $c_etude)
                                    <li class="list-group-item mb-2 mt-1">
                                        <input type="text"
                                            class="border border-gray-200 rounded p-2 w-full form-control"
                                            name="Conditions_Etudes[]" value="{{ $c_etude }}" />
                                    </li>
                                @endforeach
                            </ul>
                            <div class="d-flex justify-content-center">
                                <button class="add-chapitre-btn btn btn-outline-success"
                                    onclick="addObjectif( '#etude-list', 'Conditions_Etudes[]', 'add condition');"
                                    type="button">Add Condition</button>
                            </div>

                        </div>
                        @error('Conditions_Etudes')
                            <p class="text-danger  ml-5  ">{{ $message }}</p>
                        @enderror



                        <div class="mb-6 form-group row-auto m-3">
                            <label for="Conditions_Formation" class="inline-block text-lg mb-2">
                                de Formation
                            </label>
                            @php
                                $Conditions_Formations = explode(';', $langue->Conditions_Formations);
                            @endphp
                            <ul id="formation-list" class="list-group pl-5">
                                @foreach ($Conditions_Formations as $c_formation)
                                    <li class="list-group-item mb-2 mt-1">
                                        <input type="text"
                                            class="border border-gray-200 rounded p-2 w-full form-control"
                                            name="Conditions_Formations[]" value="{{ $c_formation }}" />
                                    </li>
                                @endforeach
                            </ul>
                            <div class="d-flex justify-content-center">
                                <button class="add-chapitre-btn btn btn-outline-success"
                                    onclick="addObjectif( '#formation-list', 'Conditions_Formations[]', 'add condition');"
                                    type="button">Add Condition</button>
                            </div>

                        </div>
                        @error('Conditions_Formations')
                            <p class="text-danger  ml-5  ">{{ $message }}</p>
                        @enderror




                        <div class="mb-6 form-group row-auto m-3">
                            <label for="Conditions_Cherche_Emploi" class="inline-block text-lg mb-2">
                                de cherche d'emploi
                            </label>

                            @php
                                $Conditions_Cherche_Emploi = explode(';', $langue->Conditions_Cherche_Emploi);
                            @endphp
                            <ul id="cherche_emploi-list" class="list-group pl-5">
                                @foreach ($Conditions_Cherche_Emploi as $c_cherche_emploi)
                                    <li class="list-group-item mb-2 mt-1">
                                        <input type="text"
                                            class="border border-gray-200 rounded p-2 w-full form-control"
                                            name="Conditions_Cherche_Emploi[]" value="{{ $c_cherche_emploi }}" />
                                    </li>
                                @endforeach
                            </ul>
                            <div class="d-flex justify-content-center">
                                <button class="add-chapitre-btn btn btn-outline-success"
                                    onclick="addObjectif( '#cherche_emploi-list', 'Conditions_Cherche_Emploi[]', 'add condition');"
                                    type="button">Add Condition</button>
                            </div>

                        </div>
                        @error('Conditions_Cherche_Emploi')
                            <p class="text-danger  ml-5  ">{{ $message }}</p>
                        @enderror
                    </div>

            </div>
            <div class="btn d-flex justify-content-center">
                <div class="mb-6 form-group">
                    <button type="submit" class="btn btn-outline-info">
                        Edit langue
                    </button>
                </div>
            </div>
        </form>
    </main>
</x-adminLayout>
