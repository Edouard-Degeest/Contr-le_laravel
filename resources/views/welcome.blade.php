<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Contrôle Laravel</title>
</head>
<body>
    <header>
        <div class="header">
            <a href="/" class="logo">Statue.ORG</a>
            <div class="header-right">
              <a class="active" href="/">Accueil</a>
              <a href="add">Ajouter une statuette</a>
              <a href="list">Table des statuettes</a>
            </div>
          </div>
    </header>
    <h2>Bienvenue sur notre site !</h2>
        <div id="image"><img src="/img/statue.jpg" alt=""></div>
    <main>
        @yield('content')


</main>




    <footer>
        <div class="footer">
            <p>©Copyright By Edouard Degeest</p>
          </div>
    </footer>
    
</body>