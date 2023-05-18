<x-adminLayout>
    <h2><a href="/admin/categories/{{ $categorie->id }}/subCategorie/{{ $subCategorie->id }}/formation/{{ $formation->id }}/programme"
            class="text-decoration-none text-reset"> <span class=" text-capitalize text-muted">formation</span>
            {{ $formation->Name }} </a></h2>
    <h2 class="mb-5 text-lowercase text-center text-muted">Create new programs</h2>
    <form class="form-container" method="POST"
        action="/admin/categories/{{ $categorie->id }}/subCategorie/{{ $subCategorie->id }}/formation/{{ $formation->id }}/programme"
        enctype="multipart/form-data">
        @csrf

        <div class="conditions-forms conatiner w-100 border ml-3 p-3 pl-5">


            <div class="mb-6 form-group">
                <label for="ModuleName" class="inline-block text-lg mb-2">
                    Name
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full form-control" name="ModuleName"
                    value="{{ old('ModuleName') }}" />

                @error('ModuleName')
                    <p class="text-danger  ml-5  ">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6 form-group">
                <label for="ModuleChapitre" class="inline-block text-lg mb-2">
                    Chapitre
                </label>
                {{-- <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                    name="ModuleChapitre" value="{{ old('ModuleChapitre') }}" /> --}}

                <ul id="chapitres-list">
                    <li class="list-style-none mb-2 mt-1">
                        <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                            name="ModuleChapitre[]" placeholder="program ModuleChapitre"
                            value="{{ old('ModuleChapitre[]') }}" />
                    </li>
                </ul>
                <div class="d-flex justify-content-center">
                    <button class="add-chapitre-btn btn btn-outline-success" type="button">Add
                        Chapitre</button>
                </div>

                @error('ModuleChapitre')
                    <p class="text-danger  ml-5  ">{{ $message }}</p>
                @enderror
            </div>

        </div>

        <div class="mb-6 form-group d-flex justify-content-center mt-5">
            <button class="btn btn-outline-success">
                Create new programme
            </button>

        </div>
    </form>
    <script defer>
        var addChapitreButton = document.querySelector('.add-chapitre-btn');
        var chapitresList = document.querySelector('#chapitres-list');

        addChapitreButton.addEventListener('click', function() {
            var newChapitreInput = document.createElement('input');
            newChapitreInput.type = 'text';
            newChapitreInput.classList.add('border', 'border-gray-200', 'rounded', 'p-2', 'w-full', 'form-control');
            newChapitreInput.name = 'ModuleChapitre[]';
            newChapitreInput.placeholder = 'program ModuleChapitre';

            var newChapitreListItem = document.createElement('li');
            newChapitreListItem.classList.add('list-style-none');
            newChapitreListItem.appendChild(newChapitreInput);

            chapitresList.appendChild(newChapitreListItem);
        });
    </script>
</x-adminLayout>
