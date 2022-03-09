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
$captchaErreur = "";
$envoiMessage = "";

if(isset($_POST["submit"])) {
    $prenomInput = validerChampsServeur("prenom", $tMessagesJson, $pattern);
    $nomInput = validerChampsServeur("nom", $tMessagesJson, $pattern);
    $courrielInput = validerChampsServeur("courriel", $tMessagesJson, $patternCourriel);
    $destinataireInput = validerChampsServeur("destinataire", $tMessagesJson, $patternDestinataire);
    $telephoneInput = validerChampsServeur("telephone", $tMessagesJson, $patternTelephone);
    $sujetInput = validerChampsServeur("sujet", $tMessagesJson, $patternMessage);
    $messageInput = validerChampsServeur("message", $tMessagesJson, $patternMessage);

    $captchaMessage = $tMessagesJson["humain"]["erreurs"]["vide"];
    $successEnvoi = "";

    $tValidation=array("prenom"=>$prenomInput, "nom"=>$nomInput, "courriel"=>$courrielInput,
        "destinataire"=>$destinataireInput, "telephone"=>$telephoneInput, "sujet"=>$sujetInput,
        "message"=>$messageInput);

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
    if(isset($_POST["g-recaptcha-response"])){
        $captcha = $_POST["g-recaptcha-response"];
    }

    if($captcha != false) {
//        if($nbBonneReponse === 6) {
//            $secretKey = "6Ld2xZAUAAAAAJ2AKX2HBkO1X3vSb6vuQ4ireXAK";
//            $ip=$_SERVER["REMOTE_ADDR"];
//            $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=.$ip");
//            $responseKeys = json_decode($response, true);
//
//
//            if(intval($responseKeys["success"]) === 1) {
//
//                //$post=get_post($destinataire);
//                //to = get_field("courriel_responsable");
//
//                $to = get_option("admin_email");
//                $subjet = "Quelqu'un a envoyé un message depuis le site ".get_bloginfo("name");
//
//                $headers = "From: ". trim($_POST["courriel"]) . "\r\n" . "Reply-to: " . trim($_POST["courriel"]) . "\r\n";
//
//                $envoi = wp_mail($to, $subjet, strip_tags(trim($_POST["message"])), $headers);
//
//                if($envoi){
//                    $envoiMessage = "oui";
//                    $successEnvoi = $tMessagesJson["retroactions"]["courriel"]["envoyer"];
//                } else {
//                    $envoiMessage = "non";
//                    $successEnvoi = $tMessagesJson["retroactions"]["courriel"]["avorter"];
//                }
//            }
//        }
    } else {
        $captchaErreur = "erreur";
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


