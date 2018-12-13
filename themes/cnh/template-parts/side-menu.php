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
      <a href="<?php echo get_permalink('about'); ?>" class="side-link">About Us</a>
    </li>
    <ul class="side-nav-sub accordion-content">
        <li class="sub-item">
          <a href="<?php the_permalink('who-we-are'); ?>">Who We Are</a>
        </li>
        <li class="sub-item">
          <a href="<?php the_permalink('contact-us'); ?>">Contact Us</a>
        </li>
        <li class="sub-item">
          <a href="<?php the_permalink('careers'); ?>">Careers</a>
        </li>
      </ul>
    <li class="side-item accordion-toggle">
      <a href="<?php the_permalink('programs'); ?>" class="side-link">Programs</a>
    </li>
    <ul class="side-nav-sub accordion-content">
      <li class="sub-item">
        <a href="<?php the_permalink('children-youth'); ?>">Children/Youth</a>
      </li>
      <li class="sub-item">
        <a href="<?php the_permalink('programs/family'); ?>">Family</a>
      </li>
      <li class="sub-item">
        <a href="<?php the_permalink('programs/seniors'); ?>">Senior</a>
      </li>
      <li class="sub-item">
        <a href="<?php the_permalink('adults'); ?>">Adults</a>
      </li>
      <li class="sub-item">
        <a href="<?php the_permalink('community-development'); ?>">Community Development</a>
      </li>
    </ul>
    <li class="side-item accordion-toggle">
      <a href="<?php the_permalink('services'); ?>" class="side-link">Services</a>
    </li>
    <ul class="side-nav-sub accordion-content">
      <li class="sub-item">
        <a href="<?php the_permalink('childcare'); ?>">Childcare</a>
      </li>
      <li class="sub-item">
        <a href="<?php the_permalink('immigrant-services'); ?>">Immigrant Services</a>
      </li>
      <li class="sub-item">
        <a href="<?php the_permalink('services/family'); ?>">Family</a>
      </li>
      <li class="sub-item">
        <a href="<?php the_permalink('youth'); ?>">Youth</a>
      </li>
      <li class="sub-item">
        <a href="<?php the_permalink('services/seniors'); ?>">Seniors</a>
      </li>
      <li class="sub-item">
        <a href="<?php the_permalink('rental'); ?>">Rentals</a>
      </li>
    </ul>
    <li class="side-item accordion-toggle">
      <a href="<?php the_permalink('get-involved'); ?>" class="side-link">Get Involved</a>
    </li>
    <ul class="side-nav-sub accordion-content">
      <li class="sub-item">
        <a href="<?php the_permalink('become-a-member'); ?>">Become a Member</a>
      </li>
      <li class="sub-item">
        <a href="<?php the_permalink('donate'); ?>">Donate</a>
      </li>
      <li class="sub-item">
        <a href="<?php the_permalink('volunteer'); ?>">Volunteer</a>
      </li>
    </ul>
    <li class="side-item">
      <a href="<?php the_permalink('events'); ?>" class="side-link">Events</a>
    </li>
  </ul>
</div><!-- .side-menu -->