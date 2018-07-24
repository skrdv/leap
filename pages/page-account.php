<?php
/**
 * Template Name: Account Dashboard
 */
 ?>

<?php

$user_id = get_current_user_id();

$name = get_field('account_name', 'user_'. $user_id);
$avatar = get_field('account_avatar', 'user_'. $user_id);
$background = get_field('account_background', 'user_'. $user_id);



?>

<?php get_header(); ?>

<section class="accountSection accountSection-hero" style="background-image: url('<?php echo $background; ?>');">
  <div class="container">
    <div class="avatar" style="background-image: url('<?php echo $avatar; ?>');">
      <a href="">Change Avatar</a>
    </div>
    <div class="card">
      <h1 class="card-title">
        <?php echo $name; ?>
      </h1>
      <button class="card-button btn btn-secondary" type="button" name="button">Sign Out</button>
    </div>
  </div>
	<div class="bg-overlay"></div>
</section>

<section class="accountSection accountSection-dashboard">

  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#leapapps">LEAP Apps (2)</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" data-toggle="tab" href="#submitted">Submitted Resources & Stories (6)</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#upvoted">Upvoted Resources & Stories (5)</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#profile">Profile and Settings</a>
    </li>
  </ul>

	<div class="container">

		<div id="myTabContent" class="tab-content">

      <div class="tab-pane fade" id="leapapps">
		    <div class="tab-title">Surveys</div>
        <div class="tab-boxes">
          <div class="item">
            <div class="box is-primary">
    					<div class="box-title">2018 Spring Survey is <br>Available</div>
    					<div class="box-line"></div>
    					<a class="btn btn-secondary" href="#">Launch Survey</a>
    				</div>
          </div>
          <div class="item">
            <div class="box is-dark">
    					<div class="box-title">2017 Fall Survey <br>Results</div>
    					<div class="box-line"></div>
    					<a class="btn btn-secondary" href="#">View Results</a>
    				</div>
          </div>
          <div class="item">
            <div class="box is-dark">
    					<div class="box-title">2017 Spring Survey <br>Results</div>
    					<div class="box-line"></div>
    					<a class="btn btn-secondary" href="#">View Results</a>
    				</div>
          </div>
        </div>
        <div class="tab-title">Other Apps</div>
        <div class="tab-boxes">
          <div class="item">
            <div class="box is-primary">
              <div class="box-title">Canvas <br>(geof@school.edu)</div>
              <div class="box-line"></div>
              <a class="btn btn-secondary" href="#">Launch Canvas</a>
            </div>
          </div>
        </div>
		  </div>

		  <div class="tab-pane active" id="submitted">
        <div class="tab-title">Submitted Resources</div>
        <div class="tab-boxes">
          <div class="item">
            <div class="box is-dark">
    					<div class="box-title">July 19, 2018 <br>Resource</div>
    					<div class="box-line"></div>
    					<a class="btn btn-secondary" href="#">View Submission</a>
    				</div>
          </div>
          <div class="item">
            <div class="box is-dark">
    					<div class="box-title">July 7, 2018 <br>Resource</div>
    					<div class="box-line"></div>
    					<a class="btn btn-secondary" href="#">View Submission</a>
    				</div>
          </div>
          <div class="item">
            <div class="box is-dark">
    					<div class="box-title">July 1, 2018 <br>Story</div>
    					<div class="box-line"></div>
    					<a class="btn btn-secondary" href="#">View Submission</a>
    				</div>
          </div>
          <div class="item">
            <div class="box is-dark">
    					<div class="box-title">July 1, 2018 <br>Story</div>
    					<div class="box-line"></div>
    					<a class="btn btn-secondary" href="#">View Submission</a>
    				</div>
          </div>
          <div class="item">
            <div class="box is-dark">
    					<div class="box-title">July 1, 2018 <br>Story</div>
    					<div class="box-line"></div>
    					<a class="btn btn-secondary" href="#">View Submission</a>
    				</div>
          </div>
        </div>
        <div class="card card-none">
          <div class="card-title">
            Lorem ipsum dolor sit amet consectetur adipiscing!
          </div>
          <div class="card-content">
            Curabitur sed rhoncus leo. Nulla eleifend augue massa, nec interdum felis sodales ac. Cras eu nulla eleifend purus.
          </div>
          <div class="card-button">
            <a class="btn btn-secondary" href="#">Share Your Resource or Story</a>
          </div>
        </div>
      </div>

		  <div class="tab-pane fade" id="upvoted">
        <?php
					$query = new WP_Query(array(
						'author'    => $user_id,
						'post_type' => array('resource')
					));
					while ( $query->have_posts() ): $query->the_post();
						get_template_part('parts/resource','card');
					endwhile;
					wp_reset_postdata();
				?>
		  </div>

		  <div class="tab-pane fade" id="profile">
		    <div class="tab-title">Personal Info</div>

        <form class="" action="#" method="post">
          <div class="form-group">
            <label for="accountName" class="col-form-label">Your Name*</label>
            <input type="text" class="form-control" id="accountName">
          </div>
          <div class="form-group">
            <label for="accountOrganization" class="col-form-label">Your Organization*</label>
            <input type="text" class="form-control" id="accountOrganization">
          </div>
          <div class="form-group">
            <label for="accountRole" class="col-form-label">Your Role*</label>
            <select class="form-control" id="accountRole">
			        <option selected="">Teacher</option>
			        <option value="1">One</option>
			        <option value="2">Two</option>
			        <option value="3">Three</option>
			      </select>
          <div class="form-group">
            <label for="accountEmail" class="col-form-label">Your Email Address*</label>
            <input type="text" class="form-control" id="accountEmail">
          </div>
          <div class="form-group">
            <label for="accountPassword" class="col-form-label">Password</label>
            <button type="button" class="form-control" id="accountPassword">Change Password</button>
          </div>
        </form>

        <div class="tab-title">Notification Preferences</div>


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
