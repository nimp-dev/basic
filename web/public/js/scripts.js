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










$(document).ready(function() {
        $('.down').click(function () {
            var $input = $(this).parent().find('input');
            var count = parseInt($input.val()) - 1;
            count = count < 1 ? 1 : count;
            $input.val(count);
            $input.change();
            return false;
        });
        $('.up').click(function () {
            var $input = $(this).parent().find('input');
            $input.val(parseInt($input.val()) + 1);
            $input.change();
            return false;
        });
    });

 




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
$(function(){
    $nav = $('.fixed-div');
    $nav.css('width', $nav.outerWidth());
    $window = $(window);
    $h = $nav.offset().top;
    $window.scroll(function(){
        if ($window.scrollTop() > $h){
            $nav.addClass('fixed');
        } else {
            $nav.removeClass('fixed');
        }
    });
});

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

    function showCart(cart){
        $('#cart .modal-body').html(cart);
        $('#cart').modal();
    }

    $('#cart .modal-body').on('click', '.del-item', function(){
        var id = $(this).data('id');
        $.ajax({
            url: '/cart/del-item',
            data: {id: id},
            type: 'GET',
            success: function(res){
                if(!res) alert('Ошибка!');
                showCart(res);
            },
            error: function(){
                alert('Error!');
            }
        });
    });


        $('#cart .modal-body').on('click', '.pluse', function(){
        var id = $(this).data('id');
        $.ajax({
            url: '/cart/pluse',
            data: {id: id},
            type: 'GET',
            success: function(res){
                if(!res) alert('Ошибка!');
                showCart(res);
            },
            error: function(){
                alert('Error!');
            }
        });
    });


        $('#cart .modal-body').on('click', '.minus', function(){
        var id = $(this).data('id');
        $.ajax({
            url: '/cart/minus',
            data: {id: id},
            type: 'GET',
            success: function(res){
                if(!res) alert('Ошибка!');
                showCart(res);
            },
            error: function(){
                alert('Error!');
            }
        });
    });


        function getCart(){
        $.ajax({
            url: '/cart/show',
            type: 'GET',
            success: function(res){
                if(!res) alert('Ошибка!');
                showCart(res);
            },
            error: function(){
                alert('Error!');
            }
        });
        return false;
    }


    function clearCart(){
        $.ajax({
            url: '/cart/clear',
            type: 'GET',
            success: function(res){
                if(!res) alert('Ошибка!');
                showCart(res);
            },
            error: function(){
                alert('Error!');
            }
        });
    }

    function delCart(){
        $.ajax({
            url: '/cart/del',
            type: 'GET'
        });
    }



     $('.add-to-cart').on('click', function (e) {
        e.preventDefault();
        var id = $(this).data('id'),
        qty = $('#qty').val();
        
        $.ajax({
            url: '/cart/add',
            data: {id: id, qty: qty},
            type: 'GET',
            success: function(res){
                if(!res) alert('Ощибка(');
                // console.log(res);
                showCart(res);
            },
            error: function(){
                alert('Error)');
            }
        });
    });

         $(function () {
        $("#btn2").click(function () {
            $("#myModal2").modal('show');
        });
    });
 // // создаём модальное окно
