<?php
/**
 * Template Name: What We Do
 */
?>

<?php
$title    = get_field('page_title');
$poster   = get_field('page_poster');
$photo    = get_field('page_photo');
$content  = get_field('page_content');
$secTitle  = get_field('section_title');
?>

<?php get_header(); ?>

<section class="heroBanner" style="background-image: url(<?php echo $poster[sizes][large]; ?>);">
	<div class="heroBanner-shadow">
		<div class="container">
			<h1 class="heroBanner-title"><?php echo $title; ?></h1>
		</div>
	</div>
</section>

<section class="pageSection pageSection-1">
	<div class="leap-stripe"></div>
	<div class="container">
		<h2 class="pageSection-quote"><?php echo $content; ?></h2>
	</div>
</section>

<section class="pageSection pageSection-2">
	<div class="container">
		<div class="pageSection-photo" style="background-image: url(<?php echo $photo[sizes][large]; ?>);"></div>
	</div>
</section>

<?php if( have_rows('section_blocks') ): ?>
	<?php while( have_rows('section_blocks') ): the_row();
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
            <div class="pageBlock-footer">
              <a class="btn btn-primary" href="<?php echo $link; ?>"><?php echo $button; ?></a>
            </div>
          </div>

    	</div>
    </section>

  <?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('section_cards') ): ?>
	<div class="pageSection-title"><?php echo $secTitle; ?></div>
	<section class="pageSection pageSection-cards" >
		<div class="container">
	<?php while( have_rows('section_cards') ): the_row();
    $image = get_sub_field('image');
		$text = get_sub_field('text');
		$button = get_sub_field('button');
		$link = get_sub_field('link');
		?>

          <div class="pageCard">
						<div class="pageCard-image">
              <img src="<?php echo $image[sizes][card]; ?>" alt="<?php echo $title; ?>">
            </div>
            <div class="pageCard-content">
              <h3 class="pageCard-text"><?php echo $text; ?></h3>
      				<a class="pageCard-button" href="<?php echo $link; ?>"><?php echo $button; ?></a>
            </div>
          </div>

  <?php endwhile; ?>
		</div>
	</section>
<?php endif; ?>

<?php get_footer(); ?>
