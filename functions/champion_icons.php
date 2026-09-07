<?php

define("DDRAGON_VERSION", "16.17.1");

$DDRAGON_EXCEPTIONS = [
    "Aurelion Sol"   => "AurelionSol",
    "Bel'Veth"       => "Belveth",
    "Cho'Gath"       => "Chogath",
    "Dr. Mundo"      => "DrMundo",
    "Jarvan IV"      => "JarvanIV",
    "Kai'Sa"         => "Kaisa",
    "Kha'Zix"        => "Khazix",
    "Kog'Maw"        => "KogMaw",
    "K'Sante"        => "KSante",
    "LeBlanc"        => "Leblanc",
    "Lee Sin"        => "LeeSin",
    "Master Yi"      => "MasterYi",
    "Miss Fortune"   => "MissFortune",
    "Wukong"         => "MonkeyKing",
    "Nunu & Willump" => "Nunu",
    "Nunu"           => "Nunu",
    "Rek'Sai"        => "RekSai",
    "Renata Glasc"   => "Renata",
    "Tahm Kench"     => "TahmKench",
    "Twisted Fate"   => "TwistedFate",
    "Vel'Koz"        => "Velkoz",
    "Xin Zhao"       => "XinZhao",
];


function champion_name_to_ddragon_id($name) {
    global $DDRAGON_EXCEPTIONS;

    $name = trim($name);

    if (isset($DDRAGON_EXCEPTIONS[$name])) {
        return $DDRAGON_EXCEPTIONS[$name];
    }

    return str_replace([" ", "'", ".", "&"], "", $name);
}


function get_champion_icon_url($name) {
    $id = champion_name_to_ddragon_id($name);
    return "https://ddragon.leagueoflegends.com/cdn/" . DDRAGON_VERSION . "/img/champion/" . $id . ".png";
}