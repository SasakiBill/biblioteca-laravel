<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale())}}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width", initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token()}}">
        <title>{{ config ('APP_NAME', 'The Midnight Library')}}</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
        
    </head>
    
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="z-index: 2;">
            <a class="navbar-brand" href="/">Biblio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="/">Página Inicial <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/library">Biblioteca</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/loans">Meus Empréstimos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/about">Sobre</a>
                </li>
                
              </ul>
            </div>
          </nav>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>