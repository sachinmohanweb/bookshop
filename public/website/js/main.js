


   $('.hamburger-menu').on('click', function () {
            $(this).toggleClass('open');
            $('.navigation ul').toggleClass('show');
         });

    $('.filter').on('click', function () {
    $(this).toggleClass('open'); // Toggles the 'open' class on the clicked element
    
    if ($(this).hasClass('open')) {
        // If the 'filter' element has the 'open' class, change its text
        $(this).text("Close The filter");
        $('.sort').addClass('show'); // Add the 'show' class to 'sort' elements
    } else {
        // If the 'filter' element doesn't have the 'open' class, change its text back
        $(this).text("Filter");
        $('.sort').removeClass('show'); // Remove the 'show' class from 'sort' elements
    }
});
 $(document).ready(function(){
         $('.banner').owlCarousel({
           margin:10,
           loop: true,
           autoplay:true,
           stagePadding: 300,
           autoplaySpeed: 2000,
         autoplayTimeout:7000,
         autoplayHoverPause:false,
           items:1,
           nav:false,
           dots:true,
            responsive: {
             0: {
               items: 1,
               loop: true,
               stagePadding:0
             },
             600: {
               items: 1,
               stagePadding:75
             },
             991: {
               items: 1,
               stagePadding:200
             },
             1200: {
               items: 1,
               stagePadding:300
             }
           }
         })
         });

  $('.genre-list').owlCarousel({
            margin:20,
           loop: true,
           autoplay: true,
           autoplaySpeed: 1000,
           autoplayTimeout: 4000,
           items: 6,
           nav: true,
           dots: false,
           responsive: {
             0: {
               items: 2,
               loop: true
             },
             600: {
               items: 3,
               loop: true
             },
             991: {
               items:4,
               loop: true
             },
             1000: {
               items: 6,
               loop: true
             }
           }
         })

  $('.author-list').owlCarousel({
            margin:20,
           loop: true,
           autoplay: true,
           autoplaySpeed: 1000,
           autoplayTimeout: 4000,
           items: 4,
           nav: false,
           dots: false,
           responsive: {
             0: {
               items: 1,
               loop: true
             },
             600: {
               items: 2,
               loop: true
             },
             1000: {
               items: 3,
               loop: true
             },
             1200: {
               items: 4,
               loop: true
             }
           }
         })

  $('.review-sec').owlCarousel({
            margin:20,
           loop: true,
           autoplay: true,
           autoplaySpeed: 1000,
           autoplayTimeout: 4000,
           items: 3,
           nav: true,
           dots: false,
           responsive: {
             0: {
               items: 1,
               loop: true
             },
             600: {
               items: 2,
               loop: true
             },
             1000: {
               items: 3,
               loop: true
             }
           }
         })





  var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}


