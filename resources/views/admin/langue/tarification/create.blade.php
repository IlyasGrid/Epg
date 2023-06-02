<x-adminLayout>
    <header>
        <h2> <a href="/admin/langues/" class="text-decoration-none text-reset text-capitalize"> {{ $langue->Name }} </a></h2>
        <h4 class="mb-5 text-muted ">create Tarification</h4>

    </header>
    <form class="form-container" method="POST" action="/admin/langues/{{ $langue->id }}/tarification"
        enctype="multipart/form-data">
        @csrf
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
                        name="Volume_Horraire" placeholder="2 Séances par semaine, 3 Séances par semaine ...   "
                        value="{{ old('Volume_Horraire') }}" />

                    @error('Volume_Horraire')
                        <p class="text-danger  ml-5  ">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6 form-group">
                    <label for="Temps" class="inline-block text-lg mb-2">
                        Duree (en Heur)
                    </label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full form-control" name="Temps"
                        placeholder="1h30 ,2h ..." value="{{ old('Temps') }}" />

                    @error('Temps')
                        <p class="text-danger  ml-5  ">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6 form-group">
                    <label for="Price" class="inline-block text-lg mb-2">
                        Prix (en DH)
                    </label>
                    <input type="number" class="border border-gray-200 rounded p-2 w-full form-control" name="Price"
                        value="{{ old('Price') }}" placeholder="1000 Dh ,700dh ...." />

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
