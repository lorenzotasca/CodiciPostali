<?php
include "connection.php";

if(isset($_GET['id']) && isset($_GET['new_cap']) && isset($_GET['new_provincia'])) {
    $id = $_GET['id'];
    $new_cap = $_GET['new_cap'];
    $new_provincia = $_GET['new_provincia'];

    $sql = "UPDATE cap_provincia SET cap='$new_cap', provincia='$new_provincia' WHERE id='$id'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record aggiornato con successo.";
    } else {
        echo "Errore nell'aggiornamento del record: " . $conn->error;
    }
}

$conn->close();
?>