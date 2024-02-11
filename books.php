<?php
include 'databaseaccess.php';


if(isset($_GET['author_id'])) {
    $author_id = $_GET['author_id'];

    
    $sql = "SELECT * FROM libri WHERE author_id = $author_id";
    $result = mysqli_query($conn, $sql);

    
    if (mysqli_num_rows($result) > 0) {
        $books = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $books[] = $row;
        }
        echo json_encode($books);
    } else {
        echo "Nessun libro trovato con questo autore.";
    }
} else {
    echo "L'id dell'autore non è fornito.";
}
?>