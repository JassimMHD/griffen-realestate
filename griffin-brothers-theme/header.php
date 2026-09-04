<?php
/**
 * Header Template
 *
 * @package GriffinBrothers
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="<?php echo griffin_asset('griffin_crest_transparent.png'); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <!-- ==========================================================================
       Header & Navigation Bar
       ========================================================================== -->
  <header class="site-header" id="siteHeader">
    <div class="container nav-container">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo-link" id="navBrandLogo" aria-label="Griffin Brothers Properties Home">
        <?php if ( has_custom_logo() ) : ?>
          <?php the_custom_logo(); ?>
        <?php else : ?>
          <img src="<?php echo griffin_asset('Griffin Brothers new logo.jpg'); ?>" alt="Griffin Brothers Properties" class="brand-logo-img">
        <?php endif; ?>
      </a>

      <!-- Navigation Menu -->
      <ul class="nav-links" id="navLinks">
        <li><a href="<?php echo esc_url( home_url( '/#hero' ) ); ?>" class="nav-link active">Home</a></li>
        <li><a href="<?php echo esc_url( home_url( '/#divisions' ) ); ?>" class="nav-link">Divisions</a></li>
        <li><a href="<?php echo esc_url( home_url( '/#locations' ) ); ?>" class="nav-link">Property Locations</a></li>
        <li><a href="<?php echo esc_url( home_url( '/gallery' ) ); ?>" class="nav-link">Gallery</a></li>
        <li><a href="<?php echo esc_url( home_url( '/#about' ) ); ?>" class="nav-link">About</a></li>
        <li><a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="nav-link">Contact</a></li>
      </ul>

      <!-- Action Group -->
      <div class="header-cta-group">
        <a href="tel:+12567600000" class="header-phone-link" id="headerPhoneLink" title="Call Griffin Brothers">
          <svg viewBox="0 0 24 24">
            <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
          </svg>
          <span>(256) 760-7000</span>
        </a>
        <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn-primary" id="btnHeaderInquire">Inquire Space</a>
        
        <!-- Mobile Toggle Button -->
        <button class="mobile-toggle" id="mobileToggle" aria-label="Toggle Navigation Menu">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
    </div>
  </header>

  <!-- Architectural Wood Slat Accent Stripe below Header -->
  <div class="wood-slat-divider" style="margin-top: 84px;"></div>
