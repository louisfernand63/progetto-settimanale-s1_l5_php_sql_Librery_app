<?php
include 'databaseaccess.php';


if(isset($_GET['autore_id'])) {
    $author_id = $_GET['autore_id'];

    
    $sql = "DELETE FROM autori WHERE autore_id = $author_id";
    if (mysqli_query($conn, $sql)) {
       
        echo "Dati libro aggiornati con successo.";
    } else {
       
        echo "Errore durante l'aggiornamento dei dati del libro: " . mysqli_error($conn);
    }
} else {
    echo "ID del libro non fornito.";
}
