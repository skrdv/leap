<?php //Template Name: Page Resources ?>

<?php
global $post;
?>



<?php get_header(); ?>

<section class="resourcesSesction resourcesSesction-hero" style="background-image: url('<?php echo get_the_post_thumbnail_url($post->ID); ?>');">
  <div class="container">

    <div class="card">
      <h1 class="card-title"><?php the_title(); ?></h1>
    </div>

  </div>
	<div class="bg-overlay"></div>
</section>

<section class="resourcesSesction resourcesSesction-filter" id="resources-filters">
	<div class="container">

		<div class="row">
			<div class="col-md-12">
				<div class="text">

					Our tools and resources are designed to embody the LEAP Learning Framework. Mix-and-match resources to create a personalized learning toolkit for the classroom or share your own innovations with the LEAP community.
				</div>
			</div>
			<div class="col-md-4">
				<div class="title">Categories</div>
				<div class="form-group">
					 <input type="checkbox" name="fancy-checkbox-connected" id="fancy-checkbox-connected" autocomplete="off" />
					 <div class="btn-group btn-group-connected">
							 <label for="fancy-checkbox-connected" class="btn btn-connected">
									 <span class="fa fa-check"></span>
									 <span> </span>
							 </label>
							 <label for="fancy-checkbox-connected" class="btn btn-default active">
								 Learner Connected
							 </label>
					 </div>
			 </div>
				<div class="form-group">
					 <input type="checkbox" name="fancy-checkbox-focused" id="fancy-checkbox-focused" autocomplete="off" />
					 <div class="btn-group btn-group-focused">
							 <label for="fancy-checkbox-focused" class="btn btn-focused">
									 <span class="fa fa-check"></span>
									 <span> </span>
							 </label>
							 <label for="fancy-checkbox-focused" class="btn btn-default active">
								 Learner Focused
							 </label>
					 </div>
			 </div>
				<div class="form-group">
					 <input type="checkbox" name="fancy-checkbox-led" id="fancy-checkbox-led" autocomplete="off" />
					 <div class="btn-group btn-group-led">
							 <label for="fancy-checkbox-led" class="btn btn-led">
									 <span class="fa fa-check"></span>
									 <span> </span>
							 </label>
							 <label for="fancy-checkbox-led" class="btn btn-default active">
								 Learner Led
							 </label>
					 </div>
			 </div>
				<div class="form-group">
					 <input type="checkbox" name="fancy-checkbox-demonstrated" id="fancy-checkbox-demonstrated" autocomplete="off" />
					 <div class="btn-group btn-group-demonstrated">
							 <label for="fancy-checkbox-demonstrated" class="btn btn-demonstrated">
									 <span class="fa fa-check"></span>
									 <span> </span>
							 </label>
							 <label for="fancy-checkbox-demonstrated" class="btn btn-default active">
								 Learner Demonstrated
							 </label>
					 </div>
			 </div>

			</div>
			<div class="col-md-4">
				<div class="title">Filter & Sort</div>
				<div class="form-group">
			    <select class="form-control custom-select">
			      <option selected="">All Grade Levels</option>
			      <option value="1">One</option>
			      <option value="2">Two</option>
			      <option value="3">Three</option>
			    </select>
			    <select class="form-control custom-select">
			      <option selected="">All Subjects</option>
			      <option value="1">One</option>
			      <option value="2">Two</option>
			      <option value="3">Three</option>
			    </select>
			    <select class="form-control custom-select">
			      <option selected="">All Content Types</option>
			      <option value="1">One</option>
			      <option value="2">Two</option>
			      <option value="3">Three</option>
			    </select>
			    <select class="form-control custom-select">
			      <option selected="">Sort: Newest to Oldest</option>
			      <option value="1">One</option>
			      <option value="2">Two</option>
			      <option value="3">Three</option>
			    </select>
			  </div>
			</div>
			<div class="col-md-4">
				<div class="title">Collaborate</div>
				<div class="card card-collaborate bg-primary">
					<div class="card-title">Great teaching<br> is powerful.</div>
					<div class="card-line"></div>
					<a class="btn btn-secondary" href="/share-a-resource-or-story/">Share a Resource</a>
				</div>
			</div>
		</div>

		<?php /*
		<form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">

			<?php  if($resource_format): ?>
				<select name="resource_format">
					<option value="">Format</option>
					<?php foreach( $resource_format['choices'] as $key => $value ) {
							echo '<option value="' . $key . '">' . $value . '</option>';
					} ?>
				</select>
			<?php endif; 	?>

			<?php if($resource_category): ?>
				<select name="resource_category">
					<option value="">Category</option>
					<?php foreach( $resource_category['choices'] as $key => $value ) {
									echo '<option value="' . $key . '">' . $value . '</option>';
					} ?>
				</select>
			<?php endif;	?>

			<label>
				<input type="radio" name="date" value="ASC" /> ASC
			</label>
			<label>
				<input type="radio" name="date" value="DESC" selected="selected" /> DESC
			</label>
			<button>Apply filter</button>
			<input type="hidden" name="action" value="myfilter">
		</form>
		*/ ?>

	</div>
</section>

<script type="text/javascript">
jQuery(function($){
	$('#filter').submit(function(){
		var filter = $('#filter');
		$.ajax({
			url:filter.attr('action'),
			data:filter.serialize(),
			type:filter.attr('method'),
			beforeSend:function(xhr){
				filter.find('button').text('Processing...');
			},
			success:function(data){
				filter.find('button').text('Apply filter');
				$('#response .container .row.is__flex').html(data);
			}
		});
		return false;
	});
});
</script>

<?php
$query = new WP_Query( array(
	'post_type' => array('resource')
) );

while ( $query->have_posts() ): $query->the_post();
	$resource_format = get_field_object('resource_format');
	$resource_category = get_field_object('resource_category');
endwhile;
?>

<section class="resourcesGrid" id="response">

		<?php while ( $query->have_posts() ): $query->the_post(); ?>
			<?php get_template_part('parts/resource','card'); ?>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>

</section>

<?php get_footer(); ?>
