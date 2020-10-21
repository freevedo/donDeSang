@extends('layouts.app')

@section('content')

<div class="card-body">

<form>
  <div class="form-group">
    <label for="date_demande">date de la demande</label>
    <input type="date" class="form-control" name="date_demande" id="date_demande">
  </div>
  <div class="form-group">
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
  <div class="form-group">
    <label for="Ville">Ville</label>
    <select multiple class="form-control" id="ville" name="ville">
      <option>Ouagadougou</option>
      <option>Bobo-Dioulasso</option>
    </select>
  </div>

  <div class="form-group">
    <label for="position">ou avez vous besoin du sang</label>
    <input type="text" class="form-control" name="position" id="position">
  </div>
  <div class="form-group">
    <label for="message">voulez vous ajouter un message?</label>
    <textarea class="form-control" id="message" name="message" rows="3"></textarea>
  </div>
</form>

</div>

@endsection