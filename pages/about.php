<?php
// pages/about.php
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>


<section class="page-header relative">
    <img src="images/about us/IMG_8277.JPG" alt="Falco Corporation Team" class="hero-background" loading="eager">
    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent opacity-60"></div>
    <div class="relative z-10 px-4">
        <h1 class="text-4xl md:text-6xl font-bold reveal visible">About Falco</h1>
        <p class="text-xl mt-4 max-w-3xl mx-auto reveal visible" style="transition-delay: 0.2s;">
            A dynamic energy trading company connecting the world with vital resources.
        </p>
    </div>
</section>


<section class="py-20 lg:py-32 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="reveal">
                <h2 class="text-4xl font-bold text-gray-800 mb-8">Our Story</h2>
                <p class="text-lg text-gray-600 mb-8 leading-relaxed">Founded in the UAE in 2021, Falco Corporation's journey has been defined by rapid global growth and a swift evolution into a leading player in the energy sector.</p>

                <h3 class="text-2xl font-semibold text-primary-blue mb-3">Diversified Operations</h3>
                <p class="text-lg text-gray-600 mb-6 leading-relaxed">Our success is built on the integration of oilfield development, overseas terminals, shipping management, and import/export trade, providing comprehensive expertise as a dynamic energy trading company.</p>

                <h3 class="text-2xl font-semibold text-primary-blue mb-3">Versatility in International Business</h3>
                <p class="text-lg text-gray-600 mb-6 leading-relaxed">We are engaged in diverse sectors such as crude oil import and export trade, crude oil refining, supply chain trade, and oil fields.</p>

                <h3 class="text-2xl font-semibold text-primary-blue mb-3">Visionary Approach</h3>
                <p class="text-lg text-gray-600 leading-relaxed">At Falco Corporation, we embrace innovation, sustainability, and excellence. Our commitment extends beyond borders, creating a global impact in the energy trading arena. Join us as we navigate the complexities of the international energy market, setting new standards and forging lasting partnerships.</p>
            </div>
            <div class="reveal grid grid-cols-2 gap-8 text-center">
                <div class="bg-light-gray p-8 rounded-lg">
                    <span class="block text-4xl font-bold text-primary-blue">2021</span>
                    <span class="text-gray-600">Year Founded</span>
                </div>
                <div class="bg-light-gray p-8 rounded-lg">
                    <span class="block text-4xl font-bold text-primary-blue">5+</span>
                    <span class="text-gray-600">Continents Served</span>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="bg-light-gray" style="height: 150px; overflow: hidden;" >
    <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
        <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #ffffff;"></path>
    </svg>
</div>


<section class="py-20 lg:py-32 bg-light-gray">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto reveal">
            <h2 class="text-4xl font-bold mb-6">Our Mission & Values</h2>
            <p class="text-lg text-gray-700 mb-16">
                We are guided by four core principles that define our work and our commitment to our partners.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-7xl mx-auto">
            <div class="value-card-modern reveal" style="transition-delay: 100ms;">
                <i class="fas fa-lightbulb icon"></i>
                <h3 class="title">Innovation</h3>
            </div>
            <div class="value-card-modern reveal" style="transition-delay: 200ms;">
                <i class="fas fa-handshake icon"></i>
                <h3 class="title">Trust</h3>
            </div>
            <div class="value-card-modern reveal" style="transition-delay: 300ms;">
                <i class="fas fa-leaf icon"></i>
                <h3 class="title">Sustainability</h3>
            </div>
            <div class="value-card-modern reveal" style="transition-delay: 400ms;">
                <i class="fas fa-users icon"></i>
                <h3 class="title">Partnerships</h3>
            </div>
        </div>
    </div>
</section>


<section class="py-20 lg:py-32 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto reveal mb-16">
            <h2 class="text-4xl font-bold mb-6">Our Global Presence</h2>
            <p class="text-lg text-gray-700">From our headquarters in the Middle East, we connect supply with demand efficiently and reliably on a global scale.</p>
        </div>
        <div class="reveal relative overflow-hidden rounded-lg shadow-2xl" style="height: 500px;">
            <div id="map" style="width: 100%; height: 100%;"></div>
        </div>
    </div>
</section>


<div class="bg-light-gray" style="height: 150px; overflow: hidden;" >
    <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
        <path d="M0.00,49.98 C149.99,150.00 271.49,-49.98 500.00,49.98 L500.00,0.00 L0.00,0.00 Z" style="stroke: none; fill: #ffffff;"></path>
    </svg>
</div>


<style>
    /* Modern Value Cards */
    .value-card-modern {
        background-color: white;
        padding: 2rem;
        border-radius: 0.5rem;
        box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1), 0 4px 6px -2px rgba(0,0,0,0.05);
        text-align: center;
        position: relative;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }
    .value-card-modern:hover {
        transform: translateY(-10px) scale(1.05);
        box-shadow: 0 25px 50px -12px rgba(0,0,0,0.25);
    }
    .value-card-modern .icon {
        font-size: 3rem;
        color: var(--color-primary-blue);
        margin-bottom: 1rem;
        transition: transform 0.3s ease;
    }
    .value-card-modern:hover .icon {
        transform: scale(1.2) rotate(-15deg);
    }
    .value-card-modern .title {
        font-size: 1.5rem;
        font-weight: 700;
        color: #1f2937;
    }

</style>

<script>
    var map = L.map('map', { scrollWheelZoom: false }).setView([25, 10], 2);
    L.tileLayer('https://{s}.basemaps.cartocdn.com/rastertiles/dark_all/{z}/{x}/{y}{r}.png', {
        attribution: '&copy; <a href="https://carto.com/attributions">CartoDB</a>',
    }).addTo(map);

    var hqIcon = L.divIcon({ className: 'custom-div-icon', html: '<div style="background-color:#3b82f6; width:20px; height:20px; border-radius:50%; border:3px solid white; box-shadow:0 0 8px rgba(0,0,0,0.5);"></div>', iconSize: [20, 20], iconAnchor: [10, 10] });
    var customIcon = L.divIcon({ className: 'custom-div-icon', html: '<div style="background-color:white; width:15px; height:15px; border-radius:50%; border:2px solid #3b82f6;"></div>', iconSize: [15, 15], iconAnchor: [7.5, 7.5] });

    var hq = {name: 'Headquarters (Middle East)', coords: [25.27, 55.29]};
    var locations = [
        {name: 'Europe', coords: [51.50, -0.12]},
        {name: 'United States', coords: [29.76, -95.36]},
        {name: 'Singapore', coords: [1.35, 103.81]},
        {name: 'China', coords: [31.23, 121.47]},
        {name: 'South America', coords: [-22.90, -43.17]}
    ];

    L.marker(hq.coords, {icon: hqIcon, title: hq.name}).addTo(map).bindPopup('<b>' + hq.name + '</b>');
    locations.forEach(function(location) {
        L.marker(location.coords, {icon: customIcon, title: location.name}).addTo(map).bindPopup('<b>' + location.name + '</b>');
        L.polyline([hq.coords, location.coords], { color: '#3b82f6', weight: 1.5, opacity: 0.5, dashArray: '5, 5' }).addTo(map);
    });
</script>