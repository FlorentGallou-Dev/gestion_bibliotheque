<?php
    require "view/template/header.php";
    require "view/template/nav.php";
?>

<main class="my-5">
    <h1 class="text-center m-5">Liste des usagers</h1>
    <div class="container my-5">
        <table class="table my-5">
            <thead class="table-dark">
                <tr class="text-center align-middle">
                    <th scope="col">Identifiant</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Age</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Téléphone</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($borrowers as $borrower): ?>
                    <tr class="align-middle">
                        <th scope="row" class="text-center"><?php echo $borrower->getBw_id() ?></th>
                        <td><?php echo $borrower->getBw_firstname() ?></td>
                        <td><?php echo $borrower->getBw_lastname() ?></td>
                        <td class="text-center"><?php echo $borrower->getBw_birthdate() ?></td>
                        <td><?php echo $borrower->getBw_address() ?></td>
                        <td class="text-center"><?php echo $borrower->getBw_phone() ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</main>

<?php
    require "view/template/footer.php";
?>