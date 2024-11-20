<html>

<head>
    <title>Tabella Pitagorica</title>
</head>
<body>
    <h1 style="text-align: center;">Tabella Pitagorica</h1>
    <table border="1" cellpadding="5" cellspacing="0" style="margin: 0 auto; border-collapse: collapse;">
        <?php
            $dimensione = 10;
            
            
            echo "<th></th>";
            for ($colonna = 1; $colonna <= $dimensione; $colonna++) {
                echo "<th>$colonna</th>";
            }
            echo "</tr>";
            
            
            for ($riga = 1; $riga <= $dimensione; $riga++) {
                echo "<tr>";
                echo "<th>$riga</th>"; 
                for ($colonna = 1; $colonna <= $dimensione; $colonna++) {
                    $prodotto = $riga * $colonna;
                    echo "<td style='text-align: center;'>$prodotto</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
        <!-- Spiegazione dettagliata -->
        <h2>Spiegazione dettagliata del codice</h2>
    <p>
        Questo codice PHP genera una tabella pitagorica (moltiplicazioni) di dimensione 10x10.
    </p>

    <h3>1. Impostazione della dimensione della tabella</h3>
    <p>
        La variabile <code>$dimensione</code> viene impostata a 10, indicando che la tabella conterrà 10 righe e 10 colonne. 
        Questo valore può essere modificato per cambiare la dimensione della tabella.
    </p>

    <h3>2. Creazione dell'intestazione della tabella</h3>
    <p>
        La prima riga della tabella contiene i numeri da 1 a 10 nella parte superiore. Ecco come viene creata:
    </p>
    <ul>
        <li>Prima di tutto, viene stampata una cella vuota (<code>&lt;th&gt;</code>) per lasciare lo spazio iniziale nella parte in alto a sinistra.</li>
        <li>Con un ciclo <code>for</code>, i numeri da 1 a 10 vengono aggiunti come intestazioni di colonna (<code>&lt;th&gt;</code>).</li>
    </ul>

    <h3>3. Creazione delle righe della tabella</h3>
    <p>
        Ogni riga della tabella rappresenta una riga della tabella pitagorica. Ecco come funziona:
    </p>
    <ul>
        <li>Un ciclo <code>for</code> itera da 1 a 10 (le righe).</li>
        <li>Per ogni riga, viene aggiunta un'intestazione (<code>&lt;th&gt;</code>) che indica il numero della riga.</li>
        <li>Un altro ciclo <code>for</code> annidato itera da 1 a 10 (le colonne).</li>
        <li>In ogni cella (<code>&lt;td&gt;</code>), viene calcolato il prodotto tra il numero della riga e il numero della colonna, che viene poi stampato.</li>
    </ul>

    <h3>4. Uso degli stili HTML</h3>
    <p>
        Sono stati utilizzati attributi HTML per migliorare l'aspetto della tabella:
    </p>
    <ul>
        <li><code>border="1"</code>: aggiunge un bordo alle celle della tabella.</li>
        <li><code>cellpadding="5"</code>: aggiunge spazio interno tra il contenuto della cella e il bordo.</li>
        <li><code>cellspacing="0"</code>: rimuove lo spazio tra i bordi delle celle.</li>
        <li><code>style="margin: 0 auto; border-collapse: collapse;"</code>: centra la tabella e rimuove i bordi doppi.</li>
        <li><code>style='text-align: center;'</code>: centra il testo all'interno delle celle della tabella.</li>
    </ul>

    <h3>5. Risultato finale</h3>
    <p>
        Il risultato è una tabella di moltiplicazione con:
    </p>
    <ul>
        <li>Numeri da 1 a 10 come intestazioni di righe e colonne.</li>
        <li>Il prodotto tra il numero della riga e il numero della colonna in ogni cella.</li>
    </ul>
    <h1 style="text-align: center;"> <strong><a href="/Slides/index.html">HOME</a> <strong><a href="../Slides1/Esb.php">Esercizio successivo</a>
</body>
</html>
