<?php

/*

Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.

Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php

Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale

Milestone 3 (BONUS)
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.

Milestone 4 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme).
Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.
*/






?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Generatore passwords</title>
</head>

<body>
    <h1 class="text-center">GENERATORE PASSWORDS</h1>
    <div class="w-75 mx-auto bg-color-pink pt-5">
        <form class="row g-3" action="./include/components/index.php" method="GET">
            <div class="col-auto">
                <h4>Inserisci la lunghezza :</h4>
            </div>
            <div class="col-auto">
                <label for="inputPassword2" class="visually-hidden"> Password</label>
                <input type="text" class="form-control" id="inputPassword2" placeholder="Lunghezza Password"
                    name="passwordLength">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Genera psw</button>
            </div>

            <div>
                <h5>scegli da cosa è composta la tua password:</h5>
                <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                    <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off" name="numeri">
                    <label class="btn btn-outline-primary" for="btncheck1">Numeri</label>
    
                    <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off" name="lettere">
                    <label class="btn btn-outline-primary" for="btncheck2">Lettere</label>
    
                    <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off" name="simboli">
                    <label class="btn btn-outline-primary" for="btncheck3">Simboli</label>
                </div>
            </div>
        </form>


    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>