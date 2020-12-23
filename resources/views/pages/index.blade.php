@extends('layouts.app2')

@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-content-center align-items-center" >
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Une seconde,<br>Un sms, Une vie sauvée</h1>
      <h2>Envoyez un message d'alerte pour demander du sang. C elui-ci sera transmis à des volontaires et sauvez ainsi des vies</h2>
      <a href="{{ route('login') }}" class="btn-get-started">C'est parti</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>A propos</h2>
          <p>Découvrir </p>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="{{ asset('img/about.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Avec un simple sms , sauvez des vies.</h3>
            <p class="font-italic">
          Avec Sosbloodbf envoyez un message d'alerte de demande de sang. Celui-ci sera transmis à des volontaires qui s'hateront de venir sauver une vie. Le sang est gratuit, sauvons des vies.
            </p>
            <ul>
              <li><i class="icofont-check-circled"></i> Simple. Créez un compte. Renseignez vos données</li>
              <li><i class="icofont-check-circled"></i> Envoyez une alerte lorsque le besoin se fait savoir</li>
              <li><i class="icofont-check-circled"></i> L'alerte sera transmise à la banque de sang, aux hopitaux et aux volontaires dans votre ville, région</li>
            </ul>
            <p>
              Qu'est ce que vous attendez ? Lancez-vous.
            </p>
            <a href="{{ url('/about') }}" class="learn-more-btn">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Pourquoi devons nous agir?</h3>
              <p>
                D'apres l'OMS, "Les transfusions sanguines sauvent des vies et améliorent la santé, mais bon nombre des patients qui en ont besoin n’ont pas accès en temps voulu à des produits sécurisés. Des transfusions sanguines peuvent être nécessaires à tout moment, à la ville comme à la campagne. Le manque de sang est à l'origine du décès de nombreux patients." <i>Source OMS Juin 2017</i>
              </p>
              <div class="text-center">
                <a href="https://www.who.int/features/factfiles/blood_transfusion/fr/" target="_blank" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-health"></i>
                    <h4>Les transfusions sanguines sauvent des vies</h4>
                    <p>Elles sont géneralement utilisées lors d'opérations chirurgicales, pour les femmes à laccouchement , les nouveaux nés.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class='bx bxs-donate-heart' ></i>
                    <h4>Il faut des dons réguliers et non-renumérés pour assurer la demande</h4>
                    <p>La demande est grande et pour la satisfaire il faut des donneurs réguliers pour alimenter les différentes banques de sang. L'invitation va a lencontre de tout adulte pouvant donner son sang à le faire et ce de facon régulière.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class='bx bxs-donate-blood' ></i>
                    <h4>Une seule unité de sang peut servir à plusieurs patients</h4>
                    <p>"En fractionnant le sang en ses différents constituants, on peut traiter plusieurs patients avec une seule unité de sang et n’administrer à un patient que les constituants dont il a besoin." <strong>Source : OMS</strong></p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->
     <!-- ======= Departments Section ======= -->
     <section id="departments" class="departments">
      <div class="container" data-aos="fade-up">

        <div class="section2-title">
          <h2>Conseils Santé</h2>
          <p>Dans cette rubrique vous aurez acces a des conseils santes sur des problemes frequents. Comment s'en prevenir et ameliorer son mode de vie</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class=" col-lg-4 mb-5 mb-lg-0">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#tab-1">
                  <h4>Qui peut donner son sang ?</h4>
                  <p>Toute personne en bonne santé, âgée de 18 à 70 ans, ne faisant pas l’objet d’une mesure de protection légale (tutelle…) et reconnue apte à l’issue de l’entretien prédon peut donner son sang.

                    </p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-toggle="tab" href="#tab-2">
                  <h4>Diabete</h4>
                  <p>Voluptas vel esse repudiandae quo excepturi.</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-toggle="tab" href="#tab-3">
                  <h4>Le cancer</h4>
                  <p>Velit veniam ipsa sit nihil blanditiis mollitia natus.</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-toggle="tab" href="#tab-4">
                  <h4>Le tabagisme passif</h4>
                  <p>Ratione hic sapiente nostrum doloremque illum nulla praesentium id</p>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-8">
            <div class="tab-content">
              <div class="tab-pane fade show active " id="tab-1">
                <h3>Compatibilité des groupes sanguins</h3>
                <p class="font-italic">
                  Les donneurs de groupe O négatif (O-) sont particulièrement recherchés car leurs globules rouges peuvent être transfusés à tous les patients. Mais les donneurs de tout groupe sanguin sont les bienvenus.
                  </p>
                <img src="{{ asset('img/departements_1.jpg ')}}" alt="" class="img-fluid">
                <p>Les personnes du groupe A peuvent donner du sang à d’autres personnes du groupe A et à des individus de groupe AB. Elles peuvent recevoir du sang de personnes du groupe A et du groupe O.
                  Les personnes du groupe B peuvent donner du sang à d’autres personnes du groupe B et à des individus de groupe AB. Elles peuvent recevoir du sang de personnes du groupe B et du groupe O.
                  Les personnes du groupe AB ne peuvent donner du sang qu’à d’autres personnes du groupe AB. Elles peuvent par contre recevoir du sang de tous les groupes (A, B, AB, O).
                  Les personnes de groupe O, enfin, peuvent donner du sang à tous les groupes (A, B, AB, O). Elles ne peuvent par contre recevoir du sang que de personnes du même groupe qu’elles, à savoir O.</p>
              </div>
              <div class="tab-pane fade" id="tab-2">
                <h3>Neurology</h3>
                <p class="font-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                <img src="{{ asset('img/departments-2.jpg') }}" alt="" class="img-fluid">
                <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
              </div>
              <div class="tab-pane fade" id="tab-3">
                <h3>Hepatology</h3>
                <p class="font-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                <img src="{{ asset('img/departments-3.jpg') }}" alt="" class="img-fluid">
                <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
              </div>
              <div class="tab-pane fade" id="tab-4">
                <h3>Pediatrics</h3>
                <p class="font-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                <img src="{{ asset('img/departments-4.jpg') }}" alt="" class="img-fluid">
                <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Departments Section -->

     
  </main><!-- End #main -->
 
@endsection