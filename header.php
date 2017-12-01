<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Keen Magazine</title>
        <meta name="description" content="Black and White Photos">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <link rel="shortcut icon" href="/wp-content/themes/keenmagazine/favicon.ico" type="image/x-icon">
		<link href="https://fonts.googleapis.com/css?family=Arbutus+Slab|Roboto:400,700" rel="stylesheet">
		<?php wp_head(); ?>
		
	</head>
	
	<?php 
		
		if( is_front_page() ):
			$site_classes = array( 'site-class', 'my-class' );
		else:
			$site_classes = array( 'no-site-class' );
		endif;
		
	?>
	
	<body <?php body_class( $site_classes ); ?>>
		
		
		
		
          <?php 
				wp_nav_menu(array(
					'theme_location' => 'primary',
					'container' => false,
					'menu_class' => 'main_menu',
					'walker' => new Walker_Nav_primary()
					)
				);
			?>	
		
			
          <!-- <?php 
				wp_nav_menu(array(
					'theme_location' => 'primary',
					'container' => false,
					'menu_class' => 'mob_menu',
					'walker' => new Walker_Nav_primary()
					)
				);
			?>			            -->
				    
		</div>
	
