<?php
include "connection.php";

// Verifica dei parametri nell'URL
if(isset($_GET['new_cap']) && isset($_GET['new_provincia'])) {
    // Pulizia e preparazione dei dati
    $new_cap = mysqli_real_escape_string($conn, $_GET['new_cap']);
    $new_provincia = mysqli_real_escape_string($conn, $_GET['new_provincia']);

    // Creazione della query SQL per l'inserimento dei dati
    $sql = "INSERT INTO cap_provincia (cap, provincia) VALUES ('$new_cap', '$new_provincia')";
    
    // Esecuzione della query SQL
    if ($conn->query($sql) === TRUE) {
        echo "Record aggiunto con successo.";
    } else {
        echo "Errore nell'aggiunta del record: " . $conn->error;
    }
} else {
    // Se i parametri non sono presenti nell'URL
    echo "Parametri mancanti.";
}

// Chiusura della connessione
$conn->close();
?>