<x-adminLayout>

    <main>
        <form method="POST" class="form " action="/admin/bourse/{{ $bourse->id }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <h2>
                <span class="text-muted text-capitalize"> <a href="/admin/bourse"> bourse </a> </span>
            </h2>

            <div>
                <div class="d-flex justify-content-around ">
                    <div class=" conditions-forms conatiner m-3  w-100 border p-3">
                        <div class="mb-6 form-group">
                            <label for="text" class="inline-block text-lg mb-2">
                                text
                            </label>
                            <textarea type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                                name="text" placeholder="separer les avec un '&'" value="" >{{ $bourse->text }}</textarea>
                            @error('text')
                                <p class="text-danger  mt-3 mb-4  ">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6 form-group">
                            <label for="conditions" class="inline-block text-lg mb-2">conditions</label>
            
                            @php
                                $conditions = explode(';', $bourse->conditions);
                            @endphp
                            <ul id="conditions-list" class="list-group pl-5">
                                @foreach ($conditions as $condition)
                                    <li class="list-group-item mb-2 mt-1">
                                        <input type="text" class="border border-gray-200 rounded p-2 w-full form-control"
                                            name="conditions[]" value="{{ $condition }}" />
                                    </li>
                                @endforeach
                            </ul>
                            <div class="d-flex justify-content-center">
                                <button class="add-chapitre-btn btn btn-outline-success"
                                    onclick="addObjectif( '#conditions-list', 'conditions[]', 'bourse condition');" type="button">Add
                                    condition</button>
                            </div>
                        </div>
                        @error('conditions')
                            <p class="text-danger  ml-5  ">{{ $message }}</p>
                        @enderror           



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
