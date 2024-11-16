<html>
    <head>
</head>
<body>
    <h3>Controllo credenziali</h3>
    <?php
    $usr=$_POST["nomeutente"];
    $pwd=$_POST["password"];
    if ($usr != "admin" && $pwd!= "passwd") {
        ?>
        <h4> Attenzione! Nome utente o passwd sbagliate. </br>
        Accesso negato !<h4>
             <?php
        } else {
            echo "<h4> Benvenuto " . $usr . "<br/>nell'area riservata del sito! </h4>";
        }
        ?>
        <H1><a href="/Slides/index.html">HOME</a> <h1>
        </body>
        </html>
