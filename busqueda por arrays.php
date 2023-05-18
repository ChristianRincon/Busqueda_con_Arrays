<!-- Sistema para ubicar sitios con arrays -->

<?php

function placesRecommendation($condition = "", $question = ""){

    $weather = [
        "Bogota" => "cold",
        "Monteri" => "hot",
        "Medellin" => "mild"
    ];

    $location = [
        "Guajira" => "north",
        "Leticia" => "south",
        "Antioquia"=>"west"
    ];

    $tourism = [
        "Santa Marta" => "sea",
        "Villavicencio" => "plains",
        "Quindio" => "Valley"
    ];

    switch($condition){

        case "weather":
            $search = $weather;
        break;

        case "location":
            $search = $location;
        break;
        
        case "tourism":
            $search = $tourism;
        break;

        default:
            echo "Welcome to Colombia";
    }

    echo "The perfect place for you is ".array_search($question, $search);
}

placesRecommendation("weather", "cold");
