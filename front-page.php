<?php get_header(); ?>

<?php $query = new WP_Query( array(
	'post_type' => array('resource')
) ); ?>

<?php
while ( $query->have_posts() ): $query->the_post();
	$resource_format = get_field_object('resource_format');
	$resource_category = get_field_object('resource_category');
endwhile;

?>


<div class="resourcesFilter" id="resources-filters" style="background: #eee; padding: 10px;">
	<div class="container">

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

	</div>
</div>

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


<div  style="background: #eee; padding: 10px; margin-bottom: 30px;">
	<div class="container">

	</div>
</div>


<section class="resourcesGrid" id="response">
	<div class="container">
		<div class="row is__flex">
		<?php while ( $query->have_posts() ): $query->the_post(); ?>
			<?php get_template_part('parts/resource','card'); ?>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
		</div><!-- row -->
	</div><!-- container -->
</section>

<?php get_footer(); ?>
