<x-adminLayout>
    <h2><a href="/admin/langues/" class="text-decoration-none"> Langue {{ $langue->Name }} </a></h2>

    <form class="form-container" method="POST" action="/admin/langues/{{ $id_langue }}/tarification"
        enctype="multipart/form-data">
        @csrf
        <h2 class="mb-5"> Tarification edit</h2>
        <div>
            <div class="conditions-forms">


                <div class="mb-6 form-group">
                    <label for="Type" class="inline-block text-lg mb-2">
                        Type
                    </label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full form-control" name="Type"
                        placeholder="type(nom) de cours" value="{{ old('Type') }}" />

                    @error('Type')
                        <p class="text-danger  ml-5  ">{{ $message }}</p>
                    @enderror
                </div>


                <div class="mb-6 form-group">
                    <label for="Volume_horraire" class="inline-block text-lg mb-2">
                        Volume horraire ( Séances par semaine )
                    </label>
                    <input type="number" class="border border-gray-200 rounded p-2 w-full form-control"
                        name="Volume_Horraire" value="{{ old('Volume_Horraire') }}" />

                    @error('Volume_Horraire')
                        <p class="text-danger  ml-5  ">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6 form-group">
                    <label for="Temps" class="inline-block text-lg mb-2">
                        Duree (en Heur)
                    </label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full form-control" name="Temps"
                        placeholder="exemple : 1h30 ,2h ..." value="{{ old('Temps') }}" />

                    @error('Temps')
                        <p class="text-danger  ml-5  ">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6 form-group">
                    <label for="Price" class="inline-block text-lg mb-2">
                        Prix (en DH)
                    </label>
                    <input type="number" class="border border-gray-200 rounded p-2 w-full form-control" name="Price"
                        value="{{ old('Price') }}" />

                    @error('Price')
                        <p class="text-danger  ml-5  ">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="mb-6 form-group d-flex justify-content-center mt-5">
            <button class="btn btn-outline-success">
                Create new tarif
            </button>

        </div>
    </form>
</x-adminLayout>
