<?php
    require "view/template/header.php";
    require "view/template/nav.php";
?>

<main class="my-5">
    <h1 class="text-center m-5"><?php echo $book[0]->getBk_title() ?></h1>
    <div class="container my-5">
    <div class="card">
        <div class="card-body bg-dark">
            <h5 class="card-title text-light text-center">Auteur : <?php echo $book[0]->getBk_writer() ?></h5>
            <p class="card-text text-light text-center"><strong>Résumé</strong><br><?php echo $book[0]->getBk_summary() ?></p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>Éditeur : </strong><?php echo $book[0]->getBk_editor() ?></li>
            <li class="list-group-item"><strong>Édité le : </strong><?php echo $book[0]->getBk_edition_date() ?></li>
            <li class="list-group-item"><strong>Catégorie : </strong><?php echo $book[0]->getBk_category() ?></li>
        </ul>
        <ul class="list-group list-group-flush">
            <li class="list-group-item bg-dark text-light text-center">Disponible : <?php echo $book[0]->getBk_borrowed() ?></li>
            <?php if($book[0]->getBw_id()):?>
                <li class="list-group-item"><strong>Emprunté le : </strong><?php echo $book[0]->getBk_borrowed_date() ?></li>
                <li class="list-group-item"><strong>Par : </strong><?php echo $book[0]->getBw_id() ?></li>
            <?php endif ?>
        </ul>
</div>
    </div>
</main>

<?php
    require "view/template/footer.php";
?>
