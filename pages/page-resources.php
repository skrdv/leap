<?php
/**
 * Template Name: Page Resources
 */
?>

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

<?php
// global $post;
$id    = intval($_GET['cat']);
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

// WP_Query arguments
$args = array(
	'post_type'              => array('resource'),
	'posts_per_page'         => '4',
	'order'                  => 'DESC',
	'orderby'                => 'date',
  'paged'                  => $paged
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
    $resourceCat = get_field_object('resource_category');
	}
}

// Restore Post Data
wp_reset_postdata();
?>

<section class="resourcesSesction resourcesSesction-filter" id="resources-filters">
  <div class="container">
    <div class="filter-text">
      <?php the_field('filter_description'); ?>
    </div>
    <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
      <div class="flex-grid">
        <div class="flex-col-33">
          <div class="filter-title">
            <?php the_field('filter_title_1'); ?>
          </div>
          <div class="form-group">
            <input type="radio" name="resource_category" value="connected" id="resource-category-connected" />
            <div class="btn-group btn-group-connected">
              <label for="resource-category-connected" class="btn btn-connected">
                <span class="fa fa-check"></span><span> </span>
              </label>
              <label for="resource-category-connected" class="btn btn-default active">Learner Connected</label>
            </div>
          </div>
          <div class="form-group">
            <input type="radio" name="resource_category" value="focused" id="resource-category-focused" />
            <div class="btn-group btn-group-focused">
              <label for="resource-category-focused" class="btn btn-focused">
                <span class="fa fa-check"></span><span> </span>
              </label>
              <label for="resource-category-focused" class="btn btn-default active">Learner Focused</label>
            </div>
          </div>
          <div class="form-group">
            <input type="radio" name="resource_category" value="led" id="resource-category-led" />
            <div class="btn-group btn-group-led">
              <label for="resource-category-led" class="btn btn-led">
                <span class="fa fa-check"></span><span> </span>
              </label>
              <label for="resource-category-led" class="btn btn-default active">Learner Led</label>
            </div>
          </div>
          <div class="form-group">
            <input type="radio" name="resource_category" value="demonstrated" id="resource-category-demonstrated" />
            <div class="btn-group btn-group-demonstrated">
              <label for="resource-category-demonstrated" class="btn btn-demonstrated">
                <span class="fa fa-check"></span><span> </span>
              </label>
              <label for="resource-category-demonstrated" class="btn btn-default active">Learner Connected</label>
            </div>
          </div>
        </div>
        <div class="flex-col-33">
          <div class="filter-title">
            <?php the_field('filter_title_2'); ?>
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
            <option value="ASC">Newest to Oldest</option>
            <option value="DESC">Oldest to Newest</option>
          </select>
        </div>
        <div class="flex-col-33">
          <div class="filter-title">
            <?php the_field('filter_title_3'); ?>
          </div>
          <div class="box is-primary">
  					<div class="box-title">
              <?php the_field('collaborate_text'); ?>
            </div>
  					<div class="box-line"></div>
  					<a class="btn btn-secondary" href="/share-a-resource-or-story/">Share a Resource</a>
  				</div>
        </div>
      </div>
      <button class="btn btn-primary is-off">Apply</button>
      <input type="hidden" name="action" value="myfilter">
    </form>
  </div>
</section>


<script type="text/javascript">
jQuery(function($){

  $('form input').change(function() {
    $(this).closest('form').submit();
    console.log('submit on input change');
  });

  $('form select').change(function() {
    $(this).closest('form').submit();
    console.log('submit on select change');
  });

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
        $('#response').html(data);
      }
    });
    return false;
  });



});
</script>

<section class="resourcesGrid" id="response">

		<?php while ( $query->have_posts() ): $query->the_post(); ?>
			<?php get_template_part('parts/resource','card'); ?>
		<?php endwhile; ?>


    <div class="pagination">
      <ul class="pagination pull-right">
       <li><?php echo get_next_posts_link( 'Next Page', $products->max_num_pages ); ?></li>
       <li><?php echo get_previous_posts_link( 'Previous Page' ); ?></li>
      </ul>
    </div>

    <?php wp_reset_postdata(); ?>

</section>

<?php get_footer(); ?>
