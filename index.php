<?php
// Simple router to simulate multiple pages
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$page_title = ucfirst(str_replace('-', ' ', $page));
if ($page === 'home') {
    $page_title = 'A Global Energy Trading Leader';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Falco Corporation | <?php echo $page_title; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        :root {
            --color-primary-blue: #1e3a8a; 
            --color-accent-blue: #3b82f6;
            --color-light-gray: #f8fafc;
            --color-medium-gray: #e2e8f0;
            --color-text: #111827;
            --color-text-light: #f9fafb;
        }
        html { scroll-behavior: smooth; }
        body { font-family: 'Inter', sans-serif; color: var(--color-text); background-color: white; }
        .bg-primary-blue { background-color: var(--color-primary-blue); }
        .text-primary-blue { color: var(--color-primary-blue); }
        .border-primary-blue { border-color: var(--color-primary-blue); }

        /* Header */
        #header { transition: background-color 0.3s ease, box-shadow 0.3s ease; }
        #header.scrolled { background-color: white; box-shadow: 0 2px 10px rgba(0,0,0,0.05); }
        #header.scrolled .logo-img { filter: none; }
        #header.scrolled .menu-icon, #header.scrolled .search-icon { color: var(--color-text); }
        .logo-img { filter: brightness(0) invert(1); transition: filter 0.3s ease; }
        .menu-icon, .search-icon { transition: color 0.3s ease; }

        /* Fullscreen Menu */
        #fullscreen-menu {
            position: fixed; top: 0; left: 0; width: 100%; height: 100%;
            background-color: var(--color-primary-blue); z-index: 100;
            transform: translateY(-100%); transition: transform 0.5s cubic-bezier(0.77, 0, 0.175, 1);
            display: flex; flex-direction: column; justify-content: center;
            overflow-y: auto;
        }
        #fullscreen-menu.open { transform: translateY(0); }
        #fullscreen-menu a {
            color: var(--color-text-light); font-size: 2.5rem; font-weight: 700; margin: 1rem 0;
            text-transform: uppercase; letter-spacing: 0.05em;
            transition: color 0.3s ease, transform 0.3s ease; transform: translateX(-20px); opacity: 0;
        }
        #fullscreen-menu a:hover { color: var(--color-accent-blue); }
        #fullscreen-menu.open a {
            transform: translateX(0); opacity: 1;
            transition: transform 0.5s cubic-bezier(0.23, 1, 0.32, 1), opacity 0.5s ease;
        }

        /* Hero & Page Headers */
        .hero-section, .page-header {
            background-color: var(--color-primary-blue); color: var(--color-text-light);
            display: flex; align-items: center; justify-content: center; text-align: center;
            position: relative; overflow: hidden;
        }
        .hero-section { height: 100vh; }
        .page-header { height: 60vh; min-height: 400px; }
        .hero-background {
            position: absolute; top: 0; left: 0; width: 100%; height: 100%;
            object-fit: cover; opacity: 0.15; filter: grayscale(100%);
        }
        img.hero-background {
            animation: slowZoom 20s infinite alternate ease-in-out;
        }
        @keyframes slowZoom { from { transform: scale(1); } to { transform: scale(1.1); } }
        
        .themed-button {
            background-color: transparent; border: 2px solid var(--color-text-light);
            padding: 1rem 2rem; border-radius: 0;
            font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        .themed-button:hover { background-color: var(--color-text-light); color: var(--color-primary-blue); }

        /* Animations */
        .reveal { opacity: 0; transform: translateY(40px); transition: opacity 0.8s ease-out, transform 0.8s ease-out; }
        .reveal.visible { opacity: 1; transform: translateY(0); }

        /* News Slider */
        .slider-container { position: relative; }
        .slider-track { display: flex; transition: transform 0.5s ease-in-out; }
        .slider-item { min-width: 90%; }
        @media (min-width: 768px) { .slider-item { min-width: 45%; } }
        @media (min-width: 1024px) { .slider-item { min-width: 30%; } }
        .slider-card {
            border: 1px solid var(--color-medium-gray); padding: 2rem; height: 100%;
            display: flex; flex-direction: column; justify-content: space-between;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .slider-card:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,0.05); }
        .slider-arrow-button {
            border: 1px solid var(--color-medium-gray); width: 40px; height: 40px; border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            transition: background-color 0.3s, border-color 0.3s;
        }
        .slider-arrow-button:hover { background-color: var(--color-light-gray); }

        .link-arrow { display: inline-flex; align-items: center; font-weight: 600; color: var(--color-primary-blue); }
        .link-arrow span { transition: transform 0.3s ease; display: inline-block; }
        .link-arrow:hover span { transform: translateX(4px); }
        
        /* General Styling */
        .section-title { font-size: 2.25rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; }
    </style>
