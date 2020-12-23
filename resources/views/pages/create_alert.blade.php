@extends('layouts.app2')

@section('content')


  <main id="main">

    <!-- ======= Create_alert ======= -->
    <section id="create" class="create">
      <div class="container " data-aos="fade-up">
        
        <div class="heading">
            <h3>Envoyer une alerte</h3>
        </div>
        <div class="divider">
        </div>
       <form method="POST" action="{{ url('/alert') }}">

        @csrf
            <div class="row">
                <div class="form-group col-lg-6">
                    <label for="groupe_sanguin" value="{{ __('Groupe Sanguin') }}" > Groupe sanguin<span class="blue"> *</span></label>
                    <select id="groupe_sanguin" class="form-control @error('groupe_sanguin') is-invalid @enderror"  name="groupe_sanguin" :value="old('groupe_sanguin')"  >
                        <option value="O-">O-</option>
                        <option value="O+">O+</option>
                        <option value="A-">A-</option>
                        <option value="A+">A+</option>
                        <option value="B-">B-</option>
                        <option value="B+">B+</option>
                        <option value="AB+">AB+</option>
                        <option value="A-">AB-</option>
                    </select>
                    @error('groupe_sanguin')
                            <div class="invalid-form">{{ $message }}</div>
                        @enderror 
                </div>

                 <div class="form-group col-lg-6">
                      <label  for="ville" value="{{ __('Ville') }}">Ville<span class="blue"> *</span></label>
                      <select  id="ville" class="form-control @error('ville') is-invalid @enderror"  name="ville" :value="old('ville')" >
                        <option value="Ouagadougou">Ouagadougou</option>
                        <option value="Bobo-Dioulasso">Bobo-Dioulasso</option>
                      </select>
                      @error('ville')
                            <div class="invalid-form">{{ $message }}</div>
                        @enderror                      
                </div>
            
                <div class="form-group col-lg-6">
                    <label for="tel"  >Numéro à contacter<span class="blue"> *</span></label>
                    <input id="tel" class="form-control @error('tel') is-invalid @enderror" type="tel" name="tel" :value="old('tel')" placeholder="73456765"  />
                    @error('tel')
                            <div class="invalid-form">{{ $message }}</div>
                        @enderror 
                  </div>
                    
                <div class="form-group col-lg-6">
                    <label for="position"  >Votre position <span class="blue"> *</span></label>
                    <input id="position" class="form-control @error('posiition') is-invalid @enderror" type="text" name="position" :value="old('position')"  placeholder="Hopital,centre de santé,Secteur,Quartier..."  /> 
                    @error('position')
                            <div class="invalid-form">{{ $message }}</div>
                    @enderror   
                </div>
                    
                <div class="form-group col-lg-6">
                    <label for="message"  >Ajouter un message<span class="blue"> *</span></label>
                    <textarea id="message" class="form-control" type="text" name="comment" :value="old('message')" form="usrform"  rows="5"  cols="50">

                    </textarea>
                 
                </div>
                    
            <button class="button2" style="vertical-align: middle"  type="submit" ><span>Envoyer l'alerte </span></button>
       </form>

      </div>
    </section><!-- End Section Create -->

   


  </main><!-- End #main -->
 
@endsection