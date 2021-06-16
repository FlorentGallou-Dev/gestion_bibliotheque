<?php
    require "view/template/header.php";
    require "view/template/nav.php";
?>

<main class="my-5">
    <h1 class="text-center m-5">Liste des Livres</h1>
    <div class="container my-5">
        <table class="table my-5">
            <thead class="table-dark">
                <tr class="text-center">
                    <th scope="col">Identifiant</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Auteur</th>
                    <th scope="col">Date d'édition</th>
                    <th scope="col">Éditeur</th>
                    <th scope="col">Catégorie</th>
                    <th scope="col">Disponible</th>
                    <th scope="col">Date d'emprunt</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($books as $book): ?>
                    <tr>
                        <th scope="row"><?php echo $book["bk_id"] ?></th>
                        <td><?php echo $book["bk_title"] ?></td>
                        <td><?php echo $book["bk_writer"] ?></td>
                        <td><?php echo $book["bk_summary"] ?></td>
                        <td><?php echo $book["bk_editor"] ?></td>
                        <td><?php echo $book["bk_edition_date"] ?></td>
                        <td><?php echo $book["bk_category"] ?></td>
                        <td><?php echo $book["bk_borrowed"] ?></td>
                        <td><?php echo $book["bk_borrowed_date"] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</main>

<?php
    require "view/template/footer.php";
?>
