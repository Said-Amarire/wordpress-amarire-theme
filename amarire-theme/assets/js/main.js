// Amarire Theme - main.js (minimal)
(function(){
  document.addEventListener('DOMContentLoaded', function(){
    var t = document.querySelector('.menu-toggle');
    if (t) t.addEventListener('click', function(){ document.body.classList.toggle('menu-open'); });
  });
})();
