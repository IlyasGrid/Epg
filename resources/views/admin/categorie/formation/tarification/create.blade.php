<x-adminLayout>
    <h2><a href="/admin/categories/{{ $categorie->id }}/subCategorie/{{ $subCategorie->id }}/formation/{{ $formation->id }}/tarif"
            class="text-decoration-none text-reset"> <span class=" text-capitalize text-muted">formation</span>
            {{ $formation->Name }} </a></h2>
    <h2 class="mb-5 text-lowercase text-center text-muted">Create new tarification</h2>
    <form class="form-container" method="POST"
        action="/admin/categories/{{ $categorie->id }}/subCategorie/{{ $subCategorie->id }}/formation/{{ $formation->id }}/tarif"
        enctype="multipart/form-data">
        @csrf

        <div class="conditions-forms conatiner w-100 border ml-3 p-3 pl-5">


            <div class="mb-6 form-group">
                <label for="Name" class="inline-block text-lg mb-2">
                    Name
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full form-control" name="Name"
                    placeholder="tarif Name" value="{{ old('Name') }}" />

                @error('Name')
                    <p class="text-danger  ml-5  ">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6 form-group">
                <label for="Price" class="inline-block text-lg mb-2">
                    Price
                </label>
                <input type="number" class="border border-gray-200 rounded p-2 w-full form-control" name="Price"
                    placeholder="tarif Price" value="{{ old('Price') }}" />

                @error('Price')
                    <p class="text-danger  ml-5  ">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6 form-group">
                <label for="Type" class="inline-block text-lg mb-2">
                    Type
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full form-control" name="Type"
                    placeholder="tarif Type" value="{{ old('Type') }}" />

                @error('Type')
                    <p class="text-danger  ml-5  ">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6 form-group">
                <label for="Volume_Horraire" class="inline-block text-lg mb-2">
                    Volume_Horraire (en H)
                </label>
                <input type="number" class="border border-gray-200 rounded p-2 w-full form-control" name="Volume_Horraire"
                    placeholder="tarif Volume_Horraire" value="{{ old('Volume_Horraire') }}" />

                @error('Volume_Horraire')
                    <p class="text-danger  ml-5  ">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6 form-group">
                <label for="Duree_formation" class="inline-block text-lg mb-2">
                    Duree_formation (nullable)
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full form-control" name="Duree_formation"
                    placeholder="tarif Duree_formation" value="{{ old('Duree_formation') }}" />

                @error('Duree_formation')
                    <p class="text-danger  ml-5  ">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6 form-group">
                <label for="Debut_formation" class="inline-block text-lg mb-2">
                    Debut_formation 
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full form-control" name="Debut_formation"
                    placeholder="tarif Debut_formation" value="{{ old('Debut_formation') }}" />

                @error('Debut_formation')
                    <p class="text-danger  ml-5  ">{{ $message }}</p>
                @enderror
            </div>

            
            <div class="mb-6 form-group">
                <label for="Deroulement" class="inline-block text-lg mb-2">
                    Deroulement (nullable)
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full form-control" name="Deroulement"
                    placeholder="tarif Deroulement" value="{{ old('Deroulement') }}" />

                @error('Deroulement')
                    <p class="text-danger  ml-5  ">{{ $message }}</p>
                @enderror
            </div>   

            <div class="mb-6 form-group">
                <label for="Horraire" class="inline-block text-lg mb-2">
                    Horraire 
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full form-control" name="Horraire"
                    placeholder="tarif Horraire" value="{{ old('Horraire') }}" />

                @error('Horraire')
                    <p class="text-danger  ml-5  ">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6 form-group">
                <label for="Dernier_Delais_Inscription" class="inline-block text-lg mb-2">
                    Dernier_Delais_Inscription (nullable)
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full form-control" name="Dernier_Delais_Inscription"
                    placeholder="tarif Dernier_Delais_Inscription" value="{{ old('Dernier_Delais_Inscription') }}" />

                @error('Dernier_Delais_Inscription')
                    <p class="text-danger  ml-5  ">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6 form-group">
                <label for="repartition_heures" class="inline-block text-lg mb-2">
                    repartition_heures (nullable)
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full form-control" name="repartition_heures"
                    placeholder="tarif repartition_heures" value="{{ old('repartition_heures') }}" />

                @error('repartition_heures')
                    <p class="text-danger  ml-5  ">{{ $message }}</p>
                @enderror
            </div>

        </div>

        <div class="mb-6 form-group d-flex justify-content-center mt-5">
            <button class="btn btn-outline-success">
                Create new tarification
            </button>

        </div>
    </form>
</x-adminLayout>
