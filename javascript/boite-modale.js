(function(){
// console.log("Vive la voite modale");


    let boite__modale = document.querySelector('.boite__modale');
    console.log(boite__modale.tagName);
    let cours__desc__ouvrir = document.querySelectorAll('.cours__desc__ouvrir');
    console.log(cours__desc__ouvrir.length);
    let boite__modale__fermeture = document.querySelector('.boite__modale__fermeture');
    
    for(const bout of cours__desc__ouvrir){
        console.log(bout.tagName);
        bout.addEventListener('mousedown', function(){
            console.log(this.parentNode.className);
            boite__modale.classList.add('ouvrir');
            console.log(boite__modale.classList);
        })
    }

    boite__modale__fermeture.addEventListener('mousedown', function(){
        boite__modale.classList.remove('ouvrir');
    })

})()