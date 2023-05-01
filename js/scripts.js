// Obtener el elemento del footer
const footer = document.querySelector('footer');

// Función para agregar la animación al fondo
function changeColor() {
  footer.classList.add('color-animation');
}

// Función para quitar la animación del fondo
function resetColor() {
  footer.classList.remove('color-animation');
}

// Ejecutar la función de cambio de color cada 3 segundos
setInterval(changeColor, 3000);

// Ejecutar la función de reinicio de color después de 1 segundo
setTimeout(resetColor, 1000);

$(document).ready(function () {
  function toggleNavbarMethod() {
      if ($(window).width() > 992) {
          $('.navbar .dropdown').on('mouseover', function () {
              $('.dropdown-toggle', this).trigger('click');
          }).on('mouseout', function () {
              $('.dropdown-toggle', this).trigger('click').blur();
          });
      } else {
          $('.navbar .dropdown').off('mouseover').off('mouseout');
      }
  }
  toggleNavbarMethod();
  $(window).resize(toggleNavbarMethod);
});


