<?php
/**
 * Template Name: Gallery Page
 *
 * @package GriffinBrothers
 */

get_header(); ?>

  <main>
    <!-- Gallery Hero -->
    <section class="gallery-hero">
      <div class="container">
        <span class="section-eyebrow">OUR WORK & HERITAGE</span>
        <div class="wood-slat-accent-strip" style="margin: 0 auto 16px auto;"></div>
        <h1 class="section-title">Property Portfolio & Memories</h1>
        <p class="section-description" style="max-width: 650px; margin: 0 auto;">
          A visual record of commercial properties, architectural craftsmanship, wood-panel design details, and long-standing business roots in The Shoals.
        </p>

        <!-- Category Filter Buttons -->
        <div class="gallery-filters">
          <button class="filter-btn active" data-filter="all">All Photos</button>
          <button class="filter-btn" data-filter="retail">Retail & Commercial</button>
          <button class="filter-btn" data-filter="flex">Flex & Industrial</button>
          <button class="filter-btn" data-filter="build">Build to Suit</button>
          <button class="filter-btn" data-filter="residential">Residential</button>
          <button class="filter-btn" data-filter="heritage">Heritage & Memories</button>
        </div>
      </div>
    </section>

    <!-- Gallery Grid Section -->
    <section class="container">
      <div class="gallery-grid" id="galleryGrid">

        <!-- Item 1: Refine Center -->
        <div class="gallery-item" data-category="retail" data-lightbox data-src="<?php echo griffin_asset('Retail .jpg'); ?>" data-caption="Refine Commercial Center — Modern Retail Storefront with Horizontal Wood Slats">
          <img src="<?php echo griffin_asset('Retail .jpg'); ?>" alt="Refine Commercial Center">
          <div class="gallery-item-overlay">
            <span class="gallery-item-category">Retail</span>
            <div class="gallery-item-title">Refine Commercial Center</div>
          </div>
        </div>

        <!-- Item 2: Hero Building -->
        <div class="gallery-item" data-category="retail" data-lightbox data-src="<?php echo griffin_asset('Hero Page  top photo.jpeg'); ?>" data-caption="Refine Home Store + Design — Exterior Facade & Landscaping">
          <img src="<?php echo griffin_asset('Hero Page  top photo.jpeg'); ?>" alt="Refine Home Store + Design Facade">
          <div class="gallery-item-overlay">
            <span class="gallery-item-category">Retail & Architecture</span>
            <div class="gallery-item-title">Refine Home Store Facade</div>
          </div>
        </div>

        <!-- Item 3: Build to Suit (One Ride) -->
        <div class="gallery-item" data-category="build" data-lightbox data-src="<?php echo griffin_asset('Build to Suit.PNG'); ?>" data-caption="One Ride Facility — Custom Build to Suit with Timber Slat Accent & Halo Signage">
          <img src="<?php echo griffin_asset('Build to Suit.PNG'); ?>" alt="One Ride Facility">
          <div class="gallery-item-overlay">
            <span class="gallery-item-category">Build to Suit</span>
            <div class="gallery-item-title">One Ride Custom Facility</div>
          </div>
        </div>

        <!-- Item 4: Flex Commercial Complex -->
        <div class="gallery-item" data-category="flex" data-lightbox data-src="<?php echo griffin_asset('Flex space.jpeg'); ?>" data-caption="Flex Commercial Park — Drive-In Overhead Bays & Air-Conditioned Offices">
          <img src="<?php echo griffin_asset('Flex space.jpeg'); ?>" alt="Flex Space Warehouse & Office">
          <div class="gallery-item-overlay">
            <span class="gallery-item-category">Flex & Industrial</span>
            <div class="gallery-item-title">Flex Commercial Bays & Offices</div>
          </div>
        </div>

        <!-- Item 5: Residential Development -->
        <div class="gallery-item" data-category="residential" data-lightbox data-src="<?php echo griffin_asset('Residential.jpg'); ?>" data-caption="Residential Neighborhood — North Alabama Craftsman Community Development">
          <img src="<?php echo griffin_asset('Residential.jpg'); ?>" alt="Residential Neighborhood Development">
          <div class="gallery-item-overlay">
            <span class="gallery-item-category">Residential</span>
            <div class="gallery-item-title">Shoals Craftsman Community</div>
          </div>
        </div>

        <!-- Item 6: Land Leases Aerial -->
        <div class="gallery-item" data-category="retail" data-lightbox data-src="<?php echo griffin_asset('Land Leases.jpeg'); ?>" data-caption="Philadelphia Avenue Commercial Land Parcel — Aerial Ground Lease Tract">
          <img src="<?php echo griffin_asset('Land Leases.jpeg'); ?>" alt="Philadelphia Avenue Land Parcel">
          <div class="gallery-item-overlay">
            <span class="gallery-item-category">Commercial Land</span>
            <div class="gallery-item-title">Philadelphia Avenue Tract</div>
          </div>
        </div>

        <!-- Item 7: Jeff & Lynn Heritage Illustration -->
        <div class="gallery-item" data-category="heritage" data-lightbox data-src="<?php echo griffin_asset('jeff_lynn_portrait.jpg'); ?>" data-caption="Jeff & Lynn Griffin — Built on Faith, Family & Integrity">
          <img src="<?php echo griffin_asset('jeff_lynn_portrait.jpg'); ?>" alt="Jeff and Lynn Griffin Portrait">
          <div class="gallery-item-overlay">
            <span class="gallery-item-category">Heritage & Founders</span>
            <div class="gallery-item-title">Jeff & Lynn Griffin</div>
          </div>
        </div>

        <!-- Item 8: Artistic Heritage Sheet -->
        <div class="gallery-item" data-category="heritage" data-lightbox data-src="<?php echo griffin_asset('Jeff and Lynn clean digital ink illustration art.jpg'); ?>" data-caption="Original Line & Ink Digital Illustration Study — Griffin Brothers Properties">
          <img src="<?php echo griffin_asset('Jeff and Lynn clean digital ink illustration art.jpg'); ?>" alt="Illustration Art Study">
          <div class="gallery-item-overlay">
            <span class="gallery-item-category">Business History</span>
            <div class="gallery-item-title">Digital Ink Art Archival Study</div>
          </div>
        </div>

        <!-- Item 9: Griffin Crest Brand Symbol -->
        <div class="gallery-item" data-category="heritage" data-lightbox data-src="<?php echo griffin_asset('Griffin Brothers new logo.jpg'); ?>" data-caption="Griffin Brothers Properties Official Brand Identity with Golden Griffin Crest">
          <img src="<?php echo griffin_asset('Griffin Brothers new logo.jpg'); ?>" alt="Griffin Brothers Official Crest Logo">
          <div class="gallery-item-overlay">
            <span class="gallery-item-category">Brand Identity</span>
            <div class="gallery-item-title">The Griffin Crest & Seal</div>
          </div>
        </div>

      </div>
    </section>
  </main>

  <!-- Lightbox Modal -->
  <div class="lightbox-modal" id="lightboxModal">
    <div class="lightbox-content">
      <button class="lightbox-close" id="lightboxClose" aria-label="Close Lightbox">&times;</button>
      <img src="" alt="" class="lightbox-img" id="lightboxImg">
      <div class="lightbox-caption" id="lightboxCaption"></div>
    </div>
  </div>

<?php get_footer(); ?>
