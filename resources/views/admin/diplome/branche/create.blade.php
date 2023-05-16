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
    <form class="form-container" method="POST" action="/admin/diplomes/{{ $diplome->id }}/branche" enctype="multipart/form-data">
        @csrf
        <h2> Branche : {{ $diplome->Name }} </h2>

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
            <label for="Objectifs" class="inline-block text-lg mb-2">Branche Objectifs</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full form-control" name="Objectifs"
                placeholder="separer avec &" value="{{ old('Objectifs') }}" />
        </div>
        @error('Objectifs')
            <p class="text-danger  ml-5  ">{{ $message }}</p>
        @enderror

        <div class="mb-6 form-group form-group">
            <label for="Prerequis" class="inline-block text-lg mb-2">Branche Prerequis</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full form-control" name="Prerequis"
                placeholder="separer avec '&' si plusieur" value="{{ old('Prerequis') }}" />
        </div>
        @error('Prerequis')
            <p class="text-danger  ml-5  ">{{ $message }}</p>
        @enderror



        <div class="mb-6 form-group form-group">
            <label for="Prespective_professionel" class="inline-block text-lg mb-2">Branche
                Prespective_professionel (optionel)</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                name="Prespective_professionel" placeholder="separer avec '&' si plusieur"
                value="{{ old('Prespective_professionel') }}" />
        </div>
        @error('Prespective_professionel')
            <p class="text-danger  ml-5  ">{{ $message }}</p>
        @enderror


        <div class="mb-6 form-group">
            <label for="Piece_a_fournis" class="inline-block text-lg mb-2">
                Piece_a_fournis (optionel)
            </label>
            <input class="border border-gray-200 rounded p-2 w-full form-control" name="Piece_a_fournis" rows="10"
                type="text" placeholder="separer avec '&' si plusieur" value="{{ old('Piece_a_fournis') }}" />
        </div>
        @error('Piece_a_fournis')
            <p class="text-danger  ml-5  ">{{ $message }}</p>
        @enderror
        <div class="mt-5 form-group d-flex justify-content-center">
            <button class="btn btn-primary">
                Create branche
            </button>

        </div>
    </form>
</x-adminLayout>
