		<?php

			$args = array(
			'category_name' => 'slider',
			'posts_per_page' => -1
			);

			$custom_query = new WP_Query($args);
			if($custom_query->have_posts()) {
				while($custom_query->have_posts()){ $custom_query->the_post();
		?>

		<?php } } 
		wp_reset_postdata(); ?>