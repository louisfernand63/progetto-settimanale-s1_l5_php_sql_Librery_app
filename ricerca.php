<?php
include('navbar.php');
include 'databaseaccess.php';


if (isset($_GET['query'])) {
    $search_query = $_GET['query'];
    $sql = "SELECT * FROM libri WHERE titolo LIKE ? OR autore LIKE ? OR genere LIKE ?";


    $stmt = mysqli_prepare($conn, $sql);


    mysqli_stmt_bind_param($stmt, "sss", $search_query_like, $search_query_like, $search_query_like);


    $search_query_like = '%' . $search_query . '%';
    mysqli_stmt_execute($stmt);


    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        echo "<h2>Risultato della ricerca</h2>";
        echo "<table class='table'>";
        echo "<tr><th>Imagine</th><th>Titolo</th><th>Autore</th><th>Anno di pubblicazione</th><th>Genere</th></tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td><img src='" . $row['image_path'] . "' alt='" . $row['titolo'] . "' style='width: 100px;'></td>";
            echo "<td>" . $row['titolo'] . "</td>";
            echo "<td>" . $row['autore'] . "</td>";
            echo "<td>" . $row['anno_pubblicazione'] . "</td>";
            echo "<td>" . $row['genere'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "<p>Nessun risultato trovato.</p>";
    }


    mysqli_stmt_close($stmt);
} else {
    echo "<p>Inserisci la tua ricerca.</p>";
}


mysqli_close($conn);
include('footer.php');
/*?>*/