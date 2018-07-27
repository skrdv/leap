<?php
/**
 * Template Name: Page Resources
 */
?>

<?php get_header(); ?>

<section class="resourceSection resourceSection-hero" style="background-image: url('<?php echo get_the_post_thumbnail_url($post->ID); ?>');">
  <div class="container">
    <div class="card">
      <h1 class="card-title"><?php the_title(); ?></h1>
    </div>
  </div>
	<div class="bg-overlay"></div>
</section>

<?php
// global $post;

$paged = get_query_var('paged') ? get_query_var('paged') : 1;

$args = array(
	'post_type'      => array('resource'),
	'posts_per_page' => '5',
	'order'          => 'DESC',
  'paged'           => $paged,
);

$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
    $resourceCat = get_field_object('resource_category');
	}
}

wp_reset_postdata();
?>

<section class="resourceSection resourceSection-filter" id="resources-filters">
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
// jQuery(function($){
//
//   $('form input').change(function() {
//     $(this).closest('form').submit();
//     console.log('submit on input change');
//   });
//
//   $('form select').change(function() {
//     $(this).closest('form').submit();
//     console.log('submit on select change');
//   });
//
//   $('#filter').submit(function(){
//     var filter = $('#filter');
//     $.ajax({
//       url:filter.attr('action'),
//       data:filter.serialize(),
//       type:filter.attr('method'),
//       beforeSend:function(xhr){
//         filter.find('button').text('Processing...');
//       },
//       success:function(data){
//         filter.find('button').text('Apply filter');
//         $('#response').html(data);
//       }
//     });
//     return false;
//   });
//
// });
</script>

<section class="resourceSection resourceSection-cards" id="response">

		<?php while ( $the_query->have_posts() ): $the_query->the_post(); ?>
			<?php get_template_part('parts/resource','card'); ?>
		<?php endwhile; ?>
    <?php wp_reset_postdata(); ?>

</section>

<section class="resourceSection resourceSection-pagination">
  <?php
  $big = 999999999;
  echo paginate_links( array(
      'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
      'format' => '?paged=%#%',
      'current' => max( 1, get_query_var('paged') ),
      'total' => $the_query->max_num_pages
  ) );
  ?>
</section>

<?php get_footer(); ?>
