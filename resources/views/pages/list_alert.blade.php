@extends('layouts.app2')

@section('content')

<!-- ======= Hero Section ======= -->


  <main id="main">
    <section>
      <div class="container">
          <div>
            <h3>Liste des alertes en cours</h3>
          </div>
        @foreach ($alerts as $alert )
      {{$alert->date_alert}} {{$alert->tel}} {{$alert->groupe_sanguin}} {{$alert->groupe_sanguin}}
          
      @endforeach

      </div>
      
    </section>
  


  </main><!-- End #main -->
 
@endsection