

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
      <input type="text" name="tel" id="tel"  placeholder="Veuillez entrer votre telephone " :value="old('tel')" class="@error('tel') is-invalid @enderror" >
      @error('tel')
      <div class="invalid-form">{{ $message }}</div>
        @enderror
    </label>
    </div>
    <div>
        <p>

        </p>
    </div>
    <div class="">
      <label for="password" value="{{ __('Password') }}">
      <input type="password" id="password" name="password" placeholder=" Veuillez saisir le mot de passe " class="@error('password') is-invalid @enderror">
      @error('password')
      <div class="invalid-form">{{ $message }}</div>
        @enderror
    </label>
    </div>
    <div class="">
        <label for="remember_me" class="flex items-center">
            <input id="remember_me" type="checkbox" checked="checked" class="form-checkbox" name="remember">
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


