// jQuery CountTo

if(jQuery().waypoint) {
	jQuery('.counter_wrapper').waypoint(function() {
		jQuery(this).find('.count_data').each(function() {
			var count_from = jQuery(this).data('count-from'),
			count_to = jQuery(this).data('count-to'),
			count_speed = jQuery(this).data('count-speed'),
			count_interval = jQuery(this).data('count-interval'),
			count_decimals = jQuery(this).data('count-decimals');
			
			jQuery(this).countTo({
				from: count_from, 
				to: count_to, 
				refreshInterval: count_interval, 
				speed: count_speed,
				decimals: count_decimals
			});
		});
	}, {
		triggerOnce: true,
		offset: 'bottom-in-view'
	});
}