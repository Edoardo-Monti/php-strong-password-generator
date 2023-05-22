<?php

function generaPasswordCasuale() {
   
    $sceltaLength = $_GET['passwordLength'];
    $numeri = $_GET['numeri'];
    $lettere = $_GET['lettere'];
    $simboli = $_GET['simboli'];
    //condizioni per scelta della password
    $sceltaComposizione = ''; 
    if( $numeri == true){
        $numeriScelta = '0123456789';
        $sceltaComposizione .= $numeriScelta;
    };
    if( $lettere == true){
        $lettereScelta = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $sceltaComposizione .= $lettereScelta;
    };
    if( $simboli == true){
        $simboliScelta = '!?@#$%*-_';
        $sceltaComposizione .= $simboliScelta;
    };
    //creiamo una stringa con tutti i simboli che vogliamo utilizzare
    // $caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!?@#$%*-_';
    //prendiamo la lunghezza della stringa
    $lunghezzaCaratteri = strlen($sceltaComposizione);
    //inizializiamo una variabile vuota dove ci pusheremo gli elementi singoli
    $password = '';

    //facciamo un ciclo fino alla lunghezza che inseriamo nell' input
    for ($i = 0; $i < $sceltaLength; $i++) {
        //generare un numero casuale compreso tra 0 e $lunghezzaCaratteri e utilizza questo numero per selezionare un carattere casuale dalla stringa $caratteri 
        $carattereCasuale = $sceltaComposizione[rand(0, $lunghezzaCaratteri) - 1 ];
        //aggingiamo ogni carattere trovato alla variabile $password
        $password .= $carattereCasuale;
    }

    return $password;
}
// generaPasswordCasuale($sceltaLength);
// var_dump(generaPasswordCasuale($sceltaLength));