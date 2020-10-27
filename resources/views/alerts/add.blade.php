
<div class="card-body">

<form role="form" action= "{{ url('alert')}}" method="POST">
  @csrf
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
    <select  class="form-control" id="ville" name="ville">
      <option>Ouagadougou</option>
      <option>Bobo-Dioulasso</option>
    </select>
  </div>

  <div class="form-group">
    <label for="position">N a contacter</label>
    <input type="number" class="form-control" name="tel" id="tel">
  </div>
  <div class="form-group">
    <label for="position">ou avez vous besoin du sang</label>
    <input type="text" class="form-control" name="position" id="position">
  </div>
  <div class="form-group">
    <label for="message">voulez vous ajouter un message?</label>
    <textarea class="form-control" id="message" name="message" rows="3"></textarea>
  </div>

   <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
</form>

</div>

