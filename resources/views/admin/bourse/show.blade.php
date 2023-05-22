<x-adminLayout>


    <h2>
        <a href="/admin/bourse/" class="text-reset text-decoration-none">
            Bourse </a>
    </h2>
    {{-- <div class="d-flex justify-content-around m-5 p-3 ">
        <a href="/admin/bourse/create" class="btn btn-outline-success align-self-start">create
            new bourse</a>
        <a href="/admin/bourse/trashed" class="btn btn btn-outline-secondary align-self-start">show
            deleted bourse</a>
    </div> --}}

    @if (!$bourse)
        <div class="container d-flex align-items-center justify-content-center w-100">
            <div class="text-center">
                <div class="alert alert-info">
                    No bourse found.
                </div>
            </div>
        </div>
    @else
        <div class="card mb-5">
            <h5 class="card-title card-header text-centre text-uppercase" style="text-align: center;">
                Bourse </h5>
            <div class="m-3  text-muted">
                <p class="card-text  pl-3"><b class="text-capitalize"> text:</b> <br>{{ $bourse->text }} </p>
                <div class="card-text  pl-3 list-group">
                     <b class="text-capitalize"> Conditions:</b>
                    @php
                        $conditions = explode(';', $bourse->conditions);
                    @endphp
                    @foreach ($conditions as $condition)
                        <p class="card-text  m-3 list-group-item">{{ $condition }} </p>
                    @endforeach
                </div>

            </div>
            <div class="d-flex justify-content-around mb-4">
                <div class="d-flex justify-content-around">
                    <a href="/admin/bourse/edit/{{ $bourse->id }}" class="btn btn-outline-info">edit</a>
                </div>
                {{-- <div>
                    <form action="/admin/bourse/{{ $bourse->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                    </form>
                </div> --}}
            </div>
        </div>
    @endif
</x-adminLayout>
