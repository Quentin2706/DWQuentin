jQuery(document).ready(function($){

	$('.article-share > span.fa').on('click', function(event){
		$(this).parent('.article-share').addClass('share-active');
		event.stopPropagation();
	});

	$(window).on('click', function(event){
		$('.article-share').removeClass('share-active');
	});

    var winWidth = $(window).width();
    if (winWidth <= 800) {
        $('.main-header .header-social').append('<span class="toggle-button"><i class="fa fa-bars"></i></span>');

        $('.main-navigation ul li.menu-item-has-children').prepend('<span class="fa fa-chevron-down"></span>');
        $('.mobile-responsive .mobile-menu-wrap').hide();
        $('.mobile-responsive .menu-anchor').click(function(){
            $('.mobile-responsive .mobile-menu-wrap').slideToggle();
        });

        $('.main-navigation .toggle-button').on('click', function() {
            $('.site').removeClass('toggle-active');
        });

        $('.main-navigation ul li ul').hide();
        $('.main-navigation ul li .fa-chevron-down').on('click', function() {
            $(this).siblings('ul').slideToggle();
        });
    }

    // header-search-form
    $('html').click(function() {
        $('.site-header .header-t-search form.search-form').hide();
    });

    $('.site-header .header-t-search').click(function(event) {
        event.stopPropagation();
    });
    $(".site-header .search-btn").click(function() {
        $(".site-header .header-t-search form.search-form").slideToggle();
        return false;
    });

    // toggle sidebar 
    $('.sidebar-toggleButton').click(function() {
        $('.site-header .sidebar-wrap').toggleClass('active');
        $('.site').toggleClass('sidebar-active');
    });

    $('.site-header .sidebar-wrap .toggle-button').click(function() {
        $('.site-header .sidebar-wrap.active').removeClass('active');
        $('.site').removeClass('sidebar-active');
    });

    $('.overlay').click(function() {
        $('.site-header .sidebar-wrap.active').removeClass('active');
        $('.site').removeClass('sidebar-active');
    });

    // Custom scrollbar
    if( rara_readable_data.sidebar_active ){
        new PerfectScrollbar('.sidebar-wrap .sidebar');
    }

    //for menu drop down in edge
    if(winWidth > 800){
        $("#primary-navigation ul li a").focus(function() {
            $(this).parents("li").addClass("focus");
        }).blur(function() {
            $(this).parents("li").removeClass("focus");
        });
    }

}); //document close
