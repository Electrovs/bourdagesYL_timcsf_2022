
const jsonMessage = {
    "prenom": {
        "label": "Prenom",
        "erreurs": {
            "vide": "Entrez votre prénom",
            "motif": "Votre prénom comporte des caractères illégaux!"
        }
    },
    "nom": {
        "label": "Nom",
        "erreurs": {
            "vide": "Entrez votre nom ",
            "motif": "Votre nom comporte des caractères illégaux!"
        }
    },
    "courriel": {
        "label": "Courriel",
        "erreurs": {
            "vide": "Veuillez entrer votre adresse courriel, s'il-vous-plaît.",
            "motif": "Veulliez entrer une adresse courriel valide!"
        }
    },
    "destinataire": {
        "label": "Destinataire",
        "erreurs": {
            "vide": "Sélectionnez un ou une destinataire!"
        }
    },
    "sujet": {
        "label": "Sujet",
        "erreurs": {
            "vide": "Entrez le sujet du courriel!",
            "motif": "Le sujet du courriel comporte des caractères illégaux!"
        }
    },
    "message": {
        "label": "Message",
        "erreurs": {
            "vide": "Votre message est absent!",
            "motif": "Votre message comporte des caractères illégaux!"
        }
    },
    "humain": {
        "erreurs": {
            "vide": "Êtes-vous un robot?",
            "motif": "Votre réponse n'est pas adéquate! Veuillez recommencer."
        }
    },
    "consentement": {
        "label": "Autorisez-vous le partage de ce numéro?",
        "erreurs": {
            "vide": "Veuillez, s'il-vous-plaît, cocher la boîte pour consentir au partage de votre no cellulaire avec un.e étudiant.e qui vous accueillera lors de cette journée"
        }
    },
    "telephone": {
        "label": "Téléphone",
        "erreurs": {
            "vide": "Entrez votre numéro de téléphone (format:123-456-7890)!",
            "motif": "Veuillez entrer un numéro de téléphone de format valide (format:(123) 456-7890)!"
        }
    },
    "retroactions": {
        "courriel": {
            "completer": "Veuillez compléter le formulaire, s'il-vous-plaît.",
            "envoyer": "Le courriel a été envoyé.",
            "avorter": "L'envoi du courriel a avorté."
        }
    }
}

const form = document.getElementById("form");
const inputPrenom = document.getElementById("prenom");
const inputNom = document.getElementById("nom");
const inputCourriel = document.getElementById("courriel");
const inputDestinataire = document.getElementById("destinataire");
const inputTelephone = document.getElementById("telephone");
const inputSujet = document.getElementById("sujet");
const inputMessage = document.getElementById("message");

const pattern = /^[-a-zA-Zàâçéèêëîïôûùüÿñæœ ]+$/;
const patternDestinataire = /^[1-9]$/;
const patternCourriel = /^[a-zA-Z0-9][a-zA-Z0-9_-]+([.][a-zA-Z0-9_-]+)*[@][a-zA-Z0-9_-]+([.][a-zA-Z0-9_-]+)*[.][a-zA-Z]{2,}$/;
const patternTelephone = /^[1-9]\d{2}-\d{3}-\d{4}$/;
const patternMessage = /^[a-zA-Z0-9_.!@#$%^&*()?-]+$/;

const userDestinataireInput = inputDestinataire.value.trim();

window.onload = () => {
    if(userDestinataireInput === "4"){
        inputTelephone.parentElement.style.display = "block";
    } else{
        inputTelephone.parentElement.style.display = "none";

    }
}

const preventDefault = (e) => {
    e.preventDefault();
}

const validation = (event) => {

    const userPrenomInput = inputPrenom.value.trim();
    const userNomInput = inputNom.value.trim();
    const userCourrielInput = inputCourriel.value.trim();
    const userDestinataireInput = inputDestinataire.value.trim();
    const userTelephoneInput = inputTelephone.value.trim();
    const userSujetInput = inputSujet.value.trim();
    const userMessageInput = inputMessage.value.trim();

    switch(event.target.id) {
        case "prenom":
            validerInput("prenom",userPrenomInput ,inputPrenom, jsonMessage, pattern);
            break;
        case "nom":
            validerInput("nom",userNomInput ,inputNom, jsonMessage, pattern);
            break;
        case "courriel":
            validerInput("courriel",userCourrielInput ,inputCourriel, jsonMessage, patternCourriel);
            break;
        case "destinataire":
            validerInput("destinataire",userDestinataireInput ,inputDestinataire, jsonMessage, patternDestinataire);
            break;
        case "telephone":
            validerInput("telephone",userTelephoneInput ,inputTelephone, jsonMessage, patternTelephone);
            break;
        case "sujet":
            validerInput("sujet",userSujetInput ,inputSujet, jsonMessage, patternMessage);
            break;
        case "message":
            validerInput("message",userMessageInput ,inputMessage, jsonMessage, patternMessage);
            break;
        default:
        // code block
    }
};

const validerInput = (nomChamps, userInput, inputChamps, jsonMessage, pattern) => {

    const inputDiv = inputChamps.parentElement;
    const erreurDiv = inputDiv.querySelector("div");
    const erreurP = inputDiv.querySelector("p");


    if(userInput !== ""){
        if(!pattern.test(userInput)) {
            inputDiv.classList.add("erreur");
            erreurDiv.style.display = "flex";
            erreurP.innerHTML = jsonMessage[nomChamps].erreurs.motif;
        }else{
            inputDiv.classList.remove("erreur");
            erreurDiv.style.display = "none";
            erreurP.innerHTML = "";
        }
    } else{
        inputDiv.classList.add("erreur");
        erreurDiv.style.display = "flex";
        erreurP.innerHTML = jsonMessage[nomChamps].erreurs.vide;
    }
}

const afficherTelephone = (event) => {
    if(event.target.value === "4") {
        inputTelephone.parentElement.style.display = "block";
    } else {
        inputTelephone.parentElement.style.display = "none";
    }
}

inputPrenom.addEventListener("blur", validation);
inputNom.addEventListener("blur", validation);
inputCourriel.addEventListener("blur", validation);
inputDestinataire.addEventListener("blur", validation);
inputDestinataire.addEventListener("change", afficherTelephone);
inputTelephone.addEventListener("blur", validation);
inputSujet.addEventListener("blur", validation);
inputMessage.addEventListener("blur", validation);
form.addEventListener("submit", preventDefault);