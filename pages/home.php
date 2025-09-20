<?php
// pages/home.php
?>

<section class="hero-section">
    <video autoplay muted loop class="hero-background">
        <source src="images/video.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="relative z-10 px-4">
        <h1 class="text-4xl md:text-6xl font-bold leading-tight reveal visible">
            Falco Corporation
            <span class="block text-2xl md:text-4xl font-light mt-2">A Global Energy Trading Leader</span>
        </h1>
        <p class="text-lg md:text-xl mt-4 mb-10 max-w-3xl mx-auto reveal visible" style="transition-delay: 0.2s;">
            Innovation, sustainability, and worldwide energy solutions.
        </p>
        <div class="flex flex-col sm:flex-row justify-center items-center gap-4 reveal visible" style="transition-delay: 0.3s;">
            <a href="index.php?page=about" class="themed-button">
                About Us
            </a>
            <a href="index.php?page=products" class="themed-button">
                Products
            </a>
            <a href="index.php?page=contact" class="themed-button">
                Contact
            </a>
        </div>
    </div>
</section>

<section id="news" class="py-20 lg:py-32 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between md:items-center mb-12">
            <h2 class="section-title text-primary-blue mb-4 md:mb-0">Latest news and insights</h2>
            <div class="flex items-center space-x-4">
                <button id="prev-btn" class="slider-arrow-button">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
                </button>
                <button id="next-btn" class="slider-arrow-button">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                </button>
            </div>
        </div>
        <div class="slider-container overflow-hidden">
            <div id="slider-track" class="slider-track -mx-4">
                <div class="slider-item px-4"><div class="slider-card"><p class="text-sm text-gray-500 mb-4"><?php echo date("d M Y"); ?> | Press release</p><h3 class="text-xl font-bold text-primary-blue">Falco signs long-term LNG supply agreement</h3><a href="#" class="link-arrow mt-8 self-start">Read more <span>&rarr;</span></a></div></div>
                <div class="slider-item px-4"><div class="slider-card"><p class="text-sm text-gray-500 mb-4"><?php echo date("d M Y", strtotime("-3 day")); ?> | Announcement</p><h3 class="text-xl font-bold text-primary-blue">New Board Leadership to drive sustainable growth</h3><a href="#" class="link-arrow mt-8 self-start">Read more <span>&rarr;</span></a></div></div>
                <div class="slider-item px-4"><div class="slider-card"><p class="text-sm text-gray-500 mb-4"><?php echo date("d M Y", strtotime("-7 day")); ?> | Insight</p><h3 class="text-xl font-bold text-primary-blue">Financing agreement to support shipping companies</h3><a href="#" class="link-arrow mt-8 self-start">Read more <span>&rarr;</span></a></div></div>
                <div class="slider-item px-4"><div class="slider-card"><p class="text-sm text-gray-500 mb-4"><?php echo date("d M Y", strtotime("-10 day")); ?> | Market Update</p><h3 class="text-xl font-bold text-primary-blue">Falco returns to USD debt market with new bond</h3><a href="#" class="link-arrow mt-8 self-start">Read more <span>&rarr;</span></a></div></div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 lg:py-32 bg-light-gray">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="reveal">
                <img loading="lazy" src="images/what we do/2bdd46ce-de04-4773-9c34-17202b3f0c72.JPG" alt="Global logistics network" class="w-full h-full object-cover" style="filter: grayscale(100%);">
            </div>
            <div class="reveal">
                <h2 class="section-title text-primary-blue mb-6">What we do</h2>
                <p class="text-lg text-gray-700 mb-8">We physically trade and logistically support the movement of oil and petroleum products, metals and minerals, and gas and power.</p>
                <a href="index.php?page=what-we-do" class="link-arrow text-lg">Discover what we do <span>&rarr;</span></a>
            </div>
        </div>
    </div>
</section>

<section class="py-20 lg:py-32 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="reveal lg:order-last">
                <img loading="lazy" src="images/future goals/f91dd928e4a110edd2c07c88550a1184 2.JPG" alt="Renewable energy infrastructure" class="w-full h-full object-cover" style="filter: grayscale(100%);">
            </div>
            <div class="reveal">
                <h2 class="section-title text-primary-blue mb-6">Our role in the energy transition</h2>
                <p class="text-lg text-gray-700 mb-8">We are investing in projects and technologies that will help accelerate the transition to a lower-carbon future.</p>
                <a href="index.php?page=sustainability" class="link-arrow text-lg">Learn about our commitment <span>&rarr;</span></a>
            </div>
        </div>
    </div>
</section>