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
              <strong>Phone:</strong> <a href="tel:+22671736956">+226 71 73 69 56</a>  <br>
              <strong>Mobile:</strong> <a href="tel:+22678094792">+226 78094792</a>  <br>
              <strong>Email:</strong><a href="mailto:infos@fasoblood.net">  infos@fasoblood.net</a><br>
            </p>
            <div class="social-links mt-3">
              <a href="https://www.facebook.com/SoSbloodbf-105416901380737/?view_public_for=105416901380737" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://twitter.com/sosbloodbf" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
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
              <div class="form-group col-lg-10">
                <label for="name"> Votre nom</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Nom complet">
              </div>
              <div class="form-group col-lg-10">
                <label for="email"> Votre adresse email(optional)</label>
                <input  class="form-control" type="text" name="email" id="email" placeholder="Adresse email">
              </div>
              <div class="form-group col-lg-10">
                <label for="message">Votre message</label>
                <textarea class="form-control" name="message" id="message" cols="40" rows="5" placeholder="Votre message"></textarea>
              </div>
              <div class="row">
                <input type="submit" value="Envoyer" class="submit">
              </div>
              {{-- <input type="text" name="" id="">
              <input type="text" name="" id="">
              <input type="  " style="width: 100%"> --}}
          </div>
        </div>
      </div>
      <div class="copyright"> <p> 2021 © Tous droits reserves. By Fasoblood</p></div>
 
</footer>