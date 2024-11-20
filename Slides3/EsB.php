<?php
session_start();
if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = [];
}

$message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['action']) && $_POST['action'] == 'register') {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        
        if (!empty($username) && !empty($password)) {
            
            $_SESSION['users'][$username] = $password;
            $message = "registrazione completata ora puoi effettuare il login";
        } else {
            $message = "inserisci un nome utente e una password validi";
        }
    } elseif (isset($_POST['action']) && $_POST['action'] == 'login') {
        
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        
        if (isset($_SESSION['users'][$username]) && $_SESSION['users'][$username] == $password) {
            $message = "login effettuato correttamente benvenuto, $username.";
        } else {
            $message = "credenziali errate riprova.";
        }
    }
}
?>
<html>
<head>
    <title>Registrazione e Login</title>
</head>
<body>
    <h1>Registrazione e Login</h1>
    <p style="color: green;"><?= htmlspecialchars($message); ?></p>

    <!-- Modulo di registrazione -->
    <h2>Registrazione</h2>
    <form method="post" action="">
        <label for="username">Nome utente:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="hidden" name="action" value="register">
        <button type="submit">Registrati</button>
    </form>

    <hr>

    <!-- Modulo di login -->
    <h2>Login</h2>
    <form method="post" action="">
        <label for="username">Nome utente:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="hidden" name="action" value="login">
        <button type="submit">Login</button>
    </form>
    <h1><a href="/Slides/index.html">HOME</a></h1>
</body>
</html>
