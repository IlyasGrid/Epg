<x-adminLayout>

    <style>
        form {
            padding: 2em;
            border-radius: 10px;
            width: fit-content;
            min-width: 60vw;
            height: fit-content;
            background-color: #f5f5f5;
        }

        h2 {
            color: rgb(91, 3, 91);
            text-transform: uppercase;
            letter-spacing: 2px;
            display: block;
            font-weight: bold;
            font-size: xx-large;
            margin-bottom: 0.5em;
            text-align: center;
        }

        main,
        .btn {
            display: flex;
            justify-content: space-around
        }
    </style>

    <main>
        <form method="POST" action="/admin/formations/{{ $categorie->id }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h2> {{ $categorie->Name }} <span class="text-lowercase">edit form</span></h2>
            <h1 class="text-danger"> </h1>
            <div class="mb-6 form-group form-group d-flex flex-column  ">
                <label for="Name" class="inline-block text-lg mb-2">Categorie Name</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full form-control " name="Name"
                    placeholder="le nom de la Name" value="{{ $categorie->Name }}" />


            </div>
            @error('Name')
                <p class="text-danger  ml-5  ">{{ $message }}</p>
            @enderror


            <div class="btn">
                <div class="mb-6 form-group">
                    <button type="submit" class="btn btn-primary">
                        Edit categorie
                    </button>
                </div>
            </div>
        </form>
    </main>
</x-adminLayout>
