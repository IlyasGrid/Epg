<x-adminLayout>

    <main>
        <form method="POST" class="form" action="/admin/langues/{{ $langue->id }}/tarification/{{ $tarif->id }}"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h2>
                <span class="text-muted text-capitalize"> Tarification Langue </span>
                <a href="/admin/langues/" class="text-reset text-decoration-none"> {{ $langue->Name }} </a>
            </h2>

            <div>
                <div class="d-flex justify-content-around">
                    <div class=" conditions-forms conatiner m-3 border p-3">
                        <div class="mb-6 form-group">
                            <label for="Type" class="inline-block text-lg mb-2">
                                Type
                            </label>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                                name="Type" placeholder="separer les avec un '&'" value="{{ $tarif->Type }}" />

                        </div>
                        <div class="mb-6 form-group">
                            <label for="Volume_horraire" class="inline-block text-lg mb-2">
                                Volume horraire
                            </label>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                                name="Volume_Horraire" placeholder="separer les avec un '&'"
                                value="{{ $tarif->Volume_Horraire }}" />

                        </div>
                        <div class="mb-6 form-group">
                            <label for="Temps" class="inline-block text-lg mb-2">
                                Duree
                            </label>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                                name="Temps" placeholder="separer les avec un '&'" value="{{ $tarif->Temps }}" />

                        </div>
                        <div class="mb-6 form-group">
                            <label for="Price" class="inline-block text-lg mb-2">
                                Prix
                            </label>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                                name="Price" placeholder="separer les avec un '&'" value="{{ $tarif->Price }}" />

                        </div>
                    </div>
                </div>

            </div>


            <div class="btn d-flex justify-content-center">
                <div class="mb-6 form-group">
                    <button class="btn btn-outline-info">
                        Edit
                    </button>
                </div>
            </div>
        </form>
    </main>
</x-adminLayout>
