<?php
/**
 * Template Name: Resources List
 */
?>

<?php
global $wp_query;

$desc 		= get_field('filter_description');
$title1 	= get_field('filter_title_1');
$title2 	= get_field('filter_title_2');
$title3 	= get_field('filter_title_3');
$collab		= get_field('collaborate_text');
$poster   = get_the_post_thumbnail_url($post->ID, 'poster');


$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array(
	'post_type'      	=> array('resource'),
	'posts_per_page' 	=> '5',
	'paged' 					=> $paged,
  'orderby'        	=> 'date',
	'order'          	=> 'DESC',
);

$wp_query = new WP_Query( $args );

if ( $wp_query->have_posts() ) {
	while ( $wp_query->have_posts() ) {
		$wp_query->the_post();
    $categories = get_field_object('resource_category');
	}
}

wp_reset_postdata();
?>

<?php get_header(); ?>

<section class="resourceSection resourceSection-hero" style="background-image: url('<?php echo $poster; ?>');">
  <div class="container">
    <div class="card">
      <h1 class="card-title">
				<?php the_title(); ?>
			</h1>
    </div>
  </div>
	<div class="bg-overlay"></div>
</section>

<section class="resourceSection resourceSection-filter" id="resources-filters">
  <div class="container">
    <div class="filter-text">
      <?php echo $desc; ?>
    </div>
    <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
      <div class="flex-grid">
        <div class="flex-col-33">
          <div class="filter-title">
            <?php echo $title1; ?>
          </div>
          <?php foreach ($categories['choices'] as $key => $value) { ?>
            <div class="form-group">
              <input type="checkbox" name="resource_category[]" value="<?php echo $key; ?>" id="resource-category-<?php echo $key; ?>" />
              <div class="button-group button-group-<?php echo $key; ?>">
                <label for="resource-category-<?php echo $key; ?>" class="button button-<?php echo $key; ?>">
									<span>
										<img src="<?php echo THEME_URI.'/includes/icons/icon-ok.svg'; ?>" alt="">
									</span>
									<span> </span>
                </label>
                <label for="resource-category-<?php echo $key; ?>" class="button button-default"><?php echo $value; ?></label>
              </div>
            </div>
          <?php } ?>
        </div>
        <div class="flex-col-33">
          <div class="filter-title">
            <?php echo $title2; ?>
          </div>
          <select class="form-control filter-select" disabled>
			      <option selected="">All Grade Levels</option>
			    </select>
			    <select class="form-control filter-select" disabled>
			      <option selected="">All Subjects</option>
			    </select>
			    <select class="form-control filter-select" disabled>
			      <option selected="">All Content Types</option>
			    </select>
          <select class="form-control filter-select" name="date">
            <option value="DESC">Newest to Oldest</option>
            <option value="ASC">Oldest to Newest</option>
          </select>
        </div>
        <div class="flex-col-33">
          <div class="filter-title">
            <?php echo $title3; ?>
          </div>
          <div class="box is-primary">
  					<div class="box-title">
							<?php echo $collab; ?>
            </div>
  					<div class="box-line"></div>
  					<a class="button button-secondary" href="/share-a-resource-or-story/">Share a Resource</a>
  				</div>
        </div>
      </div>
      <button class="button button-primary is-off">Apply</button>
      <input type="hidden" name="action" value="myfilter">
    </form>
  </div>
</section>

<?php if( $wp_query->have_posts() ): ?>
	<section class="resourceSection resourceSection-cards" id="response">
	<?php while ( $wp_query->have_posts() ): ?>
		<?php $wp_query->the_post(); ?>
		<?php get_template_part('parts/resource','card'); ?>
	<?php endwhile; ?>
	</section>
	<?php wp_reset_postdata(); ?>
	<?php previous_posts_link(); ?>
	<?php next_posts_link(); ?>
<?php endif; ?>

<script type="text/javascript">
(function($){

	// Submit form on input change
	$('form input').change(function() {
		$(this).closest('form').submit();
	});

	// Submit form on select change
	$('form select').change(function() {
		$(this).closest('form').submit();
	});

	// AJAX Filter Form Submit
	$('#filter').submit(function(){
		var filter = $('#filter');
		$.ajax({
			url:filter.attr('action'),
			data:filter.serialize(),
			type:filter.attr('method'),
			beforeSend:function(xhr){},
			success:function(data){
				$('#response').html(data);
			}
		});
		return false;
	});

})(jQuery);
</script>

<?php get_footer(); ?>
