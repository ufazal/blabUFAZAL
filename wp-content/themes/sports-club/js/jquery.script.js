/**
 * @package 	WordPress
 * @subpackage 	Sports Club
 * @version 	1.0.0
 * 
 * Theme Custom Scripts
 * Created by CMSMasters
 * 
 */


"use strict";

jQuery(document).ready(function() { 
	/* Add Class To Row */
	(function ($) { 
		$('.cmsmasters_row_margin').each(function () { 
			var cmsmasters_column = $(this).find('.cmsmasters_column').eq(0);
			
			
			if ( 
				cmsmasters_column.hasClass('one_half') && 
				cmsmasters_column.next().hasClass('one_half') 
			) {
				$(this).addClass('cmsmasters_1212');
			} else if ( 
				cmsmasters_column.hasClass('one_third') && 
				cmsmasters_column.next().hasClass('two_third') 
			) {
				$(this).addClass('cmsmasters_1323');
			} else if ( 
				cmsmasters_column.hasClass('two_third') && 
				cmsmasters_column.next().hasClass('one_third') 
			) {
				$(this).addClass('cmsmasters_2313');
			} else if ( 
				cmsmasters_column.hasClass('one_fourth') && 
				cmsmasters_column.next().hasClass('three_fourth') 
			) {
				$(this).addClass('cmsmasters_1434');
			} else if ( 
				cmsmasters_column.hasClass('three_fourth') && 
				cmsmasters_column.next().hasClass('one_fourth') 
			) {
				$(this).addClass('cmsmasters_3414');
			} else if ( 
				cmsmasters_column.hasClass('one_third') && 
				cmsmasters_column.next().hasClass('one_third') && 
				cmsmasters_column.next().next().hasClass('one_third') 
			) {
				$(this).addClass('cmsmasters_131313');
			} else if (
				cmsmasters_column.hasClass('one_half') && 
				cmsmasters_column.next().hasClass('one_fourth') && 
				cmsmasters_column.next().next().hasClass('one_fourth')
			) {
				$(this).addClass('cmsmasters_121414');
			} else if ( 
				cmsmasters_column.hasClass('one_fourth') && 
				cmsmasters_column.next().hasClass('one_half') && 
				cmsmasters_column.next().next().hasClass('one_fourth')
			) {
				$(this).addClass('cmsmasters_141214');
			} else if ( 
				cmsmasters_column.hasClass('one_fourth') && 
				cmsmasters_column.next().hasClass('one_fourth') && 
				cmsmasters_column.next().next().hasClass('one_half') 
			) {
				$(this).addClass('cmsmasters_141412');
			} else if ( 
				cmsmasters_column.hasClass('one_fourth') && 
				cmsmasters_column.next().hasClass('one_fourth') && 
				cmsmasters_column.next().next().hasClass('one_fourth') && 
				cmsmasters_column.next().next().next().hasClass('one_fourth') 
			) {
				$(this).addClass('cmsmasters_14141414');
			} else {
				$(this).addClass('cmsmasters_11');
			}
		} );
	} )(jQuery);



	/* Scroll Top */
	(function ($) { 
		$(window).scroll(function () { 
			if ($(this).scrollTop() > 200) {
				$('#slide_top').filter(':hidden').fadeIn('fast');
			} else {
				$('#slide_top').filter(':visible').fadeOut('fast');
			}
		} );
		
		
		$('.divider a, #slide_top').on('click', function () { 
			$('html, body').animate( { 
				scrollTop : 0 
			}, 'slow');
			
			
			return false;
		} );
	} )(jQuery);



	/* Lightbox Classes Adding */
	(function ($) { 
		$('.widget_custom_flickr_entries').each(function () { 
			var flickrUniqID = uniqID();
			
			
			$(this).find('.flickr_badge_image a').each(function () { 
				var src = $(this).find('img').attr('src'), 
					title = $(this).find('img').attr('title'), 
					src_full = src.replace(/_s.jpg/g, '.jpg');
				
				
				$(this).removeAttr('href').attr( { 
					href : 		src_full, 
					title : 	title, 
					rel : 		'ilightbox[flickr_' + flickrUniqID + ']' 
				} );
			} );
		} ); // Flickr Widget Lightbox
		
		
		$('.gallery').each(function () { 
			var galUniqID = uniqID();
			
			
			$(this).find('a').each(function () { 
				var linkHref = $(this).attr('href'), 
					lastDotPos = linkHref.lastIndexOf('.'), 
					imgFormat = linkHref.slice(lastDotPos + 1);
				
				
				if (imgFormat.length <= 5) {
					$(this).attr('rel', 'ilightbox[wp_gal_' + galUniqID + ']');
				}
			} );
		} ); // Wordpress Default Gallery Shortcode Lightbox
	} )(jQuery);
	
	
	
	/* iLightBox Init */
	(function ($) { 
		var ilightbox_settings = { 
			skin : 					cmsmasters_script.ilightbox_skin, 
			path : 					cmsmasters_script.ilightbox_path, 
			infinite : 				(cmsmasters_script.ilightbox_infinite == '1') ? true : false, 
			keepAspectRatio : 		(cmsmasters_script.ilightbox_aspect_ratio == '1') ? true : false, 
			mobileOptimizer : 		(cmsmasters_script.ilightbox_mobile_optimizer == '1') ? true : false, 
			maxScale : 				Number(cmsmasters_script.ilightbox_max_scale), 
			minScale : 				Number(cmsmasters_script.ilightbox_min_scale), 
			innerToolbar : 			(cmsmasters_script.ilightbox_inner_toolbar == '1') ? true : false, 
			smartRecognition : 		(cmsmasters_script.ilightbox_mobile_optimizer == '1') ? true : false, 
			fullAlone : 			(cmsmasters_script.ilightbox_fullscreen_one_slide == '1') ? true : false, 
			fullViewPort : 			cmsmasters_script.ilightbox_fullscreen_viewport, 
			controls : { 
				toolbar : 			(cmsmasters_script.ilightbox_controls_toolbar == '1') ? true : false, 
				arrows : 			(cmsmasters_script.ilightbox_controls_arrows == '1') ? true : false, 
				fullscreen : 		(cmsmasters_script.ilightbox_controls_fullscreen == '1') ? true : false, 
				thumbnail : 		(cmsmasters_script.ilightbox_controls_thumbnail == '1') ? true : false, 
				keyboard : 			(cmsmasters_script.ilightbox_controls_keyboard == '1') ? true : false, 
				mousewheel : 		(cmsmasters_script.ilightbox_controls_mousewheel == '1') ? true : false, 
				swipe : 			(cmsmasters_script.ilightbox_controls_swipe == '1') ? true : false, 
				slideshow : 		(cmsmasters_script.ilightbox_controls_slideshow == '1') ? true : false 
			}, 
			text : { 
				close : 			cmsmasters_script.ilightbox_close_text, 
				enterFullscreen : 	cmsmasters_script.ilightbox_enter_fullscreen_text, 
				exitFullscreen : 	cmsmasters_script.ilightbox_exit_fullscreen_text, 
				slideShow : 		cmsmasters_script.ilightbox_slideshow_text, 
				next : 				cmsmasters_script.ilightbox_next_text, 
				previous : 			cmsmasters_script.ilightbox_previous_text 
			}, 
			errors : { 
				loadImage : 		cmsmasters_script.ilightbox_load_image_error, 
				loadContents : 		cmsmasters_script.ilightbox_load_contents_error, 
				missingPlugin : 	cmsmasters_script.ilightbox_missing_plugin_error 
			} 
		}, 
		gallery_array = [], 
		gallery_id = '';
		
		
		$('[rel="ilightbox"]').each(function () { 
			$(this).iLightBox(ilightbox_settings);
		} );
		
		
		$('[rel^="ilightbox["]').each(function () { 
			if ($(this).closest('.cmsmasters_more_items_loader').length === 0) {
				var item_rel = $(this).attr('rel');
				
				
				if ($.inArray(item_rel, gallery_array) === -1) {
					gallery_array.push(item_rel);
				}
			}
		} );
		
		
		$.each(gallery_array, function (gallery_array, gallery_id) { 
			$('[rel="' + gallery_id + '"]').iLightBox(ilightbox_settings);
		} );
	} )(jQuery);
	
	
	
	/* Shortcodes Animation Run */
	(function ($) { 
		if ( 
			!checker.os.iphone && 
			!checker.os.ipod && 
			!checker.os.ipad && 
			!checker.os.blackberry && 
			!checker.os.android 
		) {
			$('[data-animation]').waypoint(function (dir) { 
				if (dir === 'down') {
					var el = 			$(this), 
						animation = 	el.data('animation'), 
						delay = 		(el.data('delay')) ? el.data('delay') : 0;
					
					
					setTimeout(function () { 
						el.addClass(animation + ' animated');
					}, delay);
				}
			}, { 
				offset : 		'100%' 
			} ).waypoint(function (dir) { 
				if (dir === 'up') {
					var el = 			$(this), 
						animation = 	el.data('animation'), 
						delay = 		(el.data('delay')) ? el.data('delay') : 0;
					
					
					setTimeout(function () { 
						el.addClass(animation + ' animated');
					}, delay);
				}
			}, { 
				offset : 		'25%' 
			} );
		} else {
			$('[data-animation]').addClass('animated');
		}
		
		
		if ( 
			!checker.os.iphone && 
			!checker.os.ipod && 
			!checker.os.ipad && 
			!checker.os.blackberry && 
			!checker.os.android 
		) {
			$('.cmsmasters_icon_box').waypoint(function (dir) { 
				if (dir === 'down') {
					var el = 	$(this);
					
					
					el.addClass('shortcode_animated');
				}
			}, { 
				offset : 		'100%' 
			} ).waypoint(function (dir) { 
				if (dir === 'up') {
					var el = 	$(this);
					
					
					el.addClass('shortcode_animated');
				}
			}, { 
				offset : 		'25%' 
			} );
		} else {
			$('.cmsmasters_icon_box').addClass('shortcode_animated');
		}
		
		
		if ( 
			!checker.os.iphone && 
			!checker.os.ipod && 
			!checker.os.ipad && 
			!checker.os.blackberry && 
			!checker.os.android 
		) {
			$('.cmsmasters_icon_list_items.cmsmasters_icon_list_type_block').waypoint(function (dir) { 
				if (dir === 'down') {
					var el = 		$(this), 
						items = 	el.find('li'), 
						delay = 	500, 
						i = 		1;
					
					
					items.each(function () { 
						var item = 	$(this);
						
						
						setTimeout(function () { 
							item.addClass('shortcode_animated');
						}, delay * i);
						
						
						i += 1;
					} );
				}
			}, { 
				offset : 		'100%' 
			} ).waypoint(function (dir) { 
				if (dir === 'up') {
					var el = 		$(this), 
						items = 	el.find('li'), 
						delay = 	500, 
						i = 		1;
					
					
					items.each(function () { 
						var item = 	$(this);
						
						
						setTimeout(function () { 
							item.addClass('shortcode_animated');
						}, delay * i);
						
						
						i += 1;
					} );
				}
			}, { 
				offset : 		'25%' 
			} );
		} else {
			$('.cmsmasters_icon_list_items .cmsmasters_icon_list_item').addClass('shortcode_animated');
		}
		
		
		if ( 
			!checker.os.iphone && 
			!checker.os.ipod && 
			!checker.os.ipad && 
			!checker.os.blackberry && 
			!checker.os.android 
		) {
			$('.cmsmasters_hover_slider').waypoint(function (dir) { 
				if (dir === 'down') {
					var el = 		$(this), 
						items = 	el.find('li'), 
						delay = 	300, 
						i = 		1;
					
					
					items.each(function () { 
						var item = 	$(this);
						
						
						setTimeout(function () { 
							item.addClass('shortcode_animated');
						}, delay * i);
						
						
						i += 1;
					} );
				}
			}, { 
				offset : 		'100%' 
			} ).waypoint(function (dir) { 
				if (dir === 'up') {
					var el = 		$(this), 
						items = 	el.find('li'), 
						delay = 	300, 
						i = 		1;
					
					
					items.each(function () { 
						var item = 	$(this);
						
						
						setTimeout(function () { 
							item.addClass('shortcode_animated');
						}, delay * i);
						
						
						i += 1;
					} );
				}
			}, { 
				offset : 		'25%' 
			} );
		} else {
			$('.cmsmasters_hover_slider ul li').addClass('shortcode_animated');
		}
		
		
		if ( 
			!checker.os.iphone && 
			!checker.os.ipod && 
			!checker.os.ipad && 
			!checker.os.blackberry && 
			!checker.os.android 
		) {
			$('.cmsmasters_profile.vertical').waypoint(function (dir) { 
				if (dir === 'down') {
					var el = 		$(this), 
						items = 	el.find('article'), 
						delay = 	500, 
						i = 		1;
					
					
					items.each(function () { 
						var item = 	$(this);
						
						
						setTimeout(function () { 
							item.addClass('shortcode_animated');
						}, delay * i);
						
						
						i += 1;
					} );
				}
			}, { 
				offset : 		'100%' 
			} ).waypoint(function (dir) { 
				if (dir === 'up') {
					var el = 		$(this), 
						items = 	el.find('article'), 
						delay = 	500, 
						i = 		1;
					
					
					items.each(function () { 
						var item = 	$(this);
						
						
						setTimeout(function () { 
							item.addClass('shortcode_animated');
						}, delay * i);
						
						
						i += 1;
					} );
				}
			}, { 
				offset : 		'25%' 
			} );
		} else {
			$('.cmsmasters_profile.vertical .profile').addClass('shortcode_animated');
		}
		
		
		if ( 
			!checker.os.iphone && 
			!checker.os.ipod && 
			!checker.os.ipad && 
			!checker.os.blackberry && 
			!checker.os.android 
		) {
			$('.cmsmasters_clients_grid').waypoint(function (dir) { 
				if (dir === 'down') {
					var el = 		$(this), 
						items = 	el.find('.cmsmasters_clients_item'), 
						delay = 	300, 
						i = 		1;
					
					
					items.each(function () { 
						var item = 	$(this);
						
						
						setTimeout(function () { 
							item.addClass('shortcode_animated');
						}, delay * i);
						
						
						i += 1;
					} );
				}
			}, { 
				offset : 		'100%' 
			} ).waypoint(function (dir) { 
				if (dir === 'up') {
					var el = 		$(this), 
						items = 	el.find('.cmsmasters_clients_item'), 
						delay = 	300, 
						i = 		1;
					
					
					items.each(function () { 
						var item = 	$(this);
						
						
						setTimeout(function () { 
							item.addClass('shortcode_animated');
						}, delay * i);
						
						
						i += 1;
					} );
				}
			}, { 
				offset : 		'25%' 
			} );
		} else {
			$('.cmsmasters_clients_grid').find('.cmsmasters_clients_item').addClass('shortcode_animated');
		}
		
		
		if ( 
			!checker.os.iphone && 
			!checker.os.ipod && 
			!checker.os.ipad && 
			!checker.os.blackberry && 
			!checker.os.android 
		) {
			$('.cmsmasters_gallery, .blog.columns, .blog.timeline').waypoint(function (dir) { 
				if (dir === 'down') {
					var el = 			$(this), 
						items = 		el.find('article.post, .cmsmasters_gallery_item'), 
						itemsCount = 	items.length, 
						delay = 		300, 
						i = 			1;
					
					
					var newTime = setInterval(function () { 
						if (el.hasClass('isotope')) {
							clearInterval(newTime);
						} else {
							return false;
						}
						
						
						items.each(function () { 
							var item = 	$(this);
							
							
							setTimeout(function () { 
								item.addClass('shortcode_animated');
							}, delay * i);
							
							
							i += 1;
							
							
							if (i === itemsCount) {
								setTimeout(function () { 
									$(window).trigger('resize');
								}, delay * i);
							}
						} );
					}, 300);
				}
			}, { 
				offset : 		'100%' 
			} ).waypoint(function (dir) { 
				if (dir === 'up') {
					var el = 			$(this), 
						items = 		el.find('article.post, .cmsmasters_gallery_item'), 
						itemsCount = 	items.length, 
						delay = 		300, 
						i = 			1;
					
					
					var newTime = setInterval(function () { 
						if (el.hasClass('isotope')) {
							clearInterval(newTime);
						} else {
							return false;
						}
						
						
						items.each(function () { 
							var item = 	$(this);
							
							
							setTimeout(function () { 
								item.addClass('shortcode_animated');
							}, delay * i);
							
							
							i += 1;
							
							
							if (i === itemsCount) {
								setTimeout(function () { 
									$(window).trigger('resize');
								}, delay * i);
							}
						} );
					}, 300);
				}
			}, { 
				offset : 		'25%' 
			} );
		} else {
			$('.cmsmasters_gallery, .blog.columns, .blog.timeline').find('article.post, .cmsmasters_gallery_item').addClass('shortcode_animated');
		}
	} )(jQuery);
	
	
	
	/* Stats Run */
	(function ($) { 
		if ( 
			!checker.os.iphone && 
			!checker.os.ipod && 
			!checker.os.ipad && 
			!checker.os.blackberry && 
			!checker.os.android && 
			!checker.ua.ie9 
		) {
			$('.cmsmasters_stats.stats_mode_circles').waypoint(function () { 
				var i = 1;
				
				
				$(this).find('.cmsmasters_stat').each(function () { 
					var el = $(this);
					
					
					setTimeout(function () { 
						el.easyPieChart( { 
							size : 			180, 
							lineWidth : 	5, 
							lineCap : 		'square', 
							animate : 		1000, 
							scaleColor : 	false, 
							trackColor : 	false, 
							barColor : function () { 
								return ($(this.el).data('bar-color')) ? $(this.el).data('bar-color') : cmsmasters_script.primary_color;
							}, 
							onStep : function (from, to, val) { 
								$(this.el).find('.cmsmasters_stat_counter').text(~~val);
							} 
						} );
					}, 500 * i);
					
					
					i += 1;
				} );
			}, { 
				offset : 		'100%' 
			} );
		} else {
			$('.cmsmasters_stats.stats_mode_circles').find('.cmsmasters_stat').easyPieChart( { 

				size : 			186, 
				lineWidth : 	13, 
				lineCap : 		'square', 
				animate : 		1000, 
				scaleColor : 	false, 
				trackColor : 	false, 
				barColor : function () { 
					return ($(this.el).data('bar-color')) ? $(this.el).data('bar-color') : cmsmasters_script.primary_color;
				}, 
				onStep : function (from, to, val) { 
					$(this.el).find('.cmsmasters_stat_counter').text(~~val);
				} 
			} );
		}
		
		
		if ( 
			!checker.os.iphone && 
			!checker.os.ipod && 
			!checker.os.ipad && 
			!checker.os.blackberry && 
			!checker.os.android && 
			!checker.ua.ie9 
		) {
			$('.cmsmasters_counters').waypoint(function () { 
				var i = 1;
				
				
				$(this).find('.cmsmasters_counter').each(function () { 
					var el = $(this);
					
					
					setTimeout(function () { 
						el.easyPieChart( { 
							size : 			180, 
							lineWidth : 	0, 
							lineCap : 		'square', 
							animate : 		1500, 
							scaleColor : 	false, 
							trackColor : 	false, 
							barColor : 		'#ffffff', 
							onStep : function (from, to, val) { 
								$(this.el).find('.cmsmasters_counter_counter').text(~~val);
							} 
						} );
					}, 500 * i);
					
					
					i += 1;
				} );
			}, { 
				offset : 		'100%' 
			} );
		} else {
			$('.cmsmasters_counters').find('.cmsmasters_counter').easyPieChart( { 
				size : 			180, 
				lineWidth : 	0, 
				lineCap : 		'square', 
				animate : 		1500, 
				scaleColor : 	false, 
				trackColor : 	false, 
				barColor : 		'#ffffff', 
				onStep : function (from, to, val) { 
					$(this.el).find('.cmsmasters_counter_counter').text(~~val);
				} 
			} );
		}
		
		
		if ( 
			!checker.os.iphone && 
			!checker.os.ipod && 
			!checker.os.ipad && 
			!checker.os.blackberry && 
			!checker.os.android && 
			!checker.ua.ie9 
		) {
			$('.cmsmasters_stats.stats_mode_bars').waypoint(function () { 
				$(this).addClass('shortcode_animated').find('.cmsmasters_stat').each(function () { 
					var el = $(this);
					
					
					el.easyPieChart( { 
						size : 			180, 
						lineWidth : 	0, 
						lineCap : 		'square', 
						animate : 		1500, 
						scaleColor : 	false, 
						trackColor : 	false, 
						barColor : 		'#ffffff', 
						onStep : function (from, to, val) { 
							$(this.el).find('.cmsmasters_stat_counter').text(~~val);
						} 
					} );
				} );
			}, { 
				offset : 		'100%' 
			} );
		} else {
			$('.cmsmasters_stats.stats_mode_bars').addClass('shortcode_animated').find('.cmsmasters_stat').easyPieChart( { 
				size : 			180, 
				lineWidth : 	0, 
				lineCap : 		'square', 
				animate : 		1500, 
				scaleColor : 	false, 
				trackColor : 	false, 
				barColor : 		'#ffffff', 
				onStep : function (from, to, val) { 
					$(this.el).find('.cmsmasters_stat_counter').text(~~val);
				} 
			} );
		}
	} )(jQuery);
	
	/* Header Top Hide Toggle */
	(function ($) { 
		$('.header_top_but').on('click', function () { 
			var headerTopBut = $(this), 
				headerTopButArrow = headerTopBut.find('> span'), 
				headerTopOuter = headerTopBut.parents('.header_top').find('.header_top_outer');
			
			if (headerTopBut.hasClass('opened')) {
				headerTopOuter.slideUp();
				
				headerTopButArrow.removeClass('cmsmasters_top_arrow').addClass('cmsmasters_bot_arrow');
				
				headerTopBut.removeClass('opened').addClass('closed');
			} else if (headerTopBut.hasClass('closed')) {
				headerTopOuter.slideDown();
				
				headerTopButArrow.removeClass('cmsmasters_bot_arrow').addClass('cmsmasters_top_arrow');
				
				headerTopBut.removeClass('closed').addClass('opened');
			}
		} );
	} )(jQuery);
	
	
	
	/* Fixed Header Function Start */
	(function ($) { 
		$('#header').cmsmastersFixedHeaderScroll();
	} )(jQuery);
	
	
	/* Responsive Navigation Function Start */
	(function ($) { 
		$('#navigation').cmsmastersResponsiveNav();
	} )(jQuery);
	
	
	/* Row Parallax Function Start */
	(function ($) { 
		$(window).load(function () { 
			if ( 
				!checker.os.iphone && 
				!checker.os.ipad && 
				!checker.os.ipod && 
				!checker.os.android && 
				!checker.os.blackberry 
			) {
				if (checker.ua.safari) {
					if (checker.ua.chrome) {
						setTimeout(function () { 
							$.stellar( { 
								horizontalScrolling : 	false, 
								verticalOffset : 		30, 
								parallaxElements : 		false 
							} );
						}, 1500);
						
						
						$(window).on('debouncedresize', function () { 
							if ($(window).width() < 1024) {
								$.stellar('destroy');
							} else {
								$.stellar( { 
									horizontalScrolling : 	false, 
									verticalOffset : 		30, 
									parallaxElements : 		false 
								} );
							}
						} );
					}
				} else {
					setTimeout(function () { 
						$.stellar( { 
							horizontalScrolling : 	false, 
							verticalOffset : 		30, 
							parallaxElements : 		false 
						} );
					}, 1500);
					
					
					$(window).on('debouncedresize', function () { 
						if ($(window).width() < 1024) {
							$.stellar('destroy');
						} else {
							$.stellar( { 
								horizontalScrolling : 	false, 
								verticalOffset : 		30, 
								parallaxElements : 		false 
							} );
						}
					} );
				}
			} else {
				$('div.cmsmasters_row').css('background-attachment', 'scroll');
			}
		} );
	} )(jQuery);
	
	
	
	/* One Page Navigation */
	(function ($) { 
		$(window).load(function () { 
			var inViewNav = 			$('#navigation'), 
				inViewSelector = 		inViewNav.find('a[href*=#]'), 
				inViewBlocks = 			[], 
				siteURL = 				cmsmasters_script.site_url;
			
			// Recalculate Header Offset
			function rebuildHeaderOffset(hashRow) { 
				var cmsmastersFHeader = 			$('#page').hasClass('fixed_header'), 
					cmsmastersTHeader = 			$('#page').hasClass('enable_header_top'), 
					cmsmastersBHeader = 			$('#page').hasClass('enable_header_bottom'), 
					wpAdminBar = 			$('#wpadminbar').outerHeight(), 
					cmsmastersMHeaderHeight = 	$('#header .header_mid').data('height'), 
					cmsmastersTHeaderHeight = 	$('#header .header_top').data('height'), 
					cmsmastersBHeaderHeight = 	$('#header .header_bot').data('height'), 
					cmsmastersHeaderOffset = 	0, 
					scrollTop = 			$(window).scrollTop(), 
					winWidth = 				$(window).width();
				
				
				if (cmsmastersFHeader) {
					if (cmsmastersTHeader) {
						if (hashRow >= (cmsmastersMHeaderHeight / 3) + cmsmastersTHeaderHeight) {
							cmsmastersHeaderOffset = (cmsmastersMHeaderHeight / 3) * 2 + (cmsmastersBHeader ? cmsmastersBHeaderHeight : 0);
						} else if (hashRow >= cmsmastersTHeaderHeight) {
							cmsmastersHeaderOffset = (cmsmastersMHeaderHeight - (scrollTop - cmsmastersTHeaderHeight)) + (cmsmastersBHeader ? cmsmastersBHeaderHeight : 0);
						} else {
							cmsmastersHeaderOffset = (cmsmastersMHeaderHeight + cmsmastersTHeaderHeight - scrollTop) + (cmsmastersBHeader ? cmsmastersBHeaderHeight : 0);
						}
					} else {
						if (hashRow >= cmsmastersMHeaderHeight / 3) {
							cmsmastersHeaderOffset = (cmsmastersMHeaderHeight / 3) * 2 + (cmsmastersBHeader ? cmsmastersBHeaderHeight : 0);
						} else {
							cmsmastersHeaderOffset = (cmsmastersMHeaderHeight - scrollTop) + (cmsmastersBHeader ? cmsmastersBHeaderHeight : 0);
						}
					}
					
					
					cmsmastersHeaderOffset = -cmsmastersHeaderOffset - Number((wpAdminBar !== undefined) ? wpAdminBar - 1 : 0);
				}
				
				
				if (checkN(-cmsmastersHeaderOffset, hashRow, 150)) {
					cmsmastersHeaderOffset = 'false';
				}
				
				
				if (winWidth < 1008) {
					cmsmastersHeaderOffset = 0 - Number((wpAdminBar !== undefined) ? wpAdminBar - 1 : 0);
				}
				
				
				return cmsmastersHeaderOffset;
			}
			
			// Find InView Blocks
			inViewSelector.each(function () { 
				if (this.hash !== '' && $('body').find('div' + this.hash + '.cmsmasters_row_outer_parent').length > 0) {
					inViewBlocks.push($('body').find('div' + this.hash + '.cmsmasters_row_outer_parent'));
				}
			} );
			
			// Highlight InView Section Navigation Link
			$(inViewBlocks).each(function () { 
				var winHeight = 			$(window).height(), 
					inViewTop = 			$(this).offset().top, 
					inViewHeight = 			$(this).outerHeight(), 
					headerOffsetRebuild = 	(rebuildHeaderOffset(inViewTop) !== 'false') ? rebuildHeaderOffset(inViewTop) : 0;
				
				
				$(this).scrollspy( { 
					min : 		(inViewHeight / 2) - (winHeight - inViewTop + headerOffsetRebuild), 
					max : 		inViewTop + (inViewHeight / 3) + headerOffsetRebuild, 
					onEnter : function (el, pos) { 
						inViewNav.find('> li.menu-item.current-menu-item').removeClass('current-menu-item');
						
						inViewNav.find('> li.menu-item.current-menu-ancestor').removeClass('current-menu-ancestor');
						
						
						inViewSelector.each(function () { 
							if ($(this).attr('href').slice($(this).attr('href').indexOf('#')) === '#' + $(el).attr('id')) {
								$(this).parents('li').addClass('current-menu-item');
							}
						} );
					} 
				} );
			} );
			
			// Scroll to Section on Page Load if Hash Exists or Else add Current Menu Item Class to First Navigation Item
			if (window.location.hash && $('body').find('div' + window.location.hash + '.cmsmasters_row_outer_parent').length > 0) {
				var headerOffsetRebuild = 	rebuildHeaderOffset($('body').find('div' + window.location.hash + '.cmsmasters_row_outer_parent').offset().top), 
					currentNavItem = 		inViewNav.find('> li.menu-item > a[href=' + window.location.hash + ']');
				
				
				if (currentNavItem.length > 0 && currentNavItem.parents('li').is(':not(.current-menu-item)')) {
					currentNavItem.parents('li').addClass('current-menu-item');
				}
				
				
				if (headerOffsetRebuild !== 'false') {
					$.scrollTo(window.location.hash, 800, { 
						easing : 	'easeInOutExpo', 
						axis : 		'y', 
						margin : 	true, 
						offset : { 
							top : 	headerOffsetRebuild 
						} 
					} );
				} else {
					$('html, body').animate( { 
						scrollTop : 0 
					}, 800);
				}
			} else if (window.location.href === siteURL) {
				inViewNav.find('> li.menu-item').each(function () { 
					var thisHref = $(this).find('> a').attr('href');
					
					
					if ( 
						thisHref === siteURL || 
						thisHref === window.location.pathname || 
						thisHref === '/' 
					) {
						$(this).addClass('current-menu-item');
					}
				} );
			}
			
			// Scroll to Sections on Link Click
			$('nav a[href*=#], a.ls-l, .hash-link a, a.hash-link').on('click', function () { 
				var linkHash = 				this.hash, 
					linkHref = 				$(this).attr('href'), 
					rowExists = 			$('body').find('div' + linkHash + '.cmsmasters_row_outer_parent'), 
					headerOffsetRebuild = 	(rowExists.length > 0) ? rebuildHeaderOffset(rowExists.offset().top) : false;
				
				
				if (linkHash !== '') {
					if (rowExists.length > 0) {
						if (headerOffsetRebuild !== 'false') {
							$.scrollTo(linkHash, 800, { 
								easing : 	'easeInOutExpo', 
								axis : 		'y', 
								margin : 	true, 
								offset : { 
									top : 	headerOffsetRebuild 
								}, 
								onAfter : function () { 
									if (history.pushState) {
										history.pushState(null, null, linkHash);
									}
								} 
							} );
						} else {
							$('html, body').animate( { 
								scrollTop : 0 
							}, 800, function () { 
								if (history.pushState) {
									history.pushState(null, null, linkHash);
								}
							} );
						}
					} else {
						if ( 
							linkHref.indexOf(linkHash) !== -1 && 
							linkHref.slice(0, linkHref.indexOf(linkHash)) !== siteURL && 
							linkHref !== linkHash 
						) {
							window.location.href = linkHref;
						} else {
							window.location.href = siteURL + linkHash;
						}
					}
					
					
					return false;
				}
			} );
		} );
	} )(jQuery);
	
	
	
	/* Notise Close Button */
	(function ($) { 
		$('.cmsmasters_notice a.notice_close').on('click', function () { 
			$(this).parents('.cmsmasters_notice').fadeOut(500, function () { 
				$(this).remove();
			} );
			
			
			return false;
		} );
	} )(jQuery);
	
	
	
	/* Toggles */
	(function ($) { 
		$('.cmsmasters_toggles .cmsmasters_toggle_title a').on('click', function (i) { 
			var active_toggle = $(this).parents('.cmsmasters_toggles').find('.cmsmasters_toggle_wrap.current_toggle .cmsmasters_toggle'), 
				toggle = $(this).parents('.cmsmasters_toggle_wrap'), 
				acc = ($(this).parents('.cmsmasters_toggles').hasClass('toggles_mode_accordion')) ? true : false, 
				dropDown = toggle.find('.cmsmasters_toggle');
			
			
			if (toggle.hasClass('current_toggle')) {
				dropDown.slideUp('fast', function () { 
					toggle.removeClass('current_toggle');
				} );
			} else {
				if (acc) {
					active_toggle.slideUp('fast', function () { 
						active_toggle.parents('.cmsmasters_toggle_wrap').removeClass('current_toggle');
					} );
				}
				
				dropDown.slideDown('fast', function () { 
					toggle.addClass('current_toggle');
				} );
			}
			
			
			i.preventDefault();
		} );
		
		
		$('.cmsmasters_toggles .cmsmasters_toggles_filter a').on('click', function (i) { 
			var filter_wrap = $(this).parents('.cmsmasters_toggles_filter'), 
				filter = $(this).data('key'), 
				toggle = $(this).parents('.cmsmasters_toggles').find('.cmsmasters_toggle_wrap');
			
			
			if ($(this).is(':not(.current_filter)')) { 
				filter_wrap.find('a').removeClass('current_filter');
				
				
				$(this).addClass('current_filter');
				
				
				toggle.filter('[data-tags~="' + filter + '"]').slideDown('fast');
				
				
				toggle.filter(':not([data-tags~="' + filter + '"])').slideUp('fast');
				
				
				toggle.filter(':not([data-tags~="' + filter + '"])').removeClass('current_toggle').find('.cmsmasters_toggle').removeAttr('style');
			}
			
			
			i.preventDefault();
		} );
	} )(jQuery);
	
	
	
	/* Tabs */
	(function ($) { 
		$('.cmsmasters_tabs ul.cmsmasters_tabs_list li a').on('click', function (t) { 
			var tabs_parent = $(this).parents('.cmsmasters_tabs'), 
				tabs = tabs_parent.find('.cmsmasters_tabs_wrap'), 
				index = $(this).parents('li').index();
			
			
			tabs_parent.find('.cmsmasters_tabs_list > .current_tab').removeClass('current_tab');
			
			
			$(this).parents('li').addClass('current_tab');
			
			
			tabs.find('.cmsmasters_tab').not(':eq(' + index + ')').slideUp('fast', function () { 
				$(this).removeClass('active_tab');
			} );
			
			
			tabs.find('.cmsmasters_tab:eq(' + index + ')').slideDown('fast', function () { 
				$(this).addClass('active_tab');
			} );
			
			
			t.preventDefault();
		} );
	} )(jQuery);
	
	
	
	/* YouTube Iframe Fix */
	(function ($) { 
		var iframe = $('iframe[src*="youtube.com"]');
		
		
		iframe.each(function () { 
			var current = 	$(this), 
				src = 		current.attr('src'); 
			
			
			if (src) {
				if (src.indexOf('?') !== -1) {
					src += "&wmode=opaque";
				} else {
					src += "?wmode=opaque";
				}
				
				
				current.attr('src', src);
			}
		} );
	} )(jQuery);
} );



