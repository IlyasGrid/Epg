<x-adminLayout>



    <main>
        <form method="POST" class="form"
            action="/admin/categories/{{ $categorie->id }}/subCategorie/{{ $subCategorie->id }}/formation/{{ $formation->id }}/tarif/{{ $formation->tarif->id }}"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h2><span class="text-muted text-capitalize">tarification of </span> {{ $formation->Name }}</h2>

            <div>
                <div class="d-flex justify-content-around">
                    <div class=" conditions-forms conatiner w-100 m-3 border p-3">


                        <div class="mb-6 form-group">
                            <label for="Name" class="inline-block text-lg mb-2">
                                Name
                            </label>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                                name="Name" placeholder="tarif Name" value="{{ $formation->tarif->Name }}" />

                            @error('Name')
                                <p class="text-danger  ml-5  ">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6 form-group">
                            <label for="Price" class="inline-block text-lg mb-2">
                                Price (DH)
                            </label>
                            <input type="number" class="border border-gray-200 rounded p-2 w-full form-control"
                                name="Price" placeholder="tarif Price" value="{{ $formation->tarif->Price }}" />

                            @error('Price')
                                <p class="text-danger  ml-5  ">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6 form-group">
                            <label for="Type" class="inline-block text-lg mb-2">
                                Type
                            </label>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                                name="Type" placeholder="tarif Type" value="{{ $formation->tarif->Type }}" />

                            @error('Type')
                                <p class="text-danger  ml-5  ">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6 form-group">
                            <label for="Volume_Horraire" class="inline-block text-lg mb-2">
                                Volume_Horraire (en H)
                            </label>
                            <input type="number" class="border border-gray-200 rounded p-2 w-full form-control"
                                name="Volume_Horraire" placeholder="tarif Volume_Horraire"
                                value="{{ $formation->tarif->Volume_Horraire }}" />

                            @error('Volume_Horraire')
                                <p class="text-danger  ml-5  ">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6 form-group">
                            <label for="Duree_formation" class="inline-block text-lg mb-2">
                                Duree_formation (nullable)
                            </label>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                                name="Duree_formation" placeholder="tarif Duree_formation"
                                value="{{ $formation->tarif->Duree_formation }}" />

                            @error('Duree_formation')
                                <p class="text-danger  ml-5  ">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6 form-group">
                            <label for="Debut_formation" class="inline-block text-lg mb-2">
                                Debut_formation
                            </label>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                                name="Debut_formation" placeholder="tarif Debut_formation"
                                value="{{ $formation->tarif->Debut_formation }}" />

                            @error('Debut_formation')
                                <p class="text-danger  ml-5  ">{{ $message }}</p>
                            @enderror
                        </div>


                        <div class="mb-6 form-group">
                            <label for="Deroulement" class="inline-block text-lg mb-2">
                                Deroulement (nullable)
                            </label>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                                name="Deroulement" placeholder="tarif Deroulement"
                                value="{{ $formation->tarif->Deroulement }}" />

                            @error('Deroulement')
                                <p class="text-danger  ml-5  ">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6 form-group">
                            <label for="Horraire" class="inline-block text-lg mb-2">
                                Horraire
                            </label>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                                name="Horraire" placeholder="tarif Horraire"
                                value="{{ $formation->tarif->Horraire }}" />

                            @error('Horraire')
                                <p class="text-danger  ml-5  ">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6 form-group">
                            <label for="Dernier_Delais_Inscription" class="inline-block text-lg mb-2">
                                Dernier_Delais_Inscription (nullable)
                            </label>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                                name="Dernier_Delais_Inscription" placeholder="tarif Dernier_Delais_Inscription"
                                value="{{ $formation->tarif->Dernier_Delais_Inscription }}" />

                            @error('Dernier_Delais_Inscription')
                                <p class="text-danger  ml-5  ">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6 form-group">
                            <label for="repartition_heures" class="inline-block text-lg mb-2">
                                repartition_heures (nullable)
                            </label>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                                name="repartition_heures" placeholder="tarif repartition_heures"
                                value="{{ $formation->tarif->repartition_heures }}" />

                            @error('repartition_heures')
                                <p class="text-danger  ml-5  ">{{ $message }}</p>
                            @enderror
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
