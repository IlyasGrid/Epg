<x-adminLayout>


    <main>
        <form method="POST" action="/admin/diplomes/{{ $diplome->id }}/branche/{{ $branche->id }}"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h2> Branche edit</h2>
            <h1 class="text-danger"> </h1>
            <div class="mb-6 form-group form-group">
                <label for="Fullname" class="inline-block text-lg mb-2">Branche Fullname</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full form-control" name="Fullname"
                    placeholder="le nom du branche" value="{{ $branche->Fullname }}" />
            </div>
            @error('Fullname')
                <p class="text-danger  ml-5  ">{{ $message }}</p>
            @enderror

            <div class="mb-6 form-group form-group">
                <label for="Abreviation" class="inline-block text-lg mb-2">Branche Abreviation</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full form-control" name="Abreviation"
                    placeholder="l'abriveation du nom du branche" value="{{ $branche->Abreviation }}" />
            </div>
            @error('Abreviation')
                <p class="text-danger  ml-5  ">{{ $message }}</p>
            @enderror

            <div class="mb-6 form-group">
                <label for="Motivation" class="inline-block text-lg mb-2">Motivation</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full form-control" name="Motivation"
                    placeholder="pourquoi ce branche" value="{{ $branche->Motivation }}" />

            </div>
            @error('Motivation')
                <p class="text-danger  ml-5  ">{{ $message }}</p>
            @enderror


            <div class="mb-6 form-group">
                <label for="Price_month" class="inline-block text-lg mb-2">
                    Price_month (DH)
                </label>
                <input class="border border-gray-200 rounded p-2 w-full form-control" name="Price_month" rows="10"
                    type="number" value="{{ $branche->Price_month }}" />
            </div>
            @error('Price_month')
                <p class="text-danger  ml-5  ">{{ $message }}</p>
            @enderror

            <div class="mb-6 form-group">
                <label for="Price_year" class="inline-block text-lg mb-2">
                    Price_year (DH)
                </label>
                <input class="border border-gray-200 rounded p-2 w-full form-control" name="Price_year" rows="10"
                    type="number" value="{{ $branche->Price_year }}" />
            </div>
            @error('Price_year')
                <p class="text-danger  ml-5  ">{{ $message }}</p>
            @enderror


            <div class="mb-6 form-group form-group">
                <label for="Objectifs" class="inline-block text-lg mb-2">Branche Objectifs</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full form-control" name="Objectifs"
                    placeholder="separer avec &" value="{{ $branche->Objectifs }}" />
            </div>
            @error('Objectifs')
                <p class="text-danger  ml-5  ">{{ $message }}</p>
            @enderror

            <div class="mb-6 form-group form-group">
                <label for="Prerequis" class="inline-block text-lg mb-2">Branche Prerequis</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full form-control" name="Prerequis"
                    placeholder="separer avec '&' si plusieur" value="{{ $branche->Prerequis }}" />
            </div>
            @error('Prerequis')
                <p class="text-danger  ml-5  ">{{ $message }}</p>
            @enderror



            <div class="mb-6 form-group form-group">
                <label for="Prespective_professionel" class="inline-block text-lg mb-2">Branche
                    Prespective_professionel</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                    name="Prespective_professionel" placeholder="separer avec '&' si plusieur"
                    value="{{ $branche->Prespective_professionel }}" />
            </div>
            @error('Prespective_professionel')
                <p class="text-danger  ml-5  ">{{ $message }}</p>
            @enderror


            <div class="mb-6 form-group">
                <label for="Piece_a_fournis" class="inline-block text-lg mb-2">
                    Piece_a_fournis
                </label>
                <input class="border border-gray-200 rounded p-2 w-full form-control" name="Piece_a_fournis"
                    rows="10" type="text" placeholder="separer avec '&' si plusieur"
                    value="{{ $branche->Piece_a_fournis }}" />
            </div>
            @error('Piece_a_fournis')
                <p class="text-danger  ml-5  ">{{ $message }}</p>
            @enderror




            <div class="btn">
                <div class="mb-6 form-group">
                    <button type="submit" class="btn btn-primary">
                        Edit branche
                    </button>
                </div>
            </div>
        </form>
    </main>
</x-adminLayout>
