<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrazione</title>
</head>
<body>
    <h1>Accedi</h1>
    <form action="" method="post">
        <label for="username">Nome utente (lo userai per accedere) (univoco):</label><br>
        <input type="text" name="username" required><br><br>
        <label for="password">Password:</label><br>
        <input type="password" name="password" required><br><br>
        <button type="submit">Registrati</button>
    </form>

    <?php
    
    $filePath = __DIR__ . "/dati.txt";

    // Controlla se il file esiste
    if (!file_exists($filePath)) {
        echo "<p style='color:red;'>Errore: il file 'dati.txt' non esiste nel percorso specificato.</p>";
    } else {
        
        $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $isUnique = true; // controllo se unico

            // controllo se esiste
            foreach ($lines as $line) {
                $userData = explode(';', $line, 2); // Dividi username e password
                if ($_POST["username"] == $userData[0]) {
                    echo "<p style='color:red;'>Errore: nome utente già in uso. Riprova.</p>";
                    $isUnique = false;
                    break;
                }
            }

            if ($isUnique) {
                // Se è unico, salva i dati
                echo "<p style='color:green;'>Dati caricati correttamente! Vai alla pagina di login.</p>";

                $dataToSave = $_POST["username"] . ";" . $_POST["password"] . "\n";
                $fileHandle = fopen($filePath, 'a');
                if ($fileHandle) {
                    fwrite($fileHandle, $dataToSave);
                    fclose($fileHandle);
                } else {
                    echo "<p style='color:red;'>Errore: impossibile scrivere nel file.</p>";
                }
            }
        }
    }
    ?>
    <br><br>
    <a href="Homepage.html">Torna al menu principale</a>
</body>

</html>