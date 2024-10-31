<?php

//  Proviamo a creare il check di una password

// - ALMENO 8 CARATTERI
// - ALMENO UNA LETTERA MAIUSCOLA
// - ALMENO UN NUMERO
// - ALMENO UN CARATTERE SPECIALE 


// diamo la possibilità all'utente di inserire la password
// $pwd = readline("Inserisci la tua password\n");

// PRIMA REGOLA
// data una password, controllare cha abbia almeno 8 caratteri

// if(strlen($pwd) >= 8){
//     echo "Password accettata";
// } else{
//     echo "Password rifiutata";
// }

// SECONDA REGOLA
// data una password, controllare che abbia almeno 1 lettera maiuscola
// dobbiamo ciclare ogni singola lettera della password e dare in pasto al ctype upper ogni singola lettera.

// nel for abbiamo detto che, ad ogni giro, ti passo ogni singola lettera della password. Se la lettera è maiuscola, grazie al ctype_upper, mi verrà restiuito un true.
// Se è true, la password è accettata. Se è false, la password è rifiutata

// for($i = 0; $i < strlen($pwd); $i++){

//    if(ctype_upper($pwd[$i]) == true){
//         echo "Password accettata \n";
//         break;
//    } else {
//         echo "Password rifiutata \n";
//    }

// }


// TERZA REGOLA
// data una password, controllare che abbia almeno 1 numero
// dobbiamo ciclare ogni singola lettera della password e darla in pasto a is_numeric. 
// Se trova il numero, ci restituisce il booleano true, altrimenti false

// for($i = 0; $i < strlen($pwd); $i++){

//     if(is_numeric($pwd[$i]) == true){
//         echo "Password accettata \n";
//         break;
//     } else {
//         echo "Password rifiutata \n";
//     }

// }


// QUARTA REGOLA
// data una password, controllare che abbia almeno 1 carattere speciale
//funzione di php -> preg_match per le regex
// il metodo da usare si chiama in_array. Va a verificare all'interno di un array, se è presente l'elemento che vogliamo cercare.
// quindi noi daremo in pasto a in_array 2 parametri:
//  l'elemento che vogliamo cercare
// e dove lo deve cercare
// se lo trova ci restituirà true, altrimenti false

// $special_chars = ['!', "@", "#", "$"];

// for($i = 0; $i < strlen($pwd); $i++){

//     if(in_array($pwd[$i], $special_chars) == true ){
//         echo "Ho trovato un carattere speciale \n";
//         break;
//     } else {
//         echo "Carattere speciale non trovato! \n";
//     }

// } 

// refactoring -> extract -> incapsulate -> abstract

// $pwd = readline("Inserisci la tua password\n");

// PRIMA FUNZIONE

function checkLength($password){

    if(strlen($password) >= 8){
        return true;
    } else{
        return false;
    }

}

// $first_rule = checkLength($pwd);
// var_dump($first_rule);


// SECONDA FUNZIONE

function checkUppercase($password){

    for($i = 0; $i < strlen($password); $i++){
        if(ctype_upper($password[$i]) == true){
            return true;
        }
    }

    return false;

}

// $second_rule = checkUppercase($pwd);
// var_dump($second_rule);


// TERZA FUNZIONE

function checkNumber($password){

    for($i = 0; $i < strlen($password); $i++){

        if(is_numeric($password[$i]) == true){
            return true;
        }
        
    }

    return false;

}

// $third_rule = checkNumber($pwd);
// var_dump($third_rule);

// QUARTA FUNZIONE

const SPECIAL_CHARS = ['!', "@", "#", "$"];

// abbiamo la costante dei caratteri speciali che è un array
// nella funzione, abbiamo parametrizzato in parametro formale $caratteri_speciali e assegnato come valore di default la mia costante SPECIAL_CHARS
// così facendo, quando invoco la funzione, posso passare solo il parametro reale password. Così facendo, in automatico il mio $caratteri_speciali, sarà proprio la costante SPECIAL_CHARS. Eventualmente, se volessi usare un altro array di caratteri speciali, potrei comunque farlo, ma devo passarlo nell'invocazione della funzione, assieme alla password

function checkSpecialChars($password, $caratteri_speciali = SPECIAL_CHARS){


    for($i = 0; $i < strlen($password); $i++){

        if(in_array($password[$i], $caratteri_speciali) == true ){
            return true;
        }  
    } 

    return false;

}

// $fourth_rule =  checkSpecialChars($pwd);
// var_dump($fourth_rule);


// ULTIMO STEP -> CHECK FINALE

// function checkPassword($password){
    
//         $first_rule = checkLength($password);
    
//         $second_rule = checkUppercase($password);
    
//         $third_rule = checkNumber($password);
    
//         $fourth_rule =  checkSpecialChars($password);

//     if($first_rule == true && $second_rule == true && $third_rule == true && $fourth_rule == true){
//         echo "Password Accettata";
//     }else{
//         echo "Password Rifiutata";
//     }

// }

// checkPassword($pwd);


// REFACTORING DELLA FUNZIONE GLOBALE

// function checkPassword($password){
    
 
//     if(checkLength($password) &&  checkUppercase($password) && checkNumber($password) &&  checkSpecialChars($password)){
        
//         echo "Password Accettata";
//     } else {
//         echo "Password Rifiutata";
//     }

// }

// checkPassword($pwd);


// PICCHIAMO VALERIO:

// $passwordona = readline("Inserisci la tua password: \n");

// $uppercase = preg_match('@[A-Z]@' , $passwordona);
// $number = preg_match('@[0-9]@', $passwordona);
// $specialChars = preg_match('@[^a-zA-Z0-9]@', $passwordona);

// if(!$uppercase || !$number || !$specialChars || strlen($passwordona) < 8){
//     echo "password errata";
// } else {
//     echo "password corretta";
// }