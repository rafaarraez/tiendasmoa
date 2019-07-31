$(document).ready(function () {

    $(function(){

        var url = window.location.href; 
        $(".nav-item a").each(function() {
            if(url == (this.href)) {
                $(this).closest("li").addClass("active");
            }
        });
    });

    $(function(){

        var urlDOs = window.location.href; 
        $(".products-less a").each(function() {
            if(urlDOs == (this.href)) {
                $(this).addClass("active");
            }
        });
    });

    (function($){
        $(window).on('load', function(){
            $.instagramFeed({
                'username': 'tiendasmoa',
                'container': "#instagram-feed1",
                'display_profile': true,
                'display_biography': true,
                'display_gallery': true,
                'callback': null,
                'styling': true,
                'items': 9,
                'items_per_row': 3,
                'margin': 1 
            });
        });
    })(jQuery);
    
});
