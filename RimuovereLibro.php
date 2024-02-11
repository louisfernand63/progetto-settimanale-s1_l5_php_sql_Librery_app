<?php
include 'databaseaccess.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];


    $sql = "DELETE FROM libri WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "Libro rimosso con successo";
    } else {
        echo "Errore durante la rimozione del libro: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>