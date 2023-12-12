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

        $articleManager = new ArticleManager;
        $articleManager->chargementArticle();

        ?>


        <?php for ($i = 0; $i < count($articleManager->getArticle()); $i++) : ?>
          
  
            <img src="" <?= $articleManager->getArticle()[$i]->getImageArticle(); ?> alt="">
            <?= $articleManager->getArticle()[$i]->getNomArticle(); ?> 
            <?= $articleManager->getArticle()[$i]->getDescriptionArticle(); ?>
            <?= $articleManager->getArticle()[$i]->getTailleArticle(); ?> <br>

            
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

    <div class="main-block">
      <form action="">
        <h1>Une question ? Contactez-nous !</h1>
        <div class="info">
          <input class="fname" type="text" name="name" placeholder="Nom">
          <input type="text" name="name" placeholder="Email">
          <input type="text" name="name" placeholder="Telephone">
          <input type="text" name="name" placeholder="Adresse">
        </div>
        <p>Message</p>
        <div>
          <textarea rows="4"></textarea>
        </div>
        <button type="button" href="">Envoyer</button>
      </form>

      <div class="divcr">
      <h4 class="h4cr">Copyright</h4>
      <p class="pcr">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam neque deserunt tempore, voluptatem sunt non enim odit, sit ex nesciunt ad iste illo, hic fuga dolorum saepe nam unde expedita!</p>

    </div>   
</div>


</footer>

</body>

</html>