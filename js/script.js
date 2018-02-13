function initMap() {
  var pitt = {lat: 40.437, lng: -79.957};
  var buffalo = {lat: 42.987919, lng: -78.702607};
  var middle = {lat: 41.5, lng: -79.3}
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 6,
    center: middle
  });
  var marker = new google.maps.Marker({
    position: pitt,
    label: "College",
    map: map
  });
  var marker = new google.maps.Marker({
    position: buffalo,
    label: "Hometown",
    map: map,
  });
}

$(document).ready(function(){

  $('nav ul li').hover(function(){
    $(this).css('background-color','darkblue');
    $(this).children('a').css('color','white');
  }, function(){
    $(this).css('background-color','white');
    $(this).children('a').css('color','darkblue');
  });

  $('.signup-form').hide();

  $('#altFormTitle').hide();

  $('#formTitle').click(function(){
    $('.signup-form').slideDown();
  });

  $('#formTitle').click(function () {
      $('html, body').animate({scrollTop:$(document).height()}, 'slow');
      return false;
  });

  $('#formTitle').click(function () {
    $('#contactSection').hide();
  });

  $('#formTitle').click(function () {
    $(this).hide();
  });

  $('#formTitle').click(function () {
    $('#altFormTitle').show();
  });

  $('#altFormTitle').click(function() {
      location.reload();
  });

  //Makes items appear on scroll down
  $(window).scroll(function() {
    $(".appear").each(function() {
      var objectBottom = $(this).offset().top + $(this).outerHeight();
      var windowBottom = $(window).scrollTop() + $(window).innerHeight();
      if ((objectBottom-50) <= windowBottom) {
        if ($(this).css("opacity")==0) {$(this).fadeTo(500,1);}
      } else {
        if ($(this).css("opacity")==1) {$(this).fadeTo(500,0);}
      }
    });
  }); $(window).scroll();
});
