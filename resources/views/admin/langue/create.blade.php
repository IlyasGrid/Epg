<x-adminLayout>
    
        <h2 class="text-capitalize"> Create new  language</h2>

    <form class="form-container p-5" method="POST" action="/admin/langues" enctype="multipart/form-data">
        @csrf


        <div class="mb-6 form-group form-group">
            <label for="Name" class="inline-block text-lg mb-2">Name :</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full form-control" name="Name"
                placeholder="Name of language" value="{{ old('Name') }}" />
        </div>
        @error('Name')
            <p class="text-danger  ml-5  ">{{ $message }}</p>
        @enderror

        <div class="mb-6 form-group">
            <label for="Subtitle" class="inline-block text-lg mb-2">Subtitle :</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full form-control" name="Subtitle"
                placeholder="Subtitle ex: LA LANGUE ANGLAISE - اللغــــة الإنجليزيـــة" value="{{ old('Subtitle') }}" />

        </div>
        @error('Subtitle')
            <p class="text-danger  ml-5  ">{{ $message }}</p>
        @enderror


        <div class="mb-6 form-group">
            <label for="Motivation" class="inline-block text-lg mb-2">
                Motivation:
            </label>
            <textarea class="border border-gray-200 rounded p-2 w-full form-control" name="Motivation" rows="10"
                placeholder="What is unique about this language">{{ old('Motivation') }}</textarea>
        </div>
        @error('Motivation')
            <p class="text-danger  ml-5  ">{{ $message }}</p>
        @enderror

        <div class="mb-6 form-group">
            <label for="img">Image :</label>
            <div class="custom-file">
                <input type="file" class="border border-gray-200 rounded p-2 w-full form-control" name="img" />

                @error('img')
                    <p class="text-danger  ml-5  ">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="mb-6 form-group">
            <label for="Raisons" class="inline-block text-lg mb-2">
                Reasons :
            </label>
            <ul id="raisons-list" class="list-group pl-5">
                <li class="list-group-item mb-2 mt-1">
                    <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                        placeholder="add reason (not necessary)" name="Raisons[]" value="{{ old('Raisons[]') }}" />
                </li>
            </ul>
            <div class="d-flex justify-content-center">
                <button class="add-chapitre-btn btn btn-outline-dark"
                    onclick="addObjectif( '#raisons-list', 'Raisons[]', 'add reason (not necessary)');"
                    type="button">Add</button>
            </div>

        </div>
        @error('Raisons')
            <p class="text-danger  ml-5  ">{{ $message }}</p>
        @enderror


        <div class="mb-6 form-group">
            <label for="Piece_frais" class="inline-block text-lg mb-2">
                DOCUMENTS AND COSTS TO BE PROVIDED :
            </label>
            <ul id="pieces-list" class="list-group pl-5">
                <li class="list-group-item mb-2 mt-1">
                    <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                        placeholder="add document or cost (not necessary)" name="Piece_frais[]"
                        value="{{ old('Piece_frais[]') }}" />
                </li>
            </ul>
            <div class="d-flex justify-content-center">
                <button class="add-chapitre-btn btn btn-outline-dark"
                    onclick="addObjectif( '#pieces-list', 'Piece_frais[]', 'add document or cost (not necessary)');"
                    type="button">Add</button>
            </div>

        </div>
        @error('Piece_frais')
            <p class="text-danger  ml-5  ">{{ $message }}</p>
        @enderror




        <div id="conditions-container">
            <h3> CONDITIONS FOR OBTAINING A VISA </h2>
                <div class="conditions-forms ml-5 mt-4 row  p-5 ">




                    <div class="mb-6 form-group">
                        <label for="Conditions_Etudes" class="inline-block text-lg mb-2">
                            Studies :
                        </label>
                        <ul id="c_etudes-list" class="list-group pl-5">
                            <li class="list-group-item mb-2 mt-1">
                                <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                                    placeholder="add a study condition (not necessary)" name="Conditions_Etudes[]"
                                    value="{{ old('Conditions_Etudes[]') }}" />
                            </li>
                        </ul>
                        <div class="d-flex justify-content-center">
                            <button class="add-chapitre-btn btn btn-outline-dark"
                                onclick="addObjectif( '#c_etudes-list', 'Conditions_Etudes[]', 'add a study condition (not necessary)');"
                                type="button">Add</button>
                        </div>

                    </div>
                    @error('Conditions_Etudes')
                        <p class="text-danger  ml-5  ">{{ $message }}</p>
                    @enderror


                    <div class="mb-6 form-group">
                        <label for="Conditions_Formation" class="inline-block text-lg mb-2">
                            professional trainings :
                        </label>
                        <ul id="c_formation-list" class="list-group pl-5">
                            <li class="list-group-item mb-2 mt-1">
                                <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                                    placeholder="add training condition (not necessary)"
                                    name="Conditions_Formation[]" value="{{ old('Conditions_Formation[]') }}" />
                            </li>
                        </ul>
                        <div class="d-flex justify-content-center">
                            <button class="add-chapitre-btn btn btn-outline-dark"
                                onclick="addObjectif( '#c_formation-list', 'Conditions_Formation[]', 'add training condition (not necessary)');"
                                type="button">Add</button>
                        </div>

                    </div>
                    @error('Conditions_Formation')
                        <p class="text-danger  ml-5  ">{{ $message }}</p>
                    @enderror



                    <div class="mb-6 form-group">
                        <label for="Conditions_Cherche_Emploi" class="inline-block text-lg mb-2">
                            de cherche d'emploi :
                        </label>
                        <ul id="c_cherche_emploi-list" class="list-group pl-5">
                            <li class="list-group-item mb-2 mt-1">
                                <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                                    placeholder="ajouter un condition de  cherche d'emploi (not necessary)"
                                    name="Conditions_Cherche_Emploi[]"
                                    value="{{ old('Conditions_Cherche_Emploi[]') }}" />
                            </li>
                        </ul>
                        <div class="d-flex justify-content-center">
                            <button class="add-chapitre-btn btn btn-outline-dark"
                                onclick="addObjectif( '#c_cherche_emploi-list', 'Conditions_Cherche_Emploi[]', 'ajouter condition de  cherche d\'emploi (not necessary)');"
                                type="button">Add</button>
                        </div>

                    </div>
                    @error('Conditions_Cherche_Emploi')
                        <p class="text-danger  ml-5  ">{{ $message }}</p>
                    @enderror

                </div>
        </div>

        <div class="mt-5 form-group d-flex justify-content-center">
            <button class="btn btn-outline-success">
                Creer langue
            </button>

        </div>
    </form>
</x-adminLayout>
