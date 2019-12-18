(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Je récupère tous les Forms qui ont besoin d'une validation custom style Bootstrap.
    var forms = document.getElementsByClassName('needs-validation');
    // Sur tous ces Forms, je valide ou non en fonction des champs remplis ou non.
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();