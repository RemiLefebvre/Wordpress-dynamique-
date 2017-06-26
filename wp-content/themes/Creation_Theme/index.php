<?php get_header(); ?>

    <!-- PARTIE BASSE -->


    <section class="container-fluid mt-5 pt-4 pb-5 bg-faded hidden-sm-down">
      <div>
        <!-- ONGLET -->
        <ul class="row list-unstyled d-flex justify-content-around">

          <li class="bg-info rounded mt-3 ">
            <a class="text-black cursor font-weight-bold w-100 px-5" onclick="onglet('Acceuil')" tabindex="-1">Acceuil</a>
          </li>

          <li class="bg-info rounded mt-3">
            <a class="text-black cursor font-weight-bold w-100 px-5" onclick="onglet('Actue')" tabindex="-1">Actue</a>
          </li>

          <li class="bg-info rounded mt-3">
            <a class="text-black cursor font-weight-bold w-100 px-5" onclick="onglet('Retro')" tabindex="-1">Retro</a>
          </li>

          <li class="bg-info rounded mt-3">
            <a class="text-black cursor font-weight-bold w-100 px-5" onclick="onglet('Gamming')" tabindex="-1">Gamming</a>
          </li>

          <li class="bg-info rounded mt-3">
            <a class="text-black cursor font-weight-bold w-100 px-5" onclick="onglet('Canap')" tabindex="-1">Canap</a>
          </li>

          <li class="bg-info rounded mt-3">
            <a class="text-black cursor font-weight-bold w-100 px-5" onclick="onglet('Autre')" tabindex="-1">Autre</a>
          </li>
        </ul>

      </div>


      <!-- CONTENU ONGLET 00000000000000000000000000000000000000000000000000000000000000000000000000 -->
      <div class="container">
        <div class="row">

          <!-- ACCEUIL @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
          <div id="contenuAcceuil" class="categorie">
            <div>
              <h1>Thème Wordpress </h1>
              <!-- carousel -->
              <div class="container-fluid">

                <div id="myCarousel" class="carousel slide bg-inverse" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                      <img class="d-block img-fluid ml-auto mr-auto" src="https://www.kleverk.com/wp-content/uploads/2016/09/WordPress-Website-Development.jpg" alt="First slide">
                      <div class="carousel-caption">
                        <h3>First slide</h3>
                        <p>This is the first slide.</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img class="d-block img-fluid ml-auto mr-auto" src="https://www.kleverk.com/wp-content/uploads/2016/09/WordPress-Website-Development.jpg" alt="Second slide">
                      <div class="carousel-caption">
                        <h3>Second slide</h3>
                        <p>This is the second slide.</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img class="d-block img-fluid ml-auto mr-auto" src="https://www.kleverk.com/wp-content/uploads/2016/09/WordPress-Website-Development.jpg" alt="Third slide">
                      <div class="carousel-caption">
                        <h3>Third slide</h3>
                        <p>This is the third slide.</p>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
                  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
                </div>

              </div>
            </div>
          </div>


          <!-- ACTUE @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
          <div id="contenuActue" class="v-collapse categorie">
            <div>
              <div class="row">
                <h2>Derniers articles : <br><span class="h4">Catégorie: Actue</span></h2>
              </div>

              <div class="row">
                <article class="col-4 col-md-3">

                  <h4 class="mb-0 h3">Lorem ipsum.</h4>

                  <!-- SOCIAL -->
                  <div class=" center-block">
                    <a href="https://www.facebook.com/bootsnipp"><i class="fa fa-facebook-square fa-2x social"></i></a>
                    <a href="https://twitter.com/bootsnipp"><i  class="fa fa-twitter-square fa-2x social"></i></a>
                    <a href="https://plus.google.com/+Bootsnipp-page"><i  class="fa fa-google-plus-square fa-2x social"></i></a>
                    <a href="mailto:bootsnipp@gmail.com"><i  class="fa fa-envelope-square fa-2x social"></i></a>
                  </div>

                  <a href="page/article.html">
                    <figure class="p-relative mw-100 imgart">

                      <span class="datepost">Date</span>
                      <span class="catpost">Catégorie</span>
                      <img class="w-100" src="http://www.trucsweb.com/documents/images/2015/bootstrap4.png" alt="bootstrap">

                    </figure>

                  </a>

                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo error deserunt, tempore! Odit eveniet porro deleniti totam voluptates.</p>

                  <cite class="text-warning font-weight-bold">
              Mr.Brown
            </cite>

                </article>
                <article class="col-4 col-md-3">

                  <h4 class="mb-0 h3">Lorem ipsum.</h4>

                  <!-- SOCIAL -->
                  <div class=" center-block">
                    <a href="https://www.facebook.com/bootsnipp"><i class="fa fa-facebook-square fa-2x social"></i></a>
                    <a href="https://twitter.com/bootsnipp"><i  class="fa fa-twitter-square fa-2x social"></i></a>
                    <a href="https://plus.google.com/+Bootsnipp-page"><i  class="fa fa-google-plus-square fa-2x social"></i></a>
                    <a href="mailto:bootsnipp@gmail.com"><i  class="fa fa-envelope-square fa-2x social"></i></a>
                  </div>

                  <a href="page/article.html">
                    <figure class="p-relative mw-100 imgart">

                      <span class="datepost">Date</span>
                      <span class="catpost">Catégorie</span>
                      <img class="w-100" src="http://www.trucsweb.com/documents/images/2015/bootstrap4.png" alt="bootstrap">

                    </figure>

                  </a>

                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo error deserunt, tempore! Odit eveniet porro deleniti totam voluptates.</p>

                  <cite class="text-warning font-weight-bold">
              Mr.Brown
            </cite>

                </article>
                <article class="col-4 col-md-3 hidden-sm-down">

                  <h4 class="mb-0 h3">Lorem ipsum.</h4>

                  <!-- SOCIAL -->
                  <div class=" center-block">
                    <a href="https://www.facebook.com/bootsnipp"><i class="fa fa-facebook-square fa-2x social"></i></a>
                    <a href="https://twitter.com/bootsnipp"><i  class="fa fa-twitter-square fa-2x social"></i></a>
                    <a href="https://plus.google.com/+Bootsnipp-page"><i  class="fa fa-google-plus-square fa-2x social"></i></a>
                    <a href="mailto:bootsnipp@gmail.com"><i  class="fa fa-envelope-square fa-2x social"></i></a>
                  </div>

                  <a href="page/article.html">
                    <figure class="p-relative mw-100 imgart">

                      <span class="datepost">Date</span>
                      <span class="catpost">Catégorie</span>
                      <img class="w-100" src="http://www.trucsweb.com/documents/images/2015/bootstrap4.png" alt="bootstrap">

                    </figure>

                  </a>

                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo error deserunt, tempore! Odit eveniet porro deleniti totam voluptates. lorem20</p>

                  <cite class="text-warning font-weight-bold">
              Mr.Brown
            </cite>

                </article>

                <a href="#" class="col-4 col-md-3 btn btn-block btn-lg">
                  <div class="rounded h-100 bg-info d-flex">
                    <i class="align-self-center mx-auto fa-4x fa fa-plus" aria-hidden="true"></i>

                  </div>
                </a>

              </div>
            </div>
          </div>



          <!-- RETRO @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
          <div id="contenuRetro" class="v-collapse categorie">
            <div>
              <div class="row">
                <h2>Derniers articles : <br><span class="h4">Catégorie: Rétro</span></h2>
              </div>

              <div class="row">
                <article class="col-4 col-md-3">

                  <h4 class="mb-0 h3">Lorem ipsum.</h4>

                  <!-- SOCIAL -->
                  <div class=" center-block">
                    <a href="https://www.facebook.com/bootsnipp"><i class="fa fa-facebook-square fa-2x social"></i></a>
                    <a href="https://twitter.com/bootsnipp"><i  class="fa fa-twitter-square fa-2x social"></i></a>
                    <a href="https://plus.google.com/+Bootsnipp-page"><i  class="fa fa-google-plus-square fa-2x social"></i></a>
                    <a href="mailto:bootsnipp@gmail.com"><i  class="fa fa-envelope-square fa-2x social"></i></a>
                  </div>

                  <a href="page/article.html">
                    <figure class="p-relative mw-100 imgart">

                      <span class="datepost">Date</span>
                      <span class="catpost">Catégorie</span>
                      <img class="w-100" src="http://www.trucsweb.com/documents/images/2015/bootstrap4.png" alt="bootstrap">

                    </figure>

                  </a>

                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo error deserunt, tempore! Odit eveniet porro deleniti totam voluptates.</p>

                  <cite class="text-warning font-weight-bold">
                Mr.Brown
              </cite>

                </article>
                <article class="col-4 col-md-3">

                  <h4 class="mb-0 h3">Lorem ipsum.</h4>

                  <!-- SOCIAL -->
                  <div class=" center-block">
                    <a href="https://www.facebook.com/bootsnipp"><i class="fa fa-facebook-square fa-2x social"></i></a>
                    <a href="https://twitter.com/bootsnipp"><i  class="fa fa-twitter-square fa-2x social"></i></a>
                    <a href="https://plus.google.com/+Bootsnipp-page"><i  class="fa fa-google-plus-square fa-2x social"></i></a>
                    <a href="mailto:bootsnipp@gmail.com"><i  class="fa fa-envelope-square fa-2x social"></i></a>
                  </div>

                  <a href="page/article.html">
                    <figure class="p-relative mw-100 imgart">

                      <span class="datepost">Date</span>
                      <span class="catpost">Catégorie</span>
                      <img class="w-100" src="http://www.trucsweb.com/documents/images/2015/bootstrap4.png" alt="bootstrap">

                    </figure>

                  </a>

                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo error deserunt, tempore! Odit eveniet porro deleniti totam voluptates.</p>

                  <cite class="text-warning font-weight-bold">
                Mr.Brown
              </cite>

                </article>
                <article class="col-4 col-md-3 hidden-sm-down">

                  <h4 class="mb-0 h3">Lorem ipsum.</h4>

                  <!-- SOCIAL -->
                  <div class=" center-block">
                    <a href="https://www.facebook.com/bootsnipp"><i class="fa fa-facebook-square fa-2x social"></i></a>
                    <a href="https://twitter.com/bootsnipp"><i  class="fa fa-twitter-square fa-2x social"></i></a>
                    <a href="https://plus.google.com/+Bootsnipp-page"><i  class="fa fa-google-plus-square fa-2x social"></i></a>
                    <a href="mailto:bootsnipp@gmail.com"><i  class="fa fa-envelope-square fa-2x social"></i></a>
                  </div>

                  <a href="page/article.html">
                    <figure class="p-relative mw-100 imgart">

                      <span class="datepost">Date</span>
                      <span class="catpost">Catégorie</span>
                      <img class="w-100" src="http://www.trucsweb.com/documents/images/2015/bootstrap4.png" alt="bootstrap">

                    </figure>

                  </a>

                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo error deserunt, tempore! Odit eveniet porro deleniti totam voluptates. lorem20</p>

                  <cite class="text-warning font-weight-bold">
                Mr.Brown
              </cite>

                </article>

                <a href="#" class="col-4 col-md-3 btn btn-block btn-lg">
                  <div class="rounded h-100 bg-info d-flex">
                    <i class="align-self-center mx-auto fa-4x fa fa-plus" aria-hidden="true"></i>

                  </div>
                </a>

              </div>

            </div>
          </div>



          <!-- GAMMING @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
          <div id="contenuGamming" class="v-collapse categorie">
            <div>
              <div class="row">
                <h2>Derniers articles : <br><span class="h4">Catégorie: Gamming</span></h2>
              </div>

              <div class="row">
                <article class="col-4 col-md-3">

                  <h4 class="mb-0 h3">Lorem ipsum.</h4>

                  <!-- SOCIAL -->
                  <div class=" center-block">
                    <a href="https://www.facebook.com/bootsnipp"><i class="fa fa-facebook-square fa-2x social"></i></a>
                    <a href="https://twitter.com/bootsnipp"><i  class="fa fa-twitter-square fa-2x social"></i></a>
                    <a href="https://plus.google.com/+Bootsnipp-page"><i  class="fa fa-google-plus-square fa-2x social"></i></a>
                    <a href="mailto:bootsnipp@gmail.com"><i  class="fa fa-envelope-square fa-2x social"></i></a>
                  </div>

                  <a href="page/article.html">
                    <figure class="p-relative mw-100 imgart">

                      <span class="datepost">Date</span>
                      <span class="catpost">Catégorie</span>
                      <img class="w-100" src="http://www.trucsweb.com/documents/images/2015/bootstrap4.png" alt="bootstrap">

                    </figure>

                  </a>

                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo error deserunt, tempore! Odit eveniet porro deleniti totam voluptates.</p>

                  <cite class="text-warning font-weight-bold">
                Mr.Brown
              </cite>

                </article>
                <article class="col-4 col-md-3">

                  <h4 class="mb-0 h3">Lorem ipsum.</h4>

                  <!-- SOCIAL -->
                  <div class=" center-block">
                    <a href="https://www.facebook.com/bootsnipp"><i class="fa fa-facebook-square fa-2x social"></i></a>
                    <a href="https://twitter.com/bootsnipp"><i  class="fa fa-twitter-square fa-2x social"></i></a>
                    <a href="https://plus.google.com/+Bootsnipp-page"><i  class="fa fa-google-plus-square fa-2x social"></i></a>
                    <a href="mailto:bootsnipp@gmail.com"><i  class="fa fa-envelope-square fa-2x social"></i></a>
                  </div>

                  <a href="page/article.html">
                    <figure class="p-relative mw-100 imgart">

                      <span class="datepost">Date</span>
                      <span class="catpost">Catégorie</span>
                      <img class="w-100" src="http://www.trucsweb.com/documents/images/2015/bootstrap4.png" alt="bootstrap">

                    </figure>

                  </a>

                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo error deserunt, tempore! Odit eveniet porro deleniti totam voluptates.</p>

                  <cite class="text-warning font-weight-bold">
                Mr.Brown
              </cite>

                </article>
                <article class="col-4 col-md-3 hidden-sm-down">

                  <h4 class="mb-0 h3">Lorem ipsum.</h4>

                  <!-- SOCIAL -->
                  <div class=" center-block">
                    <a href="https://www.facebook.com/bootsnipp"><i class="fa fa-facebook-square fa-2x social"></i></a>
                    <a href="https://twitter.com/bootsnipp"><i  class="fa fa-twitter-square fa-2x social"></i></a>
                    <a href="https://plus.google.com/+Bootsnipp-page"><i  class="fa fa-google-plus-square fa-2x social"></i></a>
                    <a href="mailto:bootsnipp@gmail.com"><i  class="fa fa-envelope-square fa-2x social"></i></a>
                  </div>

                  <a href="page/article.html">
                    <figure class="p-relative mw-100 imgart">

                      <span class="datepost">Date</span>
                      <span class="catpost">Catégorie</span>
                      <img class="w-100" src="http://www.trucsweb.com/documents/images/2015/bootstrap4.png" alt="bootstrap">

                    </figure>

                  </a>

                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo error deserunt, tempore! Odit eveniet porro deleniti totam voluptates. lorem20</p>

                  <cite class="text-warning font-weight-bold">
                Mr.Brown
              </cite>

                </article>

                <a href="#" class="col-4 col-md-3 btn btn-block btn-lg">
                  <div class="rounded h-100 bg-info d-flex">
                    <i class="align-self-center mx-auto fa-4x fa fa-plus" aria-hidden="true"></i>

                  </div>
                </a>

              </div>

            </div>
          </div>



          <!-- CANAP @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
          <div id="contenuCanap" class="v-collapse categorie">
            <!-- canap -->
            <div>
              <div class="row">
                <h2>Derniers articles : <br><span class="h4">Catégorie: Canap</span></h2>
              </div>

              <div class="row">
                <article class="col-4 col-md-3">

                  <h4 class="mb-0 h3">Lorem ipsum.</h4>

                  <!-- SOCIAL -->
                  <div class=" center-block">
                    <a href="https://www.facebook.com/bootsnipp"><i class="fa fa-facebook-square fa-2x social"></i></a>
                    <a href="https://twitter.com/bootsnipp"><i  class="fa fa-twitter-square fa-2x social"></i></a>
                    <a href="https://plus.google.com/+Bootsnipp-page"><i  class="fa fa-google-plus-square fa-2x social"></i></a>
                    <a href="mailto:bootsnipp@gmail.com"><i  class="fa fa-envelope-square fa-2x social"></i></a>
                  </div>

                  <a href="page/article.html">
                    <figure class="p-relative mw-100 imgart">

                      <span class="datepost">Date</span>
                      <span class="catpost">Catégorie</span>
                      <img class="w-100" src="http://www.trucsweb.com/documents/images/2015/bootstrap4.png" alt="bootstrap">

                    </figure>

                  </a>

                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo error deserunt, tempore! Odit eveniet porro deleniti totam voluptates.</p>

                  <cite class="text-warning font-weight-bold">
            Mr.Brown
          </cite>

                </article>
                <article class="col-4 col-md-3">

                  <h4 class="mb-0 h3">Lorem ipsum.</h4>

                  <!-- SOCIAL -->
                  <div class=" center-block">
                    <a href="https://www.facebook.com/bootsnipp"><i class="fa fa-facebook-square fa-2x social"></i></a>
                    <a href="https://twitter.com/bootsnipp"><i  class="fa fa-twitter-square fa-2x social"></i></a>
                    <a href="https://plus.google.com/+Bootsnipp-page"><i  class="fa fa-google-plus-square fa-2x social"></i></a>
                    <a href="mailto:bootsnipp@gmail.com"><i  class="fa fa-envelope-square fa-2x social"></i></a>
                  </div>

                  <a href="page/article.html">
                    <figure class="p-relative mw-100 imgart">

                      <span class="datepost">Date</span>
                      <span class="catpost">Catégorie</span>
                      <img class="w-100" src="http://www.trucsweb.com/documents/images/2015/bootstrap4.png" alt="bootstrap">

                    </figure>

                  </a>

                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo error deserunt, tempore! Odit eveniet porro deleniti totam voluptates.</p>

                  <cite class="text-warning font-weight-bold">
            Mr.Brown
          </cite>

                </article>
                <article class="col-4 col-md-3 hidden-sm-down">

                  <h4 class="mb-0 h3">Lorem ipsum.</h4>

                  <!-- SOCIAL -->
                  <div class=" center-block">
                    <a href="https://www.facebook.com/bootsnipp"><i class="fa fa-facebook-square fa-2x social"></i></a>
                    <a href="https://twitter.com/bootsnipp"><i  class="fa fa-twitter-square fa-2x social"></i></a>
                    <a href="https://plus.google.com/+Bootsnipp-page"><i  class="fa fa-google-plus-square fa-2x social"></i></a>
                    <a href="mailto:bootsnipp@gmail.com"><i  class="fa fa-envelope-square fa-2x social"></i></a>
                  </div>

                  <a href="page/article.html">
                    <figure class="p-relative mw-100 imgart">

                      <span class="datepost">Date</span>
                      <span class="catpost">Catégorie</span>
                      <img class="w-100" src="http://www.trucsweb.com/documents/images/2015/bootstrap4.png" alt="bootstrap">

                    </figure>

                  </a>

                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo error deserunt, tempore! Odit eveniet porro deleniti totam voluptates. lorem20</p>

                  <cite class="text-warning font-weight-bold">
            Mr.Brown
          </cite>

                </article>

                <a href="#" class="col-4 col-md-3 btn btn-block btn-lg">
                  <div class="rounded h-100 bg-info d-flex">
                    <i class="align-self-center mx-auto fa-4x fa fa-plus" aria-hidden="true"></i>

                  </div>
                </a>

              </div>

            </div>
          </div>




          <!-- AUTRE @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
          <div id="contenuAutre" class="v-collapse categorie">
            <div>
              <div class="row">
                <h2>Derniers articles : <br><span class="h4">Catégorie: Autre</span></h2>
              </div>

              <div class="row">
                <article class="col-4 col-md-3">

                  <h4 class="mb-0 h3">Lorem ipsum.</h4>

                  <!-- SOCIAL -->
                  <div class=" center-block">
                    <a href="https://www.facebook.com/bootsnipp"><i class="fa fa-facebook-square fa-2x social"></i></a>
                    <a href="https://twitter.com/bootsnipp"><i  class="fa fa-twitter-square fa-2x social"></i></a>
                    <a href="https://plus.google.com/+Bootsnipp-page"><i  class="fa fa-google-plus-square fa-2x social"></i></a>
                    <a href="mailto:bootsnipp@gmail.com"><i  class="fa fa-envelope-square fa-2x social"></i></a>
                  </div>

                  <a href="page/article.html">
                    <figure class="p-relative mw-100 imgart">

                      <span class="datepost">Date</span>
                      <span class="catpost">Catégorie</span>
                      <img class="w-100" src="http://www.trucsweb.com/documents/images/2015/bootstrap4.png" alt="bootstrap">

                    </figure>

                  </a>

                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo error deserunt, tempore! Odit eveniet porro deleniti totam voluptates.</p>

                  <cite class="text-warning font-weight-bold">
                Mr.Brown
              </cite>

                </article>
                <article class="col-4 col-md-3">

                  <h4 class="mb-0 h3">Lorem ipsum.</h4>

                  <!-- SOCIAL -->
                  <div class=" center-block">
                    <a href="https://www.facebook.com/bootsnipp"><i class="fa fa-facebook-square fa-2x social"></i></a>
                    <a href="https://twitter.com/bootsnipp"><i  class="fa fa-twitter-square fa-2x social"></i></a>
                    <a href="https://plus.google.com/+Bootsnipp-page"><i  class="fa fa-google-plus-square fa-2x social"></i></a>
                    <a href="mailto:bootsnipp@gmail.com"><i  class="fa fa-envelope-square fa-2x social"></i></a>
                  </div>

                  <a href="page/article.html">
                    <figure class="p-relative mw-100 imgart">

                      <span class="datepost">Date</span>
                      <span class="catpost">Catégorie</span>
                      <img class="w-100" src="http://www.trucsweb.com/documents/images/2015/bootstrap4.png" alt="bootstrap">

                    </figure>

                  </a>

                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo error deserunt, tempore! Odit eveniet porro deleniti totam voluptates.</p>

                  <cite class="text-warning font-weight-bold">
                Mr.Brown
              </cite>

                </article>
                <article class="col-4 col-md-3 hidden-sm-down">

                  <h4 class="mb-0 h3">Lorem ipsum.</h4>

                  <!-- SOCIAL -->
                  <div class=" center-block">
                    <a href="https://www.facebook.com/bootsnipp"><i class="fa fa-facebook-square fa-2x social"></i></a>
                    <a href="https://twitter.com/bootsnipp"><i  class="fa fa-twitter-square fa-2x social"></i></a>
                    <a href="https://plus.google.com/+Bootsnipp-page"><i  class="fa fa-google-plus-square fa-2x social"></i></a>
                    <a href="mailto:bootsnipp@gmail.com"><i  class="fa fa-envelope-square fa-2x social"></i></a>
                  </div>

                  <a href="page/article.html">
                    <figure class="p-relative mw-100 imgart">

                      <span class="datepost">Date</span>
                      <span class="catpost">Catégorie</span>
                      <img class="w-100" src="http://www.trucsweb.com/documents/images/2015/bootstrap4.png" alt="bootstrap">

                    </figure>

                  </a>

                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo error deserunt, tempore! Odit eveniet porro deleniti totam voluptates. lorem20</p>

                  <cite class="text-warning font-weight-bold">
                Mr.Brown
              </cite>

                </article>

                <a href="#" class="col-4 col-md-3 btn btn-block btn-lg">
                  <div class="rounded h-100 bg-info d-flex">
                    <i class="align-self-center mx-auto fa-4x fa fa-plus" aria-hidden="true"></i>
                  </div>
                </a>

              </div>

            </div>

          </div>
          <!-- FIN AUTRE -->

        </div>

      </div>
      <!-- FIN CONTENU ONGLET -->

    </section>
    <!-- fin partie basse -->
  </header>

  <!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@ MAIN @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
      @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@-->

  <div class="container mt-5 pt-4">
    <div class="row">


      <main id="main" class="col-12 col-sm-12 col-md-9 col-lg-9">

        <!-- article paysage -->
        <div class="row p-3">


          <?php while(have_posts()) : the_post();?>
          <article class="p-0 card articlepaysage col-12">


            <div class="">

              <a href="<?php the_permalink(); ?>">
                <figure class="p-relative imgart w-50 float-left mr-3">

                  <span class="datepost"><?php the_time("j M Y"); ?></span>
                  <span class="catpost">Catégorie</span>
                  <img class="w-100" id="img7" onmouseover="affAlt(this,1)" onmouseout="affAlt(this,0)" src="http://www.trucsweb.com/documents/images/2015/bootstrap4.png" alt="bootstrap">
                  <figcaption id="fig7"></figcaption>
                </figure>

              </a>

              <h4 class="h1 mb-0"><?php echo get_the_title(get_option('page_for_posts', true)); ?></h4>

              <!-- SOCIAL -->
              <div class="mt-3 center-block">
                <a href="https://www.facebook.com/bootsnipp"><i class="fa fa-facebook-square fa-2x social"></i></a>
                <a href="https://twitter.com/bootsnipp"><i  class="fa fa-twitter-square fa-2x social"></i></a>
                <a href="https://plus.google.com/+Bootsnipp-page"><i  class="fa fa-google-plus-square fa-2x social"></i></a>
                <a href="mailto:bootsnipp@gmail.com"><i  class="fa fa-envelope-square fa-2x social"></i></a>
              </div>


              <p class="mw-25"><?php the_content();?></p>

              <cite class="text-warning font-weight-bold">
                Auteur :
                <?php the_author(); ?>
              </cite>

            </div>

          </article>
        <?php endwhile; ?>


        </div>


      </main>

    <?php get_sidebar(); ?>
    <?php get_footer(); ?>
