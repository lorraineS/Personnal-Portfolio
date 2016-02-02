<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Steve Lorraine - Développeur Ruby et Développeur Front-end - PACA">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600|Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="stylesheets/style.css">
  <title>Steve Lorraine - Portfolio</title>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51133482-1', 'auto');
  ga('send', 'pageview');
  </script>
</head>
<body>
  <div class="container">
    <header>
      <nav class="nav">
        <div class="nav__logo">
          <a href="accueil">Steve<span class="is-blue">. L</span></a>
        </div>
        <div class="nav__links">
          <a href="accueil" class="nav--current">Accueil</a>
          <a href="portfolio">Portfolio</a>
          <a href="contact">Contact</a>
          <div class="nav__socials">
            <a href="https://twitter.com/notsteeve">
              <i class="fa fa-twitter"></i>
            </a>
            <a href="https://github.com/lorraineS">
              <i class="fa fa-github"></i>
            </a>
            <a href="https://fr.linkedin.com/in/steve-lorraine-6177469a">
              <i class="fa fa-linkedin"></i>
            </a>
          </div>
        </div>
      </nav>
    </header>

    <section class="main">
      <div class="article  article--contact">
        <div class="article__content">
          <h1 class="article__title">Dites moi bonjour, <br>Laissez-moi une message <span class="dot">!</span></h1>
          <form class="contact__form" method="POST" action="">
            <input type="text" name="name" id="name" placeholder="Votre nom *">
            <input type="text" name="prenom" id="prenom" placeholder="Votre prenom *">
            <input type="email" name="email" id="email" placeholder="Votre email *">
            <textarea type="text" name="message" id="message" placeholder="Votre message *"></textarea>
            <button class="btn">Envoyer</button>
          </form> <br>
          <?php
          if (isset($_POST) && isset($_POST['name']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['message'])) {
              if (!empty($_POST['name']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['message'])) {
                  $destinataire = "lorraine.univ@gmail.com";
                  $sujet = "Demande de contact";
                  $message = "Nom : " . $_POST['name'] . "\r\n";
                  $message = "Adresse email : " . $_POST['email'] . "\r\n";
                  $message = "Message : " . $_POST['message'] . "\r\n";
                  $entete = 'From: ' . $_POST['email'] . "\r\n" .
                          'Reply-To: ' . $_POST['email'] . "\r\n" .
                          'X-Mailer: PHP/' . phpversion();
                  if (mail($destinataire, $sujet, $message, $entete)) {
                      echo 'Message envoyé.';
                  } else {
                      echo "Une erreur est survenue lors de l'envoi du formulaire par email. Veuillez réessayer.";
                  }
              }
          }
          ?>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="footer__links">
        <a href="https://twitter.com/notsteeve">
          <i class="fa fa-twitter"></i>
        </a>
        <a href="https://github.com/lorraineS">
          <i class="fa fa-github"></i>
        </a>
        <a href="https://fr.linkedin.com/in/steve-lorraine-6177469a">
          <i class="fa fa-linkedin"></i>
        </a>
      </div>
      <div class="footer__copyright">
        <p>&copy; Steve Lorraine - Tous droits réservés.</p>
      </div>
    </footer>
  </div>
</body>
</html>
