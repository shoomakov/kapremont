$(window).on("load",function(){
	var sw = $('#styleswitcher'),
		swB = sw.children('.open_sw'),
		layout = $('[class*="_layout"]'),
		sc = $('#select_color'),
		hSelect = $('[name="header_type"]'),
		fSelect = $('[name="footer_type"]'),
		bgSelect = $('select[name="bg_color"]'),
		color = $('.bg_select_color'),
		image = $('.bg_select_image'),
		bgImagebutton = $('.bg_image_button'),
		reset = sw.find('button[type="reset"]');

	var t = setTimeout(function(){
		sw.addClass('closed');
		clearTimeout(t);
		sw.trigger('open/close');
	},700);

	sw.on('open/close',function(){
		var $this = $(this);
		swB.on('click',function(){
			$this.toggleClass('closed');
		});
	});

	$(".wrapper_container").click(function () {
        $('#styleswitcher').addClass('closed');
    });

	sw.find('[data-layout]').on('click',function(){
		var self = $(this),
		data = self.data('layout');
		self.addClass('active').siblings('[data-layout]').removeClass('active');
		if(!(self.hasClass('homepage'))){
			switch(data){
				case "wide" :
				 if(layout.hasClass('wide_layout')){
				 	break;
				 }else{
				 	layout.removeClass('boxed_layout').addClass('wide_layout');
				 	$('#go_to_top').addClass('type_2');
				 }
			 	break;
			 	case "boxed" :
			 		if(layout.hasClass('boxed_layout')){
				 		break;
					}else{
						layout.removeClass('wide_layout').addClass('boxed_layout');
						$('#go_to_top').removeClass('type_2');
					}
			 	break;
			}
		}else{
			switch(data){
				case "boxed" :
				 	window.location.href = "index_layout_boxed.html"
			 	break;
			 	case "wide" :
			 		window.location.href = "index.html"
			 	break;
			}
		}
	});

	$('.select_list').each(function(){

		var t = $(this).prev('.select_title').text();
		$(this).find('li').each(function(){
			var self = $(this);
			if(self.text() == t){
				self.addClass('active');
			}
		});

	});

	hSelect.prev('.select_list').on('click','li:not(.active)',function(){
		var val = $(this).text(),
			h = $('#header');

		$(this).addClass('active').siblings().removeClass('active');

		h.slideUp(function(){
			$(this).html("");
			switch(val){
				case "Header 1" :
					h.load('inc/header_1.html',function(){
						$(this).removeClass('header_2 header_3').addClass('header-main').slideDown();
						$.mad_core.run();
					});
				break;
				case "Header 2" :
					h.load('inc/header_2.html',function(){
						$(this).removeClass('header-main header_3').addClass('header_2').slideDown();
						$.mad_core.run();
					});
				break;
				case "Header 3" :
					h.load('inc/header_3.html',function(){
						$(this).removeClass('header-main header_2').addClass('header_3').slideDown();
						$.mad_core.run();
					});
				break;
			}
		});

	});

	fSelect.prev('.select_list').on('click','li:not(.active)',function(){
		var val = $(this).text(),
			h = $('#footer'),
			body = $('html,body');

		$(this).addClass('active').siblings().removeClass('active');

		h.slideUp(function(){
			$(this).html("");
			switch(val){
				case "Footer 1" :
					h.load('inc/footer_1.html',function(){
						$(this).removeClass('footer_2 footer_3').addClass('footer').slideDown();
						body.animate({ scrollTop : $(document).height() });
					});
				break;
				case "Footer 2" :
					h.load('inc/footer_2.html',function(){
						$(this).removeClass('footer_3 footer').addClass('footer_2').slideDown();
						body.animate({ scrollTop : $(document).height() });
						$.mad_core.run();
					});
				break;
				case "Footer 3" :
					h.load('inc/footer_3.html',function(){
						$(this).removeClass('footer_2 footer').addClass('footer_3').slideDown();
						body.animate({ scrollTop : $(document).height() });
						$.mad_core.run();
					});
				break;
			}
		});

	});

	bgSelect.prev('.select_list').on('click','li',function(){
		var val = $(this).text();

		switch(val){

			case "Image" :
				color.slideUp(function(){
					image.slideDown();
				});
			break;

			case "Color" :
				image.slideUp(function(){
					color.slideDown();
				});
			break;

		}

	});

	reset.on('click',function(){
		var h = $('#header')

		if(hSelect.prevAll(".select_title").text() !== "Header 1"){
			hSelect.prevAll(".select_title").text('Header 1');
			hSelect.prev('.select_list').children('li').removeClass('active').first().addClass('active');
			h.slideUp(function(){
				$(this).html("");
				h.load('inc/header_1.html',function(){
					$(this).removeClass('header_2 header_3').addClass('header-main').slideDown();
					$.mad_core.run();
				});
			});
		}

	});


});
