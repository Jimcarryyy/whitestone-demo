document.addEventListener('DOMContentLoaded', () => {
  // ===== Mobile Navigation Toggle =====
  const toggleBtn = document.getElementById('mobile-menu-toggle');
  const mobileNav = document.getElementById('mobile-nav');

  if (toggleBtn && mobileNav) {
    toggleBtn.addEventListener('click', () => {
      mobileNav.classList.toggle('active');
    });
  }

  // ===== Infinite Slider Duplicate Content =====
  const slider = document.getElementById('slider');
  if (slider) {
    slider.innerHTML += slider.innerHTML; // Doubles the content for smooth looping
  }

  // ===== Scroll-Triggered "Arrow Up" Visibility =====
  const arrowUp = document.querySelector('.fa-arrow-up');
  const homeSection = document.getElementById('home');

  if (arrowUp && homeSection) {
    window.addEventListener('scroll', () => {
      const homeBottom = homeSection.offsetTop + homeSection.offsetHeight;
      const scrollPos = window.scrollY;
      arrowUp.classList.toggle('visible', scrollPos > homeBottom);
    });

    arrowUp.addEventListener('click', () => {
      slowScrollToTop(1000); // Scroll to top in 1 second
    });
  }

  // ===== Sticky Header =====
  const header = document.getElementById("masthead");
  window.addEventListener("scroll", () => {
    if (window.scrollY > 0) {
      header.classList.add("is-sticky");
    } else {
      header.classList.remove("is-sticky");
    }
  });

  // ===== Fade-In Section Animation =====
  const fadeSections = document.querySelectorAll('.fade-in-section');

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target); // Fade in only once
      }
    });
  }, {
    threshold: 0.2
  });

  fadeSections.forEach(section => {
    observer.observe(section);
  });

  // ===== Testimonial Auto-Slider (LIFO) =====
  const container = document.querySelector('.testimonial-cards');

  if (container) {
    const interval = setInterval(() => {
      const visibleCards = Array.from(container.querySelectorAll('.t-cards:not(.hidden)'));
      const hiddenCards = Array.from(container.querySelectorAll('.t-cards.hidden'));

      if (hiddenCards.length === 0 || visibleCards.length === 0) {
        clearInterval(interval);
        return;
      }

      const lastVisible = visibleCards.pop();
      lastVisible.classList.add('hidden');

      const nextCard = hiddenCards[0];
      nextCard.classList.remove('hidden');
      container.insertBefore(nextCard, container.firstChild);
    }, 3000);
  }
});

// ===== Smooth Scroll to Top (Custom) =====
function slowScrollToTop(duration) {
  const start = window.scrollY;
  const startTime = performance.now();

  function scrollStep(currentTime) {
    const elapsed = currentTime - startTime;
    const progress = Math.min(elapsed / duration, 1);
    const ease = easeInOutCubic(progress);
    window.scrollTo(0, start * (1 - ease));

    if (progress < 1) {
      requestAnimationFrame(scrollStep);
    }
  }

  requestAnimationFrame(scrollStep);
}

// ===== Easing Function for Smooth Scroll =====
function easeInOutCubic(t) {
  return t < 0.5
    ? 4 * t * t * t
    : 1 - Math.pow(-2 * t + 2, 3) / 2;
}
