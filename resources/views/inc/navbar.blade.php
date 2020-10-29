<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="{{ url('/') }}">SosBloodbf</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{ url('/') }}">Home</a></li>
          <li><a href="">About</a></li>
          <li><a href="  {{ url('/alert/create')  }}">Envoyer une alerte</a></li>
          <li><a href="">Events</a></li>
          <li><a href="{{ route('register') }}">Register</a></li>
          <li><a href="">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="{{ route('login') }}" class="get-started-btn">Login</a>

    </div>
  </header><!-- End Header -->