<?php
    require "view/template/header.php";
    require "view/template/nav.php";
?>

<main class="my-5">
    <h1 class="text-center m-5">Liste des Livres</h1>
    <div class="container my-5">
        <table class="table my-5">
            <thead class="table-dark">
                <tr class="text-center align-middle">
                    <th scope="col">Identifiant</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Auteur</th>
                    <th scope="col">Éditeur</th>
                    <th scope="col">Date d'édition</th>
                    <th scope="col">Catégorie</th>
                    <th scope="col">Disponible</th>
                    <th scope="col">Date d'emprunt</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($books as $book): ?>
                    <tr class="align-middle">
                        <th scope="row" class="text-center"><?php echo $book->getBk_id() ?></th>
                        <td><a href="singleBook.php?book=<?php echo $book->getBk_id() ?>"><?php echo $book->getBk_title() ?></a></td>
                        <td><?php echo $book->getBk_writer() ?></td>
                        <td><?php echo $book->getBk_editor() ?></td>
                        <td class="text-center"><?php echo $book->getBk_edition_date() ?></td>
                        <td class="text-center"><?php echo $book->getBk_category() ?></td>
                        <td class="text-center"><?php echo $book->getBk_borrowed() ?></td>
                        <td class="text-center"><?php echo $book->getBk_borrowed_date() ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</main>

<?php
    require "view/template/footer.php";
?>
