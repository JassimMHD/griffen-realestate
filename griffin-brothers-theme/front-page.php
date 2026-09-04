<?php
/**
 * Front Page Template (One-Page Scroll)
 *
 * @package GriffinBrothers
 */

get_header(); ?>

  <main>
    <!-- ==========================================================================
         Hero Section
         ========================================================================== -->
    <section class="hero-section" id="hero">
      <div class="hero-bg-wrapper">
        <img src="<?php echo griffin_asset('Hero Page  top photo.jpeg'); ?>" alt="Griffin Brothers Commercial Property with Modern Facade and Wood Panel Accents" class="hero-bg-img">
        <div class="hero-overlay"></div>
      </div>

      <div class="container hero-content">
        <div class="hero-tagline-badge">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="var(--gold-primary)">
            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
          </svg>
          <span>The Shoals, Alabama • Family-Owned Commercial Real Estate</span>
        </div>

        <h1 class="hero-title">
          WE OWN IT.<br>
          WE BUILD IT.<br>
          <span class="line-gold">WE MAKE IT WORK.</span>
        </h1>

        <p class="hero-subtitle">
          Commercial real estate ownership and development in the Shoals.
        </p>

        <div class="hero-actions">
          <a href="#locations" class="btn-primary" id="btnHeroProperties">
            <span>View Our Properties</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
          </a>
          <a href="#divisions" class="btn-secondary" id="btnHeroDivisions">
            <span>Explore our Divisions</span>
          </a>
        </div>

        <!-- Trust Badges Bar -->
        <div class="hero-pills-bar">
          <div class="hero-pill-item">
            <div class="hero-pill-bullet"></div>
            <span>5 Specialized Commercial Divisions</span>
          </div>
          <div class="hero-pill-item">
            <div class="hero-pill-bullet"></div>
            <span>Local Direct Ownership & Management</span>
          </div>
          <div class="hero-pill-item">
            <div class="hero-pill-bullet"></div>
            <span>Florence • Muscle Shoals • Sheffield • Tuscumbia</span>
          </div>
        </div>
      </div>
    </section>

    <!-- Wood Slat Divider -->
    <div class="wood-slat-divider"></div>

    <!-- ==========================================================================
         Heritage & Founders Section (Jeff & Lynn)
         ========================================================================== -->
    <section class="heritage-section" id="heritage">
      <!-- Watermark background -->
      <img src="<?php echo griffin_asset('griffin_crest_transparent.png'); ?>" alt="Griffin Crest" class="heritage-watermark">

      <div class="container">
        <div class="heritage-grid">
          <!-- Clean Digital Ink Illustration of Jeff & Lynn -->
          <div class="heritage-image-frame">
            <img src="<?php echo griffin_asset('jeff_lynn_portrait.jpg'); ?>" alt="Jeff and Lynn Griffin - Clean digital ink illustration art" class="heritage-illustration">
            <div class="heritage-frame-tag">
              <span>JEFF & LYNN GRIFFIN • FOUNDERS</span>
            </div>
          </div>

          <!-- Exact Requested Copy & Regional Roots -->
          <div class="heritage-text-content">
            <span class="section-eyebrow">BUILT ON FAITH, FAMILY & INTEGRITY</span>
            <div class="wood-slat-accent-strip"></div>
            
            <h2 class="heritage-quote">
              "We're a family-owned real estate company with deep roots in the Shoals."
            </h2>

            <p class="heritage-body-copy">
              Our approach is simple: build carefully, own for the long term, and treat every
              property and tenant like it matters - because to us, it does.
            </p>

            <div class="heritage-values-list">
              <div class="heritage-value-item">
                <svg class="heritage-value-icon" viewBox="0 0 24 24">
                  <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/>
                </svg>
                <div>
                  <div class="heritage-value-title">Direct Relationships</div>
                  <div class="heritage-value-desc">You speak directly to the owners who built and care for the building.</div>
                </div>
              </div>

              <div class="heritage-value-item">
                <svg class="heritage-value-icon" viewBox="0 0 24 24">
                  <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-2 10h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"/>
                </svg>
                <div>
                  <div class="heritage-value-title">Crafted for Longevity</div>
                  <div class="heritage-value-desc">Signature horizontal wood paneling, heavy steel, and durable materials.</div>
                </div>
              </div>
            </div>

            <div class="founders-signature-block">
              <img src="<?php echo griffin_asset('griffin_crest_mark.jpg'); ?>" alt="Griffin Crest" style="width: 42px; height: auto; border-radius: 4px;">
              <div>
                <div class="founders-names">Jeff & Lynn Griffin</div>
                <div class="founders-title">GRIFFIN BROTHERS PROPERTIES • THE SHOALS</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Wood Slat Divider -->
    <div class="wood-slat-divider"></div>

    <!-- ==========================================================================
         The 5 Divisions Section
         ========================================================================== -->
    <section class="divisions-section" id="divisions">
      <div class="container">
        <div class="section-header-center">
          <span class="section-eyebrow">OUR SPECIALIZED CAPABILITIES</span>
          <div class="wood-slat-accent-strip" style="margin: 0 auto 16px auto;"></div>
          <h2 class="section-title">Explore Our 5 Core Divisions</h2>
          <p class="section-description">
            From high-visibility retail storefronts and heavy-duty flex bays to strategic ground leases and bespoke construction, we own and manage spaces that elevate your business.
          </p>
        </div>

        <div class="divisions-grid">
          <!-- 1. Retail -->
          <div class="division-card" id="divisionRetail">
            <div class="division-image-wrap">
              <img src="<?php echo griffin_asset('Retail .jpg'); ?>" alt="Retail Division - High Visibility Storefronts" class="division-img">
              <span class="division-badge-tag">Division 01</span>
            </div>
            <div class="division-content">
              <h3 class="division-heading">Retail</h3>
              <div class="division-tagline">Prime Streetfront Commercial & Boutique Centers</div>
              <p class="division-text">
                High-visibility retail locations situated on major Shoals corridors. Featuring modern wood slat facades, spacious pedestrian walkways, and anchor community draw.
              </p>
              <div class="division-specs">
                <span class="spec-pill">High Traffic Counts</span>
                <span class="spec-pill">Architectural Curb Appeal</span>
                <span class="spec-pill">Turnkey Units</span>
              </div>
              <button class="btn-division-inquire" data-division="Retail" id="inquireRetail">
                <span>Inquire on Retail Space</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M5 12h14M12 5l7 7-7 7"/>
                </svg>
              </button>
            </div>
          </div>

          <!-- 2. Flex Space -->
          <div class="division-card" id="divisionFlex">
            <div class="division-image-wrap">
              <img src="<?php echo griffin_asset('Flex space.jpeg'); ?>" alt="Flex Space Division - Drive-In Bays and Modern Offices" class="division-img">
              <span class="division-badge-tag">Division 02</span>
            </div>
            <div class="division-content">
              <h3 class="division-heading">Flex Space</h3>
              <div class="division-tagline">Versatile Office, Warehouse & Contractor Bays</div>
              <p class="division-text">
                Hybrid commercial spaces engineered for operational efficiency. Includes air-conditioned professional front offices, oversized drive-in overhead doors, and heavy staging yards.
              </p>
              <div class="division-specs">
                <span class="spec-pill">Drive-In Roll-up Doors</span>
                <span class="spec-pill">Finished Office + Shop</span>
                <span class="spec-pill">3-Phase Power</span>
              </div>
              <button class="btn-division-inquire" data-division="Flex" id="inquireFlex">
                <span>Inquire on Flex Space</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M5 12h14M12 5l7 7-7 7"/>
                </svg>
              </button>
            </div>
          </div>

          <!-- 3. Land Leases -->
          <div class="division-card" id="divisionLand">
            <div class="division-image-wrap">
              <img src="<?php echo griffin_asset('Land Leases.jpeg'); ?>" alt="Land Leases Division - Philadelphia Avenue Prime Corridor Acreage" class="division-img">
              <span class="division-badge-tag">Division 03</span>
            </div>
            <div class="division-content">
              <h3 class="division-heading">Land Leases</h3>
              <div class="division-tagline">Strategic Shovel-Ready Commercial Ground Leases</div>
              <p class="division-text">
                Prime parcels located along arterial thoroughfares in Muscle Shoals and Florence. Ready for commercial ground leases, national retail pads, or long-term developments.
              </p>
              <div class="division-specs">
                <span class="spec-pill">Philadelphia Ave Corridor</span>
                <span class="spec-pill">High Visibility Signage</span>
                <span class="spec-pill">Utilities On Site</span>
              </div>
              <button class="btn-division-inquire" data-division="Land Leases" id="inquireLand">
                <span>Inquire on Ground Leases</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M5 12h14M12 5l7 7-7 7"/>
                </svg>
              </button>
            </div>
          </div>

          <!-- 4. Build to Suit (Large span) -->
          <div class="division-card division-card-large" id="divisionBuild">
            <div class="division-image-wrap">
              <img src="<?php echo griffin_asset('Build to Suit.PNG'); ?>" alt="Build to Suit Division - Custom Architectural Facility" class="division-img">
              <span class="division-badge-tag">Division 04</span>
            </div>
            <div class="division-content">
              <h3 class="division-heading">Build to Suit</h3>
              <div class="division-tagline">Custom Architectural Facilities Built Around Your Vision</div>
              <p class="division-text">
                From initial site acquisition to architectural drafting and complete turnkey construction, we design and construct purpose-built facilities tailored directly to your enterprise. Owned and meticulously maintained by Griffin Brothers for the long haul.
              </p>
              <div class="division-specs">
                <span class="spec-pill">Turnkey Development</span>
                <span class="spec-pill">Signature Timber & Steel Accents</span>
                <span class="spec-pill">Long-Term Partnership</span>
              </div>
              <button class="btn-division-inquire" data-division="Build to Suit" id="inquireBuild">
                <span>Discuss Build to Suit Project</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M5 12h14M12 5l7 7-7 7"/>
                </svg>
              </button>
            </div>
          </div>

          <!-- 5. Residential (Large span) -->
          <div class="division-card division-card-large" id="divisionResidential">
            <div class="division-image-wrap">
              <img src="<?php echo griffin_asset('Residential.jpg'); ?>" alt="Residential Division - Quality Living in North Alabama" class="division-img">
              <span class="division-badge-tag">Division 05</span>
            </div>
            <div class="division-content">
              <h3 class="division-heading">Residential</h3>
              <div class="division-tagline">Neighborhood Developments Rooted in Quality & Community</div>
              <p class="division-text">
                Quality residential developments in North Alabama designed with architectural warmth, stone craftsmanship, and enduring neighborhood pride. Built carefully, owned with integrity, and managed with a personal touch.
              </p>
              <div class="division-specs">
                <span class="spec-pill">Craftsman Architecture</span>
                <span class="spec-pill">Family Neighborhoods</span>
                <span class="spec-pill">Enduring Construction</span>
              </div>
              <button class="btn-division-inquire" data-division="Residential" id="inquireResidential">
                <span>Inquire on Residential</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M5 12h14M12 5l7 7-7 7"/>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Wood Slat Divider -->
    <div class="wood-slat-divider"></div>

    <!-- ==========================================================================
         Property Locations Showcase (Logos)
         ========================================================================== -->
    <section class="locations-section" id="locations">
      <div class="container">
        <div class="section-header-center">
          <span class="section-eyebrow">PORTFOLIO FOOTPRINT</span>
          <div class="wood-slat-accent-strip" style="margin: 0 auto 16px auto;"></div>
          <h2 class="section-title">Featured Property Locations</h2>
          <p class="section-description">
            Explore premier commercial retail, flex, and development centers owned and managed by Griffin Brothers across The Shoals.
          </p>
        </div>

        <div class="locations-grid">
          <!-- Property 1: Shoppes on 2nd -->
          <div class="location-card" id="propShoppes2nd">
            <div class="location-logo-holder">
              <img src="<?php echo griffin_asset('logos/shoppes-on-2nd.svg'); ?>" alt="Shoppes on 2nd Logo">
            </div>
            <span class="location-status-badge status-active">Fully Leased</span>
            <p class="location-desc">
              Premier downtown retail shopping corridor featuring boutique retailers, high foot traffic, and dedicated storefront parking.
            </p>
            <div class="location-meta">Downtown Florence Corridor</div>
          </div>

          <!-- Property 2: Wilson Crossing -->
          <div class="location-card" id="propWilsonCrossing">
            <div class="location-logo-holder">
              <img src="<?php echo griffin_asset('logos/wilson-crossing.svg'); ?>" alt="Wilson Crossing Logo">
            </div>
            <span class="location-status-badge status-inquire">Inquire On Suites</span>
            <p class="location-desc">
              High-visibility retail and commercial hub at a primary regional crossroads. Modern timber-accented storefronts and expansive signage.
            </p>
            <div class="location-meta">High-Traffic Regional Hub</div>
          </div>

          <!-- Property 3: Refine Commercial Center -->
          <div class="location-card" id="propRefineCenter">
            <div class="location-logo-holder">
              <img src="<?php echo griffin_asset('logos/refine-commercial-center.svg'); ?>" alt="Refine Commercial Center Logo">
            </div>
            <span class="location-status-badge status-active">Retail Center</span>
            <p class="location-desc">
              Showcase home store, design studios, and specialty retail suites featuring modern industrial siding and signature wood panel fascia.
            </p>
            <div class="location-meta">Florence Commercial District</div>
          </div>

          <!-- Property 4: One Ride Commercial Plaza -->
          <div class="location-card" id="propOneRide">
            <div class="location-logo-holder">
              <img src="<?php echo griffin_asset('logos/one-ride-plaza.svg'); ?>" alt="One Ride Commercial Plaza Logo">
            </div>
            <span class="location-status-badge status-active">Build to Suit</span>
            <p class="location-desc">
              Purpose-built modern commercial facility complete with warm timber slats, halo signage, brick masonry, and tailored studio interiors.
            </p>
            <div class="location-meta">Custom Enterprise Facility</div>
          </div>

          <!-- Property 5: Philadelphia Commercial Reserve -->
          <div class="location-card" id="propPhiladelphia">
            <div class="location-logo-holder">
              <img src="<?php echo griffin_asset('logos/philadelphia-reserve.svg'); ?>" alt="Philadelphia Commercial Reserve Logo">
            </div>
            <span class="location-status-badge status-inquire">Ground Lease Open</span>
            <p class="location-desc">
              Prime multi-acre commercial tract on Philadelphia Ave and 3rd Ave corridor, ready for build-to-suit or long-term ground leases.
            </p>
            <div class="location-meta">Muscle Shoals Commercial Corridor</div>
          </div>
        </div>
      </div>
    </section>

    <!-- Wood Slat Divider -->
    <div class="wood-slat-divider"></div>

    <!-- ==========================================================================
         About Section & Direct Commitment
         ========================================================================== -->
    <section class="about-section" id="about">
      <div class="container">
        <div class="about-grid">
          <div class="about-content-left">
            <span class="section-eyebrow">FAMILY OWNERSHIP • ZERO MIDDLEMEN</span>
            <div class="wood-slat-accent-strip"></div>
            <h2>Commercial Real Estate With Deep Local Roots</h2>
            <p class="about-lead">
              We are not a massive out-of-state corporation. We are Jeff and Lynn Griffin, and we live and work right here in The Shoals.
            </p>
            <p class="about-text">
              When you lease a property or plan a custom building with Griffin Brothers, you partner directly with the owners. There are no remote asset management committees or frustrating bureaucracy. We design thoughtfully, build with architectural pride, and maintain our properties with unwavering dedication.
            </p>

            <div class="about-pillars">
              <div class="pillar-box">
                <div class="pillar-title">1. We Own What We Build</div>
                <div class="pillar-desc">We build for long-term ownership, which means we never cut corners on materials, finishes, or maintenance.</div>
              </div>
              <div class="pillar-box">
                <div class="pillar-title">2. Direct Owner Access</div>
                <div class="pillar-desc">Need a lease adjustment, facility modification, or maintenance check? You have our direct phone numbers.</div>
              </div>
              <div class="pillar-box">
                <div class="pillar-title">3. Rooted in The Shoals Community</div>
                <div class="pillar-desc">We take immense pride in elevating the business corridors of Florence, Muscle Shoals, Sheffield, and Tuscumbia.</div>
              </div>
            </div>
          </div>

          <div class="about-visual-right">
            <img src="<?php echo griffin_asset('Hero Page  top photo.jpeg'); ?>" alt="Griffin Brothers Architecture Detail">
            <div class="about-callout-card">
              <div class="callout-title">Architectural Wood Panels & Modern Metal</div>
              <div class="callout-sub">
                Every building we construct reflects thoughtful design—pairing natural wood slats with clean commercial steel and welcoming curb appeal.
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Wood Slat Divider -->
    <div class="wood-slat-divider"></div>

    <!-- ==========================================================================
         Contact & Inquiries Section
         ========================================================================== -->
    <section class="contact-section" id="contact">
      <div class="container">
        <div class="contact-grid">
          <!-- Contact Info -->
          <div class="contact-info-panel">
            <span class="section-eyebrow">GET IN TOUCH DIRECTLY</span>
            <div class="wood-slat-accent-strip"></div>
            <h2>Let's Discuss Your Next Space</h2>
            <p class="contact-intro">
              Looking for a prime retail storefront, flexible shop bay, commercial land lease, or a custom build-to-suit facility? Reach out directly to Jeff and Lynn Griffin today.
            </p>

            <div class="contact-detail-items">
              <div class="contact-item">
                <div class="contact-icon-bubble">
                  <svg viewBox="0 0 24 24">
                    <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                  </svg>
                </div>
                <div>
                  <div class="contact-item-title">Direct Phone</div>
                  <div class="contact-item-val"><a href="tel:+12567600000">(256) 760-7000</a></div>
                </div>
              </div>

              <div class="contact-item">
                <div class="contact-icon-bubble">
                  <svg viewBox="0 0 24 24">
                    <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                  </svg>
                </div>
                <div>
                  <div class="contact-item-title">Direct Email</div>
                  <div class="contact-item-val"><a href="mailto:info@griffinbrothersproperties.com">info@griffinbrothersproperties.com</a></div>
                </div>
              </div>

              <div class="contact-item">
                <div class="contact-icon-bubble">
                  <svg viewBox="0 0 24 24">
                    <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                  </svg>
                </div>
                <div>
                  <div class="contact-item-title">Service Area</div>
                  <div class="contact-item-val">The Shoals, Alabama (Florence & Muscle Shoals)</div>
                </div>
              </div>
            </div>
          </div>

          <!-- Contact Form Box -->
          <div class="contact-form-box">
            <h3 class="contact-form-title">Send a Direct Property Inquiry</h3>
            <p class="contact-form-subtitle">Fill in your requirements below and we will get back to you promptly.</p>

            <form id="propertyInquiryForm">
              <div class="form-row">
                <div class="form-group">
                  <label for="contactName" class="form-label">Your Name *</label>
                  <input type="text" id="contactName" class="form-control" placeholder="John Smith" required>
                </div>
                <div class="form-group">
                  <label for="contactPhone" class="form-label">Phone Number *</label>
                  <input type="tel" id="contactPhone" class="form-control" placeholder="(256) 000-0000" required>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group">
                  <label for="contactEmail" class="form-label">Email Address *</label>
                  <input type="email" id="contactEmail" class="form-control" placeholder="john@example.com" required>
                </div>
                <div class="form-group">
                  <label for="contactDivision" class="form-label">Division / Interest</label>
                  <select id="contactDivision" class="form-control">
                    <option value="General Inquiry">General Commercial Inquiry</option>
                    <option value="Retail">Retail Storefronts</option>
                    <option value="Flex">Flex Warehouse & Office</option>
                    <option value="Land Leases">Commercial Land Leases</option>
                    <option value="Build to Suit">Build to Suit Project</option>
                    <option value="Residential">Residential Development</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="contactMessage" class="form-label">Tell Us About Your Space Requirements</label>
                <textarea id="contactMessage" class="form-control" placeholder="Estimated square footage, intended business use, timeline, or specific property location..." required></textarea>
              </div>

              <button type="submit" class="btn-primary btn-form-submit" id="btnSubmitInquiry">
                Send Direct Message to Jeff & Lynn
              </button>

              <div class="form-toast" id="formSuccessToast">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="#2ecc71">
                  <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                </svg>
                <span>Thank you! Your message has been sent directly to Jeff & Lynn Griffin. We will reply promptly.</span>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
