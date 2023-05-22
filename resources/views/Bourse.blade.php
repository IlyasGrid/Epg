<x-Layout>



    <!-- origin Stylesheet -->
    <link rel="stylesheet" href="/Diplome/metate.css" />
    <link rel="stylesheet" href="/Index/Biblo.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bource.css">

    <section>
        <div class="xe1"></div>


        <!-- fixed button end -->
        <aside class='Kaoutar'>
            <div class='container'>
                <div class='row'>
                    <div class='col-lg-12'>


                    </div>
                </div>
        </aside>
    </section>



    <div class="container">

        <div class="row">

            <div class="col-lg-2"></div>

            <div class="col-lg-8 ads">
                <h1 class="br">المنحـــة الدراسيـــة</h1>
                <h2 class="br1"> La Bourse d'étude</h2>
                <div class="minha">
                    @if ($bourse == null)
                        <h2 class="text-danger text-capitalize m-5 p-5"> Nothing to show</h2>
                    @else
                        <p>{{ $bourse->text }}</p>

                        <ul>
                            <h3>على المترشح ان يدلي بكافة الوثائق المرفقة </h3>
                            <li>
                                <ul>

                                    @php
                                        $conditions = explode(';', $bourse->conditions);
                                    @endphp
                                    @forelse ($conditions as $condition)
                                        <li>{{ $condition }}</li>
                                    @empty
                                       {{-- <li> <h4 class="text-danger">no condition found</h4></li> --}}
                                    @endforelse
                                </ul>
                            </li>
                            <li>ملئ الاستمارات المطلوبة مع تقديم شرح مفصل عن أسباب طلب المنحة</li>
                            <li><a href="Documentations/Minha.pdf" target="blank">اضغط هنا لتحميل الاستمارات
                                    المطلوبة</a>
                            </li>
                        </ul>
                        </p>
                </div>
                @endif
            </div>

            <div class="col-lg-2"></div>

        </div>

    </div>

</x-Layout>
