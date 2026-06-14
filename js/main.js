/**
 * Portfolio — Abdourmalik Adamou
 * Scripts : année du pied de page, menu mobile, bouton « retour en haut »,
 * et apparition au défilement.
 */
(function () {
  'use strict';

  document.addEventListener('DOMContentLoaded', function () {
    var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)');

    /* -------------------------------------------------- Année automatique */
    var year = document.getElementById('year');
    if (year) {
      year.textContent = new Date().getFullYear();
    }

    /* ------------------------------------------------------- Menu mobile */
    var toggle = document.getElementById('nav-toggle');
    var menu = document.getElementById('nav-menu');
    if (toggle && menu) {
      toggle.addEventListener('click', function () {
        var open = menu.classList.toggle('is-open');
        toggle.setAttribute('aria-expanded', String(open));
        toggle.setAttribute('aria-label', open ? 'Fermer le menu' : 'Ouvrir le menu');
      });

      // Referme le menu après un clic sur un lien.
      menu.querySelectorAll('a').forEach(function (link) {
        link.addEventListener('click', function () {
          menu.classList.remove('is-open');
          toggle.setAttribute('aria-expanded', 'false');
          toggle.setAttribute('aria-label', 'Ouvrir le menu');
        });
      });
    }

    /* ------------------------------------------------ Bouton retour haut */
    var scrollTop = document.getElementById('scroll-top');
    if (scrollTop) {
      scrollTop.hidden = false;
      var SHOW_AFTER = 400;

      var toggleScrollBtn = function () {
        scrollTop.classList.toggle('is-visible', window.pageYOffset > SHOW_AFTER);
      };
      window.addEventListener('scroll', toggleScrollBtn, { passive: true });
      toggleScrollBtn();

      scrollTop.addEventListener('click', function () {
        window.scrollTo({
          top: 0,
          behavior: reduceMotion.matches ? 'auto' : 'smooth'
        });
      });
    }

    /* ----------------------------------------- Apparition au défilement */
    var revealItems = document.querySelectorAll('.reveal');
    if (revealItems.length) {
      if (reduceMotion.matches || typeof window.IntersectionObserver === 'undefined') {
        revealItems.forEach(function (el) {
          el.classList.add('is-revealed');
        });
      } else {
        var observer = new IntersectionObserver(
          function (entries, obs) {
            entries.forEach(function (entry) {
              if (entry.isIntersecting) {
                entry.target.classList.add('is-revealed');
                obs.unobserve(entry.target);
              }
            });
          },
          { threshold: 0.15, rootMargin: '0px 0px -10% 0px' }
        );
        revealItems.forEach(function (el) {
          observer.observe(el);
        });
      }
    }
  });
})();
