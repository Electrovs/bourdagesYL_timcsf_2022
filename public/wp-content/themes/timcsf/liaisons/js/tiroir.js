

const divProg = document.getElementById("divProg");
const divInt = document.getElementById("divInt");
const divCon = document.getElementById("divCon");
const divMedia = document.getElementById("divMedia");
const divAutres = document.getElementById("divAutres");

const btnProg = document.getElementById("btnProg");
const btnInt = document.getElementById("btnInt");
const btnCon = document.getElementById("btnCon");
const btnMedia = document.getElementById("btnMedia");
const btnAutres = document.getElementById("btnAutres");


const ouvrirTiroirProg = () => {
    if(btnProg.innerHTML === "-") {
        btnProg.innerHTML = "+";
        divProg.classList.toggle("tiroirOuvert")
    }else{
        btnProg.innerHTML = "-";
        divProg.classList.toggle("tiroirOuvert")

    }
}
const ouvrirTiroirInt = () => {
    if(btnInt.innerHTML === "-") {
        btnInt.innerHTML = "+";
        divInt.classList.toggle("tiroirOuvert")
    }else{
        btnInt.innerHTML = "-";
        divInt.classList.toggle("tiroirOuvert")
    }
}
const ouvrirTiroirCon = () => {
    if(btnCon.innerHTML === "-") {
        btnCon.innerHTML = "+";
        divCon.classList.toggle("tiroirOuvert")
    }else{
        btnCon.innerHTML = "-";
        divCon.classList.toggle("tiroirOuvert")
    }
}
const ouvrirTiroirMedia = () => {
    if(btnMedia.innerHTML === "-") {
        btnMedia.innerHTML = "+";
        divMedia.classList.toggle("tiroirOuvert")
    }else{
        btnMedia.innerHTML = "-";
        divMedia.classList.toggle("tiroirOuvert")
    }
}
const ouvrirTiroirAutres = () => {
    if(btnAutres.innerHTML === "-") {
        btnAutres.innerHTML = "+";
        divAutres.classList.toggle("tiroirOuvert")
    }else{
        btnAutres.innerHTML = "-";
        divAutres.classList.toggle("tiroirOuvert")
    }
}

btnProg.addEventListener("click", ouvrirTiroirProg);
btnInt.addEventListener("click", ouvrirTiroirInt);
btnCon.addEventListener("click", ouvrirTiroirCon);
btnMedia.addEventListener("click", ouvrirTiroirMedia);
btnAutres.addEventListener("click", ouvrirTiroirAutres);

