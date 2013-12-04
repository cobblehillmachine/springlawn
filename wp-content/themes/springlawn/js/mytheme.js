
$(document).ready(function() {	
	overlayHeight()
	$('#header, #main-wrap, #footer').fadeIn();
	setInputFieldFunctions();
	$('.lifestyle-menu li a').each(function() {
		$(this).after('<span class="arrow">d</span>');
	});
	$('#the-lenox-area .col-right a:first-child').attr('onclick', 'showOutdoor();');
	$('#the-lenox-area .col-right p:last-child a').attr('onclick', 'showAttractions();');
	centerItem('.popup',710, 435);
	$('#tp_thumbs img:first-child').addClass('active'); 
	$('#tp_thumbs img').click(function() { 
	  $('#tp_thumbs img').removeClass('active'); 
	  $(this).addClass('active'); 
	});
	selectMember();
});

$(window).resize(function() {
	overlayHeight();
	centerItem('.popup',710, 435);

});

$(window).load(function() {
	overlayHeight();

});


function setInputFieldFunctions(){
	$('input, textarea').each(function(){
	    var $this = $(this);
	    $this.data('placeholder', $this.attr('placeholder'))
	         .focus(function(){$this.removeAttr('placeholder');})
	         .blur(function(){$this.attr('placeholder', $this.data('placeholder'));});
	});
}

function centerItem(item,iWidth,iHeight){  
   windowWidth = $(window).width();
   windowHeight = $(window).height();
   var w = windowWidth - iWidth; 
   var h = windowHeight - iHeight;
   $(item).css({
       'left': w/2,
       'top':h/2
   });   
}

function overlayHeight() {
	var winH = $(document).height();
	$('#overlay').css({'height':winH});
}

function showOutdoor() {
	$('#overlay, #outdoor-pursuit').fadeIn('slow');
}

function showAttractions() {
	$('#overlay, #attractions').fadeIn('slow');
}

function closePopup() {
	$('#overlay, .popup').fadeOut('slow');
}

function selectMember() {
	$('#board .member-tab').each(function() {
		$(this).click(function() {
			$(this).siblings('.contact-info').slideToggle();
		});
		$(this).toggle(function() {
			$(this).parents('.member-cont').addClass('selected');
		}, function() {
			$(this).parents('.member-cont').removeClass('selected');
		});
	});

}
