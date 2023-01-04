

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @yield('title')
   @include('include.head')

</head>
<body>

    <!-- Extension DATEPICKER -->
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js')}}"></script>

    <!-- Preloader Start -->
    {{-- @include('include.preloader') --}}
    <!-- Preloader Start -->

    {{-- HEADER HERE --}}
    <header>
        <!-- Header Start -->
        <div class="header-area header-sticky bg-gold">
            <div class="main-header ">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- logo -->
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo my-3">
                                <!-- <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a> -->
                                <a href="index.html">
                                    <h1 class="font-weight-bold text-white">Ticy Hotels</h1>
                                </a>
                            </div>
                        </div>

                        {{-- <div class="col-xl-3 col-lg-3">
                            <!-- header-btn -->
                            <div class="header-btn">
                                <a href="{{route('inscription')}}" class="btn btn1 d-none d-lg-block ">Ajouter votre établissement</a>
                            </div>
                        </div> --}}
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
        <!-- Header End -->
    <main class="bg-light">
        <div class="container-fluid">
           
        </div>

        <div class="container-fluid row d-flex justify-content-center m-0 p-0 step2-area">
            <div class="col-lg-10 mt-30 ">
                <h3 class=" text-brown bold  ">Etape 2: Entrez les coordonnées de votre etablissement</h3>
                <p class="" > indiquez-nous le nom de votre établissement, son adresse et vos coordonnées.</p>

            </div>
            <div class="col-lg-10 ">
                <form action="">
                    {{-- 07 79 33 85 06 --}}

                    <div class="bg-white p-5 mt-50">
                        <h3 class="mb-20">Entrez le nom de votre etablissement</h3>
                        <div class="single-select-box mb-10 bg-white">
                            <label for="" class="m-0"> nom de l'Etablissement</label>
                            <div class="datepicker date input-group  mb-3">
                                <input id="datepicker2" type="text" class="form-control" placeholder="" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div>
                        <p class="text_p9">Il s'agit du nom que les clients verront lorsqu'ils rechercheront un hébergement.</p>

                    </div>

                    <div class="bg-white p-5 mt-50">
                        <h3 class="mb-20">Entrez des contacts pour votre etablissement</h3>
                        <div class="single-select-box mb-10 bg-white">
                            <label for="telEtab">numero de telephone</label>
                            <div class="input-group  mb-3">
                                <input  type="tel" class="form-control" name="telEtab" placeholder="ex: 0798765432" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div>
                        <div class="single-select-box mb-10 bg-white">
                            <div class="input-group  mb-3">
                                <label for="mailEtab">adresse email</label>
                                <div class="  input-group  mb-3">
                                    <input  type="email" name="mailEtab" class="form-control" placeholder="exemple@example.com" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class=" bg-white p-5 mt-50 mb-50">
                        <h3 class="mb-20">Localisez votre etablissement</h3>
                        <div class="single-select-box mb-10">
                            <label for="ville" class="m-0">ville</label>
                            <div class=" input-group  mb-3">
                                <input id="" type="text" name="ville" class="form-control" placeholder="" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div>
                        <div class="single-select-box mb-10">
                            <label for="commune" class="m-0">commune</label>
                            <div class=" input-group  mb-3">
                                <input id="" type="text" name="commune" class="form-control" placeholder="" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div>
                        <div class="single-select-box mb-10">
                            <label for="" class="m-0">quartier</label>
                            <div class="e input-group  mb-3">
                                <input id="" type="text" name="quartier" class="form-control" placeholder="" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">

                        <div class=" pt-45 mb-30 ">
                            <a href="#" class="btn border-btn">Retour</a>
                        </div>
                        <div class=" pt-45 mb-30">
                            <a href="#" class="btn select-btn">Suivant</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>



</body>


