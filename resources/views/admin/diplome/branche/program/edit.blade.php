<x-adminLayout>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <h2> <span class="text-muted text-capitalize"> </span><a
            href="/admin/diplomes/{{ $diplome->id }}/branche/{{ $branche->id }}/program"
            class="text-reset text-decoration-none">
            {{ $branche->Fullname }} </a> <span class="text-muted text-lowercase"> edit programme</span>
    </h2>


    <form method="POST" class="form"
        action="/admin/diplomes/{{ $diplome->id }}/branche/{{ $branche->id }}/program/{{ $branche->annee }}"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-container">
            <div class="card mt-3 mb-3">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="trtd">{{ $branche->annee }} année</h5>
                    <button type="button" class="btn btn-outline-danger pl-4 pr-4 p-2  delete-year">Delete
                        Year</button>
                </div>


                <div class="mb-6 form-group">
                    <label for="Name_module" class="inline-block text-lg mb-2">
                        Modules :
                    </label>

                    <ul id="chapitres-list" class="list-group pl-5">
                        @foreach ($branche->program as $program)
                            <li class="list-group-item mb-2 mt-1 d-flex justify-content-around">
                                <input type="hidden" name="Program_id[]" value="{{ $program->id }}" />
                                <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                                    name="Name_module[]" placeholder="program Name_module"
                                    value="{{ $program->Name_module }}" />
                                <button class="btn btn-outline-danger clear-btn ml-5" type="button"
                                    onclick="clearInput(this)" title="Clear input">
                                    <i class="fas fa-times-circle"></i>
                                </button>
                            </li>
                        @endforeach

                    </ul>
                    <div class="d-flex justify-content-center">
                        <button class="add-chapitre-btn btn btn-outline-success"
                            onclick="addObjectif( '#chapitres-list', 'Name_module[]', 'program Name_module');"
                            type="button">Add
                            module</button>
                    </div>
                    @error('Name_module')
                        <p class="text-danger  ml-5  ">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>
        <div class="mt-4 d-flex justify-content-center mb-3 align-items-center">
            <button type="submit" class="btn btn-sm btn-outline-info pl-4 pr-4 p-2    add-program">
                edit
            </button>
        </div>
    </form>



</x-adminLayout>
