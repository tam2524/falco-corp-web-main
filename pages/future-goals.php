<?php
// pages/what-we-do.php
?>

<style>
/* Modern styling for the new layout */
.modern-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 2rem;
    justify-content: center;
}

.modern-card {
    background-color: #ffffff;
    border-radius: 1.5rem;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    overflow: hidden;
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    width: 100%;
    max-width: 300px;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.modern-card:hover {
    transform: translateY(-10px) scale(1.02);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
}

.modern-card-content {
    padding: 2rem;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.card-image {
    width: 100%;
    height: 180px;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.modern-card:hover .card-image {
    transform: scale(1.1);
}

.title-card {
    background: linear-gradient(45deg, #1e3a8a, #3b82f6);
    color: #ffffff;
    padding: 2rem;
    border-radius: 1.5rem;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

/* Scroll-based animation */
.scroll-animate {
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.6s ease-out, transform 0.6s ease-out;
}

.scroll-animate.is-visible {
    opacity: 1;
    transform: translateY(0);
}
</style>

<section class="page-header">
    <img src="images/what we do/8af66ebb-d81c-40a6-a3ef-82a0b09181c0.JPG" alt="Global logistics and operations" class="hero-background" loading="eager">
    <div class="relative z-10 px-4">
        <h1 class="text-4xl md:text-6xl font-bold reveal visible">Future Goals</h1>
        <p class="text-xl mt-4 max-w-3xl mx-auto reveal visible" style="transition-delay: 0.2s;">
            Our vision extends beyond present achievements as we strategically chart our course for the future.
        </p>
    </div>
</section>

<section class="py-20 lg:py-32 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="title-card mb-16 scroll-animate">
            <h2 class="text-4xl font-bold mb-4">Our Focus Will Be On Four Key Aspects</h2>
        </div>

        <div class="modern-grid">
            <div class="modern-card scroll-animate" style="transition-delay: 0s;">
                <img src="images/future goals/f91dd928e4a110edd2c07c88550a1184 2.JPG" alt="Ports and Shipping Infrastructure" class="card-image">
                <div class="modern-card-content">
                    <h3 class="text-xl font-bold text-primary-blue mb-3">Ports & Shipping</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Develop comprehensive in-port vehicle and ship operations to maximize efficiency.
                    </p>
                </div>
            </div>

            <div class="modern-card scroll-animate" style="transition-delay: 0.1s;">
                <img src="images/future goals/01feef42-7a30-44ea-aefa-8243d08b99d5.JPG" alt="Oilfield Exploration and Production" class="card-image">
                <div class="modern-card-content">
                    <h3 class="text-xl font-bold text-primary-blue mb-3">Oil Fields</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Aggressively develop and acquire assets in oil exploration and production.
                    </p>
                </div>
            </div>

            <div class="modern-card scroll-animate" style="transition-delay: 0.2s;">
                <img src="images/future goals/4218ff09-9fe4-4b8e-8a6b-f9a1dd438b17.JPG" alt="Supply Chain and Oil Terminals" class="card-image">
                <div class="modern-card-content">
                    <h3 class="text-xl font-bold text-primary-blue mb-3">Supply Chain Growth</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Utilize our self-operated terminals for strategic cooperation and improved oil product distribution.
                    </p>
                </div>
            </div>
            
            <div class="modern-card scroll-animate" style="transition-delay: 0.3s;">
                <img src="images/future goals/4350d9e1425c011d6c612524d339e2ef.JPG" alt="Diversified Oil Product Operations" class="card-image">
                <div class="modern-card-content">
                    <h3 class="text-xl font-bold text-primary-blue mb-3">Diversified Operations</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Deepen our involvement in oil product export, warehousing, and ship supply businesses.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// A simple Intersection Observer to reveal elements on scroll
document.addEventListener("DOMContentLoaded", function() {
    const observerOptions = {
        root: null,
        rootMargin: "0px",
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("is-visible");
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    document.querySelectorAll(".scroll-animate").forEach(element => {
        observer.observe(element);
    });
});
</script>
