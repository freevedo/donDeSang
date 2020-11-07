{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

             <div>
                <x-jet-label for="tel" value="{{ __('Tel') }}" />
                <x-jet-input id="tel" class="block mt-1 w-full" type="numeric" name="tel" :value="old('tel')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Login') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

@extends('layouts.app2')

@section('content')
<section id="cover" class="min-vh-100 login">
<div id="cover-caption" >
<div class="container">
    <div id="login" class="row text-white">
        <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
            <div class="px-2">
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="">
      <label for="tel" value="{{ __('Tel')}}">
      <input type="text" name="tel" id="tel"  placeholder="Veuillez entrer votre telephone " :value="old('tel')" required autofocus >
    </label>
    </div>
    <div>
        <p>

        </p>
    </div>
    <div class="">
      <label for="password" value="{{ __('Password') }}">
      <input type="password" id="password" name="password" placeholder=" Veuillez saisir le mot de passe " required autocomplete="current-password" >
    </label>
    </div>
    <div class="">
        <label for="remember_me" class="flex items-center">
            <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
        </label>
    </div>
    <div class="">
        @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
        @endif

    </div>
    <button class="button" style="vertical-align: middle" type="submit" ><span>{{ __('Login') }}</span></button>

  </form>
            </div>
  </div>
</div>
</div>
</div>
</section>
@endsection