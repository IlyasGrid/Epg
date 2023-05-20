<x-adminlayout>


    <h2> <span class="text-muted text-capitalize"> </span><a href="/admin/diplomes/{{ $diplome->id }}/branche/"
            class="text-reset text-decoration-none">
            {{ $branche->Fullname }} </a> <span class="text-muted text-lowercase">programmes</span>
    </h2>
    <div class="d-flex justify-content-around m-5 p-3 ">
        <a href="/admin/diplomes/{{$diplome->id}}/branche/{{$branche->id}}/program/create"
            class="btn btn-outline-success align-self-start">create
            new programme</a>
        <a href="/admin/diplomes/{{ $diplome->id }}/branche/{{ $branche->id }}/program/trashed"
            class="btn btn btn-outline-secondary align-self-start">show
            deleted programmes</a>
    </div>

    @if (count($branche->programs) < 1)
        <div class="container d-flex align-items-center justify-content-center w-100">
            <div class="text-center">
                <div class="alert alert-info">
                    No programmes found.
                </div>
            </div>
        </div>
    @else
        @foreach ($branche->programs->groupBy('Annee') as $annee => $programs)
            <div class="card-container">
                <div class="card mt-3 mb-3">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="trtd">{{ $annee }} année</h5>
                        <div>
                            <form
                                action="/admin/diplomes/{{$diplome->id}}/branche/{{$branche->id}}/program/{{ $annee }}"
                                method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">Delete</button>
                            </form>
                        </div>

                    </div>
                    <div class="card-body">
                        @foreach ($programs as $key => $program)
                            @php
                                $key += 1;
                            @endphp
                            <div class="module text-muted"><b> Module {{ $key }} :</b>
                               <span> {{ $program->Name_module }} </span>
                            </div>
                        @endforeach
                    </div>
                    <div class="mt-4 d-flex justify-content-center mb-3 align-items-center">
                        <a href="/admin/diplomes/{{ $diplome->id }}/branche/{{$branche->id}}/program/edit/{{$annee}}">
                        <button type="button" class="btn btn-sm btn-outline-info pl-4 pr-4 p-2    add-program">
                            edit
                        </button>
                    </a>
                    </div>
                </div>
            </div>
        @endforeach
    @endif


    {{-- <script>
        function addModule() {
            // Get the closest card-container element
            var cardContainer = this.closest('.card-container');

            // Get the card body element within the card-container
            var cardBody = cardContainer.querySelector('.card-body');

            // Create the necessary HTML elements for the new module
            var moduleDiv = document.createElement('div');
            moduleDiv.classList.add('module');
            moduleDiv.innerText = 'Module ' + (cardBody.children.length / 2 + 1);

            var moduleNameDiv = document.createElement('div');
            moduleNameDiv.classList.add('module-name', 'd-flex', 'justify-content-between', 'align-items-center');

            var moduleNameInput = document.createElement('input');
            moduleNameInput.type = 'text';
            moduleNameInput.classList.add('form-control');
            moduleNameInput.name = 'name_module[]';

            var deleteButton = document.createElement('button');
            deleteButton.type = 'button';
            deleteButton.classList.add('btn', 'btn-sm', 'btn-outline-danger', 'pl-4', 'pr-4', 'p-2', 'delete-program');
            deleteButton.innerText = 'Delete';

            // Add the input and delete button to the module name div
            moduleNameDiv.appendChild(moduleNameInput);
            moduleNameDiv.appendChild(deleteButton);

            // Add the module and module name div to the card body
            cardBody.appendChild(moduleDiv);
            cardBody.appendChild(moduleNameDiv);
        }

        function addYear() {
            // Get the card-container element
            var cardContainer = document.querySelector('.card-container');

            // Create the necessary HTML elements for the new year
            var card = document.createElement('div');
            card.classList.add('card', 'mt-3', 'mb-3');

            var cardHeader = document.createElement('div');
            cardHeader.classList.add('card-header', 'd-flex', 'justify-content-between', 'align-items-center');

            var yearHeading = document.createElement('h5');
            yearHeading.classList.add('trtd');
            yearHeading.innerText = 'New Year';

            var deleteYearButton = document.createElement('button');
            deleteYearButton.type = 'button';
            deleteYearButton.classList.add('btn', 'btn-outline-danger', 'pl-4', 'pr-4', 'p-2', 'delete-year');
            deleteYearButton.innerText = 'Delete Year';

            var cardBody = document.createElement('div');
            cardBody.classList.add('card-body');

            var addButtonContainer = document.createElement('div');
            addButtonContainer.classList.add('mt-4', 'd-flex', 'justify-content-center', 'mb-3', 'align-items-center');

            var addButton = document.createElement('button');
            addButton.type = 'button';
            addButton.classList.add('btn', 'btn-sm', 'btn-outline-success', 'pl-4', 'pr-4', 'p-2', 'add-program');
            addButton.innerText = 'Add';
            addButton.addEventListener('click', addModule);

            // Add the heading and delete button to the card header
            cardHeader.appendChild(yearHeading);
            cardHeader.appendChild(deleteYearButton);

            // Add the add button to the add button container
            addButtonContainer.appendChild(addButton);

            // Add the card header, card body, and add button container to the card
            card.appendChild(cardHeader);
            card.appendChild(cardBody);
            card.appendChild(addButtonContainer);

            // Add the new year card to the card container
            cardContainer.appendChild(card);
        }

        // // Attach the addModule function to the click event of the "Add" buttons
        var addButtons = document.querySelectorAll('.add-program');
        addButtons.forEach(function(addButton) {
            addButton.addEventListener('click', addModule);
        });

        // Attach the addYear function to the click event of the "Add Year" button
        // var addYearButton = document.querySelector('.add-year');
        // addYearButton.addEventListener('click', addYear);
    </script> --}}



</x-adminlayout>
