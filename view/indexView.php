<?php
    require "view/template/header.php";
    require "view/template/nav.php";
?>

<main class="my-5">
    <h1 class="text-center m-5">Liste des Livres</h1>
    <div class="container my-5">
        <table class="table my-5">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Titre</th>
                    <th scope="col">Auteur</th>
                    <th scope="col">Date d'édition</th>
                    <th scope="col">Éditeur</th>
                    <th scope="col">Catégorie</th>
                    <th scope="col">Disponible</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Titre 1</th>
                    <td>Auteur 1</td>
                    <td>24/12/2021</td>
                    <td>Éditeur 1</td>
                    <td>Catégorie 1</td>
                    <td>oui</td>
                </tr>
            </tbody>
        </table>
    </div>
</main>

<?php
    require "view/template/footer.php";
?>
