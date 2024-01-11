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
            <a href="/Views/crud.php"><img srcset="/public/images/Logo_Small.jpg 384w, /public/images/Logo_Medium.jpg 768w, /public/images/Logo.jpg 1920w" sizes="(max-width:1920px) 384px,768,1920px" src="/public/images/Logo.jpg" alt="Logo"></a>
        </div>
        <input placeholder="Search...">
        <div>
            <a href="#"><img src="/public/images/panier.png" alt=""></a>
        </div>
        <section class="showcase">
      <div class="menu">
        <ul>
          <li><a href="#">Menu 1</a></li>
          <li><a href="#">Menu 2</a></li>
          <li><a href="#">Menu 3</a></li>
          <li><a href="#">Menu 4</a></li>
          <li><a href="#">Menu 5</a></li>
        </ul>
      </div>
    </section>
        <button class="btn">Menu</button>
    </header>

    <script src="/script.js"> </script>
<?= $content ?>