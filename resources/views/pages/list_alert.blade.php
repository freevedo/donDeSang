@extends('layouts.app2')

@section('content')

<!-- ======= Hero Section ======= -->


  <main id="main">

   @foreach ($alerts as $alert )
   {{$alert->date_alert}} {{$alert->tel}} {{$alert->groupe_sanguin}} {{$alert->groupe_sanguin}}
       
   @endforeach


  </main><!-- End #main -->
 
@endsection