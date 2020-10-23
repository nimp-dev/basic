/* ---------------------------------------------
 common scripts
 --------------------------------------------- */
;(function ($) {
    'use strict'; // use strict to start

    /* === Stickit === */

    (function () {
        $("[data-sticky_column]").stickit({
            scope: StickScope.Parent,
            top: 0
        });
    }());



    /*=== single blog carousel =====*/
    (function () {
        $('.items').owlCarousel({
            items: 3,
            autoPlay: true,
            pagination: false
        });
    }());

    /* === Instagram Widget === */

    (function () {
        $('#widget-feature').owlCarousel({
            singleItem: true,
            navigation: true,
            navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            autoPlay: true,
            pagination: false
        });
    }());

    /* === Back To Top === */

    (function () {
        $(' a.back-to-top').click(function () {
            $('html, body').animate({scrollTop: 0}, 800);
            return false;
        });
    }());


    /* === Footer Instagram === */

    (function () {
        $('#footer-instagram').owlCarousel({
            items: 8,
            navigation: false,
            autoPlay: false,
            pagination: false
        });
    }());
    /* === Search === */

    (function () {
        $('.top-search a').on('click', function (e) {
            e.preventDefault();
            $('.show-search').slideToggle('fast');
            $('.top-search a').toggleClass('sactive');
        });
    }());





$('.menu-icon').on('click', function(e) {
  e.preventDefault();
  $('.menu').toggleClass('menu_active');
  // $('section').toggleClass('section_active');
  $('.menu').toggleClass('opacyty');
})





})(jQuery);

// $(document).ready(function(){
//     $('.content_toggle').click(function(){
//         $('.content_block').slideToggle(300);      
//         return false;
//     });
// });

// $(".open-panel").click(function(){
  
//   $("html").addClass("openNav");
  
// });
    
// $(".close-panel, #content").click(function(){
  
// $("html").removeClass("openNav");
  
// });
// $(function(){
//     $nav = $('.fixed-div');
//     $nav.css('width', $nav.outerWidth());
//     $window = $(window);
//     $h = $nav.offset().top;
//     $window.scroll(function(){
//         if ($window.scrollTop() > $h){
//             $nav.addClass('fixed');
//         } else {
//             $nav.removeClass('fixed');
//         }
//     });
// });

// $(document).ready(function(){
//     $("#menu").selectmenu({
//         // disabled:true
//         icons:{
//             button:"ui-icon-triangle-1-sw"
//         },
//         position:{
//             // my:"left+10 top",
//         },
//         // width:150
//         change:function(event,ui){
//             alert(ui.item.value);
//         }

//     });
// });

