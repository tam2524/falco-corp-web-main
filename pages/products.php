<?php
// pages/products.php
?>

<!-- You will need to add your own images in the 'images/products/' directory -->
<!-- Recommended image size: 800x600 pixels -->

<section class="page-header" style="background-image: url('images/product/IMG_8686.JPG');">
    <div class="relative z-10 px-4 text-center">
        <h1 class="text-4xl md:text-6xl font-bold reveal">Products & Solutions</h1>
        <p class="text-xl mt-4 max-w-3xl mx-auto reveal" style="transition-delay: 0.2s;">
            Powering Industries with a Diverse and High-Quality Energy Portfolio
        </p>
    </div>
</section>

<section class="py-20 lg:py-32 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-4xl font-bold mb-4 reveal">Our Core Offerings</h2>
            <p class="text-lg text-gray-700 reveal">
                From the foundational crude oil that marks our legacy to advanced, cleaner energy solutions, our product portfolio is designed to meet the dynamic needs of a global market. We are committed to quality, reliability, and innovation in every barrel we deliver.
            </p>
        </div>

        <!-- Product Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Card 1: Crude Oil -->
            <div class="product-card reveal">
                <div class="product-overlay">
                    <div class="product-content">
                        <i class="fas fa-tint product-icon"></i>
                        <h3 class="product-title">Crude Oil</h3>
                        <p class="product-description">At Falco Corporation, we recognize crude oil as the foundation of our legacy, we continue to excel in the procurement and trading of crude oil.</p>
                    </div>
                </div>
            </div>

            <!-- Card 2: Fuel Oil -->
            <div class="product-card reveal" style="transition-delay: 0.1s;">
                <div class="product-overlay">
                     <div class="product-content">
                        <i class="fas fa-ship product-icon"></i>
                        <h3 class="product-title">Fuel Oil</h3>
                        <p class="product-description">At Falco Corporation, our expertise extends to fuel oil, catering to the varied needs of industries with reliable and quality supplies.</p>
                    </div>
                </div>
            </div>

            <!-- Card 3: LPG -->
            <div class="product-card reveal" style="transition-delay: 0.2s;">
                <div class="product-overlay">
                    <div class="product-content">
                        <i class="fas fa-fire-alt product-icon"></i>
                        <h3 class="product-title">LPG</h3>
                        <p class="product-description">Falco Corporation is a trusted source for LPG, providing a clean and efficient energy solution. </p>
                    </div>
                </div>
            </div>

            <!-- Card 4: Diesel -->
            <div class="product-card reveal" style="transition-delay: 0.3s;">
                <div class="product-overlay">
                    <div class="product-content">
                        <i class="fas fa-gas-pump product-icon"></i>
                        <h3 class="product-title">Diesel</h3>
                        <p class="product-description">At Falco Corporation, with a focus on quality and efficiency, our diesel offerings meet the highest industry standards. </p>
                    </div>
                </div>
            </div>

            <!-- Card 5: Naphtha -->
            <div class="product-card reveal" style="transition-delay: 0.4s;">
                <div class="product-overlay">
                    <div class="product-content">
                        <i class="fas fa-flask product-icon"></i>
                        <h3 class="product-title">Naphtha</h3>
                        <p class="product-description">At Falco Corporation, we source and supply high-quality naphtha to meet the needs of both the petrochemical and energy sectors. Through reliable procurement and efficient logistics, we ensure our clients receive consistent and timely deliveries across global markets.</p>
                    </div>
                </div>
            </div>
            
            <!-- Card 6: Future Innovations -->
            <div class="product-card reveal product-card-future" style="transition-delay: 0.5s;">
                <div class="product-overlay">
                    <div class="product-content">
                         <i class="fas fa-arrow-right future-icon"></i>
                        <h3 class="product-title">Future Innovations</h3>
                        <p class="product-description">At Falco Corporation, we are committed to pioneering the future of energy by exploring new frontiers and expanding our portfolio. Our focus is on sustainable solutions and innovative products that will meet the dynamic demands of the evolving global market.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<style>
    /* Ensure you have Font Awesome linked in your main header for the icon */

    .product-card {
        position: relative;
        height: 380px;
        border-radius: 0.75rem;
        overflow: hidden;
        background: linear-gradient(145deg, #1e3a8a, #2563eb);
        background-size: 150% 150%;
        transition: transform 0.4s ease, box-shadow 0.4s ease, background-position 0.8s ease;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        color: white;
    }

    .product-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 25px -5px rgba(30, 58, 138, 0.2), 0 10px 10px -5px rgba(30, 58, 138, 0.1);
        background-position: 100% 100%;
    }

    .product-overlay {
        position: absolute;
        inset: 0;
        padding: 2rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        background: linear-gradient(180deg, rgba(0,0,0,0.1), rgba(0,0,0,0.3));
    }

    .product-content {
        transition: transform 0.4s ease;
    }
    
    .product-card:hover .product-content {
        transform: translateY(-10px);
    }

    .product-icon {
        font-size: 3rem;
        margin-bottom: 1.5rem;
        transition: transform 0.4s ease;
        opacity: 0.9;
    }
    
    .product-card:hover .product-icon {
        transform: scale(1.1);
    }

    .product-title {
        font-size: 1.75rem;
        font-weight: bold;
    }
    
    .product-description {
        font-size: 0.95rem;
        margin-top: 0.5rem;
        line-height: 1.6;
        max-height: 0;
        opacity: 0;
        transform: translateY(10px);
        transition: max-height 0.4s ease, opacity 0.4s ease, transform 0.4s ease;
    }

    .product-card:hover .product-description {
        max-height: 150px; /* Adjust as needed */
        opacity: 0.9;
        transform: translateY(0);
    }
    
    /* Style for the "Future Innovations" card */
    .product-card-future {
        background: linear-gradient(145deg, var(--color-primary-blue), #1e40af);
    }

    .future-icon {
        font-size: 3rem;
        margin-bottom: 1rem;
        opacity: 0.7;
        transition: transform 0.4s ease;
    }

    .product-card-future:hover .future-icon {
        transform: scale(1.1) rotate(-15deg);
    }
    
    .product-card-future .product-description {
        max-height: 150px;
        opacity: 0.9;
        transform: translateY(0);
    }

    /* Background image for hero section */
    .page-header[style*="IMG_8686.JPG"] {
        position: relative;
        background-size: cover;
        background-position: center;
        color: white;
        text-align: center;
        padding: 8rem 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .page-header[style*="IMG_8686.JPG"]::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(30, 58, 138, 0.7); /* Dark blue overlay */
    }

</style>

