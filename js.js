  var flag=true;
  

  $('.img_1').click(function() {
  	$('.im1').css('display', 'block');
  	$('.anh').css('display', 'none');
  	$('.im2').css('display', 'none');
  	$('.im3').css('display', 'none');

  });

 $('.img').click(function() {
  	$('.im1').css('display', 'none');
  	$('.anh').css('display', 'block');
  	$('.im2').css('display', 'none');
  	$('.im3').css('display', 'none');

  });
  $('.img_2').click(function() {
  	$('.anh').css('display', 'none');
  	$('.im1').css('display', 'none');
  	$('.im3').css('display', 'none');
  	$('.im2').css('display', 'block');

  });

  $('.img_3').click(function() {
  	
  	$('.im3').css('display', 'block');
  	$('.anh').css('display', 'none');
  	$('.im1').css('display', 'none');
  	$('.im2').css('display', 'none');

  });
  $('.img_0').click(function() {
  	
  	$('.anh').css('display', 'block');
  	$('.im3').css('display', 'none');
  	$('.im1').css('display', 'none');
  	$('.im2').css('display', 'none');

  });
  $('.me').click(function() {
  	if (flag) {
  		$('.menu_con').addClass('display');
  		flag= false;
  	}
  	else{
  		$('.menu_con').removeClass('display');
  		flag= true;
  	}
});

  $('.cn_5').click(function() {
    if(flag){
      $('.sx').css('display', 'block');
      flag= false;
    }else{
      $('.sx').css('display', 'none');
      flag= true;
    }

  });
// $('.add-to-cart').click(function() {
//    var cart = $('.shopping_bg');
//    var imgtofly = $(this).parents('.cart_items').find('.img').eq(0);
//     if (imgtofly) {
//         var imgclone = imgtofly.clone()
//             .offset({ top:imgtofly.offset().top, left:imgtofly.offset().left })
//             .css({'opacity':'0.7', 'position':'absolute', 'height':'150px', 'width':'150px', 'z-index':'1000'})
//             .appendTo($('body'))
//             .animate({
//                 'top':cart.offset().top + 10,
//                 'left':cart.offset().left + 30,
//                 'width':55,
//                 'height':55
//             }, 1000, 'easeInElastic');
//         imgclone.animate({'width':0, 'height':0}, function(){ $(this).detach() });
//     }
//     return false;
// });