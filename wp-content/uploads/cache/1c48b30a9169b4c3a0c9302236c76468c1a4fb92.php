<?php $__env->startSection('content'); ?>
	<div class="container">
		<?php 
			$args = array('post_type' => 'product','posts_per_page'=>'10');
			$loop = new WP_Query($args);
		?>
		<?php while($loop->have_posts()): ?> <?php ($loop->the_post()); ?>
			<div class="row">
				<div class="col-md-12">
					<h2 class="mt-2 mb-2">
						<a href="<?php echo e(get_permalink()); ?>"><?php echo get_the_title(); ?></a>
					</h2>
					<p><?php echo get_the_excerpt(); ?></p>
				</div>
			</div>
		<?php endwhile; ?>
	</div>
	
<?php $__env->stopSection(); ?>
	
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>