
/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

// Dropdowns

var dropdowns = document.querySelectorAll('.dropdown:not(.is-hoverable)');
if (dropdowns.length > 0) {
  
  dropdowns.forEach(function (el) {
    if (el.classList.contains('is-active')) {
        el.classList.remove('is-active');
    }
    el.addEventListener('click', function (event) {
      event.stopPropagation();
      el.classList.add('is-active');
      console.log(el.classList)
    });
  });

  document.addEventListener('click', function (event) {
    closeDropdowns();
  });
}

function closeDropdowns() {
  dropdowns.forEach(function (el) {
    el.classList.remove('is-active');
  });
}