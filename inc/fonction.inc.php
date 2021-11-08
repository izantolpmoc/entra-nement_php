<?php
function debug($arg){  //version Leeroy
    $br = "<br>";
    $brr = "<br><br>";

    print("<div style='background:#b3b3b3; z-index:1000; padding: 20px; border-radius: 5px'>");

        // contient la ligne où la func est appelée
        $trace = debug_backtrace();

        print("<pre style='font-size: 1.2rem; margin: 0'>");

            print("<p style='font-weight: bold; display: inline; background-color: black; color: white; border-radius: 3px'> File: </p> " . $trace[0]["file"] . $brr);
            print_r("<p style='font-weight: bold; display: inline; background-color: black; color: white; border-radius: 3px'> Line: </p> " . $trace[0]["line"] . $brr);

            print("<p style='background: black; color: white; padding: 20px; margin: 0;'>");
            print("Console debug by naikho | <span style='color: green'>" . date("h:i:s") . "</span> : " . $brr);
            print("<span style='margin-left: 50px; display: block;'>");
                print_r($arg);
            print("</span>");
            print("$br</p>");

        print("</pre>");
    print("</div>");
}

//--------------------------------
// Fonction pour exécuter la requête:

function execute_requete($req){

    global $pdo;

    $pdostatement = $pdo->query( $req );

    return $pdostatement;
}

// $r = execute_requete("SELECT * FROM membre");
?>