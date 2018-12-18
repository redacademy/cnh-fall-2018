<?php
/**
 * Template part for displaying side menu.
 *
 */
?>
<div id="side-menu" class="side-menu" style="width: 0px;">
  <div class="side-menu-top">
    <?php get_search_form(); ?>
    <a href="#" class="btn-close">&times;</a>
  </div>
  <ul class="side-nav">
    <li class="side-item">
      <a href="<?php echo esc_url( home_url() ); ?>" class="side-link">Home</a>
    </li>
    <li class="side-item accordion-toggle">
      <a href="/about" class="side-link">About Us</a>
      <div class="side-btn accordion-toggle"></div>
    </li>
    <ul class="side-nav-sub accordion-content">
        <li class="sub-item">
          <a href="/about/who-we-are">Who We Are</a>
        </li>
        <li class="sub-item">
          <a href="/about/contact-us">Contact Us</a>
        </li>
        <li class="sub-item">
          <a href="/about/careers">Careers</a>
        </li>
      </ul>
    <li class="side-item accordion-toggle">
      <a href="/programs" class="side-link">Programs</a>
      <div class="side-btn accordion-toggle"></div>
    </li>
    <ul class="side-nav-sub accordion-content">
      <li class="sub-item">
        <a href="/programs/children-youth">Children/Youth</a>
      </li>
      <li class="sub-item">
        <a href="/programs/family">Family</a>
      </li>
      <li class="sub-item">
        <a href="/programs/seniors">Senior</a>
      </li>
      <li class="sub-item">
        <a href="/programs/adults">Adults</a>
      </li>
      <li class="sub-item">
        <a href="/programs/community-development">Community Development</a>
      </li>
    </ul>
    <li class="side-item accordion-toggle">
      <a href="/services" class="side-link">Services</a>
      <div class="side-btn accordion-toggle"></div>
    </li>
    <ul class="side-nav-sub accordion-content">
      <li class="sub-item">
        <a href="/services/childcare">Childcare</a>
      </li>
      <li class="sub-item">
        <a href="/services/immigrant-services">Immigrant Services</a>
      </li>
      <li class="sub-item">
        <a href="/services/family">Family</a>
      </li>
      <li class="sub-item">
        <a href="/services/youth">Youth</a>
      </li>
      <li class="sub-item">
        <a href="/services/seniors">Seniors</a>
      </li>
      <li class="sub-item">
        <a href="/services/rentals">Rentals</a>
      </li>
    </ul>
    <li class="side-item accordion-toggle">
      <a href="/get-involved" class="side-link">Get Involved</a>
      <div class="side-btn"></div>
    </li>
    <ul class="side-nav-sub accordion-content">
      <li class="sub-item">
        <a href="/get-involved/become-a-member">Become a Member</a>
      </li>
      <li class="sub-item">
        <a href="/get-involved/donate">Donate</a>
      </li>
      <li class="sub-item">
        <a href="/get-involved/volunteer">Volunteer</a>
      </li>
    </ul>
    <li class="side-item">
      <a href="/events" class="side-link">Events</a>
    </li>
  </ul>
</div><!-- .side-menu -->