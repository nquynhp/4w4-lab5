(function () {
    console.log("vive la boite carrousel");
    let boite__carrousel = document.querySelector(".boite__carrousel");
    let boite__carrousel__navigation = document.querySelector(".boite__carrousel__navigation");
    let galerie__img = document.querySelectorAll('.galerie img');
    let boite__carrousel__fermeture = document.querySelector('.boite__carrousel__fermeture');
    console.log(galerie__img.length);

    // Conteneur image de carrousel
    let boite__carrousel__img = document.querySelector(".boite__carrousel__img");

    
    // Lien entre le bouton radio et l'image qu'on veut afficher
    let index = 0;

    for (const img of galerie__img) {
        let elmImg = document.createElement('img');
        img.dataset.index = index;
        elmImg.setAttribute('src', img.getAttribute('src'));
        boite__carrousel__img.append(elmImg);



        let bouton = document.createElement('input');
        bouton.checked = false;
        bouton.type = "radio";
        bouton.class = "bouton";
        bouton.name = "bouton";
        bouton.dataset.index = index++;
        boite__carrousel__navigation.append(bouton);
        bouton.addEventListener('mousedown', function(){
            // elmImg.setAttribute('src', galerie__img[this.dataset.index].getAttribute('src'));
            boite__carrousel__img.children[this.dataset.index].classList.add("img--ouvrir");
        })

        img.addEventListener('mousedown', function () {
            boite__carrousel.classList.add('ouvrir');
            boite__carrousel__img.children[this.dataset.index].classList.add('img--ouvrir');
            // elmImg.setAttribute('src', this.getAttribute('src'));
        })
    }

        boite__carrousel__fermeture.addEventListener('mousedown', function () {
        boite__carrousel.classList.remove('ouvrir');
        elmImg.setAttribute('src', this.getAttribute('src'));
    })

})()

