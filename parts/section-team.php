<section class="pageSection pageSection-team <?php if (!is_front_page()) { echo 'border'; } ?>">
	<div class="container">	
		<?php if (get_field('founder_quote')): ?>
		<div class="row">
			<div class="col-sm-12">
				<div class="blockCompany-quote">
					<?php the_field('founder_quote'); ?>
				</div><!-- quote -->	
			</div><!-- col-sm -->	
		</div><!-- row -->	
		<?php endif; ?>
		
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<?php if ((get_field('team_from_page')) AND (get_field('team_copy'))): ?>
					<?php $page_id = get_field('team_copy'); ?>
				<?php else: ?>
					<?php $page_id = $post->ID; ?>
				<?php endif; ?>
				
				<?php $founder = get_field('founder_photo',$page_id); ?>
				<?php $founder = $founder[sizes][medium]; ?>
				<?php $team = get_field('team_photo',$page_id); ?>
				<?php $team = $team[sizes][large]; ?>

				<div class="blockCompany">
					<div class="blockCompany-founder">
						<div class="blockCompany-founder-photo" style="background-image:url(<?php echo  $founder; ?>);"></div>
						<h3 class="blockCompany-founder-name"><?php the_field('founder_title',$page_id); ?></h3>
						<h4 class="blockCompany-founder-position"><?php the_field('founder_text',$page_id); ?></h4>
					</div>
					<div class="blockCompany-team"  style="background-image:url(<?php echo  $team; ?>);"></div>
					<?php if ( get_field('team_button',$page_id)): ?>
						<a class="blockCompany-button" href="<?php the_field('team_link',$page_id); ?>"><?php the_field('team_button',$page_id); ?></a>
					<?php endif; ?>
				</div><!-- blockCompany -->	
			</div>		
		</div><!-- row -->
	</div><!-- container -->
</section><!-- pageSection -->