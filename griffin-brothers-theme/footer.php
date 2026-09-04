<?php
/**
 * Footer Template
 *
 * @package GriffinBrothers
 */
?>

  <!-- Wood Slat Divider -->
  <div class="wood-slat-divider"></div>

  <!-- ==========================================================================
       Footer Section
       ========================================================================== -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-top">
        <div class="footer-brand-summary">
          <img src="<?php echo griffin_asset('Griffin Brothers new logo.jpg'); ?>" alt="Griffin Brothers Properties" style="height: 48px; width: auto; margin-bottom: 12px;">
          <p>
            Family-owned commercial real estate ownership and development proudly rooted in The Shoals, Alabama.
          </p>
        </div>

        <div class="footer-col">
          <h4 class="footer-col-title">Navigation</h4>
          <ul class="footer-links">
            <li><a href="<?php echo esc_url( home_url( '/#hero' ) ); ?>">Home</a></li>
            <li><a href="<?php echo esc_url( home_url( '/#divisions' ) ); ?>">Our Divisions</a></li>
            <li><a href="<?php echo esc_url( home_url( '/#locations' ) ); ?>">Property Locations</a></li>
            <li><a href="<?php echo esc_url( home_url( '/gallery' ) ); ?>">Gallery & Archives</a></li>
            <li><a href="<?php echo esc_url( home_url( '/#about' ) ); ?>">About Jeff & Lynn</a></li>
            <li><a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">Contact Us</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4 class="footer-col-title">Divisions</h4>
          <ul class="footer-links">
            <li><a href="<?php echo esc_url( home_url( '/#divisions' ) ); ?>">Retail Spaces</a></li>
            <li><a href="<?php echo esc_url( home_url( '/#divisions' ) ); ?>">Flex Warehouse</a></li>
            <li><a href="<?php echo esc_url( home_url( '/#divisions' ) ); ?>">Land Leases</a></li>
            <li><a href="<?php echo esc_url( home_url( '/#divisions' ) ); ?>">Build to Suit</a></li>
            <li><a href="<?php echo esc_url( home_url( '/#divisions' ) ); ?>">Residential</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4 class="footer-col-title">Our Shoals Commitment</h4>
          <p style="font-size: 0.85rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 14px;">
            "Build carefully, own for the long term, and treat every property and tenant like it matters."
          </p>
          <span style="font-size: 0.8rem; color: var(--gold-primary); font-weight: 600;">BUILT ON FAITH, FAMILY & INTEGRITY</span>
        </div>
      </div>

      <div class="footer-bottom">
        <div>
          &copy; <?php echo date('Y'); ?> Griffin Brothers Properties. All Rights Reserved. Florence & Muscle Shoals, AL.
        </div>
        <div>
          <a href="<?php echo esc_url( home_url( '/gallery' ) ); ?>">View Property Gallery</a> &bull; <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">Direct Leasing Inquiries</a>
        </div>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>
