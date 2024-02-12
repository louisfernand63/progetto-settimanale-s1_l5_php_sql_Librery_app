<?php
include('navbar.php');
include('databaseaccess.php');
include('funzioni.php');

$books = getAllBooks($conn);

if (isset($_GET['genere'])) {
    $selected_genere = $_GET['genere'];
    $books = getBooksByGenre($conn, $selected_genere);
}

?>

<div class="container">

    <h2>Elenco dei libri disponibili</h2>

    <?php if ($books): ?>
        <?php displayBooks($books); ?>
    <?php else: ?>
        <p>Nessun libro trovato</p>
    <?php endif; ?>

</div>

<?php
include('footer.php');
?>