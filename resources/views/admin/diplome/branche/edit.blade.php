<x-adminLayout>


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
                <label for="img" class="inline-block text-lg mb-2">
                    Image 
                </label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full form-control" name="img" />

                @error('img')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>


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
                {{-- <input type="text" class="border border-gray-200 rounded p-2 w-full form-control" name="Objectifs"
                    placeholder="separer avec &" value="{{ $branche->Objectifs }}" /> --}}
                @php
                    $Objectifs = explode(';', $branche->Objectifs);
                @endphp
                <ul id="Objectifs-list" class="list-group pl-5">
                    @foreach ($Objectifs as $objectif)
                        <li class="list-group-item mb-2 mt-1">
                            <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                                name="Objectifs[]" value="{{ $objectif }}" />
                        </li>
                    @endforeach
                </ul>
                <div class="d-flex justify-content-center">
                    <button class="add-chapitre-btn btn btn-outline-dark"
                        onclick="addObjectif( '#Objectifs-list', 'Objectifs[]', 'add objectif');" type="button">Add
                        objectif</button>
                </div>
            </div>
            @error('Objectifs')
                <p class="text-danger  ml-5  ">{{ $message }}</p>
            @enderror

            <div class="mb-6 form-group form-group">
                <label for="Prerequis" class="inline-block text-lg mb-2">Branche Prerequis</label>


                @php
                    $Prerequis = explode(';', $branche->Prerequis);
                @endphp
                <ul id="Prerequis-list" class="list-group pl-5">
                    @foreach ($Prerequis as $prerequi)
                        <li class="list-group-item mb-2 mt-1">
                            <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                                name="Prerequis[]" value="{{ $prerequi }}" />
                        </li>
                    @endforeach
                </ul>
                <div class="d-flex justify-content-center">
                    <button class="add-chapitre-btn btn btn-outline-dark"
                        onclick="addObjectif( '#Prerequis-list', 'Prerequis[]', 'add prerequi');" type="button">Add
                        prerequi</button>
                </div>
            </div>
            @error('Prerequis')
                <p class="text-danger  ml-5  ">{{ $message }}</p>
            @enderror



            <div class="mb-6 form-group form-group">
                <label for="Prespective_professionel" class="inline-block text-lg mb-2">Branche
                    Prespective_professionel</label>

                @php
                    $Prespective_professionel = explode(';', $branche->Prespective_professionel);
                @endphp
                <ul id="Prespective_professionel-list" class="list-group pl-5">
                    @foreach ($Prespective_professionel as $piece)
                        <li class="list-group-item mb-2 mt-1">
                            <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                                name="Prespective_professionel[]" value="{{ $piece }}" />
                        </li>
                    @endforeach
                </ul>
                <div class="d-flex justify-content-center">
                    <button class="add-chapitre-btn btn btn-outline-dark"
                        onclick="addObjectif( '#Prespective_professionel-list', 'Prespective_professionel[]', 'add prespective');"
                        type="button">Add
                        piece</button>
                </div>
            </div>
            @error('Prespective_professionel')
                <p class="text-danger  ml-5  ">{{ $message }}</p>
            @enderror


            <div class="mb-6 form-group">
                <label for="Piece_a_fournis" class="inline-block text-lg mb-2">
                    Piece_a_fournis
                </label>


                @php
                    $Piece_a_fournis = explode(';', $branche->Piece_a_fournis);
                @endphp
                <ul id="Piece_a_fournis-list" class="list-group pl-5">
                    @foreach ($Piece_a_fournis as $piece)
                        <li class="list-group-item mb-2 mt-1">
                            <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                                name="Piece_a_fournis[]" value="{{ $piece }}" />
                        </li>
                    @endforeach
                </ul>
                <div class="d-flex justify-content-center">
                    <button class="add-chapitre-btn btn btn-outline-dark"
                        onclick="addObjectif( '#Piece_a_fournis-list', 'Piece_a_fournis[]', 'add piece');"
                        type="button">Add
                        piece</button>
                </div>
            </div>
            @error('Piece_a_fournis')
                <p class="text-danger  ml-5  ">{{ $message }}</p>
            @enderror




            <div class="btn">
                <div class="mb-6 form-group">
                    <button type="submit" class="btn btn-outline-info">
                        Edit branche
                    </button>
                </div>
            </div>
        </form>

</x-adminLayout>
