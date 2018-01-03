export default {
  init() {
    // JavaScript to be fired on all pages
    $('.navbar-burger').click(function() {
      $('.navbar-burger, .nav-primary').toggleClass('is-active');
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
