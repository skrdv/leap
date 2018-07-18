<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

  <section class="resourceSesction resourceSesction-hero is-<?php the_field('resource_category'); ?>" style="background-image: url(<?php the_field('resource_image'); ?>);">
    <div class="container">

      <div class="card">
        <div class="card-meta">
          Learner <?php the_field('resource_category'); ?>
        </div>
        <h1 class="card-title">
          <?php the_title(); ?>
        </h1>
        <h2 class="card-subtitle">
          <?php the_field('resource_subtitle'); ?>
        </h2>
      </div>

    </div>
  </section>

  <section class="resourceSesction resourceSesction-description is-<?php the_field('resource_category'); ?>">
    <div class="container">

      <div class="card">
        <div class="card-content">
          <?php the_field('resource_description'); ?>
        </div>
      </div>

    </div>
  </section>


<section class="resourceSesction resourceSesction-reviews">
  <div class="container">

    <div class="resourceSesction-title">Created for educators. By Educators.</div>
    <div class="resourceSesction-line"></div>


      <div class="reviewItem">
        <div class="reviewItem-left">
          <div class="reviewItem-image"></div>
        </div>
        <div class="reviewItem-right">
          <div class="reviewItem-text">
            We thought personalized learning was simply using technology, that we would get really great software and some data and that would be it… But I found out that this is much more than technology… We started seeing that personalized learning happens anytime, anywhere. We started learning that this is all about the kids—it’s about the kids being learner led and learner focused.
          </div>
          <div class="reviewItem-author">
            Samantha Rapson
          </div>
          <div class="reviewItem-position">
            Assistant Principal
          </div>
        </div>
      </div>

      <div class="reviewItem">
        <div class="reviewItem-left">
          <div class="reviewItem-image"></div>
        </div>
        <div class="reviewItem-right">
          <div class="reviewItem-text">
            We thought personalized learning was simply using technology, that we would get really great software and some data and that would be it… But I found out that this is much more than technology… We started seeing that personalized learning happens anytime, anywhere. We started learning that this is all about the kids—it’s about the kids being learner led and learner focused.
          </div>
          <div class="reviewItem-author">
            Steve McWade
          </div>
          <div class="reviewItem-position">
            Teacher
          </div>
        </div>
      </div>

  </div>
</section>

<section class="resourceSesction resourceSesction-statistic bg-secondary">
  <div class="container">

    <div class="card">
      <div class="card-title">
        About Joseph Lovett Elementary
      </div>
      <div class="card-subtitle">
        A Chicago Public Schools Neighborhood School
      </div>
      <div class="card-content">
        <div class="card-square">
          <ul>
            <li>372 Total K-8 Students</li>
            <li>82% African American</li>
            <li>16% Hispanic</li>
            <li>0.3% White</li>
            <li>1% Other</li>
            <li>94% Low Income</li>
            <li>13% Diverse Learners</li>
            <li>6% English Learners</li>
            <li>20% Mobility*</li>
          </ul>
        </div>
      </div>
      <div class="card-footer">
        *Reflects any enrollment change between the first school day in October and the last day of the school year.
      </div>
    </div>

  </div>
</section>

<section class="resourceSesction resourceSesction-steps">

  <div class="resourceSesction-title">How Flex Fridays Work in Mr. McWade’s Class</div>
  <div class="resourceSesction-line"></div>

  <div class="stepItem">
    <div class="container">
      <div class="stepItem-category is-focused">Learner Focused</div>
      <div class="stepItem-label">Step 1.</div>
      <div class="stepItem-text">Consider individual student interests and the needs of the class community. Determine skills that will meet class needs and incorporate those skills into experiences focused on student interests. For example, if the class needs practice with collaboration or team skills, design activities focused on student interests that require teamwork to create and problem solve.
      </div>
    </div>
  </div>
  <div class="stepItem">
    <div class="container">
      <div class="stepItem-category is-led">Learner Led</div>
      <div class="stepItem-label">Step 2.</div>
      <div class="stepItem-text">Provide opportunities for students to take ownership of creating content and learning experiences for their peers. Teachers then shift their roles to mentor and coach students as they develop their own lessons. Ask if there are students interested in teaching topics that interest them. Encourage reluctant learners to showcase their strengths and passions.</div>
    </div>
  </div>
  <div class="stepItem">
    <div class="container">
      <div class="stepItem-category is-focused">Learner Focused</div>
      <div class="stepItem-label">Step 3.</div>
      <div class="stepItem-text">Many activities change each Friday, giving students a variety of experiences from which to choose. To keep up with the varied student interests, regularly ask students what they would like to learn. Also, pay attention to what students are reading and talking about with each other. Use this information to create interactive learning experiences based on those interests.</div>
    </div>
  </div>
  <div class="stepItem">
    <div class="container">
      <div class="stepItem-category is-focused">Learner Focused</div>
      <div class="stepItem-label">Step 4.</div>
      <div class="stepItem-text">Partner with learners to continuously align learning opportunities with learners’ interests, strengths and needs. When many of his students expressed interest in learning a second language, Mr. McWade strategically encouraged and involved two students who were commonly reluctant to engage in class discussion. The opportunity to teach their peers revealed a more confident side of these students who thrived when sharing their strengths.</div>
    </div>
  </div>
  <div class="stepItem">
    <div class="container">
      <div class="stepItem-category is-led">Learner Led</div>
      <div class="stepItem-label">Step 5.</div>
      <div class="stepItem-text">Partner with learners to reflect upon and document their own learning needs and progress. After Flex Friday, teachers provide an opportunity for students to reflect on their learning and share it with their peers. Consider a variety of ways that students can show what they’ve learned: Google Classroom posts, slide presentations, videos, graffiti boards, learning journals, portfolios and so much more!</div>
    </div>
  </div>

</section>

<section class="resourceSesction resourceSesction-footer">

  <div class="form-section form-download">
    <div class="container">
    <div class="form-title">Download the Flex Fridays Resource</div>
    <div class="form-content">
      <div class="form-label">PDF</div>
      <a class="form-icon" href="#"><i class="fa fa-findsome"></i></a>
    </div>
    </div>
  </div>
  <div class="form-section form-upvote">
    <div class="container">
    <div class="form-title">Upvote and Say “Thanks” (10)</div>
    <div class="form-content">
      <div class="form-label">Update</div>
      <a class="form-icon" href="#"><i class="fa fa-findsome"></i></a>
    </div>
    </div>
  </div>
  <div class="form-section form-comments">
    <div class="container">
    <div class="form-title">Comments (10)</div>
    <div class="form-content">
      <div class="form-label">Show comments</div>
      <a class="form-icon" href="#"><i class="fa fa-findsome"></i></a>
    </div>
    </div>
  </div>
  <div class="form-section form-share">
    <div class="container">
    <div class="form-title">Share This Resource</div>
    <div class="form-content">
      <a class="form-icon" href="#"><i class="fa fa-twitter"></i></a>
      <a class="form-icon" href="#"><i class="fa fa-facebook"></i></a>
      <a class="form-icon" href="#"><i class="fa fa-instagram"></i></a>
      <a class="form-icon" href="#"><i class="fa fa-share"></i></a>
    </div>
    </div>
  </div>
  <div class="form-section form-navigation">
    <div class="container">
    <div class="form-title">
      Post navigation
    </div>
    <div class="form-content">
      Arrows
    </div>
    </div>
  </div>

</section>

<?php endwhile; ?>

<?php get_footer(); ?>
