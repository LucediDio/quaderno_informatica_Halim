<!DOCTYPE html>

<head>
    <title>Schemi di Triangoli</title>
    <style>
        body {
            font-family: monospace;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Schemi di Triangoli</h1>

    <?php
    echo "<h2>1. Triangolo crescente</h2>";
    for ($i = 1; $i <= 10; $i++) { 
        for ($j = 1; $j <= $i; $j++) {
            echo '*';
        }
        echo '<br>';
    }

    echo '<br>'; 

    echo "<h2>2. Triangolo decrescente</h2>";
    for ($i = 10; $i >= 1; $i--) { 
        for ($j = 1; $j <= $i; $j++) { 
            echo '*';
        }
        echo '<br>';
    }

    echo '<br>'; 

  
    echo "<h2>3. Triangolo decrescente spostato</h2>";
    for ($i = 10; $i >= 1; $i--) { 
        for ($k = 10; $k > $i; $k--) {
            echo '&nbsp;';
        }
        for ($j = 1; $j <= $i; $j++) { 
            echo '*';
        }
        echo '<br>'; 
    }

    echo '<br>';

    
    echo "<h2>4. Triangolo crescente spostato</h2>";
    for ($i = 1; $i <= 10; $i++) { 
        for ($k = 10; $k > $i; $k--) { 
            echo '&nbsp;';
        }
        for ($j = 1; $j <= $i; $j++) { 
            echo '*';
        }
        echo '<br>'; 
    }
    ?>

    <!-- Spiegazione dettagliata -->
    <h2>Spiegazione dettagliata del codice</h2>
    <p>
        Questa pagina genera quattro schemi di triangoli utilizzando cicli annidati in PHP. Ogni triangolo
        ha un aspetto diverso ed è creato controllando il numero di asterischi e spazi per ogni riga.
    </p>

    <h3>1. Triangolo crescente</h3>
    <p>
        Il primo triangolo è un triangolo crescente, che aumenta di una riga a ogni iterazione. Ecco come funziona:
    </p>
    <ul>
        <li>Il ciclo esterno <code>for ($i = 1; $i &lt;= 10; $i++)</code> controlla il numero di righe (da 1 a 10).</li>
        <li>Il ciclo interno <code>for ($j = 1; $j &lt;= $i; $j++)</code> aggiunge un numero crescente di asterischi
            (<code>*</code>) in ogni riga.</li>
        <li>Alla fine di ogni iterazione, <code>echo '&lt;br&gt;';</code> sposta alla riga successiva.</li>
    </ul>

    <h3>2. Triangolo decrescente</h3>
    <p>
        Il secondo triangolo è un triangolo decrescente. Il numero di asterischi diminuisce con ogni riga:
    </p>
    <ul>
        <li>Il ciclo esterno <code>for ($i = 10; $i &gt;= 1; $i--)</code> itera da 10 a 1.</li>
        <li>Il ciclo interno <code>for ($j = 1; $j &lt;= $i; $j++)</code> stampa un numero decrescente di asterischi
            (<code>*</code>) in ogni riga.</li>
        <li>Alla fine di ogni iterazione, <code>echo '&lt;br&gt;';</code> sposta alla riga successiva.</li>
    </ul>

    <h3>3. Triangolo decrescente spostato</h3>
    <p>
        Il terzo triangolo è un triangolo decrescente con spazi iniziali per centrare gli asterischi:
    </p>
    <ul>
        <li>Il ciclo esterno <code>for ($i = 10; $i &gt;= 1; $i--)</code> itera da 10 a 1.</li>
        <li>Il primo ciclo interno <code>for ($k = 10; $k &gt; $i; $k--)</code> aggiunge spazi bianchi (<code>'&amp;nbsp;'</code>)
            prima di stampare gli asterischi, spostandoli verso destra.</li>
        <li>Il secondo ciclo interno <code>for ($j = 1; $j &lt;= $i; $j++)</code> stampa un numero decrescente di asterischi
            (<code>*</code>) in ogni riga.</li>
        <li>Alla fine di ogni iterazione, <code>echo '&lt;br&gt;';</code> sposta alla riga successiva.</li>
    </ul>

    <h3>4. Triangolo crescente spostato</h3>
    <p>
        Il quarto triangolo è un triangolo crescente con spazi iniziali per centrare gli asterischi:
    </p>
    <ul>
        <li>Il ciclo esterno <code>for ($i = 1; $i &lt;= 10; $i++)</code> itera da 1 a 10.</li>
        <li>Il primo ciclo interno <code>for ($k = 10; $k &gt; $i; $k--)</code> aggiunge spazi bianchi (<code>'&amp;nbsp;'</code>)
            prima di stampare gli asterischi, spostandoli verso destra.</li>
        <li>Il secondo ciclo interno <code>for ($j = 1; $j &lt;= $i; $j++)</code> stampa un numero crescente di asterischi
            (<code>*</code>) in ogni riga.</li>
        <li>Alla fine di ogni iterazione, <code>echo '&lt;br&gt;';</code> sposta alla riga successiva.</li>
    </ul>
    <H1><a href="/Slides/index.html">HOME</a> <h1>
</body>
</html>
