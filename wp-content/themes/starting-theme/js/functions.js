( function($) {

  /**
   * Match Height (Including Safari onload fix)
   */
  function startMatchHeight() {
    $('.matchheight').matchHeight();
    $('.products').matchHeight();
    $('.product').matchHeight();
    $('.bx-clone').matchHeight();
  }
  window.onload = startMatchHeight;

  $('.testimonials').bxSlider({
  infiniteLoop: true,
  minSlides: 1,
  maxSlides: 1,
  pager: false,
  // auto: true,
  speed: 1500,
  // pause: 5000,
  });

} ) (jQuery);

/* Open when someone clicks on the span element */
function openNav() {
    document.getElementById("mySearch").style.height = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
    document.getElementById("mySearch").style.height = "0%";
}
