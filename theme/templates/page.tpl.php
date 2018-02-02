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
        <a href="<?php echo base_path(); ?>">
          <img src="<?php echo $logo; ?>" alt="<?php echo t('OpenCharity') ?>">
        </a>
      </div>

      <div class="oc-toolbar">
        <?php
        if ($main_menu) {
          print theme('links__system_main_menu', array(
            'links' => $main_menu,
            'attributes' => array(
              'class' => array('oc-menu'),
            )/*,
            'heading' => array(
              'text' => t('Main Menu'),
              'level' => 'h2',
              'class' => array('element-invisible'),
            ),*/
          ));
        }
        ?>
        <a href="<?php echo $login_url; ?>" class="oc-button">Join Us</a>
      </div>
    </div>
  </header>
  <!-- END: HEADER -->

  <!-- BEGIN: PAGE CONTENT -->
  <section class="oc-content">
    <?php if (!$is_front) { ?>

      <!-- BEGIN: CONTENTS OF OTHER PAGES -->
      <section class="oc-banner-2">
        <!--  -->
      </section>

      <div class="oc-container">
        <?php echo render($page['content']); ?>
      </div>
      <!-- END: CONTENTS OF OTHER PAGES -->

    <?php } else { ?>

      <!-- BEGIN: CONTENTS OF HOMEPAGE -->
      <section class="oc-banner">
        <div class="banner-content">
          <h1>Sharing Ideas for Charity</h1>
          <div class="banner-text-content">
            <p>Many charities' goals are similar, as is the functionality we require, but little shared working takes place</p>
            <p>By working together, driving shared areas of interest and influencing open source development we can bring efficiencies, improve the digital experience for our users, and have great impact.</p>
            <p>Together we can make a bigger difference.</p>
          </div>
        </div>
      </section>

      <section class="oc-home-event oc-bg-light">
        <div class="oc-container oc-clearfix">
          <div class="oc-left">
            <h3><span class="oc-text-primary">Next Event:</span> June 23rd 2016 18:30 - 21:00</h3>
            <p>Cancer Research UK, Angel Building, 407 St John Street, London EC1V 4AD</p>
          </div>
          <div class="oc-right">
            <a href="<?php echo $login_url; ?>" class="oc-button oc-dark">Register</a>
          </div>
        </div>
      </section>

      <section class="oc-home-get-involved">
        <div class="oc-container oc-clearfix">
          <h2 class="block-title">Get Involved</h2>

          <div class="oc-row">
            <div class="oc-col sm-4">
              <p><img src="<?php echo $image_path; ?>/meetup.png" alt=""></p>
              <h3>We do Meetings</h3>
              <p>We organise our meetings through the OpenCharity MeetUp group</p>
              <p><a href="" class="oc-button">MeetUp group</a></p>
            </div>

            <div class="oc-col sm-4">
              <p><img src="<?php echo $image_path; ?>/slack.png" alt=""></p>
              <h3>We Communicate</h3>
              <p>OpenCharity have a Slack group for daily communication</p>
              <p><a href="" class="oc-button">Slack group</a></p>
            </div>

            <div class="oc-col sm-4">
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
            <p class="oc-bold">If you are a charity or a supplier, we are ready to welcome you.</p>
            <div class="oc-row">
              <div class="oc-col sm-4">
                <div class="oc-column-item">
                  <div class="oc-icon">
                    <img src="<?php echo $image_path; ?>/bulb-alt.png" alt="">
                  </div>
                  <h3>We help charities</h3>
                  <p>share knowledge and working practice to make the best technology choices</p>
                </div>
              </div>
              <div class="oc-col sm-4">
                <div class="oc-column-item">
                  <div class="oc-icon">
                    <img src="<?php echo $image_path; ?>/together-alt.png" alt="">
                  </div>
                  <h3>We bring together</h3>
                  <p>charities and suppliers to the charity sector to share best practices</p>
                </div>
              </div>
              <div class="oc-col sm-4">
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

            <div class="oc-table sm">
              <div class="oc-col"><img src="<?php echo $image_path.'/cancer-research.png'; ?>" alt=""></div>
              <div class="oc-col"><img src="<?php echo $image_path.'/compucorp.png'; ?>" alt=""></div>
              <div class="oc-col"><img src="<?php echo $image_path.'/kop.png'; ?>" alt=""></div>
              <div class="oc-col"><img src="<?php echo $image_path.'/zing.png'; ?>" alt=""></div>
              <div class="oc-col"><img src="<?php echo $image_path.'/comic-relief.png'; ?>" alt=""></div>
            </div>

            <div class="oc-nav-wrapper">
              <span class="oc-nav-item active"></span>
              <span class="oc-nav-item"></span>
              <span class="oc-nav-item"></span>
            </div>
          </section>
        </section>
      </section>

      <section class="oc-home-blog">
        <section class="oc-container">
          <h2 class="block-title">Blog</h2>

          <div class="oc-table xs">
            <div class="oc-col">
              <i class="fa fa-chevron-left"></i>
            </div>
            <div class="oc-col">
                
              <div class="oc-row">
                <div class="oc-col md-3 sm-6">
                  <a href="">Online Donations Special...</a>
                  <p>Lorem ipsum dolor sit amet, consectetur adipicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
                  <p class="oc-date">14 Nov 2014</p>
                </div>
                <div class="oc-col md-3 sm-6">
                  <a href="">Online Donations Special...</a>
                  <p>Lorem ipsum dolor sit amet, consectetur adipicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
                  <p class="oc-date">14 Nov 2014</p>
                </div>
                <div class="oc-col md-3 sm-6">
                  <a href="">Online Donations Special...</a>
                  <p>Lorem ipsum dolor sit amet, consectetur adipicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
                  <p class="oc-date">14 Nov 2014</p>
                </div>
                <div class="oc-col md-3 sm-6">
                  <a href="">Online Donations Special...</a>
                  <p>Lorem ipsum dolor sit amet, consectetur adipicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
                  <p class="oc-date">14 Nov 2014</p>
                </div>
              </div>
              
            </div>
            <div class="oc-col">
              <i class="fa fa-chevron-right"></i>
            </div>
          </div>

        </section>
      </section>
      <!-- END: CONTENTS OF HOMEPAGE -->

    <?php } ?>
  </section>
  <!-- END: PAGE CONTENT -->

  <!-- BEGIN: FOOTER -->
  <footer class="oc-footer">

    <?php if ($social) { ?>
      <!-- BEGIN: Social Links -->
      <div class="oc-container oc-top">
        <?php foreach($social as $smedia) { ?>
          <a target="_blank" href="<?php echo $smedia['url']; ?>">
            <i class="fa fa-fw <?php echo $smedia['icon']; ?>"></i>
          </a>
        <?php } ?>
      </div>
      <!-- END: Social Links -->
    <?php } ?>

    <!-- Github Link -->
    <div class="oc-container oc-bottom">
      This site was built by <a target="_blank" href="//www.github.com/christianezeani">Christian Ezeani</a>
    </div>
  </footer>
  <!-- END: FOOTER -->
</section>