<x-adminLayout>



    <main>
        <form method="POST" class="form"
            action="/admin/categories/{{ $categorie->id }}/subCategorie/{{ $subCategorie->id }}/formation/{{ $formation->id }}/programme/{{ $formation->program->id }}"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h2><span class="text-muted text-capitalize">programmes of </span> {{ $formation->Name }}</h2>

            <div>
                <div class="d-flex justify-content-around">
                    <div class=" conditions-forms conatiner w-100 m-3 border p-3">


                        <div class="mb-6 form-group">
                            <label for="ModuleName" class="inline-block text-lg mb-2">
                                ModuleName
                            </label>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                                name="ModuleName" placeholder="program ModuleName"
                                value="{{ $formation->program->ModuleName }}" />

                            @error('ModuleName')
                                <p class="text-danger  ml-5  ">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6 form-group">
                            <label for="ModuleChapitre" class="inline-block text-lg mb-2">
                                Chapitres :
                            </label>
                            @php
                                $chapitres = explode(';', $formation->program->ModuleChapitre);
                            @endphp
                            <ul id="chapitres-list" class="list-group pl-5">
                                @foreach ($chapitres as $chapitre)
                                    <li class="list-group-item mb-2 mt-1">
                                        <input type="text"
                                            class="border border-gray-200 rounded p-2 w-full form-control"
                                            name="ModuleChapitre[]" placeholder="program ModuleChapitre"
                                            value="{{ $chapitre }}" />
                                    </li>
                                @endforeach

                            </ul>
                            <div class="d-flex justify-content-center">
                                <button class="add-chapitre-btn btn btn-outline-success" onclick="addObjectif( '#chapitres-list', 'ModuleChapitre[]', 'program ModuleChapitre');" type="button">Add
                                    Chapitre</button>
                            </div>
                            @error('ModuleChapitre')
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
