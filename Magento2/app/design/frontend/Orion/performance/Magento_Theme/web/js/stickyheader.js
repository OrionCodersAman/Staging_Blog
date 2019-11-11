require([
    'jquery'
    ], function ($) {
        jQuery(document).ready(function () {
            $(window).scroll(function(){
                if ($(window).scrollTop() >= 135) {
                    $('header').addClass('fixed-header');
                    $('.banner').addClass('banner-cont');
                }
                else {
                    $('header').removeClass('fixed-header');
                    $('.banner').removeClass('banner-cont');
                }
            });
        });
    });
function validateForm() {
  var x = document.forms["footer-form"]["footer-email"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}