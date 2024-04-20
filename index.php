<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comandi CAP e Provincia</title>
    <style>
        body{
            background-color: black;
            color: white;
        }
        table {
            border-collapse: collapse;
            width: 50%;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid white;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
<h2>Comandi disponibili:</h2>
    <ul>
        <li>Ricerca per CAP:</li>
        <form action="search.php" method="post">
            <label for="search_cap">CAP:</label>
            <input type="text" id="search_cap" name="search_cap">
            <button type="submit">Cerca</button>
        </form>
        <li>Ricerca per Provincia:</li>
        <form action="search.php" method="post">
            <label for="search_provincia">Provincia:</label>
            <input type="text" id="search_provincia" name="search_provincia">
            <button type="submit">Cerca</button>
        </form>
        <li>Modifica Record:</li>
        <form action="update.php" method="post">
            <label for="id">ID:</label>
            <input type="text" id="id" name="id">
            <label for="new_cap">Nuovo CAP:</label>
            <input type="text" id="new_cap" name="new_cap">
            <label for="new_provincia">Nuova Provincia:</label>
            <input type="text" id="new_provincia" name="new_provincia">
            <button type="submit">Aggiorna</button>
        </form>
        <li>Elimina Record:</li>
        <form action="delete.php" method="post">
            <label for="delete_id">ID:</label>
            <input type="text" id="delete_id" name="id">
            <button type="submit">Elimina</button>
        </form>
        <li>Aggiungi Record:</li>
        <form action="create.php" method="post">
            <label for="new_cap_create">Nuovo CAP:</label>
            <input type="text" id="new_cap_create" name="new_cap">
            <label for="new_provincia_create">Nuova Provincia:</label>
            <input type="text" id="new_provincia_create" name="new_provincia">
            <button type="submit">Aggiungi</button>
        </form>
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