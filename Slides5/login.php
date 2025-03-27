<!DOCTYPE html>
<html lang="en">

<head>
    <style>
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Esegui il login</h1>
    <form action="" method="post">
        <label for="username_login">Nome utente:</label><br>
        <input type="text" name="username_login" required><br><br>
        <label for="password_login">Password:</label><br>
        <input type="password" name="password_login" required><br><br>
        <button type="submit">Login</button>
    </form>

    <?php
    
    $filePath = __DIR__ . "/dati.txt";

    
    if (!file_exists($filePath)) {
        echo "<p style='color:red;'>Errore: il file 'dati.txt' non esiste nel percorso specificato.</p>";
    } else {
        
        $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST["username_login"];
            $password = $_POST["password_login"];
            $credentials = $username . ";" . $password; // Crea la stringa da confrontare

            $isLoggedIn = false; // controlo se e' riuscito

            
            foreach ($lines as $line) {
                if (trim($line) === $credentials) { 
                    echo "<p style='color:green;'>Login eseguito con successo!</p>";
                    $isLoggedIn = true;
                    break;
                }
            }

            // se non trovata corrispondenza
            if (!$isLoggedIn) {
                echo "<p style='color:red;'>Credenziali errate. Riprova.</p>";
            }
        }
    }
    ?>
        <br><br>
        <a href="Homepage.html">Torna al menu principale</a>
</body>

</html>