var imagen = document.getElementById('imgProd');
var cont = document.getElementById('secProd');

imagen.addEventListener('mouseenter', e => {
  imagen.style.transform = "scale(1.5)";
        imagen.style.transition = "transform 0.25s ease";
});

imagen.addEventListener('mouseleave', e => {
  imagen.style.transform = "scale(1)";
        imagen.style.transition = "transform 0.25s ease";
});
