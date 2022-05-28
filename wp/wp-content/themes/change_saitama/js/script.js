(function($){
    $(function(){

        $("a[href^=#]").click(function(){
            var add_height = 0;
    	    var Hash = $(this.hash);
    	    var HashOffset = $(Hash).offset().top - add_height;
    	    $("html,body").animate({
    	    	scrollTop: HashOffset
    	    }, 500);
    	    return false;
        });

        $toTop = $('.to_top');
        $(window).on('scroll', function() {
            if ($(this).scrollTop() > 300 ) {
                $toTop.fadeIn('slow');
            } else {
                $toTop.fadeOut('fast');
            }

        });
    });
})(jQuery);
