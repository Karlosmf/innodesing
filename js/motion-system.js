// Founder Breathing Icons (only on /about section)
// Respects prefers-reduced-motion
document.addEventListener('DOMContentLoaded', function() {
  if (!document.querySelector('#about')) return;

  const reactIcon = document.querySelector('.react-icon');
  const databaseIcon = document.querySelector('.database-icon');

  if (reactIcon) {
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      reactIcon.style.animation = 'none';
      reactIcon.style.transform = 'scale(1)';
    } else {
      reactIcon.style.animation = 'reactPulse 4s ease-in-out infinite';
    }
  }

  if (databaseIcon) {
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      databaseIcon.style.animation = 'none';
      databaseIcon.style.transform = 'scale(1)';
    } else {
      databaseIcon.style.animation = 'dbBlink 6s ease-in-out infinite';
    }
  }
});

// Intersection Observer Triggers (±0.2s staggered)
document.addEventListener('DOMContentLoaded', function() {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry, index) => {
      if (entry.isIntersecting) {
        setTimeout(() => {
          entry.target.style.opacity = '1';
          entry.target.style.transform = 'translateY(0)';
          entry.target.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
        }, index * 200 - 200 + Math.random() * 40 - 20); // ±0.2s randomness
      }
    });
  }, {
    threshold: 0.5,
    rootMargin: '0px 0px -50px 0px'
  });

  // Observe all .reveal elements (added in HTML)
  document.querySelectorAll('.reveal').forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(20px)';
    el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
    observer.observe(el);
  });
});

// Nav Link φ-Spacing Reveal (golden ratio 0.618)
document.addEventListener('DOMContentLoaded', function() {
  const navLinks = document.querySelectorAll('.nav-link');
  const delays = [0, 0.618, 1.236, 1.854]; // φ-spaced delays in seconds

  navLinks.forEach((link, index) => {
    if (link.style.transitionDelay) {
      const existingDelay = parseFloat(link.style.transitionDelay);
      link.style.transitionDelay = `${Math.max(existingDelay, delays[index])}s`;
    } else {
      link.style.transitionDelay = `${delays[index]}s`;
    }
  }
});
