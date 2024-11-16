<!DOCTYPE html>

<head>

    <title>Dati Inseriti</title>
</head>
<body>
    <h1>Dati Inseriti</h1>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $nome = htmlspecialchars($_POST['nome']);
        $cognome = htmlspecialchars($_POST['cognome']);
        $data_nascita = htmlspecialchars($_POST['data_nascita']);
        $codice_fiscale = htmlspecialchars($_POST['codice_fiscale']) ?: "Non specificato";
        $email = htmlspecialchars($_POST['email']);
        $cellulare = htmlspecialchars($_POST['cellulare']) ?: "Non specificato";
        $via = htmlspecialchars($_POST['via']);
        $cap = htmlspecialchars($_POST['cap']);
        $comune = htmlspecialchars($_POST['comune']);
        $provincia = htmlspecialchars($_POST['provincia']);
        $nickname = htmlspecialchars($_POST['nickname']);
        $password = htmlspecialchars($_POST['password']);

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
    <H1><a href="/Slides/index.html">HOME</a> <h1>
</body>
</html>
