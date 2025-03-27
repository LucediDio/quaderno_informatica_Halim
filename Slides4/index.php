<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "calcio_db";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["add_calciatore"])) {
        $nome = ($_POST["nome"]);
        $cognome = ($_POST["cognome"]);
        $nazionalita = ($_POST["Nazionalita"]);

        $sql = "INSERT INTO Calciatore (Nome, Cognome, Nazionalita) VALUES ('$nome', '$cognome', '$nazionalita')";
        $conn->query($sql);
    }
    if (isset($_POST["add_squadra"])) {
        $nome = ($_POST["nome"]);
        $anno = ($_POST["anno"]);
        $citta = ($_POST["citta"]);

        $sql = "INSERT INTO squadra (Nome, Anno_Fondazione, Citta) VALUES ('$nome', '$anno', '$citta')";
        $conn->query($sql);
    }
    if (isset($_POST["add_lega"])) {
        $nome =($_POST["nome"]);
        $paese = ($_POST["paese"]);
        $squadre = ($_POST["squadre"]);

        $sql = "INSERT INTO Lega (Nome, Paese, Squadre) VALUES ('$nome', '$paese', '$squadre')";
        $conn->query($sql);
    }
    if (isset($_POST["add_partita"])) {
        $codice_squadra = ($_POST["codice_squadra"]);
        $codice_calciatore = ($_POST["codice_calciatore"]);
        $risultato = ($_POST["risultato"]);

        $sql = "INSERT INTO partita (Codice_squadra, Codice_Calciatore, Risultato) VALUES ('$codice_squadra', '$codice_calciatore', '$risultato')";
        $conn->query($sql);
    }
}

// Funzione per visualizzare le tabelle
function show_table($conn, $table) {
    $sql = "SELECT * FROM $table";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Tabella: $table</h2>";
        echo "<table border='1'><tr>";

        while ($field = $result->fetch_field()) {
            echo "<th>" . $field->name . "</th>";
        }
        echo "</tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            foreach ($row as $cell) {
                echo "<td>$cell</td>";
            }
            echo "</tr>";
        }
        echo "</table><br>";
    } else {
        echo "<h2>Tabella: $table</h2><p>Nessun dato trovato.</p>";
    }
}

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestione Database Calcio</title>
</head>
<body>

<h1>Gestione Database Calcio</h1>

<h2>Inserisci un nuovo Calciatore</h2>
<form method="post">
    Nome: <input type="text" name="nome" required>
    Cognome: <input type="text" name="cognome" required>
    Nazionalita: <input type="text" name="nazionalita" required>
    <input type="submit" name="add_calciatore" value="Aggiungi Calciatore">
</form>

<h2>Inserisci una nuova Squadra</h2>
<form method="post">
    Nome: <input type="text" name="nome" required>
    Anno Fondazione: <input type="number" name="anno" required>
    Città: <input type="text" name="citta" required>
    <input type="submit" name="add_squadra" value="Aggiungi Squadra">
</form>

<h2>Inserisci una nuova Lega</h2>
<form method="post">
    Nome: <input type="text" name="nome" required>
    Paese: <input type="text" name="paese" required>
    Numero di squadre: <input type="text" name="squadre" required>
    <input type="submit" name="add_lega" value="Aggiungi Lega">
</form>

<h2>Inserisci una nuova Partita</h2>
<form method="post">
    Codice Squadra: <input type="number" name="codice_squadra" required>
    Codice Calciatore: <input type="number" name="codice_calciatore" required>
    Risultato: 
    <select name="risultato">
        <option value="Vinta">Vinta</option>
        <option value="Persa">Persa</option>
        <option value="Pareggio">Pareggio</option>
    </select>
    <input type="submit" name="add_partita" value="Aggiungi Partita">
</form>

<h2>Visualizza i dati</h2>
<?php
show_table($conn, "Calciatore");
show_table($conn, "squadra");
show_table($conn, "Lega");
show_table($conn, "partita");

$conn->close();
?>

</body>
</html>
