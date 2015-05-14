jQuery(document).ready(function () {
	    		var $ = jQuery;
	        if (document.referrer == 'http://www.llumar.com/en/AutoPaintProtection.aspx') {
	            $('#llumar-logo').hide();
	        }
	        $("#menu a").on('click', function (e) {
	            e.preventDefault();
	            var data = $(this).data('film');
	            if (data == 'all') {
	                if ($('.button-all').hasClass('show-all')) {
	                    $('#menu li').addClass('active');
	                    $('.highlight').show();
	                } else {
	                    $('#menu li').removeClass('active');
	                    $('.highlight').hide();
	                }
	            } else {
	                var film = ".highlight." + data;
	                $(film).toggle();
	                $(this).parent().toggleClass('active');
	            }
	            var active = 0;
	            $('.ppv-button').each(function () {
	                if ($(this).hasClass('active')) {
	                    active++;
	                }
	            });
	            if (active == 8) {
	                $('.button-all').parent().addClass('active');
	                $('.button-all').addClass('hide-all').removeClass('show-all');
	                $('.button-all').text('Hide All');
	            } else {
	                $('.button-all').parent().removeClass('active');
	                $('.button-all').addClass('show-all').removeClass('hide-all');
	                $('.button-all').text('Show All');
	            }
	        });
	    });