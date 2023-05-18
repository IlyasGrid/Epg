<x-layout>
    <link rel="stylesheet" href="/formation/style.css">
    <section class="section visit-section mt-5 ">
        <div class="container mt-5">
            @foreach ($categories as $category)
                <div>
                    <h1 class="taba">{{ $category->Name }}</h1>

                    @foreach ($category->subCategories as $subCategory)
                        <h3 class="soutit">{{ $subCategory->Name }}</h3>
                        <div class="row">
                            @foreach ($subCategory->formations as $formation)
                                <div class="col-lg-3 col-md-6 mt-4 visit" data-aos="fade-up">
                                    <a href="Technologies-web/Front-end/Etat-de-l'art/Formation-les-technologies.php">
                                        {{-- <img src="../Formation/img/{{ $formation->Name }}.jpg"
                                            onerror="this.src='../formation/img/default.jpg';" class="img-fluid"> --}}
                                        <img src="{{ $formation->img ? asset('storage/' . $formation->img) : asset('/formation/img/default.jpg') }}"
                                            alt="" />

                                    </a>
                                    <div>
                                        <p class="dih"><strong class="upp">{{ $formation->Name }}:
                                            </strong>{{ $formation->MotivaionBody }}</p>
                                        <h3><a href="{{ $category->Name }}/{{ $subCategory->Name }}/{{ $formation->Name }}"
                                                class="dokha" style="color: #ff1d25;">lire la suite</a></h3>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </section>
</x-layout>
