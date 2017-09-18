bannerHeight = function(){
	var windowSize = $( window ).height();
	var sizeDeduct = windowSize / 4;
	var bannerHeight = windowSize - sizeDeduct;
	var halfBannerHeight =bannerHeight/4;
	$('.banner').css('height',bannerHeight);
	$('.text').css('padding-top',halfBannerHeight);
}

onChangeSize = function(){
	$( window ).resize(function() {
	  bannerHeight();
	});
}

$('#my-picture').parent().closest('div.row').addClass('move-up');
bannerHeight();
onChangeSize();

$(function(){
    $(".auto_type").typed({
      strings: ["First solve the problem.", "Then, write the code."],
      typeSpeed: 10
    });
});

var imageView = $('.panel-image').data('image_url');
$('.panel-image').css('background-image',imageView);

$('.icon').hide();

iconShow = function(id){
   $(id).hover(function(){
        $(id+' .icon').toggle(300);
    }); 
}

iconShow('#personal_details');
iconShow('#education');
iconShow('#experience');
