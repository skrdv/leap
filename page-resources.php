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

<?php
// global $post;

$id   = intval($_GET['cat']);
$paged     = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

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

		<div class="row">
			<div class="col-md-12">
				<div class="text">
					<?php the_field('filter_description'); ?>
				</div>
			</div>
			<div class="col-md-4">
				<div class="title">
          <?php the_field('filter_title_1'); ?>
        </div>
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
				<div class="title">
          <?php the_field('filter_title_2'); ?>
        </div>
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
			    <select name="date" class="form-control custom-select">
			      <option selected="">Sort: Newest to Oldest</option>
			      <option value="ASC">Newest to Oldest</option>
			      <option value="DESC">Oldest to Newest</option>
			    </select>
			  </div>
			</div>
			<div class="col-md-4">
				<div class="title">
          <?php the_field('filter_title_3'); ?>
        </div>
				<div class="card card-collaborate bg-primary">
					<div class="card-title">
            <?php the_field('collaborate_text'); ?>
          </div>
					<div class="card-line"></div>
					<a class="btn btn-secondary" href="/share-a-resource-or-story/">Share a Resource</a>
				</div>
			</div>
		</div>

	</div>
</section>

<?php // if(is_user_logged_in()): ?>

  <div class="container">
    <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">

      <?php if($resourceCat): ?>
        <select name="resource_category"  class="form-control custom-select">
          <option value="">Category</option>
          <?php foreach( $resourceCat['choices'] as $key => $value ) {
                  echo '<option value="' . $key . '">' . $value . '</option>';
          } ?>
        </select>
      <?php endif;	?>

      <select name="date" class="form-control custom-select">
        <option selected="">Sort: Newest to Oldest</option>
        <option value="ASC">Newest to Oldest</option>
        <option value="DESC">Oldest to Newest</option>
      </select>

      <?php /*
      <label>
        <input type="radio" name="resource_category" value="connected" /> CONNECTED
      </label>
      <label>
        <input type="radio" name="resource_category" value="focused" /> FOCUSED
      </label>
      <label>
        <input type="radio" name="resource_category" value="led" /> LED
      </label>
      <label>
        <input type="radio" name="resource_category" value="demonstrated" /> DEMONSTRATED
      </label>
      <br>
      */ ?>

      <button class="btn btn-primary">Apply</button>
      <input type="hidden" name="action" value="myfilter">
    </form>
  </div>

<?php // endif; ?>


<script type="text/javascript">
jQuery(function($){

  $('#filter input').on('change', function(){
    console.log('input');

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
