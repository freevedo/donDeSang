@extends('layouts.app2')

@section('content')

<div class="card-body">
    <div class="container alert" >
        {{-- <div class="row"> --}}
            <div >
              <div class="divider">
              </div>
              <div class="heading">
                  <h3>Envoyer une alert</h3>
              </div>
              <div>
              <form >
                <div class="row">
                <div class="form-group col-lg-6">
                  <label for="date_demande">date de la demande</label>
                  <input type="date" class="form-control" name="date_demande" id="date_demande">
                </div>
                <div class="form-group col-lg-6">
                  <label for="sang">Groupe Sanguin en besoin</label>
                  <select class="form-control" id="sang" name="sang">
                      <option>O-</option>
                      <option>O+</option>
                      <option>A-</option>
                      <option>A+</option>
                      <option>B-</option>
                      <option>B+</option>
                      <option>AB-</option>
                      <option>AB+</option>
                  </select>
                </div>
                <div class="form-group col-lg-6">
                  <label for="Ville">Ville</label>
                  <select  class="form-control" id="ville" name="ville">
                    <option>Ouagadougou</option>
                    <option>Bobo-Dioulasso</option>
                  </select>
                </div>
                <div class="form-group col-lg-6">
                  <label for="position">ou avez vous besoin du sang</label>
                  <input type="text" class="form-control" name="position" id="position" placeholder="CMA,dispensaire,quartier...">
                </div>
                <div class="form-group col-lg-12">
                  <label for="message">voulez vous ajouter un message?</label>
                  <textarea class="form-control" id="message" name="message" rows="5" placeholder="Entrez votre message ici" ></textarea>
                </div>
              </div>
              <div>
                <button class="button1"   type="submit" ><span>Envoyer</span></button>
              </div>
              </form>
            </div>
            </div>
    </div>
</div>

@endsection