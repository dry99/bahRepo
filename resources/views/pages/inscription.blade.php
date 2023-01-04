
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
                <div class="card-header">{{ __('Ouvrez votre compte') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="profile" class="col-md-4 col-form-label text-md-end">{{ __('Profile') }}</label>

                            <div class="col-md-6">

                                <select class="form-control @error('profile') is-invalid @enderror" name="profile" value="{{ old('profile') }}" required autocomplete="profile" autofocus>
                                    
                                </select> 
                                @error('profile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
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
                                    {{ __('Se connecter') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-dark-600 hover:text-dark-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                        {{ __('Mot de passe oublié?') }}
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
@endsection



