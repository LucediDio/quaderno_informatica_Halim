<!DOCTYPE html>

<head>

</head>
<body>
<br>
    <?php
    
    $today = new DateTime("now", new DateTimeZone("Europe/Rome"));
    echo $today->format('h:i:s');
    $ora = $today->format('H');
    $nome = "Paolo";
    if ($ora>8 && $ora<12)
    {
        echo "<h1>Buongiorno $nome!</h1>";
    } else if ($ora>12 && $ora<20)
    {
        echo "<h1>Buonasera $nome!</h1>";
    } else {
        echo "<h1>Buonanotte $nome!</h1>";
    }
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    $browser = "sconosciuto";

    
    if (strpos($userAgent, 'Chrome') !== false) {
        $browser = "Google Chrome";
    } else if (strpos($userAgent, 'Firefox') !== false) {
        $browser = "Mozilla Firefox";
    } else if (strpos($userAgent, 'Safari') !== false && strpos($userAgent, 'Chrome') === false) {
        $browser = "Safari";
    } else if (strpos($userAgent, 'Edge') !== false && strpos($userAgent, 'Edg') !== false) {
        $browser = "Microsoft Edge";
    } else if (strpos($userAgent, 'Opera') !== false && strpos($userAgent, 'OPR') !== false) {
        $browser = "Opera";
    } else if (strpos($userAgent, 'Trident') !== false && strpos($userAgent, 'MSIE') !== false) {
        $browser = "Internet Explorer";
    }

    
    echo "<p>Stai usando il browser: $browser</p>";
    ?>
       <!-- Spiegazione -->
       <h2>Spiegazione del Codice</h2>
    <p>
        Questo codice PHP ha tre funzioni principali:
    </p>
    <ul>
    <p>
        Il codice PHP è suddiviso in tre parti principali, ciascuna con una funzione specifica:
    </p>

    <h3>1. Visualizzazione dell'ora corrente</h3>
    <p>
        La classe <code>DateTime</code> di PHP viene utilizzata per ottenere la data e l'ora correnti. Creiamo un'istanza di questa classe 
        specificando il fuso orario "Europe/Rome". L'ora corrente viene stampata con il metodo <code>format('h:i:s')</code>, che restituisce l'ora in formato 
        12 ore (hh:mm:ss). Usiamo anche <code>format('H')</code> per ottenere solo l'ora in formato 24 ore, salvandola nella variabile <code>$ora</code> 
        per il controllo successivo.
    </p>

    <h3>2. Messaggio personalizzato in base all'orario</h3>
    <p>
        In questa parte del codice, usiamo un'istruzione <code>if</code> per determinare quale messaggio mostrare all'utente:
    </p>
    <ul>
        <li>Se l'ora è compresa tra le 8:00 e le 12:00 (<code>$ora > 8 && $ora < 12</code>), viene mostrato il messaggio <em>"Buongiorno Paolo!"</em>.</li>
        <li>Se l'ora è compresa tra le 12:00 e le 20:00 (<code>$ora > 12 && $ora < 20</code>), viene mostrato il messaggio <em>"Buonasera Paolo!"</em>.</li>
        <li>In tutti gli altri casi (di notte), viene mostrato il messaggio <em>"Buonanotte Paolo!"</em>.</li>
    </ul>
    <p>
        Questo rende il messaggio dinamico, adattandosi automaticamente all'orario corrente.
    </p>

    <h3>3. Rilevamento del browser</h3>
    <p>
        La variabile <code>$_SERVER['HTTP_USER_AGENT']</code> contiene informazioni sul browser e sul sistema operativo dell'utente. 
        Per identificare il browser, usiamo la funzione <code>strpos()</code>, che cerca una determinata stringa all'interno dell'user agent:
    </p>
    <ul>
        <li>Se la stringa contiene "Edge" o "Edg", il browser è riconosciuto come <em>Microsoft Edge</em>.</li>
        <li>Se contiene "OPR" o "Opera", il browser è <em>Opera</em>.</li>
        <li>Se contiene sia "Chrome" che "Safari", il browser è <em>Google Chrome</em>.</li>
        <li>Se contiene "Safari" ma non "Chrome", il browser è <em>Safari</em>.</li>
        <li>Se contiene "Firefox", il browser è <em>Mozilla Firefox</em>.</li>
        <li>Se contiene "Trident" o "MSIE", il browser è <em>Internet Explorer</em>.</li>
    </ul>
    <p>
        Se il browser non viene riconosciuto, il valore predefinito è "sconosciuto".
    </p>

    <h3>4. Stampa dei risultati</h3>
    <p>
        Infine, il codice stampa:
    </p>
    <ul>
        <li>L'ora corrente, come stringa di testo.</li>
        <li>Un messaggio personalizzato in base all'orario, come intestazione HTML .</li>
        <li>Il nome del browser utilizzato dall'utente, sotto forma di paragrafo .</li>
    </ul>
    <H1><a href="/Slides/index.html">HOME</a> <h1>
</body>
</html>
