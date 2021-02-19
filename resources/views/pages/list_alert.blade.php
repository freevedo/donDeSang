@extends('layouts.app2')

@section('content')

<!-- ======= Hero Section ======= -->


  <main id="main">
    <section>
      <div class="container">
          <div>
            <h3>Liste des alertes en cours</h3>
          </div>
            <h1><strong>Liste des alertes en cours    </strong></h1>
                <table class="table table-striped table-bordered table-dark table-responsive-sm">
                    <thead>
                        <tr>
                            <th>Date de l'alerte</th>
                            <th>Contact</th>
                            <th>Ville</th>
                            <th>localisation</th>
                            <th>Groupe sanguin</th>
                            {{-- <th>Categorie</th>
                            <th>Actions</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($alerts as $alert )
                      <tr>
                        <td> {{$alert->date_alert}}   </td>
                        <td>{{$alert->tel}}</td>
                        <td>{{ $alert->ville }}</td>
                        <td>{{ $alert->position}}</td>
                        <td>{{$alert->groupe_sanguin}}</td>
                        
                      </tr>
                      @endforeach
                    </tbody>
                </table>
          </div>
          
     

      </div>
      
    </section>
  


  </main><!-- End #main -->
 
@endsection