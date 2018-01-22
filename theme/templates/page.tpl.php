<?php
/**
 * @file
 * Implementation to display a single Drupal page.
 * 
 * 
 */
?>

<section class="oc-body">
  <!-- BEGIN: HEADER -->
  <header class="oc-header">
    <div class="oc-container oc-clearfix">
      <div class="oc-logo">
        <a href="/"><img src="<?php echo $logo; ?>" alt="<?php echo t('OpenCharity') ?>"></a>
      </div>

      <div class="oc-toolbar">
        <a href="" class="oc-button">Join Us</a>
      </div>
    </div>
  </header>
  <!-- END: HEADER -->

  <!-- BEGIN: PAGE CONTENT -->
  <section class="oc-content">
    <?php if (!$is_front) { ?>

      <!-- BEGIN: CONTENTS OF OTHER PAGES -->
      <div class="oc-container">
        <?php echo render($page['content']); ?>
      </div>
      <!-- END: CONTENTS OF OTHER PAGES -->

    <?php } else { ?>

      <!-- BEGIN: CONTENTS OF HOMEPAGE -->
      <section class="oc-banner">
        <!--  -->
      </section>

      <section class="oc-home-event oc-bg-light">
        <div class="oc-container oc-clearfix">
          <div class="oc-left">
            <h3><span class="oc-text-primary">Next Event:</span> June 23rd 2016 18:30 - 21:00</h3>
            <p>Cancer Research UK, Angel Building, 407 St John Street, London EC1V 4AD</p>
          </div>
          <div class="oc-right">
            <a href="" class="oc-button oc-dark">Register</a>
          </div>
        </div>
      </section>

      <section class="oc-home-get-involved">
        <div class="oc-container oc-clearfix">
          <h2 class="block-title">Get Involved</h2>

          <div class="oc-clearfix">
            <div class="oc-column">
              <p><img src="<?php echo $image_path; ?>/meetup.png" alt=""></p>
              <h3>We do Meetings</h3>
              <p>We organise our meetings through the OpenCharity MeetUp group</p>
              <p><a href="" class="oc-button">MeetUp group</a></p>
            </div>

            <div class="oc-column">
              <p><img src="<?php echo $image_path; ?>/slack.png" alt=""></p>
              <h3>We Communicate</h3>
              <p>OpenCharity have a Slack group for daily communication</p>
              <p><a href="" class="oc-button">Slack group</a></p>
            </div>

            <div class="oc-column">
              <p><img src="<?php echo $image_path; ?>/share.png" alt=""></p>
              <h3>We Collaborate</h3>
              <p>We have a Wiki group set up to share tools and documents</p>
              <p><a href="" class="oc-button">Wiki group</a></p>
            </div>
          </div>
        </div>
      </section>

      <section class="oc-bg-light">
        <section class="oc-container">
          <section class="oc-home-mission">
            <h2 class="block-title">Our Mission</h2>
            <p>Charities and Partners collaborating and sharing open solutions and ideas to create value in the digital space</p>
            <p class="oc-bold">If you are a charity or a supplier, we are ready to welcome you</p>
            <div class="oc-row oc-clearfix">
              <div class="oc-column">
                <div class="oc-column-item">
                  <div class="oc-icon">
                    <img src="<?php echo $image_path; ?>/bulb-alt.png" alt="">
                  </div>
                  <h3>We help charities</h3>
                  <p>share knowledge and working practice to make the best technology choices</p>
                </div>
              </div>
              <div class="oc-column">
                <div class="oc-column-item">
                  <div class="oc-icon">
                    <img src="<?php echo $image_path; ?>/together-alt.png" alt="">
                  </div>
                  <h3>We bring together</h3>
                  <p>charities and suppliers to the charity sector to share best practices</p>
                </div>
              </div>
              <div class="oc-column">
                <div class="oc-column-item">
                  <div class="oc-icon">
                    <img src="<?php echo $image_path; ?>/encourage-alt.png" alt="">
                  </div>
                  <h3>We encourage</h3>
                  <p>collaboration and innovation for the good of the charity sector</p>
                </div>
              </div>
            </div>
          </section>

          <section class="oc-home-members">
            <h2 class="block-title">Our Members</h2>
          </section>
        </section>
      </section>

      <section class="oc-home-blog">
        <section class="oc-container">
          <h2 class="block-title">Blog</h2>
        </section>
      </section>
      <!-- END: CONTENTS OF HOMEPAGE -->

    <?php } ?>
  </section>
  <!-- END: PAGE CONTENT -->

  <!-- BEGIN: FOOTER -->
  <footer class="oc-footer">
    <!-- BEGIN: Social Links -->
    <div class="oc-container oc-top">
      <a target="_blank" href="<?php echo $facebook_url; ?>">
        <i class="fa fa-facebook fa-fw"></i>
      </a>
      <a target="_blank" href="<?php echo $twitter_url; ?>">
        <i class="fa fa-twitter fa-fw"></i>
      </a>
      <a target="_blank" href="<?php echo $google_url; ?>">
        <i class="fa fa-google-plus fa-fw"></i>
      </a>
    </div>
    <!-- END: Social Links -->

    <!-- Github Link -->
    <div class="oc-container oc-bottom">
      This site was built by <a target="_blank" href="//www.github.com/christianezeani">Christian Ezeani</a>
    </div>
  </footer>
  <!-- END: FOOTER -->
</section>