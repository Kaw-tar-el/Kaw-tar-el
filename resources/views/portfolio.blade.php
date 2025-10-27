<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kawtar El Azrak | Portfolio</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
</head>
<body class="bg-fuchsia-50 text-gray-900">
  <nav class="sticky top-0 z-50 bg-white/80 backdrop-blur-md shadow">
    <div class="max-w-7xl mx-auto flex justify-center gap-8 py-3">
      <a href="#about" class="text-fuchsia-900 font-medium hover:text-fuchsia-700">About</a>
      <a href="#projects" class="text-fuchsia-900 font-medium hover:text-fuchsia-700">Projects</a>
      <a href="#certificates" class="text-fuchsia-900 font-medium hover:text-fuchsia-700">Certificates</a>
      <a href="#contact" class="text-fuchsia-900 font-medium hover:text-fuchsia-700">Contact me</a>
    </div>
  </nav>

<section id="about" class="py-16 flex items-center justify-center">
  <div id="container" class="flex flex-col items-center gap-8 transition-all duration-700 ease-in-out">

    <div id="profile" class="flex flex-col items-center text-center transition-all duration-700 ease-in-out">
      <img src="/img/me.jpeg" class="w-[280px] h-[280px] rounded-full shadow-lg object-cover" alt="Profile">
      <h1 class="text-3xl text-fuchsia-900 font-bold mt-4">Kawtar El Azrak</h1>
      <p class="text-gray-600 mt-2">Applied Economics & Data Science Master</p>
      <p class="text-gray-500 text-sm mt-1">FSJES Meknès | Passionate about data, research & technology</p>
      <div class="mt-6 flex justify-center gap-4">
        <a href="#projects" class="bg-fuchsia-900 text-white px-4 py-2 rounded-xl hover:bg-fuchsia-700">View Projects</a>
        <a href="/files/cv.pdf" class="border bg-white border-fuchsia-900 text-fuchsia-900 px-4 py-2 rounded-xl hover:border-fuchsia-700
         hover:text-fuchsia-900 hover:bg-fuchsia-50">Download CV</a>
      </div>
    </div>

    <div id="skills-container" class="opacity-0 transform translate-y-8
     transition-all duration-700 ease-in-out w-24">

      @foreach ($skills as $category => $categorySkills)
        <div class="flex items-start gap-4 mb-6">
          <div class="w-40 flex-shrink-0 text-right pr-4">
          <p class="text-fuchsia-900 font-bold">{{ $category }}</p>
        </div>

          <div class="flex items-start gap-4 mb-2">
            @foreach ($categorySkills as $skill)
              <div class="bg-white shadow p-3 rounded-xl text-center hover:bg-fuchsia-50 hover:scale-105 transition-transform duration-300 w-20">
                <img src="{{ asset($skill->icon) }}" class="h-6 mx-auto" alt="{{ $skill->name }}">
                <p class="text-fuchsia-900 text-xs font-semibold">{{ $skill->name }}</p>
              </div>
            @endforeach
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
<section id="education" class="py-16 bg-fuchsia-50">
  <h2 class="text-3xl font-bold text-center text-fuchsia-900 mb-10">Education</h2>
  <div class="max-w-4xl mx-auto px-6 space-y-8">
    @foreach ($educations as $education)
    <div class="bg-white p-6 rounded-2xl shadow">
      <h3 class="text-xl font-semibold text-fuchsia-900">{{$education->title}}</h3>
      <p class="text-gray-600">{{$education->information}}</p>
      <p class="text-sm text-gray-500 mt-2">{{$education->focus}}</p>
    </div>
    @endforeach
</section>

<section id="projects" class="py-16 bg-fuchsia-50">
  <h2 class="text-4xl font-bold text-center text-fuchsia-900 mb-10">Projects</h2>

  <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-3 px-6 max-w-6xl mx-auto">
    @foreach($projects as $project)
      <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden flex flex-col">
        
        <div class="relative group">
          <img src="{{ asset($project->image) }}" alt="{{ $project->title }}" 
               class="w-full h-56 object-cover rounded-t-2xl transition-transform duration-300 group-hover:scale-105">
          @if($project->category)
            <span class="absolute top-3 left-3 bg-fuchsia-900 text-white text-xs font-semibold px-3 py-1 rounded-full">
              {{ $project->category }}
            </span>
          @endif
        </div>

        <div class="p-5 flex flex-col justify-between flex-1">
          <div>
            <h3 class="text-xl font-semibold text-fuchsia-900 mb-2">{{ $project->title }}</h3>
            <p class="text-gray-600 text-sm leading-relaxed mb-3 line-clamp-3">{{ $project->description }}</p>
            <p class="text-sm text-gray-500 italic">{{ $project->tools }}</p>
          </div>

          <div class="mt-4 flex gap-3">
            @if($project->demo)
              <a href="{{ $project->demo }}" target="_blank"
                 class="bg-fuchsia-900 text-white px-4 py-2 rounded-xl text-sm hover:bg-fuchsia-700 transition">
                Live Demo
              </a>
            @endif
            <a href="{{ $project->url }}" target="_blank"
               class="border border-fuchsia-900 text-fuchsia-900 px-4 py-2 rounded-xl text-sm hover:border-fuchsia-700 hover:text-fuchsia-700 transition">
              View Code
            </a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</section>


