<!DOCTYPE html>


<head>

    <title>Login - Accesso Riservato</title>
</head>

<body>
    <h3>Accesso a Pagina Riservata</h3>
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
       
        $usr = $_POST['nomeutente'] ?? '';
        $pwd = $_POST['password'] ?? '';

        if (empty($usr) && empty($pwd)) {
            
            echo '<h4>DEVI INSERIRE LE CREDENZIALI RIPROVA</h4>';
            
            mostraForm();
        } elseif ($usr == 'admin' && $pwd == 'passwd') {
            
            echo "<h4>Benvenuto nell'area riservata del sito!</h4>";
            echo '<h1><a href="/Slides/index.html">HOME</a></h1>';
        } else {
            
            echo '<h4>Attenzione! Nome utente o password sbagliati.<br/>Accesso negato!</h4>';
            
            mostraForm();
        }
    } else {
        
        mostraForm();
    }

   
    function mostraForm()
    {
        echo '
        <form action="" method="post">
            <label for="username"><b>Username</b></label>
            <input type="text" name="nomeutente" placeholder="Inserisci il nome utente" /><br />
            
            <label for="password"><b>Password</b></label>
            <input type="password" name="password" placeholder="Inserisci la password" /><br />
    
            <input name="submit" type="submit" value="Invia" />
        </form>
        ';
    }
    ?>
    <br><br>
    <a href="/Slides/Slides2/EsB.html">INDIETRO</a>
    
    <H1><a href="/Slides/index.html">HOME</a> <h1>

</body>

</html>
