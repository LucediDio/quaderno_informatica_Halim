<?php
// Connessione al database (modifica con i tuoi dati)
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "film_db"; // Sostituisci con il nome del tuo database

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la connessione
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Variabili per gestire l'inserimento
$codice_lega = $nome = $paese = $squadre = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera i dati inviati tramite POST
    $codice_lega = $_POST['Codice_Lega'];
    $nome = $_POST['Nome'];
    $paese = $_POST['Paese'];
    $squadre = $_POST['Squadre'];

    // Query SQL per inserire i dati nella tabella
    $sql = "INSERT INTO Lega (Codice_Lega, Nome, Paese, Squadre)
            VALUES ('$codice_lega', '$nome', '$paese', '$squadre')";

    // Esegui la query
    if ($conn->query($sql) === TRUE) {
        echo "Nuova lega inserita con successo!";
    } else {
        echo "Errore: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserisci Lega</title>
</head>
<body>
    <h1>Inserisci una nuova Lega</h1>
    <!-- Modulo per inserire i dati -->
    <form method="POST" action="">
        <label for="Codice_Lega">Codice Lega:</label>
        <input type="text" id="Codice_Lega" name="Codice_Lega" required><br><br>

        <label for="Nome">Nome:</label>
        <input type="text" id="Nome" name="Nome" required><br><br>

        <label for="Paese">Paese:</label>
        <input type="text" id="Paese" name="Paese" required><br><br>

        <label for="Squadre">Squadre:</label>
        <input type="text" id="Squadre" name="Squadre" required><br><br>

        <input type="submit" value="Inserisci Lega">
    </form>

    <p>Clicca sul link qui sotto per andare alla home page.</p>
    <h1><a href="/Slides/index.html">HOME</a></h1>
</body>
</html>
