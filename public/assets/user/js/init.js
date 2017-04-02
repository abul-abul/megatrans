$(document).ready(function(){

	window.width = $(window).width();
	window.height = $(window).height();

	// partbers slider
    $("#flexiselDemo1").flexisel();
    $("#flexiselDemo2").flexisel({
        visibleItems: 6,
        itemsToScroll: 1,
        animationSpeed: 700,
        infinite: true,
        navigationTargetSelector: null,
        autoPlay: {
            enable: false,
            interval: 5000,
            pauseOnHover: true
        },
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:600,
                visibleItems: 1,
                itemsToScroll: 1
            }, 
            landscape: { 
                changePoint:900,
                visibleItems: 3,
                itemsToScroll: 1
            },
            tablet: { 
                changePoint:1140,
                visibleItems: 5,
                itemsToScroll: 1
            }
        }
    });   
	// partners slider

	// small slide
	$(".small_slider_icon_place").click(function(){
		$(".small_slider_child").css({
			"width":"192px",
			"border":"none",
		});
		$(this).parent().css({
			"width":"calc(100% - 192px * 5)",
			"border-bottom":"10px solid #0078ac",
		});
		$(".small_slider_icon_place").css({
			"display":"block",
		});
		$(this).css({
			"display":"none",
		});
	});
	// small slide
	if(width <= 1180 && width > 900){
		$(".small_slider_icon_place").click(function(){
			$(".small_slider_child").css({
				"width":"130px",
				"border":"none",
			});
			$(this).parent().css({
				"width":"calc(100% - 130px * 5)",
				"border-bottom":"10px solid #0078ac",
			});
			$(".small_slider_icon_place").css({
				"display":"block",
			});
			$(this).css({
				"display":"none",
			});
		});
	}else if(width <= 900 && width > 728){
		$(".small_slider_icon_place").click(function(){
			$(".small_slider_child").css({
				"width":"100px",
				"border":"none",
			});
			$(this).parent().css({
				"width":"calc(100% - 100px * 5)",
				"border-bottom":"10px solid #0078ac",
			});
			$(".small_slider_icon_place").css({
				"display":"block",
			});
			$(this).css({
				"display":"none",
			});
		});
	}else if(width <= 728 && width > 530){
		$(".small_slider_icon_place").click(function(){
			$(".small_slider_child").css({
				"width":"70px",
				"border":"none",
			});
			$(this).parent().css({
				"width":"calc(100% - 70px * 5)",
				"border-bottom":"10px solid #0078ac",
			});
			$(".small_slider_icon_place").css({
				"display":"block",
			});
			$(this).css({
				"display":"none",
			});
		});
	}else if(width <= 530 && width > 480){
		$(".small_slider_icon_place").click(function(){
			$(".small_slider_child").css({
				"width":"50px",
				"border":"none",
			});
			$(this).parent().css({
				"width":"calc(100% - 50px * 5)",
				"border-bottom":"10px solid #0078ac",
			});
			$(".small_slider_icon_place").css({
				"display":"block",
			});
			$(this).css({
				"display":"none",
			});
		});
	}else if(width <= 480){
		$(".small_slider_icon_place").click(function(){
			$(".small_slider_child").css({
				"width":"40px",
				"border":"none",
			});
			$(this).parent().css({
				"width":"calc(100% - 40px * 5)",
				"border-bottom":"10px solid #0078ac",
			});
			$(".small_slider_icon_place").css({
				"display":"block",
			});
			$(this).css({
				"display":"none",
			});
		});
	}else if(width <= 1440 && height <= 800 && width > 1024){
		$(".small_slider_icon_place").click(function(){
			$(".small_slider_child").css({
				"width":"182px",
				"border":"none",
			});
			$(this).parent().css({
				"width":"calc(100% - 182px * 5)",
				"border-bottom":"10px solid #0078ac",
			});
			$(".small_slider_icon_place").css({
				"display":"block",
			});
			$(this).css({
				"display":"none",
			});
		});
	}

	// select place

	$("body").click(function(){
		if(open == 1){
			$(".sel_down").css({
				"display":"block",
			});
			$(".sel_up").css({
				"display":"none",
			});
			$(".choose_place").css({
				"display":"none",
			});
			open = 0;
		}
	});

	var open = 0;
	$(".carrier_place").click(function(e){
		e.stopPropagation();
		open++;
		if(open == 1){
			$(".sel_down").css({
				"display":"none",
			});
			$(".sel_up").css({
				"display":"block",
			});
			$(".choose_place").css({
				"display":"block",
			});
		}else if(open == 2){
			$(".sel_down").css({
				"display":"block",
			});
			$(".sel_up").css({
				"display":"none",
			});
			$(".choose_place").css({
				"display":"none",
			});
			open = 0;
		}
	});

	$(".choose_text").click(function(){
		var text = $(this).text();
		$(".sel_text").text(text);
	});
	// select place

	// open hide menu
	$(".burger_place").click(function(){
		$(this).css({
			"display":"none",
		});
		$(".close_place").css({
			"display":"block",
		});
		$(".header_menu_small").animate({
			"height":"250px",
		},500,function(){
			$(".header_menu_small").css({
				"height":"auto",
			});
		});
	});

	$(".close_place").click(function(){
		$(this).css({
			"display":"none",
		});
		$(".burger_place").css({
			"display":"block",
		});
		$(".header_menu_small").animate({
			"height":"0px",
		},500);
	});
	// open hide menu

	// clock
	$(function(){
		var shuffle = function(){ return 0.5 - Math.random(); };
		var clocks = [];
		for (var skin in CoolClock.config.skins) {
			if (skin != 'chunkySwissOnBlack') {
				clocks.push('<div class="clock"><span class="clock_title">Երևան</span><canvas class="CoolClock:'+skin+'"></canvas></div>');
				clocks.push('<div class="clock"><span class="clock_title">Մոսկվա</span><canvas class="CoolClock:'+skin+'"></canvas></div>');
				clocks.push('<div class="clock"><span class="clock_title">Լոնդոն</span><canvas class="CoolClock:'+skin+'"></canvas></div>');
				clocks.push('<div class="clock"><span class="clock_title">Մոսկվա</span><canvas class="CoolClock:'+skin+'"></canvas></div>');
				clocks.push('<div class="clock"><span class="clock_title">Մոսկվա</span><canvas class="CoolClock:'+skin+'"></canvas></div>');
				clocks.push('<div class="clock"><span class="clock_title">Մոսկվա</span><canvas class="CoolClock:'+skin+'"></canvas></div>');
			}
		}
		$('#demo').append(clocks.sort(shuffle).sort(shuffle).sort(shuffle).join('\n'));
		CoolClock.findAndCreateClocks();
	});
	// clock
});