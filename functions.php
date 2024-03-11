<?php

session_start();

//Insieme di array di valori numerici che andranno a popolare il parametro della funzione 'chr()' per i caratteri ASCII
//Specials
$specials1 = range(33, 47);
$specials2 = range(58, 64);
$specials3 = range(91, 96);
$specials4 = range(123, 126);
$allSpecials = array_merge($specials1, $specials2, $specials3, $specials4);
//Numbers
$numbers = range(48, 57);
//Letters
$upperCaseLetters = range(65, 90);
$lowerCaseLetters = range(97, 122);
$allLetters = array_merge($upperCaseLetters, $lowerCaseLetters);

//In base alla selezione dell'utente per la tipologia di caratteri saranno selezionati e mixxati solo gli array corrispondenti
$mix = array_merge(
    (isset($_GET['Lettere']) ? $allLetters : []),
    (isset($_GET['Numeri']) ? $numbers : []),
    (isset($_GET['Specials']) ? $allSpecials : [])
);



function pswGenerator($wishedLength){

    //Imposto manualmente questa voce a stringa vuota prima di una qualsiasi ricerca
    $_SESSION['randomPass'] = '';

    //Richiamo l'array $mix che sta al di fuori della funzione
    global $mix;
    
    //Check per il parametro di lunghezza
    if ((!empty($_GET['lunghezza'])) && ($_GET['lunghezza'] != 0)) {

        //Check per la selezione della tipologia di caratteri
        if (count($mix) != 0) {

            //Check per il parametro di ripetizione
            if ($_GET['repeat'] === 'repeat') {

                
                while (strlen($_SESSION['randomPass']) < $wishedLength) {

                    //Fintanto che la stringa ['randomPass'] non raggiunge la lunghezza desiderata si continua ad aggiungere un carattere tramite la funzione chr(). L'argomento di chr è il valore di una chiave casuale dell'array $mix. 
                    $_SESSION['randomPass'] .= chr($mix[array_rand($mix)]);
                }

            
            } elseif ($_GET['repeat'] === 'no-repeat') {

                //Decido di mescolare l'array $mix in maniera da renderne totalmente casuale l'ordine
                shuffle($mix);
                
                //Check per vedere che la lunghezza dell'array $mix sia maggiore o uguale alla lunghezza desiderata
                if (count($mix) >= $wishedLength) {

                    while (strlen($_SESSION['randomPass']) < $wishedLength) {

                        //Fintanto che non si raggiunge la lunghezza desiderata, utilizzo array_pop($mix) in modo da avere la certezza che non ci siano duplicati sulla stringa ['randomPass']. Mi rendo conto che forse è qualcosa di controintuitivo, ma così facendo non devo ricontrollare di volta in volta la stringa per eliminare i doppioni.
                        $_SESSION['randomPass'] .= chr(array_pop($mix));
                    }

                } else {

                    //Errore per count($mix) < $whishedLength
                    $_SESSION['errore'] = 'Non ci sono abbastanza caratteri per soddisfare la tua richiesta. Puoi risolvere il problema smarcando l\'opzione di ripetizione caratteri. (Caratteri massimi stampabili: ' . count($mix) . ')';
                }

            } else {

                //Nessuna selezione tra 'repeat' e 'no-repeat'
                $_SESSION['errore'] = 'Specifica una delle voci corrispondenti alla ripetizione caratteri';
            }

        } else {

            //Errore per count($mix) = 0
            $_SESSION['errore'] = 'Seleziona almeno un tipo di caratteri';
        }

    } else {
        
        //Errore per $wishedLenght = 0 oppure campo non popolato
        $_SESSION['errore'] = 'La lunghezza dev\'essere di minimo 1 carattere';
    }

}
