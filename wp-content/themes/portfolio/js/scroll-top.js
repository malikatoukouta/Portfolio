/**
 * Bouton « retour en haut ».
 * - Apparaît après un certain défilement.
 * - Remonte la page en douceur au clic.
 */
(function () {
  'use strict';

  document.addEventListener('DOMContentLoaded', function () {
    var button = document.getElementById('scroll-top');
    if (!button) {
      return;
    }

    var SHOW_AFTER = 300; // pixels défilés avant affichage

    function toggleButton() {
      if (window.pageYOffset > SHOW_AFTER) {
        button.classList.add('is-visible');
      } else {
        button.classList.remove('is-visible');
      }
    }

    window.addEventListener('scroll', toggleButton);
    toggleButton();

    button.addEventListener('click', function (event) {
      event.preventDefault();
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  });
})();
