<?php ob_start();

$content = ob_get_clean();

require_once "../Views/template.php";
require_once "../Models/Article.class.php";
require_once "../Models/ArticleManager.php";


?>
<link rel="stylesheet" href="../Genres/style.css">

<div class="table-responsive"
>
    <table
        class="table table-striped table-hover table-borderless table-primary align-middle"
    >
        <thead class="table-light">
            <caption>
                Votre Panier
            </caption>
            <tr>
                <th>Article</th>
                <th>Information</th>
                <th>Prix</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <tr
                class="table-primary"
            >
                <td scope="row">Item</td>
                <td>Item</td>
                <td>Item</td>
            </tr>
            <tr
                class="table-primary"
            >
                <td scope="row">Item</td>
                <td>Item</td>
                <td>Item</td>
            </tr>
        </tbody>
    </table>
</div>

