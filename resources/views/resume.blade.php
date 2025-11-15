<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>John Ramil Hilardo — Portfolio</title>
  <!-- Tailwind CDN for quick prototyping -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-slate-100 antialiased leading-relaxed">
  <!-- NAV -->
  <header class="fixed w-full z-30">
    <div class="max-w-5xl mx-auto px-6 py-4 flex items-center justify-between">
      <a href="#home" class="flex items-center gap-3">
        <div class="w-10 h-10 rounded-full bg-gradient-to-br from-emerald-400 to-cyan-400 flex items-center justify-center font-bold text-slate-900">JR</div>
        <div class="hidden sm:block">
          <div class="text-sm font-semibold">John Ramil Hilardo</div>
          <div class="text-xs text-slate-300">BS Computer Science</div>
        </div>
      </a>

      <nav class="hidden md:flex gap-6 items-center text-sm">
        <a href="#about" class="hover:text-emerald-300">About</a>
        <a href="#projects" class="hover:text-emerald-300">Projects</a>
        <a href="#skills" class="hover:text-emerald-300">Skills</a>
        <a href="#education" class="hover:text-emerald-300">Education</a>
        <a href="#contact" class="hover:text-emerald-300">Contact</a>
        <a href="#" id="downloadResume" class="ml-2 inline-block bg-emerald-400 text-slate-900 px-3 py-1 rounded text-sm font-medium">Download Resume</a>
      </nav>

      <div class="md:hidden">
        <button id="mobileMenuBtn" class="p-2 rounded bg-slate-800/40">☰</button>
      </div>
    </div>

    <!-- Mobile menu -->
    <div id="mobileMenu" class="hidden bg-slate-800/60 glass">
      <div class="max-w-5xl mx-auto px-6 py-4 flex flex-col gap-3">
        <a href="#about" class="hover:text-emerald-300">About</a>
        <a href="#projects" class="hover:text-emerald-300">Projects</a>
        <a href="#skills" class="hover:text-emerald-300">Skills</a>
        <a href="#education" class="hover:text-emerald-300">Education</a>
        <a href="#contact" class="hover:text-emerald-300">Contact</a>
        <a href="#" id="downloadResumeMobile" class="mt-2 inline-block bg-emerald-400 text-slate-900 px-3 py-1 rounded text-sm font-medium">Download Resume</a>
      </div>
    </div>
  </header>

  <!-- HERO -->
  <main class="pt-28">
    <section id="home" class="hero-bg py-20">
      <div class="max-w-5xl mx-auto px-6 grid md:grid-cols-2 gap-8 items-center">
        <div class="text-center md:text-left">
          <h1 class="text-4xl sm:text-5xl font-extrabold">Hi, I'm <span class="text-emerald-300">John Ramil</span></h1>
          <p class="mt-4 text-slate-200 max-w-xl">BS Computer Science student at City College of Angeles. I build clean, functional web apps using PHP, Laravel, JavaScript, and Tailwind. I enjoy solving problems and turning ideas into working projects.</p>

          <div class="mt-6 flex flex-wrap gap-3 items-center justify-center md:justify-start">
            <a href="#projects" class="inline-block bg-transparent border border-emerald-300 text-emerald-300 px-4 py-2 rounded hover:bg-emerald-300 hover:text-slate-900 transition">View Projects</a>
            <a href="#contact" class="inline-block bg-emerald-400 text-slate-900 px-4 py-2 rounded">Contact Me</a>
            <a href="https://github.com/CSrvmzyyy" target="_blank" class="inline-flex items-center gap-2 text-sm text-slate-200 ml-2">GitHub ↗</a>
          </div>

          <div class="mt-6 text-sm text-slate-300">Location: Angeles City, Philippines • Expected Grad: 2027</div>
        </div>

        <div class="flex items-center justify-center">
          <!-- Profile card -->
          <div class="w-64 sm:w-72 bg-slate-800/40 glass rounded-2xl p-5 text-center shadow-xl">
          <img src="/images/profile2.jpg" alt="Profile Photo"
     onerror="this.src='https://via.placeholder.com/200x200.png?text=profile'"
     class="mx-auto w-36 h-36 object-cover rounded-full border-2 border-emerald-400">

            <h3 class="mt-4 text-xl font-semibold">John Ramil Hilardo</h3>
            <p class="text-sm text-slate-300">2nd Year • BS Computer Science</p>
            <div class="mt-4 flex justify-center gap-3 text-slate-200">
              <a href="mailto:amtjrshilardo@gmail.com" title="Email">✉️</a>
              <a href="https://github.com/CSrvmzyyy" target="_blank" title="GitHub">🐱</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="max-w-5xl mx-auto px-6 py-16">
      <div class="grid md:grid-cols-3 gap-8 items-start">
        <div class="md:col-span-2">
          <h2 class="text-2xl font-bold">About Me</h2>
          <p class="mt-4 text-slate-300">I am a focused Computer Science student with interest in backend and web development. I enjoy building projects that solve real problems and learning new technologies. Most of my experience comes from academic projects, personal builds, and collaborative small teams.</p>

          <ul class="mt-4 grid sm:grid-cols-2 gap-2 text-sm text-slate-300">
            <li>• Strong fundamentals in PHP, Laravel, and MySQL</li>
            <li>• Frontend skills using HTML, CSS, JavaScript, and Tailwind</li>
            <li>• Familiar with Python for scripting and small tools</li>
            <li>• Version control with Git and GitHub</li>
          </ul>
        </div>

        <div class="md:border-l md:pl-6">
          <h3 class="text-lg font-medium">Quick Facts</h3>
          <div class="mt-3 text-sm text-slate-300 space-y-2">
            <div><strong>Email:</strong> amtjrshilardo@gmail.com</div>
            <div><strong>Phone:</strong> +63 15 879 3952</div>
            <div><strong>School:</strong> City College of Angeles</div>
            <div><strong>Graduation:</strong> 2027 (expected)</div>
          </div>
        </div>
      </div>
    </section>

    <!-- PROJECTS -->
    <section id="projects" class="bg-slate-800/30 py-16">
      <div class="max-w-5xl mx-auto px-6">
        <h2 class="text-2xl font-bold">Selected Projects</h2>
        <p class="mt-2 text-slate-300 text-sm">Projects that highlight my skills in full-stack web development.</p>

        <div class="mt-6 grid sm:grid-cols-2 gap-6">
          <!-- Card 1 -->
          <article class="bg-slate-900/60 p-5 rounded-lg shadow-lg">
            <h3 class="font-semibold text-lg">Garbage Collection Scheduling System</h3>
            <p class="text-sm text-slate-300 mt-2">A scheduling platform for residents and collectors with role-based access and a calendar-style booking system.</p>
            <div class="mt-3 text-sm text-slate-400">Tech: PHP, JavaScript, MySQL</div>
            <div class="mt-4 flex gap-3">
              <a class="text-sm inline-block bg-emerald-400 text-slate-900 px-3 py-1 rounded" href="#">View Code</a>
              <a class="text-sm inline-block border border-slate-600 px-3 py-1 rounded" href="#">Live Demo</a>
            </div>
          </article>

          <!-- Card 2 -->
          <article class="bg-slate-900/60 p-5 rounded-lg shadow-lg">
            <h3 class="font-semibold text-lg">Personal Portfolio Website</h3>
            <p class="text-sm text-slate-300 mt-2">Responsive portfolio used to showcase projects, skills, and contact information. Built with Tailwind and plain JS.</p>
            <div class="mt-3 text-sm text-slate-400">Tech: HTML, CSS, JavaScript, Tailwind</div>
            <div class="mt-4 flex gap-3">
              <a class="text-sm inline-block bg-emerald-400 text-slate-900 px-3 py-1 rounded" href="#">View Code</a>
              <a class="text-sm inline-block border border-slate-600 px-3 py-1 rounded" href="#">Live Site</a>
            </div>
          </article>

        </div>
      </div>
    </section>

    <!-- SKILLS -->
    <section id="skills" class="max-w-5xl mx-auto px-6 py-16">
      <h2 class="text-2xl font-bold">Skills</h2>
      <div class="mt-4 grid sm:grid-cols-2 gap-8">
        <div>
          <h4 class="font-medium">Technical</h4>
          <ul class="mt-3 text-slate-300 space-y-2">
            <li>• PHP & Laravel — backend development, REST APIs, MVC</li>
            <li>• MySQL — database design, queries, relationships</li>
            <li>• JavaScript — DOM, ES6, fetch, basic SPA patterns</li>
            <li>• HTML & CSS — semantic markup, responsive layouts</li>
            <li>• Tailwind CSS — utility-first styling</li>
            <li>• Python — scripting and small data tasks</li>
            <li>• Git / GitHub — version control and collaboration</li>
          </ul>
        </div>
        <div>
          <h4 class="font-medium">Professional</h4>
          <ul class="mt-3 text-slate-300 space-y-2">
            <li>• Problem Solving</li>
            <li>• Teamwork & Collaboration</li>
            <li>• Time Management</li>
            <li>• Clear Communication</li>
            <li>• Rapid Learning</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- EDUCATION -->
    <section id="education" class="bg-slate-800/30 py-16">
      <div class="max-w-5xl mx-auto px-6">
        <h2 class="text-2xl font-bold">Education</h2>
        <div class="mt-6 grid sm:grid-cols-2 gap-6">
          <div class="p-5 bg-slate-900/60 rounded-lg">
            <h3 class="font-semibold">City College of Angeles</h3>
            <p class="text-sm text-slate-300 mt-2">Bachelor of Science in Computer Science</p>
            <div class="mt-2 text-sm text-slate-400">Expected Graduation: 2027</div>
          </div>

          <div class="p-5 bg-slate-900/60 rounded-lg">
            <h3 class="font-semibold">Angeles City National High School</h3>
            <p class="text-sm text-slate-300 mt-2">Senior High — ICT / Programming Strand</p>
            <div class="mt-2 text-sm text-slate-400">2023 - 2024</div>
          </div>
        </div>
      </div>
    </section>

    <!-- CONTACT -->
    <section id="contact" class="max-w-5xl mx-auto px-6 py-16">
      <h2 class="text-2xl font-bold">Contact</h2>
      <p class="mt-2 text-slate-300">Want to collaborate or hire me for an internship? Send a message below.</p>

      <div class="mt-6 grid md:grid-cols-2 gap-8">
        <form id="contactForm" class="bg-slate-900/60 p-6 rounded-lg space-y-4">
          <div>
            <label class="text-sm text-slate-300">Name</label>
            <input name="name" required class="w-full mt-1 px-3 py-2 rounded bg-slate-800 text-slate-100 border border-slate-700" />
          </div>
          <div>
            <label class="text-sm text-slate-300">Email</label>
            <input name="email" type="email" required class="w-full mt-1 px-3 py-2 rounded bg-slate-800 text-slate-100 border border-slate-700" />
          </div>
          <div>
            <label class="text-sm text-slate-300">Message</label>
            <textarea name="message" required rows="4" class="w-full mt-1 px-3 py-2 rounded bg-slate-800 text-slate-100 border border-slate-700"></textarea>
          </div>
          <div>
            <button type="submit" class="bg-emerald-400 text-slate-900 px-4 py-2 rounded">Send Message</button>
            <span id="formStatus" class="ml-3 text-sm"></span>
          </div>
        </form>

        <div class="p-6 rounded-lg bg-slate-900/60">
          <h4 class="font-medium">Contact Info</h4>
          <div class="mt-3 text-slate-300 text-sm space-y-2">
            <div><strong>Email:</strong> <a href="mailto:amtjrshilardo@gmail.com" class="text-emerald-300">amtjrshilardo@gmail.com</a></div>
            <div><strong>Phone:</strong> <a href="tel:+63158793952" class="text-emerald-300">+63 15 879 3952</a></div>
            <div><strong>GitHub:</strong> <a href="https://github.com/CSrvmzyyy" target="_blank" class="text-emerald-300">CSrvmzyyy</a></div>
          </div>

          <h4 class="font-medium mt-6">Availability</h4>
          <p class="mt-2 text-slate-300 text-sm">Open to internships, collaborative academic projects, and mentorship opportunities.</p>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <footer class="border-t border-slate-800/50 py-8 mt-12">
      <div class="max-w-5xl mx-auto px-6 text-center text-sm text-slate-500">© <span id="year"></span> John Ramil Hilardo — Built with Tailwind • <a href="#home" class="text-emerald-300">Back to top</a></div>
    </footer>
  </main>

 
</body>
</html>
