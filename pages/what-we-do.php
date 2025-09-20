<?php
// pages/what-we-do.php
?>

<section class="page-header">
    <img src="images/what we do/8af66ebb-d81c-40a6-a3ef-82a0b09181c0.JPG" alt="Global logistics and operations" class="hero-background" loading="eager">
    <div class="relative z-10 px-4">
        <h1 class="text-4xl md:text-6xl font-bold reveal visible">What We Do</h1>
        <p class="text-xl mt-4 max-w-3xl mx-auto reveal visible" style="transition-delay: 0.2s;">
            Our Business & Operations
        </p>
    </div>
</section>

<section class="py-20 lg:py-32 bg-gray-50 overflow-hidden">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        

        <div class="cycle-wrapper">
            <div class="cycle-center">
                <i class="fas fa-sync-alt text-4xl text-white"></i>
            </div>
            <div class="cycle-animator">
                <div class="cycle-path"></div>
                <div class="cycle-node">
                    <div class="cycle-item">
                        <i class="fas fa-gas-pump cycle-icon"></i>
                        <h4 class="font-bold">Oilfield Development & Terminals</h4>
                    </div>
                </div>
                <div class="cycle-node">
                    <div class="cycle-item">
                        <i class="fas fa-ship cycle-icon"></i>
                        <h4 class="font-bold">Shipping & Logistics</h4>
                    </div>
                </div>
                <div class="cycle-node">
                     <div class="cycle-item">
                        <i class="fas fa-globe-americas cycle-icon"></i>
                        <h4 class="font-bold">Import & Export Trade</h4>
                    </div>
                </div>
                <div class="cycle-node">
                    <div class="cycle-item">
                        <i class="fas fa-chart-line cycle-icon"></i>
                        <h4 class="font-bold">Energy Trading & Supply Chain</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-20 lg:py-32 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-4xl font-bold mb-4 reveal">Our Integrated Operations</h2>
            <p class="text-lg text-gray-700 reveal">
                Our expertise spans the entire value chain. Each business area is a vital component of our integrated approach, working in synergy to deliver excellence in the global energy market.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

            <div class="reveal bg-white rounded-lg shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                <img src="images/what we do/2bdd46ce-de04-4773-9c34-17202b3f0c72.JPG" alt="Oilfield Development Infrastructure" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-primary-blue mb-3">Oilfield Development & Terminals</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        We build our foundation on developing and acquiring oil fields, complemented by the strategic operation of overseas storage terminals.
                    </p>
                </div>
            </div>

            <div class="reveal bg-white rounded-lg shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-2xl hover:-translate-y-2" style="transition-delay: 0.1s;">
                <img src="images/what we do/fcd01457-900f-421e-9dd4-460227f5f2a4.JPG" alt="Shipping and Maritime Logistics" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-primary-blue mb-3">Shipping & Logistics</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Acting as the logistical backbone, we manage complex global transit to ensure the safe and timely movement of energy products.
                    </p>
                </div>
            </div>

            <div class="reveal bg-white rounded-lg shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-2xl hover:-translate-y-2" style="transition-delay: 0.2s;">
                <img src="images/what we do/8af66ebb-d81c-40a6-a3ef-82a0b09181c0.JPG" alt="Global Trade and Export Terminal" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-primary-blue mb-3">Import & Export Trade</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        We are deeply engaged in the global trade of diverse energy products, highlighting our breakthroughs and strong market presence.
                    </p>
                </div>
            </div>
            
            <div class="reveal bg-white rounded-lg shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-2xl hover:-translate-y-2" style="transition-delay: 0.3s;">
                 <img src="images/what we do/2bdd46ce-de04-4773-9c34-17202b3f0c72.JPG" alt="Energy Trading Operations" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-primary-blue mb-3">Energy Trading & Supply Chain</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        As a dynamic trading company, we forge strategic cooperation in the supply chain to optimize performance and maximize profitability.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<style>
    /* === KEY ANIMATION FIX IS HERE === */
    @keyframes spin {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }
    @keyframes spin-reverse {
        /* This now includes translateX to keep items centered while rotating */
        from { transform: translateX(-50%) rotate(0deg); }
        to { transform: translateX(-50%) rotate(-360deg); }
    }

    .cycle-wrapper {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        min-height: 600px;
    }

    .cycle-center {
        position: absolute;
        width: 180px;
        height: 180px;
        background: linear-gradient(145deg, var(--color-primary-blue), #1e40af);
        border-radius: 50%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        box-shadow: 0 0 30px rgba(30, 58, 138, 0.4);
        z-index: 20;
    }

    .cycle-animator {
        position: absolute;
        width: 550px;
        height: 550px;
        animation: spin 30s linear infinite;
    }

    .cycle-path {
        position: absolute;
        width: 100%;
        height: 100%;
        border: 3px dashed #cbd5e1;
        border-radius: 50%;
    }

    .cycle-node {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
    }

    .cycle-node:nth-child(1) { transform: rotate(0deg); }
    .cycle-node:nth-child(2) { transform: rotate(90deg); }
    .cycle-node:nth-child(3) { transform: rotate(180deg); }
    .cycle-node:nth-child(4) { transform: rotate(270deg); }

    .cycle-item {
        position: absolute;
        top: -80px;
        left: 50%;
        /* The transform is now handled by the animation itself */
        width: 160px;
        height: 160px;
        background: white;
        border-radius: 50%;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 1rem;
        text-align: center;
        animation: spin-reverse 30s linear infinite;
        transition: transform 0.3s ease;
    }
    
    .cycle-wrapper:hover .cycle-animator,
    .cycle-wrapper:hover .cycle-item {
      animation-play-state: paused;
    }

    .cycle-item:hover {
        /* The hover state needs to re-apply the translateX */
        transform: translateX(-50%) scale(1.1);
        box-shadow: 0 12px 24px rgba(30, 58, 138, 0.2);
        cursor: pointer;
        z-index: 10;
    }

    .cycle-icon {
        font-size: 2rem;
        color: var(--color-primary-blue);
        margin-bottom: 0.5rem;
    }

    .cycle-item h4 {
        font-size: 0.9rem;
        color: #334155;
    }

    .cycle-node::after {
        content: '\f061';
        font-family: 'Font Awesome 5 Free';
        font-weight: 900;
        position: absolute;
        top: 50%;
        left: 50%;
        font-size: 1.75rem;
        color: var(--color-primary-blue);
        transform: translate(195px, -195px) rotate(90deg);
        /* This animation was missing for the arrows, added it here */
        animation: spin-reverse 30s linear infinite;
    }

    @media (max-width: 768px) {
        .cycle-wrapper { min-height: 450px; }
        .cycle-animator { width: 400px; height: 400px; }
        .cycle-center { width: 130px; height: 130px; }
        .cycle-center h3 { font-size: 0.9rem; }
        .cycle-item { width: 120px; height: 120px; top: -60px; }
        .cycle-icon { font-size: 1.5rem; }
        .cycle-item h4 { font-size: 0.75rem; }
        .cycle-node::after {
            font-size: 1.5rem;
            transform: translate(140px, -140px) rotate(90deg);
        }
    }
    
    @media (max-width: 480px) {
        .cycle-wrapper { min-height: initial; padding: 2rem 0; }
        .cycle-animator {
            position: static;
            width: 100%;
            height: auto;
            animation: none;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 2.5rem;
        }
        .cycle-path, .cycle-center, .cycle-node::after { display: none; }
        .cycle-node {
            position: static;
            width: 80%;
            height: auto;
            transform: none !important;
        }
        .cycle-item {
            position: static;
            transform: none !important;
            animation: none;
            width: 100%;
            height: auto;
            border-radius: 0.75rem;
            padding: 1.5rem;
        }
        .cycle-item h4 { font-size: 1rem; }

        .cycle-node:not(:last-child)::before {
            content: '\f063';
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            display: block;
            text-align: center;
            font-size: 1.75rem;
            color: #cbd5e1;
            margin-top: 1.25rem;
        }
    }
</style>