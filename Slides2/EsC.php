<!DOCTYPE html>


<head>

    <title>Tabella dei Quadrati e dei Cubi</title>
</head>

<body>
    <h1 style="text-align: center;">Tabella dei Quadrati e dei Cubi</h1>

    <?php
 
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $numero = $_POST['numero'] ?? 0;

        if ($numero >= 1 && $numero <= 10) {
           
            echo "<table border='1' cellpadding='5' cellspacing='0' style='margin: 0 auto; border-collapse: collapse;'>";
            echo "<tr><th>Numero</th><th>Quadrato</th><th>Cubo</th></tr>";

            for ($i = 1; $i <= $numero; $i++) {
                echo "<tr>";
                echo "<td style='text-align: center;'>$i</td>";
                echo "<td style='text-align: center;'>" . ($i * $i) . "</td>";
                echo "<td style='text-align: center;'>" . ($i * $i * $i) . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo '<h4 style="text-align: center; color: red;">Errore: Il numero deve essere compreso tra 1 e 10. Riprova.</h4>';
            mostraForm();
        }
    } else {
       
        mostraForm();
    }

    
    function mostraForm()
    {
        echo '
        <form action="" method="post" style="text-align: center;">
            <label for="numero">Seleziona un numero intero N (da 1 a 10):</label>
            <select name="numero">
                <option value="">-- Seleziona --</option>';
        for ($i = 1; $i <= 10; $i++) {
            echo "<option value='$i'>$i</option>";
        }
        echo '
            </select>
            <br/><br/>
            <input name="submit" type="submit" value="Crea tabella" />
        </form>
        ';
    }
    ?>

    <!-- Spiegazione dettagliata -->
    <h2>Spiegazione dettagliata del codice</h2>

    <p>
        Questo codice PHP realizza una **Tabella dei Quadrati e dei Cubi** in base a un numero selezionato dall'utente tramite un menu a tendina.
    </p>

    <h3>1. Visualizzazione del Form</h3>
    <p>
        La funzione <code>mostraForm</code> genera il form HTML per consentire all'utente di selezionare un numero intero (da 1 a 10) tramite un menu a tendina. Ecco come funziona:
    </p>
    <ul>
        <li>Un ciclo <code>for</code> genera le opzioni del menu (da 1 a 10).</li>
        <li>Il pulsante "Crea tabella" invia il valore selezionato al server tramite il metodo <code>POST</code>.</li>
    </ul>

    <h3>2. Controllo dell'input</h3>
    <p>
        Una volta inviato il form, il server controlla il valore:
    </p>
    <ul>
        <li>Se il valore è compreso tra 1 e 10, viene generata una tabella.</li>
        <li>Se il valore è vuoto o fuori intervallo, viene mostrato un messaggio di errore e riproposto il form.</li>
    </ul>

    <h3>3. Generazione della tabella</h3>
    <p>
        Se il numero è valido, il codice genera una tabella che mostra:
    </p>
    <ul>
        <li>Ogni numero intero da 1 a N.</li>
        <li>Il quadrato di ogni numero (<code>$i * $i</code>).</li>
        <li>Il cubo di ogni numero (<code>$i * $i * $i</code>).</li>
    </ul>
    <p>
        La tabella è formattata con:
    </p>
    <ul>
        <li><code>border='1'</code>: aggiunge un bordo attorno a ogni cella.</li>
        <li><code>cellpadding='5'</code>: aggiunge spazio interno alle celle.</li>
        <li><code>cellspacing='0'</code>: rimuove gli spazi tra i bordi delle celle.</li>
        <li><code>style='text-align: center;'</code>: centra il testo in ogni cella.</li>
    </ul>

    <h3>4. Risultato Finale</h3>
    <p>
        Il risultato è una tabella centrata che mostra i numeri, i loro quadrati e i cubi da 1 a N (con N selezionato dall'utente).
    </p>
    <H1><a href="/Slides/index.html">HOME</a> <h1>
</body>

</html>
