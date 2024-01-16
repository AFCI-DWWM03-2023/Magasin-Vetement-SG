<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title></title>
</head>

<body>
    <header>
        <div>
            <a href="/Views/accueil.view.php"><img srcset="/public/images/Logo_Small.jpg 384w, /public/images/Logo_Medium.jpg 768w, /public/images/Logo.jpg 1920w" sizes="(max-width:1920px) 384px,768,1920px" src="/public/images/Logo.jpg" alt="Logo"></a>
        </div>
        <input placeholder="Search...">
        <div>
            <a href="/Views/panier.view.php"><img src="/public/images/panier.png" alt=""></a>
        </div>
        <section class="showcase">
      <div class="menu">
        <ul>
          <a href="/Views/accueil.view.php">Accueil</a>
          <a href="/Views/homme.php">Homme</a>
          <a href="/Views/femme.php">Femme</a>
          <a href="/Views/garcon.php">Garçon</a>
          <a href="/Views/fille.php">Fille</a>
          <a href="#">Panier</a>
          <a href="/Views/crud.php">GESTION DU STOCK</a>
          <button class="closeMenu">X</button>
        </ul>
      </div>
    </section>
    <a href="/login-page/index.html"><img src="/images/icons8-login-50.png" alt=""></a>
        <button class="btn">Menu</button>
    </header>

    <script src="/script.js"> </script>
<?= $content ?>