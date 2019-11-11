require([
    'jquery'
    ], function ($) {
        jQuery(document).ready(function () {
            $(window).scroll(function(){
                if ($(window).scrollTop() >= 135) {
                    $('header').addClass('fixed-header');
                    $('#maincontent').addClass('banner-cont');
                    $('.banner').addClass('banner-cont');
                }
                else {
                    $('header').removeClass('fixed-header');
                    $('#maincontent').removeClass('banner-cont');
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