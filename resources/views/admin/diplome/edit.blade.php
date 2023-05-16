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

    @unless (is_null($message))
        <h3>{{ $message }}</h3>
    @endunless

    <main>
        <form method="POST" action="/admin/diplomes/{{ $diplome->id }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h2> Diplome edit</h2>
            <h1 class="text-danger"> </h1>
            <div class="mb-6 form-group form-group">
                <label for="Name" class="inline-block text-lg mb-2">Diplome Name</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full form-control" name="Name"
                    placeholder="le nom du diplome" value="{{ $diplome->Name }}" />


            </div>
            @error('Name')
                <p class="text-danger  ml-5  ">{{ $message }}</p>
            @enderror

            <div class="mb-6 form-group">
                <label for="Prerequis" class="inline-block text-lg mb-2">Prerequis</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full form-control" name="Prerequis"
                    placeholder="separer avec &" value="{{ $diplome->Prerequis }}"/>

            </div>
            @error('Prerequis')
                <p class="text-danger  ml-5  ">{{ $message }}</p>
            @enderror
            <div class="mb-6 form-group">
                <label for="Duree" class="inline-block text-lg mb-2">
                    Duree (ANS)
                </label>
                <input class="border border-gray-200 rounded p-2 w-full form-control" name="Duree" rows="10"
                   type="text" placeholder="duree cette diplome ??" value=" {{ $diplome->Duree }}" />
            </div>
            @error('Duree')
                <p class="text-danger  ml-5  ">{{ $message }}</p>
            @enderror




            <div class="btn">
                <div class="mb-6 form-group">
                    <button type="submit" class="btn btn-primary">
                        Edit diplome
                    </button>
                </div>
            </div>
        </form>
    </main>
</x-adminLayout>
