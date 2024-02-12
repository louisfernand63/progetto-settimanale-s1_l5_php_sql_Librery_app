<?php
include 'databaseaccess.php';


if(isset($_GET['id_autore'])) {
    $id_autore = $_GET['id_autore'];

    
    $sql = "DELETE FROM autori WHERE id_autore = $id_autore";
    if (mysqli_query($conn, $sql)) {
       
        echo "Dati libro aggiornati con successo.";
    } else {
       
        echo "Errore durante l'aggiornamento dei dati del libro: " . mysqli_error($conn);
    }
} else {
    echo "ID del libro non fornito.";
}
