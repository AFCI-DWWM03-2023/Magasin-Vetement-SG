<?php ob_start();

$content = ob_get_clean();
require_once "C:\Users\DWWM\Desktop\Repo Orga\Magasin-Vetement-SG\Views/template.php";
require_once "C:\Users\DWWM\Desktop\Repo Orga\Magasin-Vetement-SG\Models/Article.class.php";
require_once "C:\Users\DWWM\Desktop\Repo Orga\Magasin-Vetement-SG\Models/Model.class.php";
require_once "C:\Users\DWWM\Desktop\Repo Orga\Magasin-Vetement-SG\Models\ArticleManager.php";
require_once "C:\Users\DWWM\Desktop\Repo Orga\Magasin-Vetement-SG\Controller/ArticleController.php";
?>

<main>
<tr>
            <th>Image</th>
            <th>Titre</th>
            <th>Nombre de pages</th>
            <th>Actions</th>
        </tr>

    <?php for($i=0;$i<count($articles);$i++) : ?>

        <tr>
            <td><img src="public/images/<?= $articles[$i]->getImage(); ?>" alt=""></td>
            <td><a href="<?= URL ?>articles/l/<?= $articles[$i]->getIdArticle();?>"><?= $articles[$i]->getTitre();?></a></td>
            <td><?= $articles[$i]->getNbPages(); ?></td>
            <td>
                <form method="POST" action="<?= URL ?>articles/s/<?=$articles[$i]->getIdArticle();?>"onSubmit="return confirm('Voulez vous vraiment supprimer le article ?');">
                <button type="submit">Supprimer</button>
                </form>
                <td><a href="<?= URL?>articles/m/<?=$articles[$i]->getIdArticle();?>"><button>Modifier</button></a></td>
            </td>
        </tr>

        <?php endfor; ?>
    </table>
    <a href="<?= URL ?>articles/a"><button>Ajouter</button></a>
</main>

</body>
</html>