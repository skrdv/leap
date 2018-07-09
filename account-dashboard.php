<?php
/**
 * Template Name: Account Dashboard
 */
get_header(); ?>

<section class="admin admin-dashboard">
	<div class="container">

		<ul class="nav nav-tabs">
		  <li class="nav-item">
		    <a class="nav-link active" data-toggle="tab" href="#dashboard">Dashboard</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" data-toggle="tab" href="#canvas">Canvas</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" data-toggle="tab" href="#dataportal">Data Portal</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" data-toggle="tab" href="#edtechdata">EdTech Data</a>
		  </li>
		</ul>

		<div id="myTabContent" class="tab-content">
		  <div class="tab-pane active" id="dashboard">
				<h3>Your Recent Resources: </h3>
				<?php
					$query = new WP_Query(array(
						'author'    => get_current_user_id(),
						'post_type' => array('resource')
					));
					while ( $query->have_posts() ): $query->the_post();
						get_template_part('parts/resource','card');
					endwhile;
					wp_reset_postdata();
				?>
		  </div>
		  <div class="tab-pane fade" id="canvas">
		    <h3>Canvas</h3>
		  </div>
		  <div class="tab-pane fade" id="dataportal">
		    <h3>Data Portal</h3>
		  </div>
		  <div class="tab-pane fade" id="edtechdata">
		    <h3>EdTech Data</h3>
		  </div>
		</div>

	</div>
</section>


<?php /*
<section class="resourcesGrid" id="response">
	<div class="container">
		<div class="row is__flex">
			<?php
				$query = new WP_Query( array(
					'post_type' => array('resource')
				));
				while ( $query->have_posts() ): $query->the_post();
					get_template_part('parts/resource','card');
				endwhile;
				wp_reset_postdata();
			?>
		</div><!-- row -->
	</div><!-- container -->
</section>
*/ ?>

<?php get_footer(); ?>
