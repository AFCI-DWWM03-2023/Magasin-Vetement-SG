<?php ob_start();

$content = ob_get_clean();
require_once "../Views/template.php";
require_once "../Models/Article.class.php";
require_once "../Models/ArticleManager.php";


?>
    <link rel="stylesheet" href="../Genres/Homme/style.css">
    <main>
        <h2>Hommes</h2>
        <div>
        <article><a href="/Articles/Détaille/index.html"><img src="/Images/vetementhomme.jpg" alt="vetement homme"></a></article>
        <article><img src="/Images/vetementhomme.jpg" alt="vetement homme"></article>
        <article><img src="/Images/vetementhomme.jpg" alt="vetement homme"></article>
        <article><img src="/Images/vetementhomme.jpg" alt="vetement homme"></article>
        <article><img src="/Images/vetementhomme.jpg" alt="vetement homme"></article>
        </div>
    </main>
</body>
</html>