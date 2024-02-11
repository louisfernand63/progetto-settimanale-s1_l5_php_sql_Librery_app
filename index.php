<?php 
include('navbar.php');
include('databaseaccess.php');
include('funzioni.php');

$books = getAllBooks($conn);

if (isset($_GET['genre'])) {
    $selected_genre = $_GET['genre'];
    $books = getBooksByGenre($conn, $selected_genre);
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