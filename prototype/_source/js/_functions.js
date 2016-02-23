/************************************************************************/
/* JAVASCRIPT FUNCTIONS
/************************************************************************/

function initMobileNav(){
	$('body').addClass('js');
	
	var menu = $('.menu'),
		menulink = $('.menu_link');

	menulink.click(function() {
		menulink.toggleClass('active');
		menu.slideToggle('fast');
		return false;
	});
}

function initUI(){
	// JQuery UI http://jqueryui.com/accordion/
	$('#accordion').accordion({
		active: false,
		collapsible: true,
		heightStyle: 'content',
		header: 'h3'
	});
	
	// JQuery UI http://jqueryui.com/tabs/
	$('#tabs').tabs();
	
	// JQuery UI http://jqueryui.com/datepicker/
	$('#datepicker').datepicker();
	
	// Lightbox_me http://buckwilson.me/lightboxme/
	$('#launch_modal').click(function(){
		$('#ui_modal').lightbox_me({ centered: true });
	});
	
	$('#launch_imgmodal').click(function(){
		$('#imgmodal').lightbox_me({ centered: true });
	});
	
	$('.layouts_btn').click(function(){
		$('#layouts_modal').lightbox_me({ centered: true });
	});
}

// Set the placeholder text color for Styled Select
function selectFontColor() {
	$('.styled_select select').change(function() {
		if($(this).val() !== ''){
			$(this).css('color','rgb(51, 51, 51);'); // Color once an item is selected
		} else {
			$(this).css('color','rgb(153, 153, 153);'); // Placeholder color
		}
	});
	$('.styled_select select').each(function() {
		if($(this).val()){
			$(this).css('color','rrgb(51, 51, 51);'); // Color once an item is selected
		} else {
			$(this).css('color','rgb(153, 153, 153);'); // Placeholder color
		}
	});
}