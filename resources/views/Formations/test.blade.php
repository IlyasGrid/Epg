<x-layout>

    @foreach ($langues as $langue)
        <h1>{{ $langue->Name }}</h1>


        @foreach ($langue->tarifs as $tarif)

            <h3>{{ $tarif->Type }}</h3>

        @endforeach

    @endforeach

</x-layout>
