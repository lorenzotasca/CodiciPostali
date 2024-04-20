<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comandi CAP e Provincia</title>
    <style>
        body{
            background-color="black";
        }
        table {
            border-collapse: collapse;
            width: 50%;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
<h2>Comandi disponibili:</h2>
    <ul>
        <li>Ricerca per CAP: <code>search.php?search_cap=</code></li>
        <li>Ricerca per Provincia: <code>search.php?search_provincia=</code></li>
        <li>Modifica Record: <code>update.php?id=&new_cap=</code></li>
        <li>Elimina Record: <code>delete.php?id=</code></li>
        <li>Aggiungi Record: <code>create.php?new_cap=&new_provincia=</code></li>
    </ul>
    <h2>Tabella Province</h2>
    <?php
    
    include "connection.php";
    

    $sql = "SELECT * FROM cap_provincia";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>CAP</th><th>Provincia</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['cap']."</td>";
            echo "<td>".$row['provincia']."</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Nessun risultato trovato.";
    }

    $conn->close();
    ?>

   
</body>
</html>