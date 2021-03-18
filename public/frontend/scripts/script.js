$('.owl-carousel').owlCarousel({
  loop:true,
  margin:10,
  responsive:{
      0:{
          items:1
      },
      300:{
        items:1
      },
      550:{
        items:2
      },
      800:{
          items:2
      },
      900:{
        items:3
      },
      1200:{
          items:4
      },
      1500:{
        items: 6
      }
  }
})



$(document).ready(function() {
  $('.xzoom, .xzoom-gallery').xzoom({
    zoomWidth: 500,
    title: false,
    tint: '#333',
    Xoffset: 15
  });
});


var today, datepicker;
  today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
  datepicker = $('#datepicker').datepicker({
    uiLibrary: 'bootstrap4',  
    icons: {
      rightIcon: '<img src="frontend/images/ic_doe.png" alt="" />'
    },
    minDate: today
  });
