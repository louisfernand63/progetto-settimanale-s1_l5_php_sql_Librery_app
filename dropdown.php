<?php
include 'databaseaccess.php';

$selected_genre = isset($_GET['genre']) ? $_GET['genre'] : null;

$sql = "SELECT DISTINCT genere FROM libri";
$result = mysqli_query($conn, $sql);

 
if (mysqli_num_rows($result) > 0) {

    echo "<select class='form-control' onchange='location = this.value;'>";
    echo "<option value='index.php'" . (!$selected_genre ? " selected" : "") . ">Tutti i libri</option>"; 
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value='index.php?genre=".$row['genere']."'" . ($selected_genre === $row['genere'] ? " selected" : "") . ">".$row['genere']."</option>";
    }
    echo "</select>";
} else {
    echo "Nessun genere trovato";
} 
