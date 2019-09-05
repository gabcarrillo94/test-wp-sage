<header class="banner">
	<nav class="navbar navbar-expand-lg navbar-dark bg-light bg-dark">
	  <a class="navbar-brand" href="<?php echo e(home_url('/')); ?>"><?php echo e(get_bloginfo('name', 'display')); ?></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <?php if(has_nav_menu('primary_navigation')): ?>
        	<?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']); ?>

      	<?php endif; ?>
	  </div>
	</nav>
</header>