<section id="certificates" class="py-12 bg-fuchsia-50 text-center">
    <h2 class="text-3xl font-bold text-fuchsia-900 mb-8">Certificates</h2>
    <div class="swiper mySwiper px-4">
        <div class="swiper-wrapper">
            @foreach ($certificates as $index => $cert)
                <div class="swiper-slide bg-white p-4 rounded-xl shadow flex flex-col items-center w-[80px] cursor-pointer"
                     data-modal-target="#certModal{{ $index }}">
                    <img src="{{ asset($cert->image) }}"
                         alt="{{ $cert->title }}"
                         class="h-32 w-full object-contain mb-4 hover:scale-105 transition-transform duration-300">
                    <p class="font-semibold text-sm text-fuchsia-900">{{ $cert->title }}</p>
                    <p class="text-fuchsia-700 text-sm">{{ $cert->issuer }}</p>
                </div>
            @endforeach
        </div>
        <div class="swiper-button-next text-fuchsia-900"></div>
        <div class="swiper-button-prev text-fuchsia-900"></div>
    </div>
</section>
@forEach ($certificates as $index => $cert)
  <div id="certModal{{ $index }}" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white rounded-lg max-w-3xl w-full mx-4 overflow-hidden">
      <div class="flex justify-between items-center p-4 border-b">
          <h5 class="text-lg font-semibold">{{ $cert->title }}</h5>
          <button class="text-xl text-gray-500 px-4 py-2 hover:text-gray-700"
           onclick="document.getElementById('certModal{{ $index }}').classList.add('hidden')">&times;</button>
      </div>
      <div class="p-4 text-center">
      <img src="{{ asset($cert->image) }}"
        alt="{{ $cert->title }}"
        class="mx-auto max-h-[80vh] rounded mb-4">
            @if($cert->link)
                <a href="{{ asset($cert->link) }}" target="_blank"
                   class="mt-4 inline-block px-4 py-2 bg-fuchsia-900 text-white rounded hover:bg-fuchsia-100 transition">
                    Go to Link
                </a>
            @endif
        </div>
    </div>
  </div>
@endforeach
<section id="contact" class="py-16 bg-white text-center">
  <h2 class="text-3xl font-bold text-fuchsia-900 mb-8">Contact Me</h2>
  <p class="text-gray-600 mb-6">Feel free to reach out for collaborations, questions, or opportunities.</p>

  <div class="flex flex-col items-center gap-4">
    <a href="mailto:kawtarelazrak12@gmail.com"
       class="bg-fuchsia-900 text-white px-6 py-3 rounded-xl hover:bg-fuchsia-700 transition-all duration-300">
       Send Email
    </a>
    <div class="flex gap-6 mt-4">
      <a href="www.linkedin.com/in/kawtar-el-azrak-9630b8220" target="_blank" class="text-fuchsia-900 hover:text-fuchsia-700 text-2xl">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="https://github.com/Kaw-tar-el" target="_blank" class="text-fuchsia-900 hover:text-fuchsia-700 text-2xl">
        <i class="fab fa-github"></i>
      </a>
      <a href="https://x.com/your-twitter" target="_blank" class="text-fuchsia-900 hover:text-fuchsia-700 text-2xl">
        <i class="fab fa-x-twitter"></i>
      </a>
    </div>
  </div>
</section>

<script>
const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('opacity-100', 'translate-y-0');
    }
  });
}, { threshold: 0.2 });

document.querySelectorAll('#education, #contact').forEach(section => {
  section.classList.add('opacity-0', 'translate-y-8', 'transition-all', 'duration-700');
  observer.observe(section);
});
</script>

<script>
    const swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 20,
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            640: { slidesPerView: 2 },
            768: { slidesPerView: 3 },
            1024: { slidesPerView: 5 }
        }
    });

    document.querySelectorAll('.swiper-slide[data-modal-target]').forEach(btn => {
        btn.addEventListener('click', () => {
            const modal = document.querySelector(btn.dataset.modalTarget);
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        });
    });
</script>

<footer class="text-center py-6 bg-white/80 backdrop-blur-md shadow text-fuchsia-900 text-sm">
    &copy; {{ date('Y') }} Kawtar El Azrak. All rights reserved.
</footer>
  <script>
  document.addEventListener("DOMContentLoaded", () => {
    const profile = document.getElementById('profile');
    const container = document.getElementById('container');
    const skillsContainer = document.getElementById('skills-container');
    const skills = skillsContainer.querySelectorAll('div.flex > div');

    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          container.classList.add('lg:flex-row', 'justify-start', 'items-start', 'gap-8');

          profile.classList.add('md:translate-x-[-200px]');
          skillsContainer.classList.remove('opacity-0', 'translate-y-8');
          skillsContainer.classList.add('opacity-100', 'translate-x-[-100px]');

          skills.forEach((skill, index) => {
            setTimeout(() => {
              skill.classList.remove('opacity-0', 'translate-y-4');
              skill.classList.add('opacity-100', 'translate-y-0');
            }, index * 100);
          });
        }
      });
    }, { threshold: 0.5 });
    observer.observe(skillsContainer);
  });
  </script>
</body>
</html>