$(".fancybox").fancybox({
    openEffect: 'none',
    closeEffect: 'none'
});
$('input[type=text]').attr('required', 'required');
$('input[type=tel]')
    .attr('pattern', '\\+7\\([0-9]{3}\\)[0-9]{3}\\-[0-9]{2}\\-[0-9]{2}')
    .attr('required', 'required')
    .inputmask('+7(999)999-99-99');
$('form').removeAttr('novalidate');

$('.bxslider').bxSlider({
    minSlides: 1,
    maxSlides: 4,
    slideWidth: 270,
    slideMargin: 0,
    moveSlides:1
});
$('.bxslider2').bxSlider({
    pagerCustom: '#bx-pager'
});


window.onload = function () {
    var scrollUp = document.getElementById('scrollup');
    scrollUp.onmouseover = function () {
        scrollUp.style.opacity = 0.3;
        scrollUp.style.filter = 'alpha(opacity=30)';
    };
    scrollUp.onmouseout = function () {
        scrollUp.style.opacity = 0.5;
        scrollUp.style.filter = 'alpha(opacity=50)';
    };
    scrollUp.onclick = function () {
        jQuery('html, body').animate({scrollTop: 0}, 500);
        return false;
    };
    window.onscroll = function () {
        if (window.pageYOffset > 0) {
            scrollUp.style.display = 'block';
        } else {
            scrollUp.style.display = 'none';
        }
    };
    $(window).scroll(function () {
        if ($(this).scrollTop() > 140) {
            $('.nav-header-menu').addClass("fixed");
        } else if ($(this).scrollTop() <= 140) {
            $('.nav-header-menu').removeClass("fixed")
        }
    });
    var lastId, topMenu = $(".nav-header-menu"), topMenuHeight = topMenu.outerHeight() + 15, menuItems = topMenu.find("a"), scrollItems = menuItems.map(function () {
        var item = $($(this).attr("href"));
        if (item.length) {
            return item;
        }
    });
    $(window).scroll(function () {
        var fromTop = $(this).scrollTop() + topMenuHeight;
        var cur = scrollItems.map(function () {
            if ($(this).offset().top < fromTop)return this;
        });
        cur = cur[cur.length - 1];
        var id = cur && cur.length ? cur[0].id : "";
        if (lastId !== id) {
            lastId = id;
            menuItems.parent().removeClass("active").end().filter("[href='#" + id + "']").parent().addClass("active");
        }
    });
};
$('.call-popup-form_top > a').click(function (event) {
    $(".popup-form_top-js").fadeToggle();
    $(".overlay").fadeToggle();
});
$(".overlay").click(function (event) {
    $(".popup-form_top-js").fadeOut();
    $(".overlay").fadeOut();
});
$('.smoothScroll').click(function (event) {
    event.preventDefault();
    var href = $(this).attr('href');
    var target = $(href);
    var top = target.offset().top;
    $('html,body').animate({scrollTop: top}, 1000);
});
$(function () {
    $('a[href=""]').click(function (event) {
        event.preventDefault();
    });
});
$(document).ready(function () {
    $(".js-top-menu").click(function () {
        $(this).toggleClass("fa-bars");
        $(this).toggleClass("white-h");
        $(this).toggleClass("fa-times");
        $(".hidden-menu_top").fadeToggle();
    });
    $(".hidden-menu_top ul li a").click(function () {
        $(".js-top-menu").toggleClass("fa-bars");
        $(".js-top-menu").toggleClass("white-h");
        $(".js-top-menu").toggleClass("fa-times");
        $(".hidden-menu_top").fadeToggle();
    });
});
$("form").submit(function (event) {
    var form = this;
    event.preventDefault();
    var formData = $(form).serialize();
    $.ajax({
        type: 'POST', url: $(form).attr('action'), data: formData, success: function (data) {
            $.fancybox.open({href: '#message_sended'});
            setTimeout(function () {
                $.fancybox.close();
            }, 10000);
            $(form).find("input[type!=hidden]").val('');
            $(form).find("textarea").val('');
        }, error: function (xhr, ajaxOptions, thrownError) {
            alert(xhr.status);
            alert(thrownError);
        }
    });
});
if (innerWidth > 768) {
    new WOW().init();
}
;
$('.link').click(function (){
   $.fancybox.next();
});
//$('.prod').click(function(data){
//    $('.product-1').addClass('hidden');
//    $('.fancybox-nav').addClass('hidden');
//    $('.fancybox-prev').addClass('hidden');
//    $('.product-md-1').removeClass('hidden');
//});
//$('.prod2').click(function(data){
//    $('.product-1').addClass('hidden');
//    $('.product-md-2').removeClass('hidden');
//    $('.fancybox-nav').addClass('hidden');
//    $('.fancybox-prev').addClass('hidden');
//});
$('.prev').click(function(data){
  $('.product-1').removeClass('hidden');
  $('.fancybox-nav').removeClass('hidden');
  $('.fancybox-prev').removeClass('hidden');
  $('.product-md-1').addClass('hidden');
  $('.product-md-2').addClass('hidden');
});

$(function(){



  // var plant = document.getElementsByClassName('link2');

  // var leaves = plant.dataset.id;
  // $('.link2').click(function(){
  //     $('.product-1').hide();
  //     $($(this).data('id')).show();
  // });
});
$(document).ready(function($) {

  var $productCategory = $('#production a');
  var $modalContainerBG = $('.vmodal-bg');
  var $modalContainer = $('.vmodal');

  $productCategory.click(function(event){
    // enable first level product category
    event.preventDefault();
    var productCategoryID = $(this).attr('data-id');
    var productCategoryContentContainer = '#'+productCategoryID
    var productCategoryContent = $(productCategoryContentContainer).html();
    $modalContainer.html(productCategoryContent);
    $('body').addClass('modal-opened');
    $modalContainerBG.fadeIn('fast');

      // if user click on product thumbs - open product page
      var $productContainer = $('.list-md-product div');
      $productContainer.click(function(event){
        var productID = $(this).attr('data-id');
        var productContentContainer = '#' + productID;
        var productContent = $(productContentContainer).html();
        $modalContainer.html(productContent);

      })

  })

$('.vmodal-close').click(function(event) {
  event.preventDefault();
  $modalContainerBG.fadeOut('fast');
  $('body').removeClass('modal-opened');
});



});
