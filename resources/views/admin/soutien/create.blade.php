<x-adminLayout>
    <header>
        <h2>
            <a href="/admin/soutien/" class="text-reset text-decoration-none">
                Soutien </a>
        </h2>
        <h4>
            <span class="text-muted text-capitalize"> Create </span>
        </h4>
    </header>
    <section class="mt-5">
        <form class="form-container" action="/admin/soutien" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <div class="conditions-forms">


                    <div class="mb-6 form-group">
                        <label for="type" class="inline-block text-lg mb-2">
                            type
                        </label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                            name="type" placeholder="individuel, en group" value="{{ old('type') }}" />

                        @error('type')
                            <p class="text-danger  mt-3 mb-4  ">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6 form-group">
                        <label for="nbr_personne" class="inline-block text-lg mb-2">
                            Nbr personne
                        </label>
                        <input type="number" class="border border-gray-200 rounded p-2 w-full form-control"
                            name="nbr_personne" value="{{ old('nbr_personne') }}" placeholder="1, 2,....." />

                        @error('nbr_personne')
                            <p class="text-danger  mt-3 mb-4  ">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6 form-group">
                        <label for="volume_horraire" class="inline-block text-lg mb-2">
                            Volume horraire ( h par semaine )
                        </label>
                        <input type="text" maxlength="10"
                            class="border border-gray-200 rounded p-2 w-full form-control" name="volume_horraire"
                            placeholder="2h  par semaine, 1h30 par semaine ...   "
                            value="{{ old('volume_horraire') }}" />

                        @error('volume_horraire')
                            <p class="text-danger  mt-3 mb-4  ">{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="mb-6 form-group">
                        <label for="price" class="inline-block text-lg mb-2">
                            Prix/mois (en DH)
                        </label>
                        <input type="number" class="border border-gray-200 rounded p-2 w-full form-control"
                            name="price" value="{{ old('price') }}" placeholder="1000 Dh ,700dh ...." />

                        @error('price')
                            <p class="text-danger  mt-3 mb-4  ">{{ $message }}</p>
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
    </section>
</x-adminLayout>
