<?php
// pages/global-reach.php
?>

<!-- Add Leaflet CSS and JS for the interactive map -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<!-- Add Leaflet plugin for animated lines -->
<script src="https://unpkg.com/leaflet-ant-path@1.3.0/dist/leaflet-ant-path.js"></script>

<!-- Hero Section -->
<section class="page-header" style="background-image: url('images/global-reach/hero-bg.jpg');">
    <div class="relative z-10 px-4 text-center">
        <h1 class="text-4xl md:text-6xl font-bold reveal">Global Reach</h1>
        <p class="text-xl mt-4 max-w-3xl mx-auto reveal" style="transition-delay: 0.2s;">
            Connecting Global Markets with Expertise and Reliability
        </p>
    </div>
</section>

<!-- Interactive Map Section -->
<section class="py-20 lg:py-32 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto reveal mb-16">
            <h2 class="text-4xl font-bold mb-6">Our Global Presence</h2>
            <p class="text-lg text-gray-700">From our strategic headquarters in the Middle East, we have successfully expanded our operations worldwide. We specialize in navigating complex and politically unstable environments, ensuring safe, ethical, and optimized performance in every market we serve.</p>
        </div>
        <div class="reveal relative overflow-hidden rounded-lg shadow-2xl" style="height: 550px;">
            <div id="map" style="width: 100%; height: 100%;"></div>
        </div>
    </div>
</section>

<!-- Partnerships & Projects Section -->
<section class="py-20 lg:py-32 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto reveal mb-16">
            <h2 class="text-4xl font-bold mb-6">Partnerships & Successful Projects</h2>
            <p class="text-lg text-gray-700">Our journey is marked by significant milestones and strategic alliances that highlight our capability and commitment to excellence in the global energy trade.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Project Card 1 -->
            <div class="project-card reveal">
                <div class="project-icon-wrapper">
                    <i class="fas fa-box-open project-icon"></i>
                </div>
                <h3 class="project-title">Major Business Breakthrough</h3>
                <p class="project-description">In a major expansion of our business scope, we successfully delivered 500,000 barrels in our first foreign trade of asphalt mixtures, marking a significant achievement.</p>
            </div>

            <!-- Project Card 2 -->
            <div class="project-card reveal" style="transition-delay: 0.1s;">
                 <div class="project-icon-wrapper">
                    <i class="fas fa-map-marked-alt project-icon"></i>
                </div>
                <h3 class="project-title">New Market Development</h3>
                <p class="project-description">Successfully developed and established a strong presence in the fuel oil and bitumen mixture markets in Shandong and Northeast China.</p>
            </div>

            <!-- Project Card 3 -->
            <div class="project-card reveal" style="transition-delay: 0.2s;">
                 <div class="project-icon-wrapper">
                    <i class="fas fa-handshake project-icon"></i>
                </div>
                <h3 class="project-title">Key Strategic Partnerships</h3>
                <p class="project-description">Forged key partnerships with industry leaders such as PanjinYijiu Petrochemical Co., Ltd., Baolai Bioenergy, and secured oil from the Hebei Lunt Group.</p>
            </div>
            
        </div>
    </div>
</section>


<style>
    /* Hero Section Style */
    .page-header[style*="hero-bg.jpg"] {
        position: relative; background-size: cover; background-position: center;
        color: white; text-align: center; padding: 8rem 0;
        display: flex; align-items: center; justify-content: center;
    }
    .page-header[style*="hero-bg.jpg"]::before {
        content: ''; position: absolute; top: 0; left: 0;
        width: 100%; height: 100%;
        background-color: rgba(30, 58, 138, 0.7); /* Dark blue overlay */
    }

    /* Project Cards Style */
    .project-card {
        background: #ffffff;
        border-radius: 0.75rem;
        padding: 2.5rem;
        text-align: center;
        box-shadow: 0 10px 15px -3px rgba(0,0,0,0.07), 0 4px 6px -2px rgba(0,0,0,0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .project-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 25px -5px rgba(0,0,0,0.1), 0 10px 10px -5px rgba(0,0,0,0.04);
    }
    .project-icon-wrapper {
        width: 80px; height: 80px;
        margin: 0 auto 1.5rem;
        border-radius: 50%;
        background: linear-gradient(145deg, var(--color-primary-blue), #1e40af);
        display: flex; align-items: center; justify-content: center;
        color: white;
    }
    .project-icon {
        font-size: 2.5rem;
    }
    .project-title {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
        color: #1f2937;
    }
    .project-description {
        font-size: 1rem;
        line-height: 1.6;
        color: #4b5563;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Initialize the map
        var map = L.map('map', { scrollWheelZoom: false }).setView([25, 40], 2.5);

        // Add a dark tile layer from CartoDB
        L.tileLayer('https://{s}.basemaps.cartocdn.com/rastertiles/dark_all/{z}/{x}/{y}{r}.png', {
            attribution: '&copy; <a href="https://carto.com/attributions">CartoDB</a>',
        }).addTo(map);

        // Define custom icons
        var hqIcon = L.divIcon({
            className: 'custom-div-icon',
            html: `<div style="background-color:#3b82f6; width:24px; height:24px; border-radius:50%; border:4px solid white; box-shadow:0 0 10px rgba(59, 130, 246, 0.7);"></div>`,
            iconSize: [24, 24],
            iconAnchor: [12, 12]
        });
        var customIcon = L.divIcon({
            className: 'custom-div-icon',
            html: `<div style="background-color:white; width:16px; height:16px; border-radius:50%; border:3px solid #3b82f6;"></div>`,
            iconSize: [16, 16],
            iconAnchor: [8, 8]
        });

        // Define locations based on the PDF
        var hq = {name: 'Headquarters (UAE, Middle East)', coords: [25.27, 55.29]};
        var locations = [
            {name: 'Europe Operations', coords: [50.11, 8.68]},
            {name: 'United States Operations', coords: [29.76, -95.36]},
            {name: 'Singapore Hub', coords: [1.35, 103.81]},
            {name: 'China Operations', coords: [31.23, 121.47]},
            {name: 'South America Operations', coords: [-14.23, -51.92]}
        ];

        // Add HQ marker
        L.marker(hq.coords, {icon: hqIcon}).addTo(map).bindPopup(`<b>${hq.name}</b>`).openPopup();

        // Add location markers and animated connecting lines
        locations.forEach(function(location) {
            L.marker(location.coords, {icon: customIcon}).addTo(map).bindPopup(`<b>${location.name}</b>`);
            
            // Use L.polyline.antPath to create animated lines
            L.polyline.antPath([hq.coords, location.coords], {
                "delay": 800,
                "dashArray": [10, 20],
                "weight": 2.5,
                "color": "#3b82f6",
                "pulseColor": "#FFFFFF",
                "paused": false,
                "reverse": false,
                "hardwareAccelerated": true
            }).addTo(map);
        });
    });
</script>

