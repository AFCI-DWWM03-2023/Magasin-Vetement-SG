<?php ob_start();

$content = ob_get_clean();
require_once "/Users/DWWM/Desktop/RepoOrga/Magasin-Vetement-SG/Views/template.php";
require_once "/Users/DWWM/Desktop/RepoOrga/Magasin-Vetement-SG/Models/Article.class.php";
require_once "/Users/DWWM/Desktop/RepoOrga/Magasin-Vetement-SG/Models/Model.class.php";
require_once "/Users/DWWM/Desktop/RepoOrga/Magasin-Vetement-SG/Models/ArticleManager.php";
?>

<form method='POST' action="<?= URL ?>articles/av" enctype="multipart/form-data">
    <label for="nom">nom :</label><br>
    <input type="text" id="titre" name="titre" value=""><br>
    <label for="NbPages">Nombre de pages :</label><br>
    <input type="number" id="nbPages" name="nbPages" value=""><br><br>
    <label for="image">Image </label><br>
    <input type="file" id="image" name="image" value="">
    <br><br>
    <input type="submit" value="Valider">
    
</form>