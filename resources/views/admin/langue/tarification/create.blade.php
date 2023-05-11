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
    <form method="POST" action="/admin/langues/{{ $id_langue }}/tarification" enctype="multipart/form-data">
        @csrf
        <h2> Langue edit</h2>
        <div>
            <h3> Tarification </h2>
                <div class="conditions-forms">


                    <div class="mb-6 form-group">
                        <label for="Type" class="inline-block text-lg mb-2">
                            Type
                        </label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full form-control" name="Type"
                            placeholder="separer les avec un '&'" value="{{ old('Type') }}" />

                        @error('Type')
                            <p class="text-danger  ml-5  ">{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="mb-6 form-group">
                        <label for="Volume_horraire" class="inline-block text-lg mb-2">
                            Volume horraire
                        </label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                            name="Volume_Horraire" placeholder="separer les avec un '&'"
                            value="{{ old('Volume_Horraire') }}" />

                        @error('Volume_Horraire')
                            <p class="text-danger  ml-5  ">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6 form-group">
                        <label for="Temps" class="inline-block text-lg mb-2">
                            Duree
                        </label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                            name="Temps" placeholder="separer les avec un '&'" value="{{ old('Temps') }}" />

                        @error('Temps')
                            <p class="text-danger  ml-5  ">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6 form-group">
                        <label for="Price" class="inline-block text-lg mb-2">
                            Prix
                        </label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                            name="Price" placeholder="separer les avec un '&'" value="{{ old('Price') }}" />

                        @error('Price')
                            <p class="text-danger  ml-5  ">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
        </div>

        <div class="mb-6 form-group">
            <button class="btn btn-primary">
                Create langue
            </button>

        </div>
    </form>
</x-adminLayout>
