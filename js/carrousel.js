(function(){
    console.log("carrousel")
    let elmGalerie = document.querySelector('.galerie');
    let elmGalerieImg = document.querySelectorAll('.galerie img');
    let elmBouton = document.querySelector('.bouton');
    let elmCarrousel = document.querySelector('.carrousel');
    let elmCarrousel__x = document.querySelector('.carrousel__x');


    elmBouton.addEventListener('mousedown', function(){
        console.log("ouverture du carrousel");
        elmCarrousel.classList.add('carrousel--ouvrir');
        for (const elmImg of elmGalerieImg){
            console.log(elmImg.getAttribute('src'));
            let elmCarrouselImg = document.createElement('img');
            //console.log(elmImg.getAttribute('src'));
            elmCarrousel.setAttribute('src', elmImg.getAttribute('src'));
            elmCarrousel.classList.add('carrousel__figure__img');
        }

    })

    elmCarrousel__x.addEventListener('mousedown', function(){
        elmCarrousel.classList.remove('carrousel--ouvrir');
    })
})()