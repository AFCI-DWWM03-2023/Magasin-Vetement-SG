<?php ob_start() ?>
<p>Afficher un article</p>

<div>
    <img src="<?= URL ?>../../../public/images/<?= $art->getImage();?>" alt="">
    <p>Titre : <?= $art->getTitre(); ?></p>
    <p>Nombre de pages : <?= $book->getNbPages(); ?></p>
</div>


<?php 
$titre = $book->getTitre();
$content = ob_get_clean();
require "template.php"; 
?>