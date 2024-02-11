<?php
include 'databaseaccess.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];


    $sql = "SELECT * FROM libri WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        echo "<h2>Modifica il libro</h2>";
        echo "<form action='GestioneModificaLibro.php' method='post'>";
        echo "Titolo: <input type='text' name='titolo' value='" . $row['titolo'] . "'><br>";
        echo "Autore: <input type='text' name='autore' value='" . $row['autore'] . "'><br>";
        echo "Anno di pubblicazione: <input type='text' name='anno_pubblicazione' value='" . $row['anno_pubblicazione'] . "'><br>";
        echo "Genere: <input type='text' name='genere' value='" . $row['genere'] . "'><br>";
        echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
        echo "<input type='submit' value='Salva Modifiche'>";
        echo "</form>";
    } else {
        echo "Libro non trovato";
    }
} else {
    echo "ID del libro non fornito";
}

mysqli_close($conn);
?>