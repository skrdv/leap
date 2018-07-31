<?php if( have_rows('page_repeater') ): ?>
	<?php while( have_rows('page_repeater') ): the_row(); 
		$title = get_sub_field('title');
    	$image = get_sub_field('image');
    	$align = get_sub_field('align');
    	$content = get_sub_field('content');
    	$button = get_sub_field('button');
		$link = get_sub_field('link');
		?>

    <section class="pageSection pageSection-blocks" >
    	<div class="container">

          <div class="pageBlock pageBlock-<?php echo $align; ?>">
            <div class="pageBlock-content">
              <h3 class="pageBlock-title"><?php echo $title; ?></h3>
      				<div class="pageBlock-text"><p><?php echo $content; ?></p></div>
            </div>
            <?php if($image): ?>
            <div class="pageBlock-image">
              <img src="<?php echo $image[sizes][block]; ?>" alt="<?php echo $title; ?>">
            </div>
            <?php endif; ?>
            <div class="pageBlock-footer center">
              <a class="btn btn-primary" href="<?php echo $link; ?>"><?php echo $button; ?></a>
            </div>
          </div>

    	</div>
    </section>

  <?php endwhile; ?>
<?php endif; ?>