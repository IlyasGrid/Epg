<x-adminLayout>

    <form class="form-container" method="POST" action="/admin/diplomes/{{ $diplome->id }}/branche"
        enctype="multipart/form-data">
        @csrf
        <h2> <span class="text-muted text-lowercase"> Branche </span> {{ $diplome->Name }} </h2>

        <div class="mb-6 form-group form-group">
            <label for="Fullname" class="inline-block text-lg mb-2">Branche Fullname</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full form-control" name="Fullname"
                placeholder="le nom du branche" value="{{ old('Fullname') }}" />
        </div>
        @error('Fullname')
            <p class="text-danger  ml-5  ">{{ $message }}</p>
        @enderror

        <div class="mb-6 form-group form-group">
            <label for="Abreviation" class="inline-block text-lg mb-2">Branche Abreviation</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full form-control" name="Abreviation"
                placeholder="l'abriveation du nom du branche" value="{{ old('Abreviation') }}" />
        </div>
        @error('Abreviation')
            <p class="text-danger  ml-5  ">{{ $message }}</p>
        @enderror


        <div class="mb-6 form-group">
            <label for="img" class="inline-block text-lg mb-2">
                Image
            </label>
            <input type="file" class="border border-gray-200 rounded p-2 w-full form-control" name="img" />

            @error('img')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6 form-group">
            <label for="Motivation" class="inline-block text-lg mb-2">Motivation (optionel)</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full form-control" name="Motivation"
                placeholder="pourquoi ce branche" value="{{ old('Motivation') }}" />

        </div>
        @error('Motivation')
            <p class="text-danger  ml-5  ">{{ $message }}</p>
        @enderror


        <div class="mb-6 form-group">
            <label for="Price_month" class="inline-block text-lg mb-2">
                Price_month (DH)
            </label>
            <input class="border border-gray-200 rounded p-2 w-full form-control" name="Price_month" rows="10"
                type="number" value="{{ old('Price_month') }}" />
        </div>
        @error('Price_month')
            <p class="text-danger  ml-5  ">{{ $message }}</p>
        @enderror

        <div class="mb-6 form-group">
            <label for="Price_year" class="inline-block text-lg mb-2">
                Price_year (DH)
            </label>
            <input class="border border-gray-200 rounded p-2 w-full form-control" name="Price_year" rows="10"
                type="number" value="{{ old('Price_year') }}" />
        </div>
        @error('Price_year')
            <p class="text-danger  ml-5  ">{{ $message }}</p>
        @enderror


        <div class="mb-6 form-group form-group">


            <label for="Objectifs" class="inline-block text-lg mb-2">
                Objectifs :
            </label>
            <ul id="objectifs-list" class="list-group pl-5">
                <li class="list-group-item mb-2 mt-1">
                    <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                        placeholder="add reason (not necessary)" name="Objectifs[]" value="{{ old('Objectifs[]') }}" />
                </li>
            </ul>
            <div class="d-flex justify-content-center">
                <button class="add-chapitre-btn btn btn-outline-dark"
                    onclick="addObjectif( '#objectifs-list', 'Objectifs[]', 'add reason (not necessary)');"
                    type="button">Add</button>
            </div>

        </div>
        @error('Objectifs')
            <p class="text-danger  ml-5  ">{{ $message }}</p>
        @enderror

        <div class="mb-6 form-group form-group">

            <label for="Prerequis" class="inline-block text-lg mb-2">
                Prerequis :
            </label>
            <ul id="Prerequis-list" class="list-group pl-5">
                <li class="list-group-item mb-2 mt-1">
                    <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                        placeholder="add reason (not necessary)" name="Prerequis[]" value="{{ old('Prerequis[]') }}" />
                </li>
            </ul>
            <div class="d-flex justify-content-center">
                <button class="add-chapitre-btn btn btn-outline-dark"
                    onclick="addObjectif( '#Prerequis-list', 'Prerequis[]', 'add reason (not necessary)');"
                    type="button">Add</button>
            </div>
        </div>
        @error('Prerequis')
            <p class="text-danger  ml-5  ">{{ $message }}</p>
        @enderror



        <div class="mb-6 form-group form-group">

            <label for="Prespective_professionel" class="inline-block text-lg mb-2">
                Prespective_professionel (optionel):
            </label>
            <ul id="Prespective_professionel-list" class="list-group pl-5">
                <li class="list-group-item mb-2 mt-1">
                    <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                        placeholder="add reason (not necessary)" name="Prespective_professionel[]"
                        value="{{ old('Prespective_professionel[]') }}" />
                </li>
            </ul>
            <div class="d-flex justify-content-center">
                <button class="add-chapitre-btn btn btn-outline-dark"
                    onclick="addObjectif( '#Prespective_professionel-list', 'Prespective_professionel[]', 'add reason (not necessary)');"
                    type="button">Add</button>
            </div>
        </div>
        @error('Prespective_professionel')
            <p class="text-danger  ml-5  ">{{ $message }}</p>
        @enderror


        <div class="mb-6 form-group">

            <label for="Piece_a_fournis" class="inline-block text-lg mb-2">
                Piece_a_fournis (optionel) :
            </label>
            <ul id="Piece_a_fournis-list" class="list-group pl-5">
                <li class="list-group-item mb-2 mt-1">
                    <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                        placeholder="add reason (not necessary)" name="Piece_a_fournis[]"
                        value="{{ old('Piece_a_fournis[]') }}" />
                </li>
            </ul>
            <div class="d-flex justify-content-center">
                <button class="add-chapitre-btn btn btn-outline-dark"
                    onclick="addObjectif( '#Piece_a_fournis-list', 'Piece_a_fournis[]', 'add reason (not necessary)');"
                    type="button">Add</button>
            </div>
        </div>
        @error('Piece_a_fournis')
            <p class="text-danger  ml-5  ">{{ $message }}</p>
        @enderror


        <div class="mt-5 form-group d-flex justify-content-center">
            <button class="btn btn-outline-success">
                Create branche
            </button>

        </div>
    </form>
</x-adminLayout>
