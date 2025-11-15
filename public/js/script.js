// YEAR
document.getElementById('year').textContent = new Date().getFullYear();

// MOBILE MENU
const mobileBtn = document.getElementById('mobileMenuBtn');
const mobileMenu = document.getElementById('mobileMenu');

mobileBtn.addEventListener('click', () => {
  mobileMenu.classList.toggle('hidden');
});

// DOWNLOAD RESUME
const downloadLinks = [
  document.getElementById('downloadResume'),
  document.getElementById('downloadResumeMobile')
];

downloadLinks.forEach(link => {
  if (link) {
    link.addEventListener('click', (e) => {
      e.preventDefault();
      window.open('resume.pdf', '_blank');
    });
  }
});

// CONTACT FORM
const form = document.getElementById('contactForm');
const status = document.getElementById('formStatus');

form.addEventListener('submit', (e) => {
  e.preventDefault();
  const data = new FormData(form);

  const subject = encodeURIComponent('Portfolio Contact from ' + data.get('name'));
  const body = encodeURIComponent(data.get('message') + "\n\nEmail: " + data.get('email'));

  window.location.href = `mailto:amtjrshilardo@gmail.com?subject=${subject}&body=${body}`;

  status.textContent = 'Opening email client...';
  setTimeout(() => status.textContent = 'Message intent sent — please check your email client.', 1200);
});

// FADE-IN OBSERVER
const obs = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) entry.target.classList.add('visible');
  });
}, { threshold: 0.15 });

document.querySelectorAll('.fade-up').forEach(el => obs.observe(el));
