<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BOOLBNB</title>
    <link rel="stylesheet" href="/css/index.css">
  </head>
  <body>
    {{-- NAVBAR --}}
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">BOOL BNB</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="d-flex justify-content-end collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown link
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    {{-- SIMIL JUMBOTRON --}}
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="container">
            <div class="row">
              <div class="col-8">
                <h1>Offerta imperdibile</h1>
              </div>
              <div class="col-4">
                <ul>
                  <li>Accedi</li>
                  <li>Registrati</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- FORM RICERCA --}}
    <div class="container">
      <div class="row">
        <div class="col-8">
          <form>
            <div class="form-group" action="#" method="post">
              @method('POST')
              @csrf
              <label for="exampleInputEmail1">Località</label>
              <input type="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Inserisci città">
              <label for="n_ospiti">Numero ospiti</label>
              <input type="password" id="n_ospiti" placeholder="Password">
            </div>
            <div class="form-group">
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Attiva filtri avanzati</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>

    {{-- @foreach($apartments as $apartment)
      <div class="container">
        <div class="row">
          <div class="col-10">
            BLOCCO APPARTAMENTO IN EVIDENZA
            <h2>{{ $apartment->name }}</h2>
            <img src="{{ $apartment->immagine }}">
            <ul>
              <li>{{$apartment->service->service_name}}</li>
            </ul>
          </div>
        </div>
      </div>
    @endforeach --}}
  </body>
</html>
