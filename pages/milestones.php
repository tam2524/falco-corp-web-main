<?php
// pages/milestones.php
?>

<section class="page-header" style="background-image: url('images/future goals/7adb8996a706c315f977951431d9a299.JPG');">
    <div class="relative z-10 px-4">
        <h1 class="text-4xl md:text-6xl font-bold reveal">Achievements & Milestones</h1>
        <p class="text-xl mt-4 max-w-3xl mx-auto reveal" style="transition-delay: 0.2s;">
            Highlighting major breakthroughs, like the first foreign trade asphalt mixtures.
        </p>
    </div>
</section>

<section class="py-20 lg:py-32 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-4xl mx-auto reveal mb-16">
            <h2 class="text-3xl lg:text-4xl font-bold mb-6">Navigating Success: Milestones and Breakthroughs</h2>
            <p class="text-lg text-gray-700">At Falco Corporation, our journey has been marked by strategic vision, adaptability to economic shifts, and a relentless pursuit of excellence. Here are some key achievements.</p>
        </div>

        <div class="relative max-w-4xl mx-auto">
            <div class="timeline-line"></div>

            <div class="timeline-item reveal">
                <div class="timeline-dot"></div>
                <div class="timeline-content highlight">
                    <i class="fas fa-star highlight-icon"></i>
                    <h3 class="timeline-title">Scope Expansion and Breakthroughs</h3>
                    <p class="timeline-text">In May 2020, initiated the export of asphalt mixtures and fuel oil. Completed the first trade of foreign trade asphalt mixtures in August and September, delivering 500,000 barrels—a major breakthrough in business scope.</p>
                </div>
            </div>

            <div class="timeline-item reveal">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <i class="fas fa-chart-line timeline-icon"></i>
                    <h3 class="timeline-title">Market Insight and Direction</h3>
                    <p class="timeline-text">Vigilant attention to domestic and international economic situations and macro policies. Continuous study of market trends to clarity the company's direction and goals.</p>
                </div>
            </div>

            <div class="timeline-item reveal">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <i class="fas fa-cogs timeline-icon"></i>
                    <h3 class="timeline-title">Business Expansion and Optimization</h3>
                    <p class="timeline-text">Continuous development of new business varieties. Ongoing efforts to optimize the business structure and cultivate a mature operation team.</p>
                </div>
            </div>

            <div class="timeline-item reveal">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <i class="fas fa-handshake timeline-icon"></i>
                    <h3 class="timeline-title">Market Development and Partnerships</h3>
                    <p class="timeline-text">Successfully developed markets in Shandong and Northeast China for fuel oil and bitumen mixture. Established deals with key partners such as PanjinYijiu Petrochemical Co., Ltd. and Baolai Bioenergy. Secured the oil from Hebei Lunt Group.</p>
                </div>
            </div>
            
            <div class="timeline-item reveal">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <i class="fas fa-shipping-fast timeline-icon"></i>
                    <h3 class="timeline-title">Infrastructure and Export Achievement</h3>
                    <p class="timeline-text">Achieved a significant milestone with a monthly export of approximately 600,000 tons.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    :root {
        --color-primary-blue: #3b82f6;
    }

    /* Keyframe Animations */
    @keyframes pulse {
        0%, 100% { box-shadow: 0 0 0 4px var(--color-primary-blue), 0 0 0 0 rgba(59, 130, 246, 0.7); }
        50% { box-shadow: 0 0 0 4px var(--color-primary-blue), 0 0 0 12px rgba(59, 130, 246, 0); }
    }
    @keyframes gradient-shine {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    /* Hero Section Style */
    .page-header {
        position: relative; background-size: cover; background-position: center;
        color: white; text-align: center; padding: 8rem 0;
        display: flex; align-items: center; justify-content: center;
    }
    .page-header::before {
        content: ''; position: absolute; top: 0; left: 0;
        width: 100%; height: 100%;
        background-color: rgba(30, 58, 138, 0.7);
    }
    
    /* Timeline Styles */
    .timeline-line {
        position: absolute; left: 50%; top: 0; height: 100%; width: 3px;
        background: linear-gradient(to bottom, var(--color-primary-blue), #a5b4fc);
        transform: translateX(-50%);
    }
    .timeline-item {
        position: relative;
        margin-bottom: 3rem;
        display: flex;
        align-items: flex-start;
    }
    /* Set items to alternate on the left and right */
    .timeline-item:nth-child(even) {
        flex-direction: row-reverse;
    }
    .timeline-item:last-child { margin-bottom: 0; }
    
    .timeline-dot {
        position: absolute;
        top: 8px;
        left: 50%;
        width: 20px; height: 20px;
        background-color: #ffffff;
        border-radius: 50%;
        transform: translateX(-50%);
        border: 4px solid var(--color-primary-blue);
        z-index: 10;
        animation: pulse 2s infinite;
    }

    .timeline-content {
        position: relative;
        width: calc(50% - 3rem);
        padding: 2rem;
        background-color: #ffffff;
        border-radius: 0.75rem;
        box-shadow: 0 10px 15px -3px rgba(0,0,0,0.07), 0 4px 6px -4px rgba(0,0,0,0.07);
        transition: transform 0.3s cubic-bezier(0.25, 0.8, 0.25, 1), box-shadow 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
    }
    .timeline-item:nth-child(odd) .timeline-content {
        border-left: 4px solid var(--color-primary-blue);
        margin-right: 3rem;
    }
    .timeline-item:nth-child(even) .timeline-content {
        border-right: 4px solid var(--color-primary-blue);
        margin-left: 3rem;
    }
    .timeline-content:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: 0 20px 25px -5px rgba(0,0,0,0.1), 0 8px 10px -6px rgba(0,0,0,0.1);
    }
    .timeline-icon {
        font-size: 2.5rem;
        color: var(--color-primary-blue);
        margin-bottom: 1rem;
        transition: transform 0.3s ease;
    }
    .timeline-content:hover .timeline-icon {
        transform: scale(1.1) rotate(-10deg);
    }
    .timeline-title {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 0.75rem;
        color: #111827;
    }
    .timeline-text {
        font-size: 1rem;
        line-height: 1.7;
        color: #4b5563;
    }
    
    /* Highlight Style for Breakthroughs */
    .timeline-content.highlight {
        background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 50%, #1e3a8a 100%);
        background-size: 200% 200%;
        color: white;
        border: none;
        box-shadow: 0 25px 50px -12px rgba(30, 64, 175, 0.35);
        animation: gradient-shine 5s ease infinite;
    }
    .timeline-content.highlight .timeline-title { color: white; }
    .timeline-content.highlight .timeline-text { color: #dbeafe; }
    .highlight-icon {
        position: absolute; top: 1.5rem; right: 1.5rem;
        font-size: 2rem; color: white; opacity: 0.2;
        transform: rotate(-15deg);
    }

    /* Mobile Timeline Adjustments */
    @media (max-width: 767px) {
        .timeline-line { left: 10px; transform: none; }
        .timeline-item {
            flex-direction: column;
            align-items: flex-start;
        }
        .timeline-item:nth-child(even) {
            flex-direction: column;
        }
        .timeline-dot { left: 10px; transform: none; }
        .timeline-content {
            width: 100%;
            margin-left: 3rem;
            border-left: 4px solid var(--color-primary-blue);
            border-right: none;
        }
        .timeline-item:nth-child(even) .timeline-content {
            margin-left: 3rem;
            border-right: none;
        }
    }
</style>