<?php ob_start();

$content = ob_get_clean();
require_once "/Users/DWWM/Desktop/RepoOrga/Magasin-Vetement-SG/template.php";
require_once "/Users/DWWM/Desktop/RepoOrga/Magasin-Vetement-SG//class/Article.class.php";
require_once "/Users/DWWM/Desktop/RepoOrga/Magasin-Vetement-SG/class/ArticleManager.php";

?>
    <main>
        <h2>Nom Du Produit</h2>
        <img src="/images/vetementhomme.jpg" alt="">
        <p>Prix</p>
        <section>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio unde alias voluptates labore repellat suscipit vero nisi nobis quod a harum, saepe sit beatae, corporis dolores eaque temporibus nulla eum.</section>
        <section><a href="" style="text-decoration: none;">Ajouter au Panier</a></section>
    </main>
    
</body>
</html>