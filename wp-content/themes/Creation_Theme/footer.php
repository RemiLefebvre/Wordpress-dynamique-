<!-- FOOTER @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
<nav class="d-flex justify-content-center my-5">
  <ul class="mx-auto pagination">
    <li class="page-item">
      <a href="#" class="page-link" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item active"><a href="#" class="page-link">1</a></li>
    <li class="page-item"><a href="#" class="page-link">2</a></li>
    <li class="page-item"><a href="#" class="page-link">3</a></li>
    <li class="page-item"><a href="#" class="page-link">4</a></li>
    <li class="page-item"><a href="#" class="page-link">5</a></li>
    <li class="page-item"><a href="#" class="page-link">6</a></li>
    <li class="page-item"><a href="#" class="page-link">7</a></li>
    <li class="page-item">
      <a href="#" class="page-link" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>

<footer class="footer-1 pb-5 bg-inverse">
  <div class="container pt-5">
    <div class="d-flex justify-content-between">

      <div class="">
        <nav class="navbar">
          <nav class="nav navbar-nav">
            <a class="nav-item nav-link" href="index.html">Blog</a>
            <a class="nav-item nav-link" href="page/contact.html">Contact</a>
            <a class="nav-item nav-link" href="#">News letters</a>
            <a class="nav-item nav-link" href="#">A propos</a>
            <a class="nav-item nav-link" href="#">Partenaires</a>
          </nav>
        </nav>
      </div>

      <nav>
        <a href="#"><i class="fa fa-facebook-official fa-2x"></i></a>
        <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
        <a href="#"><i class="fa fa-instagram fa-2x"></i></a>
        <a href="#"><i class="fa fa-snapchat fa-2x"></i></a>
      </nav>

      <p class="ml-5 h2 text-white hidden-sm-down" id="date">
      </p>

      <div class="">
        <p class="ml-5 h2 text-white hidden-sm-down">
          Sur cette page depuis <span id="min"></span><span id="chrono">0</span> secondes.
        </p>

      </div>

    </div>
  </div>
</footer>


<script type="text/javascript">
  //AFFICHE alt
  function affAlt(th, x) {

    var fig = "fig" + th.id.substr(3);
    if (x == 1) {

      var alt = document.getElementById(th.id).alt;
      document.getElementById(fig).innerHTML = alt;
      document.getElementById(fig).style.display = "block";


      document.getElementById(fig).style.position = "absolute";
      document.getElementById(fig).style.top = "82px";
      document.getElementById(fig).style.left = "10px";
      document.getElementById(fig).style.backgroundColor = "#63636370";
      document.getElementById(fig).style.fontSize = "22px";
      document.getElementById(fig).style.color = "white";
      document.getElementById(fig).style.padding = "5px 5px";
    } else {
      document.getElementById(fig).innerHTML = "";
      document.getElementById(fig).style.display = "none";
    }
  }

  // TABLE ONGLET

  function onglet(para){
    var allCat = document.getElementsByClassName("categorie");
    // var i;
    for (var i = 0; i < allCat.length; i++) {
      allCat[i].style.display = "none";
    }
    document.getElementById("contenu" + para).style.display ="block";
  }


</script>
<!--  Confirm-->
<script type="text/javascript">
  function myFunction(){
    confirm("Sûr?")
  };
</script>

<script type="text/javascript">
  // AFICHER LA DATE
  var d = new Date();
  document.getElementById("date").innerHTML = d.getDate() + "/" + (d.getMonth() + 1) + "/" + d.getFullYear();



  //CHRONO
  var sec = 0;
  var min = 0;

  setInterval("alertFunc()", 1000);

  function alertFunc() {
    if (sec < 60) {
      document.getElementById("chrono").innerHTML = sec;
      sec++;
    } else {
      sec = 0;
      document.getElementById("chrono").innerHTML = sec;
      min++;
      document.getElementById("min").innerHTML = min + "min ";
      sec++;
    }
  }
</script>



<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>
  window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')
</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<!-- jQuery library -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

<!-- Tether -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

<!-- Bootstrap 4 Alpha JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
  (function(b, o, i, l, e, r) {
    b.GoogleAnalyticsObject = l;
    b[l] || (b[l] =
      function() {
        (b[l].q = b[l].q || []).push(arguments)
      });
    b[l].l = +new Date;
    e = o.createElement(i);
    r = o.getElementsByTagName(i)[0];
    e.src = 'https://www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e, r)
  }(window, document, 'script', 'ga'));
  ga('create', 'UA-XXXXX-X', 'auto');
  ga('send', 'pageview');
</script>

<!-- Initialize Bootstrap functionality -->
<script>
  // Initialize tooltip component
  $(function() {
    $('[data-toggle="tooltip"]').tooltip()
  })
  // Initialize popover component
  $(function() {
    $('[data-toggle="popover"]').popover()
  })
</script>

</body>

</html>
