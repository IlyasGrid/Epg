<x-Layout>
    <link rel="stylesheet" href="/formation/style.css">
    <style>
        .maxchar {
            display: block;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 100%;
        }
    </style>
    <section class="section visit-section mt-5 ">
        <div class="container mt-5">

            @forelse ($categories as $category)

                <div>
                    <h1 class="taba">{{ $category->Name }}</h1>

                    @forelse ($category->subCategories as $subCategory)
                        <h3 class="soutit">{{ $subCategory->Name }}</h3>
                        <div class="row">
                            @forelse ($subCategory->formations as $formation)
                                <div class="col-lg-3 col-md-6 mt-4 visit" data-aos="fade-up">
                                    <a href="Technologies-web/Front-end/Etat-de-l'art/Formation-les-technologies.php">

                                        <img src="{{ $formation->img ? asset('storage/' . $formation->img) : asset('/formation/img/default.jpg') }}"
                                            alt="" />

                                    </a>
                                    <div>
                                        <p class="dih"><strong class="upp">{{ $formation->Name }}:
                                            </strong>
                                            <span>
                                                @php
                                                    $text = $formation->MotivaionBody;
                                                    $text = substr($text, 0, 100);
                                                @endphp
                                                {{ $text }}..
                                            </span>
                                        </p>
                                        <h3><a href="{{ $category->Name }}/{{ $subCategory->Name }}/{{ $formation->Name }}"
                                                class="dokha" style="color: #ff1d25;">lire la suite</a></h3>
                                    </div>
                                </div>
                            @empty
                                <p class="dih ml-5  mb-5"> 404 no Formation found</p>
                            @endforelse
                        </div>
                    @empty
                        <h4 class="soutit">404 no subCategorie found</h4>
                    @endforelse
                </div>
            @empty
                <h1 class="taba">404 no Categorie found</h1>
            @endforelse
        </div>
    </section>
</x-Layout>