/* Like Button */
function cmsmastersLike(postID) { 
	if (postID !== '') { 
		var likeButton = jQuery('#cmsmastersLike-' + postID);
		
		
		likeButton.find('> span').text('...');
		
		
		jQuery.post(cmsmasters_script.theme_url + '/framework/function/like.php', { 
			id : postID 
		}, function (data) { 
			likeButton.find('> span').text(data);
			
			
			likeButton.addClass('active');
			
			
			likeButton.attr( { 
				onclick : 'return false;' 
			} );
		} );
	}
	
	
	return false;
}



/* Correct OS & Browser Check */
var ua = navigator.userAgent, 
	checker = { 
		os : { 
			iphone : 		ua.match(/iPhone/), 
			ipod : 			ua.match(/iPod/), 
			ipad : 			ua.match(/iPad/), 
			blackberry : 	ua.match(/BlackBerry/), 
			android : 		ua.match(/(Android|Linux armv6l|Linux armv7l)/), 
			linux : 		ua.match(/Linux/), 
			win : 			ua.match(/Windows/), 
			mac : 			ua.match(/Macintosh/) 
		}, 
		ua : { 
			ie : 		ua.match(/MSIE/), 
			ie6 : 		ua.match(/MSIE 6.0/), 
			ie7 : 		ua.match(/MSIE 7.0/), 
			ie8 : 		ua.match(/MSIE 8.0/), 
			ie9 : 		ua.match(/MSIE 9.0/), 
			ie10 : 		ua.match(/MSIE 10.0/), 
			ie11 : 		ua.match(/MSIE 11.0/), 
			opera : 	ua.match(/Opera/), 
			firefox : 	ua.match(/Firefox/), 
			chrome : 	ua.match(/Chrome/), 
			safari : 	ua.match(/(Safari|BlackBerry)/) 
		} 
	};



