<?php
include_once __DIR__ . '/variables.php';

function generaPasswordCasuale($lunghezza) {
    //creiamo una stringa con tutti i simboli che vogliamo utilizzare
    $caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!?@#$%*-_';
    //prendiamo la lunghezza della stringa
    $lunghezzaCaratteri = strlen($caratteri);
    //inizializiamo una variabile vuota dove ci pusheremo gli elementi singoli
    $password = '';

    //facciamo un ciclo fino alla lunghezza che inseriamo nell' input
    for ($i = 0; $i < $lunghezza; $i++) {
        //generare un numero casuale compreso tra 0 e $lunghezzaCaratteri e utilizza questo numero per selezionare un carattere casuale dalla stringa $caratteri 
        $carattereCasuale = $caratteri[rand(0, $lunghezzaCaratteri) - 1];
        //aggingiamo ogni carattere trovato alla variabile $password
        $password .= $carattereCasuale;
    }

    return $password;
}
generaPasswordCasuale($sceltaLength);
var_dump(generaPasswordCasuale($sceltaLength));