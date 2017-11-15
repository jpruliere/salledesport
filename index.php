<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>The Muscle Shop</title>

    <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Oswald:300,500" rel="stylesheet"> 
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-muscle navbar-fixed-top">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="img/logo.png"/></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            
            <ul class="nav navbar-nav navbar-right">
              <li><a href="salle.php">La salle</a></li>
              <li><a href="equipe.php">L'équipe</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Accès membre <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="login/adherent.php">Adhérent</a></li>
                  <li><a href="login/coach.php">Coach</a></li>
                </ul>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

      <section class="splash">
        <h2 class="text-center">Bienvenue chez <br/><img src="img/logo_big.png" alt="The Muscle Shop"/><br/> la salle de sport à la hauteur de&nbsp;vos&nbsp;ambitions</h2>
      </section>
    </header>
    <main class="container-fluid">
      <section id="avantages" class="row">
        <div class="col-lg-6 col-xs-12 feature">
          <div class="feature-icon">
            <i class="fa fa-id-card" aria-hidden="true"></i>
          </div>
          <h3>Réservé aux membres</h3>
          <p>Notre salle est réservée aux membres, pas d'accès libre, pas de portes ouvertes ou de journées découvertes. Un vrai Yacht Club ;-)</p>
        </div>
        <div class="col-lg-6 col-xs-12 feature">
          <div class="feature-icon">
            <i class="fa fa-thermometer-full" aria-hidden="true"></i>
          </div>
          <h3>Chaleur = sueur</h3>
          <p>Nos locaux sont chauffée à 28°C afin de favoriser la transpiration et l'élimination de toxines pendant l'effort. Dépassez le max !</p>
        </div>
        <div class="col-lg-6 col-xs-12 feature">
          <div class="feature-icon">
            <i class="fa fa-shower" aria-hidden="true"></i>
          </div>
          <h3>Douches sans caméra</h3>
          <p>Après un tel effort, rien ne vaut une bonne douche à 13°C pour rafraîchir instantanément l'esprit et le corps. Chant autorisé ;-)</p>
        </div>
        <div class="col-lg-6 col-xs-12 feature">
          <div class="feature-icon">
            <i class="fa fa-futbol-o" aria-hidden="true"></i>
          </div>
          <h3>Sports divers</h3>
          <p>Nos locaux comprennent des salles équipées pour divers sports et loisirs, dont certains présents aux JO. Variez les plaisirs !</p>
        </div>
      </section>
      <section class="talks row">
        <h4>Ils parlent de nous</h4>
        <ul>
          <li class="talk">
            <img class="talk-photo talk-photo-left" src="img/users/adam.png" alt="Adam"/><p>Grâce à The Muscle Shop, je peux enfin pécho de la meuf stylée</p>
          </li>
          <li class="talk">
            <img class="talk-photo talk-photo-right" src="img/users/charlie.png" alt="Charlie"/><p>Je perds entre 1 et 2kg à chaque séance ! Mon diététicien est furax</p>
          </li>
          <li class="talk">
            <img class="talk-photo talk-photo-left" src="img/users/bill.png" alt="Bill"/><p>The Muscle Shop, c'est bien !</p>
          </li>
          <li class="talk">
            <img class="talk-photo talk-photo-right" src="img/users/dana.png" alt="Dana"/><p>Cette salle est la seule que je connaisse et elle est très chère, mais bon...</p>
          </li>
        </ul>
      </section>
    </main>
    <footer>
      <p class="text-center">@ 2017 Jean Prulière - contenu fictif et humoristique, toute ressemblance avec des personnes ou des institutions réelles n'est que le fruit de votre imagination.</p>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>