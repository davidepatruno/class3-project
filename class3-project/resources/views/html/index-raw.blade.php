<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>BoolBnb</title>
</head>
<body class="homepage">
  <div class="menu">
    <div class="container">
      <div class="home_logo">
        <i class="fas fa-home"></i>
        <h1>BoolBnb</h1>
      </div>
      <div class="primary-menu">
        <i class="fas fa-bars" id="burgher-menu"></i>
        <nav id="menu">
          <ul>
            <a href="#"><li>Accedi</li></a>
            <a href="#"><li>Registrati</li></a>
            <a href="#"><li>I migliori appartamenti</li></a>
            <a href="#"><li>Aiuto</li></a>
          </ul>
        </nav>
      </div>
    </div>
  </div>
  <!-- HEADER-->
  <header>
    <div class="box-offerta">
      <h3>Offerta imperdibile !</h3>
      <div class="img-offerta_prezzo">
        <img src="img/vistamare.jpg" alt="stanza">
        <div class="prezzo">
          <p>188€</p> <br>
          <p>Invece di</p> <br>
          <p>263€</p>
        </div>
      </div>
      <h3 class="subtitle">Appartamento a pochi passi dal mare</h3>
      <div class="box-benefit">
        <i class="fas fa-users"></i>
        <!--<p>x 5</p> -->
        <i class="fas fa-map-marker-alt"></i>
        <!--<p>Gallipoli</p> -->
        <i class="fas fa-wifi"></i>
        <!--<p>Wi-Fi</p> -->
        <i class="fas fa-star-half-alt"></i>
        <!--<p>4.5</p> -->
      </div>
      <div class="btn-prenota">Prenota subito</div>
    </div>
  </header>

<!-- SECTION PRENOTAZIONE -->
  <section class="prenotazione">
    <h3 class="title">Prenota il tuo appartamento <br> ovunque vuoi!</h3>
    <div class="box-prenotazioni">
      <input class="city" type="text" placeholder="Località">
      <input type="number" placeholder="Ospiti" >
      <input type="date">
      <input type="date">
      <input type="submit" class="send">
    </div>
  </section>

<!-- SECTION IN EVIDENZA -->
  <section class="evidenzia">
    <div class="container-evidenzia">
      <h3>In evidenza</h3>
      <div class="box-card">
        <div class="card-appartamento">
          <div class="img-evidenza">
            <img src="img/stanza.jpg" alt="camera">
          </div>
        </div>
        <div class="card-appartamento">
          <div class="img-evidenza">
            <img src="img/bedroom.jpg" alt="camera">
          </div>
        </div>
        <div class="card-appartamento">
          <div class="img-evidenza">
            <img src="img/stanza.jpg" alt="camera">
          </div>
        </div>
        <div class="card-appartamento">
          <div class="img-evidenza">
            <img src="img/bedroom.jpg" alt="camera">
          </div>
        </div>
        <div class="card-appartamento">
          <div class="img-evidenza">
            <img src="img/stanza.jpg" alt="camera">
          </div>
        </div>
        <div class="card-appartamento">
          <div class="img-evidenza">
            <img src="img/bedroom.jpg" alt="camera">
          </div>
        </div>
      </div>
      </div>
    </div>
  </section>

<!-- SECTION LOCALITA -->
  <section class="località">
    <div class="galleria container-località">
      <h3>Località</h3>
      <div class="box-card">
        <div class="card-città">
          <div class="img-city">
            <img src="img/dubai.jpg" alt="camera">
            <h4>Dubai</h4>
          </div>
        </div>
        <div class="card-città">
          <div class="img-city">
            <img src="img/roma.jpg" alt="camera">
            <h4>Roma</h4>
          </div>
        </div>
        <div class="card-città">
          <div class="img-city">
            <img src="img/venezia.jpg" alt="camera">
            <h4>Venezia</h4>
          </div>
        </div>
        <div class="card-città">
          <div class="img-city">
            <img src="img/ny.jpg" alt="camera">
          </div>
          <div class="contenuto">
            <h4>new york</h4>
          </div>
        </div>
      </div>
    </div>
  </section>









  <footer class="footer">
    <div class="container">
      <h6>Copyright &copy; 2019</h6>
    </div>
  </footer>
</body>
<script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="script.js"></script>
</html>