
@extends('layouts.master')

{{-- @section('title', 'TICY,Accueil') --}}

@section('content')
<!-- <div class="container-fluid slider-height regist-area row d-flex justify-content-center" data-background="assets/img/hero/h1_hero.jpg">
    <div class="col-6  form_area hvr-glow mt-50 mb-100 pt-50 pb-50 pl-50 pr-50">
        <h2 class="text-center"> Enregistrement d'un nouvel Etablissement</h2>
        <form action="">
            <div class="container form_contain">
                <div class="input_regist mx-3 mt-30">
                    <input type="text" name="nom" placeholder="nom" class="single-input hvr-grow hvr-glow">
                </div>
                <div class="input_regist  mx-3 mt-30">
                    <input type="text" name="prenom" placeholder="prenom" class="single-input hvr-grow hvr-glow">
                </div>
                <div class="input_regist  mx-3 mt-30">
                    <input type="text" name="mail" placeholder="adresse mail" class="single-input hvr-grow hvr-glow">
                </div>
                <div class="input_regist  mx-3 mt-30">
                    <input type="tel" name="numero" placeholder="numero de telephone" class="single-input hvr-grow hvr-glow">
                </div>
                <div class="input_regist  mx-3 mt-30">
                    <input type="password" name="motDePasse" placeholder="mot de passe" class="single-input hvr-grow hvr-glow">
                </div>
                <div class="input_regist  mx-3 mt-30">
                    <input type="password" name="confirmMDP" placeholder="confirmation du mot de passe" class="single-input hvr-grow hvr-glow">
                </div>
                <div class="single-select-box pt-45 mb-30 d-flex justify-content-center">
                    <a href="#" class="btn select-btn">Suivant</a>
                </div>
            </div>

        </form>
   </div>
</div> -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{(Request::routeIs('customers.register'))? __('Ouvrez votre compte Client'): __('Ouvrez votre compte Partner')}}</div>
                <style>
            label.error {
                        color: red;
                        /* font-weight: 400; */
                        /* display: block; */
                        /* padding: 6px 0; */
                        /* font-size: 14px;  */
                    } 
        </style>
                <div class="card-body">
                    <form method="POST" action="{{route('register')}}" id="create-partner">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="last_name" class="col-md-4 col-form-label text-md-end">{{ __('Prenom') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Adresse e-mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Mot de Passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmation') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="inline-flex items-center px-4 py-2 bg-dark-800 border border-transparent rounded-md font-semibold text-xs text-dark uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                    {{ __("S'inscrire") }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-dark-600 hover:text-dark-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 offset-md-3" href="{{ route('login') }}">
                                        {{ __('Déjà un compte?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
    @section('script')
        <script>

    $(document).ready(function () {
        if ($("#create-partner").length > 0) {
            $('#create-partner').validate({
                rules: {
                    name:{
                        required: true,
                        // minlength: 4,
                        // regexp: /^[a-zA-Z0-9-\.\ ]+$/,
                        // maxlength: 15,
                    },
                    last_name : {
                        required:true,
                        // regexp: /^[a-zA-Z0-9-\.\ ]+$/,
                        minlength:3,
                        maxlength:30
                    },
                    email : {
                        required : true,
                        email :true,
                        // regexp: /^[\w-']+(\.[\w-']+)*@([a-zA-Z0-9]+[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*?\.[a-zA-Z]{2,6}|(\d{1,3}\.){3}\d{1,3})(:\d{4})?$/,
                        maxlength:50
                    },
                    password:{
                        required:true, 
                    },
                    password_confirmation : {
                        required: true,
                        equalTo: "#password"
                    }
                },
                messages : {
                    name : 
                    {
                        required:"Veuillez fournir une addresse email ou un numéro de téléphone valide",
                    },
                    last_name:{
                        required: "Veuillez fournir un prénom",
                        minlength:"Votre prénom doit contenir au moin 3 caractères",
                        maxlength:"Votre prénom doit contenir au plus 30 caractères",
                    },
                    email: {
                            required:'Saisir une adresse email',
                        },
                        password: {
                            required:'Saisir un mot de passe',
                        },
                    password_confirmation:{
                        required:'La confirmation est obligatoire',
                        equalTo:'La confirmation est different du mot de passe',      
                    }

                },
                
            });
            jQuery.validator.addMethod(
                    "last_name",
                    function(value, element) {
                    // return /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/.test(value);
                    return /^[a-zA-Z0-9-\.\ ]+$/.test(value);
                    },
                     'Votre prénom doit être composé uniquement de lettres, de chiffre, de . de - et d espace'
                );
                jQuery.validator.addMethod(
                    "email",
                    function(value, element) {
                    // return /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/.test(value);
                    return /^[\w-']+(\.[\w-']+)*@([a-zA-Z0-9]+[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*?\.[a-zA-Z]{2,6}|(\d{1,3}\.){3}\d{1,3})(:\d{4})?$/.test(value);
                    },
                    'ceci n’est pas une adresse email valide'                
                );
                jQuery.validator.addMethod(
                    "password",
                    function(value, element) {
                    // return /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/.test(value);
                    return /^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=\S+$).{8,}$/.test(value);
                    },
                    'Mot de passe incorrect, Longueur minimum 8 caractères, comprenant au moins un chiffre au moins un majuscule',
                );
            
        }
    });
    </script>
    @endsection
@endsection



