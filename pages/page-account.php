<?php
/**
 * Template Name: Account Dashboard
 */
?>

<?php

// User Data
$current_user 			= wp_get_current_user();
$user_id            = get_current_user_id();
$user               = get_userdata($user_id);
$user_login         = $user->user_login;
$user_pass          = $user->user_pass;
$user_email         = $user->user_email;
$user_url           = $user->user_url;
$user_registered    = $user->user_registered;
$user_status        = $user->user_status;
$user_nicename      = $user->user_nicename;
$display_name       = $user->display_name;

// User ACF Fiels
$account_name       = get_field('account_fullname', 'user_'. $user_id);
$account_pic        = get_field('account_userpic', 'user_'. $user_id);
$account_bg         = get_field('account_userbg', 'user_'. $user_id);
$account_org        = get_field('account_organisation', 'user_'. $user_id);
?>

<?php get_header(); ?>

<section class="accountSection accountSection-hero" style="background-image: url('<?php echo $account_bg; ?>');">
  <div class="container">
    <div class="avatar" style="background-image: url('<?php echo $account_pic; ?>');">
      <a href="">Change Avatar</a>
    </div>
    <div class="card">
      <h1 class="card-title">
        <?php echo $account_name; ?>
      </h1>
      <a class="card-button btn btn-secondary" href="<?php echo wp_logout_url( home_url() ); ?>">Sign Out</a>
    </div>
  </div>
	<div class="bg-overlay"></div>
</section>

<section class="accountSection accountSection-dashboard">

  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#leapapps">LEAP Apps (2)</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#submitted">Submitted Resources & Stories (6)</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#upvoted">Upvoted Resources & Stories (5)</a>
    </li>
    <li class="nav-item active">
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

		  <div class="tab-pane fade" id="submitted">
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

		  <div class="tab-pane active" id="profile">

        <form class="form form-profile" action="#" method="post">

          <div class="form-title">Personal Info</div>
          <div class="form-group">
            <label class="form-label" for="accountName">Your Name*</label>
            <input class="form-control" type="text" id="accountName" value="Name">
          </div>
          <div class="form-group">
            <label class="form-label" for="accountOrganization">Your Organization*</label>
            <input class="form-control" type="text" id="accountOrganization" value="<?php echo $account_org; ?>">
          </div>
          <div class="form-group">
            <label class="form-label" for="accountRole">Your Role*</label>
            <select class="form-control" id="accountRole">
			        <option selected="">Teacher</option>
			        <option value="1">One</option>
			        <option value="2">Two</option>
			        <option value="3">Three</option>
			      </select>
          </div>
          <div class="form-group">
            <label class="form-label" for="accountEmail">Your Email Address*</label>
            <input class="form-control" type="text" id="accountEmail" value="<?php echo $user_email; ?>">
          </div>
          <div class="form-group">
            <label class="form-label" for="accountPassword">Password</label>
            <button class="btn btn-secondary" type="button" id="accountPassword">Change Password</button>
          </div>

          <div class="form-title">Notification Preferences</div>
          <div class="form-group">
            <label class="form-label" for="fancy-checkbox-connected">Montly Newsletter</label>
  					 <input type="checkbox" name="fancy-checkbox-connected" id="fancy-checkbox-connected" autocomplete="off" />
  					 <div class="btn-group btn-group-connected">
  							 <label for="fancy-checkbox-connected" class="btn btn-connected">
  									 <span class="fa fa-check"></span>
  									 <span> </span>
  							 </label>
  							 <label for="fancy-checkbox-connected" class="btn btn-default active">Email Me</label>
  					 </div>
  			 </div>
          <div class="form-group">
            <label class="form-label" for="fancy-checkbox-connected">Submission Status Changes</label>
  					 <input type="checkbox" name="fancy-checkbox-connected" id="fancy-checkbox-connected" autocomplete="off" />
  					 <div class="btn-group btn-group-connected">
  							 <label for="fancy-checkbox-connected" class="btn btn-connected">
  									 <span class="fa fa-check"></span>
  									 <span> </span>
  							 </label>
  							 <label for="fancy-checkbox-connected" class="btn btn-default active">Email Me</label>
  					 </div>
  			 </div>
          <div class="form-group">
            <label class="form-label" for="fancy-checkbox-connected">New Survey Is Available</label>
  					 <input type="checkbox" name="fancy-checkbox-connected" id="fancy-checkbox-connected" autocomplete="off" />
  					 <div class="btn-group btn-group-connected">
  							 <label for="fancy-checkbox-connected" class="btn btn-connected">
  									 <span class="fa fa-check"></span>
  									 <span> </span>
  							 </label>
  							 <label for="fancy-checkbox-connected" class="btn btn-default active">Email Me</label>
  					 </div>
  			 </div>
          <div class="form-group">
            <div class="form-label"></div>
            <button class="btn btn-primary" type="submit" id="saveChanges">Change Password</button>
          </div>
        </form>

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
