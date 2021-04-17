<footer  class="text-center ">
  <a href="{{ url('/#hero') }}" class="back-to-top">
      <span class="fas fa-chevron-up" ></span>
  </a>
  <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h2 class="titel-logo">Fasoblood</h2>
            <p>
              <strong>Phone:</strong> +226 71 73 69 56<br>
              <strong>Email:</strong>sosbloodbf@gmail.com<br>
            </p>
            <div class="social-links mt-3">
              <a href="https://www.facebook.com/SoSbloodbf-105416901380737/?view_public_for=105416901380737" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://twitter.com/sosbloodbf" class="twitter"><i class="bx bxl-twitter"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Sitemap</h4>
            <div class="container">
              <ul>
                <li><i class="bx bx-chevron-right "></i> <a class="linkmain" href="{{ url('/') }}">Home</a></li>
                <li><i class="bx bx-chevron-right "></i> <a class="linkmain" href="{{ url('/#about') }}">About us</a></li>
                <li><i class="bx bx-chevron-right "></i> <a class="linkmain" href="{{ url('/#departments') }}">Services</a></li>
                <li><i class="bx bx-chevron-right "></i> <a class="linkmain" href="{{ url('/alert') }}">Alertes</a></li>
                <li><i class="bx bx-chevron-right "></i> <a class="linkmain" href="{{url('/alert/create') }}">Envoyer une alerte</a></li>
                <li><i class="bx bx-chevron-right "></i> <a class="linkmain" href="{{ route('register') }}">S'enregistrer</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 footer-form" >
            <h4>Contactez nous</h4>
              <div class="form-group col-lg-6">
                <label for=""></label>
                <input type="text" name="name" id="name" placeholder="Nom complet">
              </div>
              <div class="form-group col-lg-6">
                <label for=""></label>
                <input type="text" name="email" id="email" placeholder="Adresse email">
              </div>
              <div class="form-group col-lg-6">
                <label for=""></label>
                <textarea name="message" id="message" cols="30" rows="5"></textarea>
              </div>
              {{-- <input type="text" name="" id="">
              <input type="text" name="" id="">
              <input type="  " style="width: 100%"> --}}
          </div>
        </div>
      </div>
      <div class="copyright"> <p> 2021 © Tous droits reserves. By Fasoblood</p></div>
 
</footer>