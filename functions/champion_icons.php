<?php


define("DDRAGON_VERSION", "16.17.1");


$DDRAGON_EXCEPTIONS = [
    "Aurelion Sol"      => "AurelionSol",
    "Bel'Veth"          => "Belveth",
    "Cho'Gath"          => "Chogath",
    "Dr. Mundo"         => "DrMundo",
    "Jarvan IV"         => "JarvanIV",
    "Kai'Sa"            => "Kaisa",
    "Kha'Zix"           => "Khazix",
    "Kog'Maw"           => "KogMaw",
    "K'Sante"           => "KSante",
    "LeBlanc"           => "Leblanc",
    "Lee Sin"           => "LeeSin",
    "Master Yi"         => "MasterYi",
    "Maître Yi"         => "MasterYi", // nom français
    "Miss Fortune"      => "MissFortune",
    "Wukong"            => "MonkeyKing",
    "Nunu & Willump"    => "Nunu",
    "Nunu et Willump"   => "Nunu",     // nom français
    "Nunu"              => "Nunu",
    "Rek'Sai"           => "RekSai",
    "Renata Glasc"      => "Renata",
    "Tahm Kench"        => "TahmKench",
    "Twisted Fate"      => "TwistedFate",
    "Vel'Koz"           => "Velkoz",
    "Xin Zhao"          => "XinZhao",
];


function retirer_accents($texte) {
    $accents = ["à","â","ä","é","è","ê","ë","î","ï","ô","ö","ù","û","ü","ç",
                "À","Â","Ä","É","È","Ê","Ë","Î","Ï","Ô","Ö","Ù","Û","Ü","Ç"];
    $sans_accents = ["a","a","a","e","e","e","e","i","i","o","o","u","u","u","c",
                      "A","A","A","E","E","E","E","I","I","O","O","U","U","U","C"];
    return str_replace($accents, $sans_accents, $texte);
}


function champion_name_to_ddragon_id($name) {
    global $DDRAGON_EXCEPTIONS;

    $name = trim($name);

    if (isset($DDRAGON_EXCEPTIONS[$name])) {
        return $DDRAGON_EXCEPTIONS[$name];
    }


    $name = retirer_accents($name);
    return str_replace([" ", "'", ".", "&"], "", $name);
}


function get_champion_icon_url($name) {
    $id = champion_name_to_ddragon_id($name);
    return "https://ddragon.leagueoflegends.com/cdn/" . DDRAGON_VERSION . "/img/champion/" . $id . ".png";
}