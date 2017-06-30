window.sr = ScrollReveal({ duration: 1000 });
sr.reveal('.figure', 500);

$(document).ready(function(){
	$('a[href^="#"]').on('click', function(event) {
    var target = $(this.getAttribute('href'));
    if( target.length ) {
        event.preventDefault();
        $('html, body').stop().animate({
            scrollTop: target.offset().top
        }, 1000);
    }
});
});