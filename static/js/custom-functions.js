
// globals
var slideshow_items;
var slideshow_current = 1;

// on page load
$(document).ready( function()
    {
	// start slide show
        slideshow_init();
        setInterval("slideshow_next()", 5000);

	// 'sudionici'
        $('#colLeftTop > div.box').toggle(function (e) { 
            $(this).children('p').fadeIn('fast');
	    $('#overlay').fadeIn('fast');
	}, function (e) {
            $(this).children('p').fadeOut('fast');
	    $('#overlay').fadeOut('fast');
	}); 

        $('#colLeftTop div.box p a').click(function (e) {
	    e.stopPropagation();
	});
        
    });


function slideshow_next() {
    var id = (slideshow_current == slideshow_items) ? 1 : slideshow_current+1;
    slideshow_flip(id);
}

function slideshow_flip(id) {
    $('#slideshow :nth-child(' + slideshow_current + ')').fadeOut('slow');
    $('#slideshow :nth-child(' + id + ')').fadeIn('slow');

    $('#jumbonav :nth-child(' + slideshow_current + ')').removeClass('active');
    $('#jumbonav :nth-child(' + id + ')').addClass('active');

    slideshow_current = id;
}

function slideshow_init() {

    slideshow_items = $('#slideshow>img').length;

    // attach click events to navigation bar
    $.each($('#jumbonav').children(), function(index, value) {
	$(this).click(function() { slideshow_flip(index+1)});
    });
}




