<!DOCTYPE html>
<html>
<head>
  <title>NUS Entrepreneurship Society</title>
  <!-- css -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/stylesheets/foundation.css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/stylesheets/app.css" />
  
  <!-- javascript -->
  <script type="text/javascript" src="<?php echo base_url() ?>assets/javascripts/modernizr.foundation.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/javascripts/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/javascripts/jquery.customforms.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/javascripts/jquery.placeholder.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/javascripts/jquery.reveal.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/javascripts/jquery.tooltips.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/javascripts/app.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/javascripts/googleAnalytics.js"></script>
 <!-- <script type="text/javascript" src="<?php echo base_url() ?>assets/javascripts/jquery.orbit-1.4.0.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/javascripts/wufoo.js"></script> -->

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700' rel='stylesheet' type='text/css'></head>
<body>

  <!-- facebook js -->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "http://connect.facebook.net/en_US/all.js#xfbml=1&appId=307366639279286";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  <!-- twitter js -->
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="http://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

  <div class="header">
    <div class="row">
      <div class="twelve columns">
        <img src = "<?php echo base_url() ?>assets/images/logo.png"/>

        <div class="social right">
          <a href="https://twitter.com/nesociety" class="twitter-follow-button" data-show-count="false">Follow @nesociety</a>
        </div>

        <div class="fb-like social right" data-href="http://www.facebook.com/nusentresoc" data-send="false" data-layout="button_count"  data-show-faces="true"></div>
      </div>
    </div>
  </div>

  <div id="nav-background">
    <div class="row">
      <ul class="nav-bar">

        <li>
          <a href="<?php echo base_url() ?>">Home</a>
        </li>
        <li class="has-flyout">
          <a href="about">About Us</a>
          <a href="#" class="flyout-toggle">
            <span></span>
          </a>
          <ul class="flyout">
            <li>
              <a href="<?php echo base_url() ?>index.php/about">NES</a>
            <li>
              <a href="<?php echo base_url() ?>index.php/stakeholders">Our stakeholders</a></li>
            <li>
              <a href="<?php echo base_url() ?>index.php/faq">FAQ</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo base_url() ?>index.php/winterinternship">Internship</a></li>
        <li>
          <a href="<?php echo base_url() ?>index.php/events">Events</a></li>
        <li>
          <a href="<?php echo base_url() ?>index.php/core">CORE</a></li>
        <li class="has-flyout">
          <a href="#">Global Projects</a>
          <a href="#" class="flyout-toggle">
            <span></span>
          </a>
          <ul class="flyout">
            <li>
              <a href="<?php echo base_url() ?>index.php/aseanpreneurs">ASEANpreneurs</a>
            </li>
            <li>
              <a href="<?php echo base_url() ?>index.php/bizasia">BizAsia</a>
            </li>
            <li>
              <a href="<?php echo base_url() ?>index.php/isage">ISAGE</a>
            </li>
            <li>
              <a href="<?php echo base_url() ?>index.php/mml">Maalu Maalu Lanka</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="<?php echo base_url() ?>index.php/startupsingapore">Start-Up@Singapore</a></li>
        <li>
          <a href="<?php echo base_url() ?>index.php/contact">Contact Us</a></li>
      </ul>
    </div>
  </div>