@extends('layouts.master')

{{-- @section('title', 'TICY,Accueil') --}}

@section('content')
<div class="container-fluid row main_search">
    <!-- <---filtres (aside)-->
    <div class="col-4 aside-column ">
        <aside class="single_sidebar_widget search_widget p-3" id="search_widget">
            <h2>Rechercher</h2>.
            <!-- <form action="#">
               <div class="form-group">
                  <div class="input-group-icon mt-10">
                    <label for="destination">destination</label>
                    <select class="form-control destination">
                            <option value=" 1">Cocody-Abidjan</option>
                            <option value="1">Yopougon-Abidjan</option>
                            <option value="1">Abengourou</option>
                            <option value="1">Agnibilekro</option>
                            <option value="1"></option>
                        </select>
                    </div> -->

            <form action="">
                <div class="booking-wrap ">

                    <!-- select in date -->
                    <div class="single-select-box mb-30">
                        <!-- select out date -->
                        <div class="boking-tittle">
                            <span> Check In Date:</span>
                        </div>
                        <div class="boking-datepicker">
                            <input id="datepicker1" placeholder="10/12/2020" />
                        </div>
                    </div>
                    <!-- Single Select Box -->
                    <div class="single-select-box mb-30">
                        <!-- select out date -->
                        <div class="boking-tittle">
                            <span>Check OutDate:</span>
                        </div>
                        <div class="boking-datepicker">
                            <input id="datepicker2" placeholder="12/12/2020" />
                        </div>
                    </div>
                    <!-- Single Select Box -->
                    <div class="single-select-box mb-30">
                        <div class="boking-tittle">
                            <span>Adults:</span>
                        </div>
                        <div class="select-this">
                            <form action="#">
                                <div class="select-itms">
                                    <select name="select" id="select1">
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Single Select Box -->
                    <div class="single-select-box mb-30">
                        <div class="boking-tittle">
                            <span>Children:</span>
                        </div>
                        <div class="select-this">
                            <form action="#">
                                <div class="select-itms">
                                    <select name="select" id="select2">
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Single Select Box -->
                    <div class="single-select-box mb-30">
                        <div class="boking-tittle">
                            <span>Rooms:</span>
                        </div>
                        <div class="select-this">
                            <form action="#">
                                <div class="select-itms">
                                    <select name="select" id="select3">
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Single Select Box -->
                    <div class="single-select-box pt-45 mb-30">
                        <a href="#" class="btn select-btn">Book Now</a>
                    </div>


                </div>
            </form>
        </aside>
        <h3 class="my-3 ml-10">Filtrer par:</h3>
        <aside class="border p-3 mb-50">
            <h4 class="font-weight-bold">budget</h4>
            <div>
                <input type="checkbox" id="confirm-checkbox">
                <label for="confirm-checkbox">20 000 - 50 000 FCFA</label>

            </div>
            <div>
                <input type="checkbox" id="confirm-checkbox">
                <label for="confirm-checkbox">50 000 - 90 000 FCFA</label>

            </div>
            <div>
                <input type="checkbox" id="confirm-checkbox">
                <label for="confirm-checkbox">90 000 FCFA et plus</label>

            </div>

        </aside>
        <!-- <aside class="border p-3 mt-10">
            <h4 class="font-weight-bold">general</h4>
            <div>
                <input type="checkbox" id="confirm-checkbox">
                <label for="confirm-checkbox">hskkskksk</label>

            </div>
            <div>
                <input type="checkbox" id="confirm-checkbox">
                <label for="confirm-checkbox">hskkskksk</label>

            </div>

        </aside> -->

    </div>
    <div class="col-8 info_column">
        <h1 class="text-muted border-bottom m-3 pb-10">56 Etablissements trouves (Abidjan)</h1>

        <div class="row border  ">
            <div class="col-4  img_area p-0 align-center ">
                <img src="{{asset('marian/assets/img/customer/customar1.png')}}" alt="" class="img-fluid">

            </div>
            <div class="col-8 p-0">
                <div class="container-fluid info_area row pt-3 px-0  border-bottom">
                    <div class="col-8 ">
                        <div>
                            <h2>movenpick hotel</h1>
                        </div>
                        <div>
                            <a class="text-muted font-size-1">cocody,abidjan</a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-inline-flex">
                            <h6 class="mr-10">note:</h6>
                            <i class="fas fa-star " ></i>
                            <i class="fas fa-star   "></i>
                            <i class="fas fa-star   "></i>
                            <i class="fas fa-star   "></i>
                            <i class="fas fa-star   "></i>
                        </div>
                        <div>
                            <h3>Tres Bien </h3>
                            <p class=" text-muted">113 avis reçu</p>
                        </div>
                    </div>
                </div>

                <div class="container-fluid row pt-10 pl-0 m-0">
                    <div class="col-7 p-0">
                        <h4 class="m-0 font-weight-bold">chambre double</h4>
                        <h6 class="text_p11 text-muted m-0  lh-1">1 grand lit double</h6>
                        <span class="text-success text_p11">petit dejeuner compris</span>
                    </div>
                    <div class="col-5 pr-10 ">
                        <div class="">
                            <h6 class="text_p11 text-end ">1 nuit, 2 adultes</h6>
                            <h2 class="text_h3 text-end">XOF 25 000</h2>
                            <h6 class="text_p9 text-muted text-end">taxes et frais compris</h6>
                            <a href=""><p class=" text_p11 text-primary text-end">voir l'Etablissement</p></a>

                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="row border mt-20 ">
            <div class="col-4 mt-20 img_area p-0 align-center ">
                <img src="{{asset('marian/assets/img/customer/customar1.png')}}" alt="" class="img-fluid">

            </div>
            <div class="col-8 p-0">
                <div class="container-fluid info_area row pt-3 px-0  border-bottom">
                    <div class="col-8 ">
                        <div>
                            <h2>movenpick hotel</h1>
                        </div>
                        <div>
                            <a class="text-muted font-size-1">cocody,abidjan</a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-inline-flex">
                            <h6 class="mr-10">note:</h6>
                            <i class="fas fa-star " ></i>
                            <i class="fas fa-star   "></i>
                            <i class="fas fa-star   "></i>
                            <i class="fas fa-star   "></i>
                            <i class="fas fa-star   "></i>
                        </div>
                        <div>
                            <h3>Tres Bien </h3>
                            <p class=" text-muted">113 avis reçu</p>
                        </div>
                    </div>
                </div>

                <div class="container-fluid row pt-10 pl-0 m-0">
                    <div class="col-7 p-0">
                        <h4 class="m-0 font-weight-bold">chambre double</h4>
                        <h6 class="text_p11 text-muted m-0  lh-1">1 grand lit double</h6>
                        <span class="text-success text_p11">petit dejeuner compris</span>
                    </div>
                    <div class="col-5 pr-10 ">
                        <div class="">
                            <h6 class="text_p11 text-end ">1 nuit, 2 adultes</h6>
                            <h2 class="text_h3 text-end">XOF 25 000</h2>
                            <h6 class="text_p9 text-muted text-end">taxes et frais compris</h6>
                            <a href=""><p class=" text_p11 text-primary text-end">voir l'Etablissement</p></a>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
 </div>
@endsection