/* Correct Image Load Check */
function isImageOk(img) { 
	if (!img.complete) { 
		return false;
	}
	
	
	if (typeof img.naturalWidth !== undefined && img.naturalWidth === 0) { 
		return 'stop';
	}
	
	
	return true;
}



/* Check Whether the Numbers are Approximately Equal */
function checkN(a, b, x) { 
    if ((a > b && a - x <= b) || (b > a && b - x <= a)){
        return true;
    } else {
        return false;
    }
}



/* Uniq ID */
function uniqID() { 
  return Math.round(new Date().getTime() + (Math.random() * 1000000));
}


/* Form Builder Form Animation */
(function($) {
 var elems = $('.cmsmasters-form-builder input, .cmsmasters-form-builder textarea');
   
   
 elems.on('focus', function () { 
    var el = $(this);
    
    
  if (el.is(':not(.area_opened)')) {
   el.parent().parent().addClass('area_opened');
  } 
 } );
   
   
 elems.on('blur', function () { 
  var el = $(this);
     
     
  if (el.val().trim() === '') {
   el.val('');
    
   el.parent().parent().removeClass('area_opened');
  } 
 } );
} )(jQuery);



/* Comment Form Animation */
(function($) {
 var elems = $('.comment-respond input, .comment-respond textarea');
   
   
 elems.on('focus', function () { 
    var el = $(this);
    
    
  if (el.is(':not(.area_opened)')) {
   el.parent().addClass('area_opened');
  } 
 } );
   
   
 elems.on('blur', function () { 
  var el = $(this);
     
     
  if (el.val().trim() === '') {
   el.val('');
    
   el.parent().removeClass('area_opened');
  } 
 } );
} )(jQuery);


/* SignUP Form Animation */
(function($) {
	var elem = $('.cmsmasters_sign_up .wysija-input');

	$('.cmsmasters_sign_up .wysija-paragraph label').click(function() {
		elem.focus();
	});
	
	elem.on('focus', function () { 
		var el = $(this);
		if (el.is(':not(.area_opened)')) {
			el.parent().parent().addClass('area_opened');
		} 
	} );
	
	elem.on('blur', function () { 
		var el = $(this);
	 
		if (el.val().trim() === '') {
			el.val('');
			el.parent().parent().removeClass('area_opened');
		}
	});
} )(jQuery);


/*For iOS links double click*/
(function($) {
   $('a').on('click touchend', function(e) {
      var el = $(this);
      var link = el.attr('href');
      window.location = link;
   });
});