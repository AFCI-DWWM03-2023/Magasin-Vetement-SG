<?php ob_start() ?>
<p>Afficher un article</p>

<div>
    <img src="<?= URL ?>../../../public/images/<?= $art->getImage();?>" alt="">
    <p>Titre : <?= $art->getTitre(); ?></p>
    <p>Nombre de pages : <?= $art->getNbPages(); ?></p>
</div>


<?php 
$titre = $art->getTitre();
$content = ob_get_clean();
require "template.php"; 
?>