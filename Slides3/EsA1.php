<html>
<html>

<head>
    <title>Dati Inseriti</title>
</head>

<body>
    <h1>Dati Inseriti</h1>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        
        $nome = trim(htmlspecialchars($_POST['nome']));
        $cognome = trim(htmlspecialchars($_POST['cognome']));
        $data_nascita = trim(htmlspecialchars($_POST['data_nascita']));
        $codice_fiscale = trim(htmlspecialchars($_POST['codice_fiscale'])) ?: "Non specificato";
        $email = trim(htmlspecialchars($_POST['email']));
        $cellulare = trim(htmlspecialchars($_POST['cellulare'])) ?: "Non specificato";
        $via = trim(htmlspecialchars($_POST['via']));
        $cap = trim(htmlspecialchars($_POST['cap']));
        $comune = trim(htmlspecialchars($_POST['comune']));
        $provincia = trim(htmlspecialchars($_POST['provincia']));
        $nickname = trim(htmlspecialchars($_POST['nickname']));
        $password = htmlspecialchars($_POST['password']); 

        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p>Errore: L'email inserita non è valida.</p>";
            exit;
        }

        
        if ($nickname === $nome && $nickname === $cognome) {
            echo "<p>Errore: Il nickname deve essere diverso da nome e cognome.</p>";
            exit;
        }

        
        echo "<p><strong>Nome:</strong> $nome</p>";
        echo "<p><strong>Cognome:</strong> $cognome</p>";
        echo "<p><strong>Data di Nascita:</strong> $data_nascita</p>";
        echo "<p><strong>Codice Fiscale:</strong> $codice_fiscale</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Cellulare:</strong> $cellulare</p>";
        echo "<p><strong>Indirizzo:</strong> $via, $cap, $comune, $provincia</p>";
        echo "<p><strong>Nickname:</strong> $nickname</p>";
        echo "<p><strong>Password:</strong> ******</p>";
    } else {
        echo "<p>Errore: Il modulo non è stato inviato correttamente.</p>";
    }
    ?>
    <h1><a href="/Slides/index.html">HOME</a></h1>
</body>

</html>