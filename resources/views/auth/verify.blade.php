@extends('layouts.master')

@section('content')

    
<div class="card m-2" style="width: 28rem;">
    <div class="card-header">{{ __('Vérifiez votre adresse e-mail') }}</div>
    <div class="card-body">
        <!-- <h5 class="card-title">Card title</h5>
        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
        @if (session('resent'))
            <div class="alert alert-success" role="alert">
                {{-- __('A fresh verification link has been sent to your email address.') --}}
                {{ __('Un nouveau lien de vérification a été envoyé à votre adresse e-mail.') }}
            </div>
        @endif
        
        {{-- __('Before proceeding, please check your email for a verification link.') --}}
        {{ __('Avant de continuer, veuillez vérifier votre e-mail pour un lien de vérification..') }}
        {{-- __('If you did not receive the email') --}},
        {{ __("Si vous n'avez pas reçu l'e-mail") }},
        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
            @csrf
        <button type="submit" class="inline-flex items-center px-4 py-2 bg-warning-800 border border-transparent rounded-md font-semibold text-xs text-warning uppercase tracking-widest hover:bg-gray-700 focus:bg-warning-700 active:bg-warning-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">{{ __('cliquez ici pour en demander un autre') }}</button>.
        </form>
        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a> -->
    </div>
</div>
<!-- <hr> -->
@endsection