</head>
<body>

    <header id="header" class="fixed top-0 left-0 right-0 z-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex-1 flex justify-start">
                    <button id="menu-toggle" class="p-2">
                        <svg class="menu-icon h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                    </button>
                </div>
                <div class="flex-1 flex justify-center">
                    <a href="index.php?page=home">
                        <img src="images/logo.png" alt="Falco Corporation Logo" class="h-8 w-auto logo-img">
                    </a>
                </div>
                <div class="flex-1 flex justify-end">
                    <button class="p-2">
                         <svg class="search-icon h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <div id="fullscreen-menu">
        <button id="menu-close" class="absolute top-7 right-7 p-2 text-white">
            <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>
        <div class="text-center">
            <a href="index.php?page=about" style="transition-delay: 0.1s;">Who we are</a>
            <a href="index.php?page=what-we-do" style="transition-delay: 0.2s;">What we do</a>
            <a href="index.php?page=products" style="transition-delay: 0.2s;">Products & Solutions</a>
            <a href="index.php?page=global-reach" style="transition-delay: 0.2s;">Global Reach</a>
            <a href="index.php?page=future-goals" style="transition-delay: 0.2s;">Future Goals</a>
            <a href="index.php?page=history" style="transition-delay: 0.4s;">History</a>
            <a href="index.php?page=sustainability" style="transition-delay: 0.3s;">Sustainability</a>
            <a href="index.php?page=teams" style="transition-delay: 0.2s;">Leadership & Teams</a>
            <a href="index.php?page=careers" style="transition-delay: 0.4s;">Careers</a>
            <a href="index.php?page=home#news" style="transition-delay: 0.5s;">News & Insights</a>
            <a href="index.php?page=contact" style="transition-delay: 0.6s;">Contact</a>
        </div>
    </div>

    <main>
        <?php
        $page_file = 'pages/' . $page . '.php';
        if (file_exists($page_file)) { include $page_file; } 
        else { include 'pages/home.php'; }
        ?>
    </main>

    <footer class="bg-white border-t border-gray-200">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8">
                <div class="col-span-2 lg:col-span-2">
                     <a href="index.php?page=home"><img src="images/logo.png" alt="Falco Corporation Logo" class="h-8 w-auto mb-4"></a>
                     <div class="flex space-x-4">
                        <a href="#" class="text-gray-500 hover:text-primary-blue"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.71v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path></svg></a>
                         <a href="#" class="text-gray-500 hover:text-primary-blue"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.28 1.545H6.285v8.59H3.725v-8.59zM17.638 2H6.362A4.362 4.362 0 002 6.362v11.276A4.362 4.362 0 006.362 22h11.276A4.362 4.362 0 0022 17.638V6.362A4.362 4.362 0 0017.638 2z" clip-rule="evenodd"></path></svg></a>
                    </div>
                </div>
                <div>
                    <h5 class="font-bold mb-4 uppercase">Company</h5>
                    <ul>
                        <li class="mb-2"><a href="index.php?page=about" class="hover:text-primary-blue">Who we are</a></li>
                        <li class="mb-2"><a href="index.php?page=what-we-do" class="hover:text-primary-blue">What we do</a></li>
                        <li class="mb-2"><a href="index.php?page=contact" class="hover:text-primary-blue">Contact us</a></li>
                    </ul>
                </div>
                 <div>
                    <h5 class="font-bold mb-4 uppercase">Focus Areas</h5>
                    <ul>
                        <li class="mb-2"><a href="index.php?page=sustainability" class="hover:text-primary-blue">Sustainability</a></li>
                         <li class="mb-2"><a href="index.php?page=milestones" class="hover:text-primary-blue">Milestones</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="font-bold mb-4 uppercase">People</h5>
                    <ul>
                        <li class="mb-2"><a href="index.php?page=careers" class="hover:text-primary-blue">Careers</a></li>
                        <li class="mb-2"><a href="#" class="hover:text-primary-blue">Speak Up</a></li>
                    </ul>
                </div>
                 <div>
                    <h5 class="font-bold mb-4 uppercase">Language</h5>
                     <select class="bg-white border border-gray-300 rounded-md p-2 w-full">
                        <option>English</option>
                        <option>Français</option>
                        <option>Português</option>
                        <option>中文</option>
                    </select>
                </div>
            </div>
             <div class="mt-12 border-t border-gray-200 pt-8 text-sm text-gray-500 md:flex justify-between">
                <p class="mb-4 md:mb-0">&copy; <?php echo date("Y"); ?> Falco Corporation</p>
                <div class="flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-4">
                    <a href="#" class="hover:text-primary-blue">Legal</a>
                    <a href="#" class="hover:text-primary-blue">Privacy Notice</a>
                    <a href="#" class="hover:text-primary-blue">Recruitment Privacy Notice</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const header = document.getElementById('header');
        const menuToggle = document.getElementById('menu-toggle');
        const menuClose = document.getElementById('menu-close');
        const fullscreenMenu = document.getElementById('fullscreen-menu');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) { header.classList.add('scrolled'); } 
            else { header.classList.remove('scrolled'); }
        });

        menuToggle.addEventListener('click', () => fullscreenMenu.classList.add('open'));
        menuClose.addEventListener('click', () => fullscreenMenu.classList.remove('open'));
        fullscreenMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => fullscreenMenu.classList.remove('open'));
        });

        const revealElements = document.querySelectorAll('.reveal');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });
        revealElements.forEach(el => observer.observe(el));
        
        const track = document.getElementById('slider-track');
        if (track) {
            const prevBtn = document.getElementById('prev-btn');
            const nextBtn = document.getElementById('next-btn');
            const items = document.querySelectorAll('.slider-item');
            let index = 0;
            const totalItems = items.length;
            let itemWidth = items.length > 0 ? (items[0].getBoundingClientRect().width) : 0;
            
            function updateSlider() { if (itemWidth > 0) track.style.transform = `translateX(-${index * itemWidth}px)`; }
            
            function getVisibleSlides() {
                if (window.innerWidth >= 1024) return 3;
                if (window.innerWidth >= 768) return 2;
                return 1;
            }

            nextBtn.addEventListener('click', () => {
                const maxIndex = totalItems - getVisibleSlides();
                if (index < maxIndex) { index++; updateSlider(); }
            });
            prevBtn.addEventListener('click', () => { if (index > 0) { index--; updateSlider(); } });
            
            window.addEventListener('resize', () => {
                itemWidth = items.length > 0 ? items[0].getBoundingClientRect().width : 0;
                const maxIndex = totalItems - getVisibleSlides();
                if (index > maxIndex) index = maxIndex;
                updateSlider();
            });
            itemWidth = items.length > 0 ? items[0].getBoundingClientRect().width : 0;
        }
    });
    </script>
</body>
</html>

