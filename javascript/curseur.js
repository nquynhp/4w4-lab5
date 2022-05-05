/***********************************************************/
/********************Gestion du curseur********************/
/***********************************************************/
function gererCurseur() {
    let d = document;
    leCurseur = d.querySelector(".curseur");

    if (!navigator.userAgent.includes("Mobile") && !navigator.userAgent.includes("Tablet")) {
        //console.log("le quiz n'est pas lu sur un périphérique mobile...");

        //On enlève l'affichage du curseur par défaut
        d.querySelector("body").style.cursor = "none";

        window.addEventListener("mousemove", deplacerCurseur);
    } else {
        //On enlève le curseur de l'affichage
        leCurseur.style.display = "none";
    }
}


//=====Fonction pour déplacer curseur =======//
function deplacerCurseur(event) {
    //Déplacer le curseur à l'endroit du pointeur de la souris
    leCurseur.style.transform = `translate(${event.clientX}px, ${event.clientY}px)`;
}


/***********************************************************/
/*** Fonction permettant de changer l'aspect du curseur ***/
/***********************************************************/
function changerCurseur(event) {
    if (event.type == "mouseover") {
        leCurseur.innerHTML = "<h2>OUI</h2>";
        leCurseur.firstChild.style.color = "rgba(135, 12, 201, 0.56)";
        leCurseur.firstChild.style.fontSize = "2.5rem";
        leCurseur.firstChild.style.position = "absolute";
        leCurseur.firstChild.style.left = "2.5vw";
        leCurseur.firstChild.style.top = "1.5vw";
    } else {
        leCurseur.innerHTML = "";
    }
}

gererCurseur();