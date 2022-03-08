<?php

// Récupérer le contenu des messages en format JSON
$contenuBruteFichierJson = file_get_contents( get_template_directory_uri()."/liaisons/js/messages_erreur_form.json");
// Convertir en tableau associatif
$tMessagesJson = json_decode($contenuBruteFichierJson, true);


$pattern = "/^[-a-zA-Zàâçéèêëîïôûùüÿñæœ ]+$/";
$patternDestinataire = "/^[1-9]$/";
$patternCourriel = "/^[a-zA-Z0-9][a-zA-Z0-9_-]+([.][a-zA-Z0-9_-]+)*[@][a-zA-Z0-9_-]+([.][a-zA-Z0-9_-]+)*[.][a-zA-Z]{2,}$/";
$patternTelephone = "/^[1-9]\d{2}-\d{3}-\d{4}$/";
$patternMessage = "/^[a-zA-Z0-9_.!@#$%^&*()?-]+$/";

if(isset($_POST["submit"])) {
    $prenom = validerChampsServeur("prenom", $tMessagesJson, $pattern);
    $nom = validerChampsServeur("nom", $tMessagesJson, $pattern);
    $courriel = validerChampsServeur("courriel", $tMessagesJson, $patternCourriel);
    $destinataire = validerChampsServeur("destinataire", $tMessagesJson, $patternDestinataire);
    $telephone = validerChampsServeur("telephone", $tMessagesJson, $patternTelephone);
    $sujet = validerChampsServeur("sujet", $tMessagesJson, $patternMessage);
    $message = validerChampsServeur("message", $tMessagesJson, $patternMessage);

    $tValidation=array("prenom"=>$prenom, "nom"=>$nom, "courriel"=>$courriel,
        "destinataire"=>$destinataire, "telephone"=>$telephone, "sujet"=>$sujet,
        "message"=>$message);

    $nbBonneReponse = 0;
    foreach ($tValidation as $props){

        if(array_key_exists("valide", $props)){
            if($props !== "telephone"){
                if($props["valide"] == "vrai") {
                    $nbBonneReponse++;
                }
            }
        }
    }

    if($nbBonneReponse < 6) {
        $succes = "Nope";

    } else {
        $succes = "yess";
    }
}

function validerChampsServeur($nomChamps, $jsonMessage, $pattern) {

    if(isset($_POST[$nomChamps])){

        $valeur = trim($_POST[$nomChamps]);

        if(preg_match("$pattern", $valeur)){
            $valide = "vrai";
        }else{
            $valide = "faux";
        }

        if($valide == "vrai"){
            $message = "";
        } else if($valeur == ""){
            $message = $jsonMessage[$nomChamps]["erreurs"]["vide"];
        } else {
            $message = $jsonMessage[$nomChamps]["erreurs"]["motif"];
        }

        $reponseChamps=array("valeur"=>$valeur,"valide"=>$valide,"message"=>$message);

        return $reponseChamps;

    } else {
        $valeur = "";
        $message = $jsonMessage[$nomChamps]["erreurs"]["vide"];
        $reponseChamps=array("valeur"=>$valeur,"valide"=>"faux","message"=>$message);

        return $reponseChamps;
    }
}


