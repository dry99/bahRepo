@extends('layouts.master')
@section('content')
        <main>
            
        <div class="container-fluid row regist_area bg-light d-flex justify-content-center m-0">

            <p class="text-center text-dark mt-20 mb-20 ">Inscrivez votre hébergement sur <b class="text-gold">Ticy</b> et commencez à recevoir des clients en un rien de temps !</p>

            <div class="col-lg-10 col-md-11 col-sm-10 rounded-3 mt-20 mb-50  ">

                <p class="text-center mt-20 mb-20">Choisissez le type d'etablissement que vous souhaitez inscrire</p>

                <div class="row d-flex justify-content-between ">
                    @foreach(Qs::getAllTypeEts() as $type_e)
                        <div class="col-lg-5 col-md-5 card_etab border-gold rounded-3 bg-white mt-30 p-4">
                            <div class="d-flex justify-content-center my-5 icon_etab">
                                <i class="fas fa-building " id="icon-hotel"></i>

                            </div>
                            <h3 class="text-center bold">{{$type_e->name}}</h3>
                            <p class="text-center text_p11 mb-30">{{$type_e->description}}
                            </p>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-10 col-md-10 col-sm-10 d-flex justify-content-center">
                                    <a href="{{route('establishment.store',Qs::hash($type_e->id))}}" class="btn ">Inscrire </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{-- <div class="col-lg-5 col-md-5 card_etab mt-30 border-gold rounded-3 bg-white  p-4">
                        <div class="d-flex justify-content-center my-5 icon_etab">
                            <i class="fas fa-home " id="icon-resi"></i>
                        </div>
                        <h3 class="text-center bold">Residence</h3>
                        <p class="text-center text_p11 mb-30">Hébergement meublé avec cuisine que les clients peuvent louer intégralement
                        </p>
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-10 col-md-10 col-sm-10 d-flex justify-content-center">
                                <a href="#" class="btn ">Inscrire </a>
                            </div>
                        </div>
                    </div> --}}

                    
                </div>
            </div>

        </div>
    </main>

@endsection


