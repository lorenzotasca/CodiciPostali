<?php
include "connection.php";

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM cap_provincia WHERE id='$id'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record eliminato con successo.";
    } else {
        echo "Errore nell'eliminazione del record: " . $conn->error;
    }
}

$conn->close();
?>