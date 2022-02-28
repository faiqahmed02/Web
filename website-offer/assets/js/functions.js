var _ouibounce = ouibounce(document.getElementById('ouibounce-modal'), {
    aggressive: true,
});
$(document).ready(function() {

$(".footer-vld-frm").validate();
$(".validate-banner-frm").validate();



$('.customerslider').owlCarousel({
    loop:true,
    margin:0,
    dots:true,
    responsiveClass:true,

    responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:1,
            nav:false
        },
        1000:{
            items:1,
            nav:false,
            loop:false
        }
    }
});

     $('.content-testimonial').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:true,
    autoplay:true,
     
   responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});
    $('.various').click(function() {
        var leadprice = $(this).attr('name');
        $(".popupform .leadprice").val(leadprice)

    });

     
    
    var str = location.href.toLowerCase();
    $(".navbar-nav li a").each(function() {
        if (str.indexOf(this.href.toLowerCase()) > -1) {
            $("li.active").removeClass("active");
            $(this).parent().addClass("active");
        }
    });  

$('.customerslider').owlCarousel({
    loop:true,
    margin:0, 
    dots:true,
    responsiveClass:true,
     
    responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:1,
            nav:false
        },
        1000:{
            items:1,
            nav:false,
            loop:false
        }
    }
})

    $('[data-fancybox]').fancybox();
    $(".validate-popupform").validate();
    $('.contact-form').validate();
    $(".contactusform").validate();
    $(".validate-footer").validate();
    $(".contactusform-footer").validate();
 
 
});

  //Chat
