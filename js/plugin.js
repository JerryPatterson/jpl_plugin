// JS for plugin functionality, shortcodes.php is dependant on shortcode.js for adding to functions the post/page editor

jQuery(document).ready(function(){

// Accordian 
jQuery('._accordian-content').hide();
jQuery('._accordian-title').on('click', toggleAccordian);

});//End document ready

// Functions

//Accordian Functions
function toggleAccordian(e){
  e.preventDefault();
  var clicked = jQuery(this);
  clicked.siblings('._accordian-content').slideToggle();
  clicked.children('._caret').toggleClass('is-rotated');
}