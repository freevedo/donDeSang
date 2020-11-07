@extends('layouts.app2')

@section('content')
    


{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

           <div>
                <x-jet-label for="nom" value="{{ __('Nom') }}" />
                <x-jet-input id="nom" class="block mt-1 w-full" type="text" name="nom" :value="old('nom')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-jet-label for="prenom" value="{{ __('Prenoms') }}" />
                <x-jet-input id="prenom" class="block mt-1 w-full" type="text" name="prenom" :value="old('prenom')" required autofocus autocomplete="surname" />
            </div>

            <div>
                <x-jet-label for="tel" value="{{ __('Tel') }}" />
                <x-jet-input id="tel" class="block mt-1 w-full" type="tel" name="tel" :value="old('tel')" required autofocus autocomplete="tel" />
            </div>

             <div>
                <x-jet-label for="groupe_sanguin" value="{{ __('Groupe Sanguin') }}" />
                <select id="groupe_sanguin" class="block mt-1 w-full"  name="groupe_sanguin" :value="old('groupe_sanguin')" required autofocus autocomplete="blood" >
                    <option value="O-">O-</option>
                    <option value="O+">O+</option>
                    <option value="A-">A-</option>
                    <option value="A+">A+</option>
                    <option value="B-">B-</option>
                    <option value="B+">B+</option>
                    <option value="AB+">AB+</option>
                    <option value="A-">AB-</option>
                </select>
            </div>

            <div>
                <x-jet-label for="ville" value="{{ __('Ville') }}" />
                <select id="ville" class="block mt-1 w-full"  name="ville" :value="old('ville')" required autofocus autocomplete="blood" >
                    <option value="Ouagadougou">Ouagadougou</option>
                    <option value="Bobo-Dioulasso">Bobo-Dioulasso</option>
                </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}


<section id="register">
        <div class="container " >
                  <div class="divider">
                  </div>
                  <div class="heading">
                      <h3>Devenir benevole</h3>
                  </div>
                  <form id="contact-form" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row">
                    <div class="form-group col-lg-6">
                        <label for="nom" value="{{ __('Nom') }}" >Nom<span class="blue"> *</span></label>
                        <input id="nom" class="form-control" type="text" name="nom" :value="old('nom')" required autofocus autocomplete="name" />
                        
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="prenom" value="{{ __('Prenoms') }}" >Prenom<span class="blue"> *</span></label>
                        <input id="prenom" class="form-control " type="text" name="prenom" :value="old('prenom')" required autofocus autocomplete="surname" />
                        
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="tel" value="{{ __('Tel') }}" >Numero de telephone<span class="blue"> *</span></label>
                        <input id="tel" class="form-control" type="tel" name="tel" :value="old('tel')" required autofocus autocomplete="tel" />
                        
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="groupe_sanguin" value="{{ __('Groupe Sanguin') }}" > Groupe sanguin<span class="blue"> *</span></label>
                        <select id="groupe_sanguin" class="form-control"  name="groupe_sanguin" :value="old('groupe_sanguin')" required autofocus autocomplete="blood" >
                            <option value="O-">O-</option>
                            <option value="O+">O+</option>
                            <option value="A-">A-</option>
                            <option value="A+">A+</option>
                            <option value="B-">B-</option>
                            <option value="B+">B+</option>
                            <option value="AB+">AB+</option>
                            <option value="A-">AB-</option>
                        </select>
                        
                    </div>
                    <div class="form-group col-lg-6">
                      <label  for="ville" value="{{ __('Ville') }}">Ville<span class="blue"> *</span></label>
                      <select  id="ville" class="form-control"  name="ville" :value="old('ville')" required autofocus autocomplete="blood">
                        <option value="Ouagadougou">Ouagadougou</option>
                        <option value="Bobo-Dioulasso">Bobo-Dioulasso</option>
                      </select>
                      
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="email" value="{{ __('Email') }}" >Email</label>
                        <input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
                        
                    </div>
        
                    <div class="form-group col-lg-6">
                        <label for="password" value="{{ __('Password') }}" >Mot de passe <span class="blue"> *</span></label>
                        <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                        
                    </div>
        
                    <div class="form-group col-lg-6">
                        <label for="password_confirmation" value="{{ __('Confirm Password') }}" >Confirmer le mot de passe<span class="blue"> *</span></label>
                        <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                        
                    </div>
                    <div class="col-md-12">
                        <p class="blue"><strong> *Ces informations sont recquises</strong>  </p>
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Deja Enregistrer?') }}
                        </a>
                  </div>
                    <button class="button2" style="vertical-align: middle"  type="submit" ><span>S'enregistrer</span></button>
                    <p class="thankyou" style="display: none" >Merci de votre aimable volonte a aider les autres</p>
                  </form>
        </div>
</section>
 
     
 @endsection