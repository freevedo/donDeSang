@extends('layouts.app2')

@section('content')
    

<section id="register">
        <div class="container " >
                  <div class="divider">
                  </div>
                  <div class="heading">
                      <h3>Devenir bénévole</h3>
                  </div>
                  <form id="contact-form" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row">
                    <div class="form-group col-lg-6">
                        <label for="nom" value="{{ __('Nom') }}" >Nom<span class="blue"> *</span></label>
                        <input id="nom" class="form-control" type="text" name="nom" :value="old('nom')" />
                        
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="prenom" value="{{ __('Prenoms') }}" >Prénom<span class="blue"> *</span></label>
                        <input id="prenom" class="form-control " type="text" name="prenom" :value="old('prenom')"  />
                        
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="tel" value="{{ __('Tel') }}" >Numero de téléphone<span class="blue"> *</span></label>
                        <input id="tel" class="form-control" type="tel" name="tel" :value="old('tel')"  placeholder="73456765" />
                        
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
                      <select  id="ville" class="form-control"  name="ville" :value="old('ville')" >
                        <option value="Ouagadougou">Ouagadougou</option>
                        <option value="Bobo-Dioulasso">Bobo-Dioulasso</option>
                      </select>
                      
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="email" value="{{ __('Email') }}" >Email</label>
                        <input id="email" class="form-control" type="email" name="email" :value="old('email')"  />
                        
                    </div>
        
                    <div class="form-group col-lg-6">
                        <label for="password" value="{{ __('Password') }}" >Mot de passe <span class="blue"> *</span></label>
                        <input id="password" class="form-control" type="password" name="password"  />
                        
                    </div>
        
                    <div class="form-group col-lg-6">
                        <label for="password_confirmation" value="{{ __('Confirm Password') }}" >Confirmer le mot de passe<span class="blue"> *</span></label>
                        <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" />
                        
                    </div>
                    <div class="col-md-12">
                        <p class="blue"><strong> *Ces informations sont recquises</strong>  </p>
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Déjà Enregistré?') }}
                        </a>
                  </div>
                    <button class="button2" style="vertical-align: middle"  type="submit" ><span>S'enregistrer</span></button>
                    <p class="thankyou" style="display: none" >Merci de votre aimable volonté à aider les autres</p>
                  </form>
        </div>
</section>
 
     
 @endsection