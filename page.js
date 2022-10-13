var slide= new Array("inclusion/connexion2.jpg","inclusion/connexion.jpg","inclusion/ELEVE4.jpg");
var numero = 0;


function changesSlide(sens){
    numero = numero + sens;
    if(numero < 0)
    numero = slide.length -1;
    if(numero > slide.length -1)
    numero = 0;
    document.getElementById("slide").src = slide[numero];

}
setInterval("changesSlide(1)",1000);