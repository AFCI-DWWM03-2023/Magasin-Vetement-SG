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
        <nav>Menu</nav>
    </header>
<?= $content ?>