
<body>
    <h1>Gestione Film e Proiezioni</h1>

    <?php
        // Configurazione per la connessione al database
        $host = "localhost";        // Host del database (di solito 'localhost')
        $username = "root";         // Nome utente del database
        $password = "root";             // Password del database
        $dbname = "calcio_db";  // Nome del database
    
        // Creazione della connessione
        $conn = new mysqli($host, $username, $password, $dbname);
    
        // Controllo della connessione
        if ($conn->connect_error) {
            // Mostra un messaggio di errore in caso di connessione fallita
            echo "<p style='color: red;'>Connessione fallita: " . $conn->connect_error . "</p>";
        } else {
            // Mostra un messaggio di successo in caso di connessione riuscita
            echo "<p style='color: green;'>Connessione al database avvenuta con successo!</p>";
        }
    
        // Chiusura della connessione
        //$conn->close();
        ?>

    <form action="calcio.php" method="post">
        <input type="submit" name="view_squadra" value="Visualizza squadre">
        <input type="submit" name="view_calciatore" value="Visualizza calciatori">
        <input type="submit" name="view_lega" value="Visualizza lega">
    </form>

   

    <?php
    if (isset($_POST['view_calciatore'])) {
        $result = $conn->query("SELECT * FROM Calciatore");
        echo "<h2>Calciatori</h2><table border='1'><tr><th>Codice Calciatore</th><th>Nome</th><th>Cognome</th><th>Nazionalità</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['Codice_Calciatore'] . "</td><td>" . $row['Nome'] . "</td><td>" . $row['Cognome'] . "</td><td>" . $row['Nazionalità'] . "</td></tr>";
        }
        echo "</table>";
    } elseif (isset($_POST['view_squadra'])) {
        $result = $conn->query("SELECT * FROM Squadra");
        echo "<h2>Squadre</h2><table border='1'><tr><th>Codice Squadra</th><th>Nome</th><th>Anno Fondazione</th><th>Città</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['Codice_squadra'] . "</td><td>" . $row['Nome'] . "</td><td>" . $row['Anno_Fondazione'] . "</td><td>" . $row['Citta'] . "</td></tr>";
        }
        echo "</table>";
    } elseif (isset($_POST['view_partita'])) {
        $result = $conn->query("SELECT * FROM Partita");
        echo "<h2>Partite</h2><table border='1'><tr><th>Codice Squadra</th><th>Codice Calciatore</th><th>Risultato</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['Codice_squadra'] . "</td><td>" . $row['Codice_Calciatore'] . "</td><td>" . $row['Risultato'] . "</td></tr>";
        }
        echo "</table>";
    } elseif (isset($_POST['view_lega'])) {
        $result = $conn->query("SELECT * FROM Lega");
        echo "<h2>Leghe</h2><table border='1'><tr><th>Codice Lega</th><th>Nome</th><th>Paese</th><th>Squadre</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['Codice_Lega'] . "</td><td>" . $row['Nome'] . "</td><td>" . $row['Paese'] . "</td><td>" . $row['Squadre'] . "</td></tr>";
        }
        echo "</table>";
    }

    //$conn->close();
?>


<p>Clicca sul link qui sotto per andare alla pagina di inserimento dati:</p>
<a href="inserisci.php">Pagina di inserimento dati</a>

</body>
</html>