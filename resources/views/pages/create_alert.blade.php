@extends('layouts.app2')

@section('content')

<!-- ======= Hero Section ======= -->


  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

       <form method="POST" action="/alert">

        @csrf
            <div class="row">

                <div class="form-group col-lg-6">
                    <label for="groupe_sanguin" value="{{ __('Groupe Sanguin') }}" > Groupe sanguin<span class="blue"> *</span></label>
                    <select id="groupe_sanguin" class="form-control"  name="groupe_sanguin" :value="old('groupe_sanguin')" required autofocus autocomplete="groupe_sanguin" >
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
                    <label for="tel"  >Tel N a contacter<span class="blue"> *</span></label>
                    <input id="tel" class="form-control" type="number" name="tel" :value="old('tel')" required autofocus autocomplete="tel" />                        
                </div>
                    
                <div class="form-group col-lg-6">
                    <label for="position"  >Votre position <span class="blue"> *</span></label>
                    <input id="position" class="form-control " type="text" name="position" :value="old('position')" required autofocus autocomplete="position" />    
                </div>
                    
                <div class="form-group col-lg-6">
                    <label for="message"  >voulez vous ajouter un message<span class="blue"> *</span></label>
                    <textarea id="message" class="form-control" type="text" name="message" :value="old('message')" maxlenght="255" rows="5" cols="33">

                    </textarea>
                 
                </div>
                    
            <button class="button2" style="vertical-align: middle"  type="submit" ><span>Envoyer l'alerte sang</span></button>
       </form>

      </div>
    </section><!-- End About Section -->

   


  </main><!-- End #main -->
 
@endsection