<?php ob_start();

$content = ob_get_clean();
require_once "template.php";
require_once "class/Article.class.php";
require_once "class/ArticleManager.php";

?>

<main>

    <div>
        <h3>Image</h3>
        <h3>Titre</h3>
        <h3>Description</h3>
        <h3>Actions</h3>

        <?php

        $article1 = new Articles("Veste", "Une veste en cuire française", 14475, "vetementhomme.jpg");
        $article2 = new Articles("Jeste", "Une veste en cuire française", 14775, "vetementhomme.jpg");

        $articleManager = new ArticleManager;
        $articleManager->ajoutArticle($article1);
        $articleManager->ajoutArticle($article2);

        ?>


        <?php for ($i = 0; $i < count($articleManager->getArticle()); $i++) : ?>


            <img src="" <?= $articleManager->getArticle()[$i]->getImageArticle(); ?> alt="">
            <?= $articleManager->getArticle()[$i]->getNomArticle(); ?>
            <?= $articleManager->getArticle()[$i]->getDescriptionArticle(); ?>

        <?php endfor; ?>

    </div>

</main>

<section>
    <div>
        <h3>Nos Vétements sont fabriquer a la main avec des matériaux de préstige</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique, eligendi dolore. Voluptatem, cupiditate porro. Ipsa rerum ipsum, optio cupiditate esse perspiciatis nihil vero iste soluta animi alias fuga illum impedit?</p>
    </div>
</section>


<section>
    <div>
        <h3>A propos de nous</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolor, ullam omnis in minima at quis temporibus quasi consectetur fuga deserunt repellendus neque itaque odit ipsum quidem, est nobis hic?</p>
    </div>
</section>

<footer>
    <div>
        <h4>CONTACT</h4>
        <input placeholder="Nom">
        <input placeholder="Email">
        <input placeholder="Message">
    </div>
    <div>
        <h4>Copyright</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam neque deserunt tempore, voluptatem sunt non enim odit, sit ex nesciunt ad iste illo, hic fuga dolorum saepe nam unde expedita!</p>
    </div>
</footer>

</body>

</html>