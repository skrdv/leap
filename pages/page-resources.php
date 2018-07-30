<?php
/**
 * Template Name: Page Resources
 */
?>

<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;

$args = array(
	'post_type'      => array('resource'),
	'posts_per_page' => '10',
  'orderby'        => 'date',
	'order'          => 'DESC',
);

$query = new WP_Query( $args );

if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
    $categories = get_field_object('resource_category');
	}
}

wp_reset_postdata();
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
          <?php foreach ($categories['choices'] as $key => $value) { ?>
            <div class="form-group">
              <input type="checkbox" name="resource_category[]" value="<?php echo $key; ?>" id="resource-category-<?php echo $key; ?>" />
              <div class="btn-group btn-group-<?php echo $key; ?>">
                <label for="resource-category-<?php echo $key; ?>" class="btn btn-<?php echo $key; ?>">
                  <span class="fa fa-check"></span><span> </span>
                </label>
                <label for="resource-category-<?php echo $key; ?>" class="btn btn-default active"><?php echo $value; ?></label>
              </div>
            </div>
          <?php } ?>
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
            <option value="DESC">Newest to Oldest</option>
            <option value="ASC">Oldest to Newest</option>
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

<section class="resourceSection resourceSection-cards" id="response">

		<?php while ( $query->have_posts() ): $query->the_post(); ?>
			<?php get_template_part('parts/resource','card'); ?>
		<?php endwhile; ?>
    <?php wp_reset_postdata(); ?>

</section>

<section class="resourceSection resourceSection-pagination">
  <?php
  // $big = 999999999;
  // echo paginate_links( array(
  //     'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
  //     'format' => '?paged=%#%',
  //     'current' => max( 1, get_query_var('paged') ),
  //     'total' => $query->max_num_pages
  // ) );
  ?>
</section>

<?php get_footer(); ?>
