/* ==========================================================================
   Griffin Brothers Properties — Interactive Logic
   ========================================================================== */

document.addEventListener('DOMContentLoaded', () => {
  // 1. Sticky Header Scroll Effect
  const header = document.querySelector('.site-header');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 40) {
      header?.classList.add('scrolled');
    } else {
      header?.classList.remove('scrolled');
    }
  });

  // 2. Mobile Navigation Toggle
  const mobileToggle = document.getElementById('mobileToggle');
  const navLinks = document.getElementById('navLinks');
  
  if (mobileToggle && navLinks) {
    mobileToggle.addEventListener('click', () => {
      navLinks.classList.toggle('active');
      mobileToggle.classList.toggle('open');
    });

    // Close menu when clicking a link
    navLinks.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
        navLinks.classList.remove('active');
        mobileToggle.classList.remove('open');
      });
    });
  }

  // 3. Division Quick Inquire Buttons -> Autofill Contact Form
  const divisionButtons = document.querySelectorAll('.btn-division-inquire');
  const divisionSelect = document.getElementById('contactDivision');
  const contactSection = document.getElementById('contact');

  divisionButtons.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      const divisionName = btn.getAttribute('data-division');
      if (divisionSelect && divisionName) {
        divisionSelect.value = divisionName;
      }
      if (contactSection) {
        contactSection.scrollIntoView({ behavior: 'smooth' });
        // subtle highlight effect on form
        const formBox = document.querySelector('.contact-form-box');
        if (formBox) {
          formBox.style.borderColor = 'var(--gold-primary)';
          setTimeout(() => {
            formBox.style.borderColor = 'var(--border-medium)';
          }, 1800);
        }
      }
    });
  });

  // 4. Contact Form Submission Simulation
  const leadForm = document.getElementById('propertyInquiryForm');
  const formToast = document.getElementById('formSuccessToast');

  if (leadForm) {
    leadForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const submitBtn = leadForm.querySelector('button[type="submit"]');
      const originalText = submitBtn.innerHTML;
      
      submitBtn.disabled = true;
      submitBtn.innerHTML = 'Sending Inquiry...';

      setTimeout(() => {
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalText;
        leadForm.reset();
        
        if (formToast) {
          formToast.classList.add('active');
          setTimeout(() => {
            formToast.classList.remove('active');
          }, 6000);
        }
      }, 900);
    });
  }

  // 5. Gallery Lightbox Handling (for Gallery page or interactive images)
  const lightboxModal = document.getElementById('lightboxModal');
  const lightboxImg = document.getElementById('lightboxImg');
  const lightboxCaption = document.getElementById('lightboxCaption');
  const lightboxClose = document.getElementById('lightboxClose');

  document.querySelectorAll('[data-lightbox]').forEach(item => {
    item.addEventListener('click', () => {
      const src = item.getAttribute('data-src') || item.querySelector('img')?.getAttribute('src');
      const caption = item.getAttribute('data-caption') || item.querySelector('img')?.getAttribute('alt') || '';
      
      if (lightboxModal && lightboxImg && src) {
        lightboxImg.src = src;
        if (lightboxCaption) lightboxCaption.textContent = caption;
        lightboxModal.classList.add('active');
      }
    });
  });

  if (lightboxClose && lightboxModal) {
    lightboxClose.addEventListener('click', () => {
      lightboxModal.classList.remove('active');
    });
    lightboxModal.addEventListener('click', (e) => {
      if (e.target === lightboxModal) {
        lightboxModal.classList.remove('active');
      }
    });
  }

  // 6. Gallery Filtering (on gallery.html)
  const filterButtons = document.querySelectorAll('.filter-btn');
  const galleryItems = document.querySelectorAll('.gallery-item');

  filterButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      filterButtons.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const filter = btn.getAttribute('data-filter');
      galleryItems.forEach(item => {
        if (filter === 'all' || item.getAttribute('data-category') === filter) {
          item.style.display = 'block';
        } else {
          item.style.display = 'none';
        }
      });
    });
  });
});
