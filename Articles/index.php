<?php ob_start();

$content = ob_get_clean();
require_once "/Users/DWWM/Desktop/RepoOrga/Magasin-Vetement-SG/template.php";
require_once "/Users/DWWM/Desktop/RepoOrga/Magasin-Vetement-SG//class/Article.class.php";
require_once "/Users/DWWM/Desktop/RepoOrga/Magasin-Vetement-SG/class/ArticleManager.php";

?>
    <main>
        <div>
            <H2>Mon Panier</H2>
        </div>
        <article>
            <section>Article 1</section>
            <img src="/images/vetementhomme.jpg" alt="">
            <section>Prix</section>
            <img src="/images/croix.png" alt="">
        </article>
        <article>
            <section>Article 2</section>
            <img src="/images/vetementhomme.jpg" alt="">
            <section>Prix</section>
            <img src="/images/croix.png" alt="">
        </article>
        <article>
            <section>Article 3</section>
            <img src="/images/vetementhomme.jpg" alt="">
            <section>Prix</section>
            <img src="/images/croix.png" alt="">
        </article>
        <article>
            <section>Article 4</section>
            <img src="/images/vetementhomme.jpg" alt="">
            <section>Prix</section>
            <img src="/images/croix.png" alt="">
        </article>
        <article>
            <section>Article 5</section>
            <img src="/images/vetementhomme.jpg" alt="">
            <section>Prix</section>
            <img src="/images/croix.png" alt="">
        </article>

        <div>
            <p></p>
        </div>
        <div>
            <p></p>
        </div>
    </main>
    
</body>
</html>