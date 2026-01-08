<!-- Hero Section - Premium Spotlight Design -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden" style="background: linear-gradient(135deg, #FEF3C7 0%, #FDE68A 25%, #FCD34D 50%, #FBBF24 75%, #F59E0B 100%);">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <!-- Clean Soft Blur Layer -->
        <div class="absolute inset-0" style="background: radial-gradient(ellipse 100% 100% at 0% 0%, rgba(254, 243, 199, 0.4) 0%, rgba(253, 230, 138, 0.3) 20%, rgba(252, 211, 77, 0.25) 40%, rgba(251, 191, 36, 0.2) 60%, rgba(255, 255, 255, 0.6) 100%); filter: blur(60px);"></div>
        
        <!-- Subtle Grid Pattern Overlay -->
        <div class="absolute inset-0 opacity-[0.02]" style="background-image: linear-gradient(rgba(0,0,0,0.02) 1px, transparent 1px), linear-gradient(90deg, rgba(0,0,0,0.02) 1px, transparent 1px); background-size: 50px 50px;"></div>
        
        <!-- Floating Orbs for Depth (lighter, softer) -->
        <div class="absolute top-20 right-10 w-96 h-96 bg-yellow-300/20 rounded-full blur-3xl animate-orb-float-1"></div>
        <div class="absolute bottom-20 left-10 w-96 h-96 bg-yellow-200/18 rounded-full blur-3xl animate-orb-float-2"></div>
        
        <!-- Additional Floating Elements -->
        <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-yellow-400/10 rounded-full blur-2xl animate-orb-float-3"></div>
        <div class="absolute bottom-1/3 right-1/4 w-80 h-80 bg-yellow-500/12 rounded-full blur-2xl animate-orb-float-4"></div>
        
        <!-- Animated Particles -->
        <div class="absolute top-1/3 left-1/2 w-2 h-2 bg-yellow-500/40 rounded-full animate-particle-1"></div>
        <div class="absolute top-2/3 right-1/3 w-3 h-3 bg-yellow-400/30 rounded-full animate-particle-2"></div>
        <div class="absolute bottom-1/4 left-1/3 w-2 h-2 bg-yellow-600/35 rounded-full animate-particle-3"></div>
    </div>
    
    <!-- Content Container -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8
pt-4 sm:pt-6 lg:pt-4
pb-8 sm:pb-12 lg:pb-16
w-full">
        <div class="grid lg:grid-cols-2 gap-8 lg:gap-16 items-center">
            <!-- Image Column - Mobile First, then Desktop Right -->
            <div class="order-1 lg:order-2 relative mb-8 lg:mb-0">
                <div class="relative h-[350px] sm:h-[450px] lg:h-[600px] flex items-center justify-center">
                    <!-- Modern Blob Background Elements -->
                    <div class="absolute inset-0 flex items-center justify-center z-0 overflow-hidden">
                        <!-- Main Blob (clean, soft yellow tones) -->
                        <svg class="absolute w-full max-w-[400px] sm:max-w-[500px] lg:max-w-[680px] h-auto blob-main" viewBox="0 0 680 580" xmlns="http://www.w3.org/2000/svg" style="filter: drop-shadow(0 8px 20px rgba(251, 191, 36, 0.08));">
                            <defs>
                                <linearGradient id="blobGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#FCD34D;stop-opacity:0.18" />
                                    <stop offset="50%" style="stop-color:#FDE68A;stop-opacity:0.15" />
                                    <stop offset="100%" style="stop-color:#FEF3C7;stop-opacity:0.12" />
                                </linearGradient>
                            </defs>
                            <path
                                d="M120 290
                                   C120 150, 240 50, 400 80
                                   C580 110, 640 220, 600 350
                                   C560 480, 400 550, 260 500
                                   C140 460, 80 360, 120 290 Z"
                                fill="url(#blobGradient)"
                                class="blob-path"
                            />
                        </svg>

                        <!-- Secondary Blob 1 (soft shadow) -->
                        <svg class="absolute top-8 right-12 sm:top-16 sm:right-20 w-24 sm:w-32 blob-secondary-1" viewBox="0 0 120 100" xmlns="http://www.w3.org/2000/svg" style="filter: drop-shadow(0 4px 12px rgba(252, 211, 77, 0.1));">
                            <path
                                d="M20 50
                                   C20 20, 60 5, 85 25
                                   C110 50, 90 100, 55 90
                                   C25 80, 10 70, 20 50 Z"
                                fill="#FDE68A"
                                opacity="0.18"
                                class="blob-path"
                            />
                        </svg>

                        <!-- Secondary Blob 2 (soft shadow) -->
                        <svg class="absolute bottom-12 left-8 sm:bottom-20 sm:left-12 w-28 sm:w-36 blob-secondary-2" viewBox="0 0 140 110" xmlns="http://www.w3.org/2000/svg" style="filter: drop-shadow(0 4px 12px rgba(252, 211, 77, 0.1));">
                            <path
                                d="M25 55
                                   C25 20, 70 8, 100 30
                                   C130 55, 105 110, 60 100
                                   C30 90, 10 80, 25 55 Z"
                                fill="#FEF3C7"
                                opacity="0.16"
                                class="blob-path"
                            />
                        </svg>

                        <!-- Tertiary Blob -->
                        <svg class="absolute top-24 left-20 sm:top-40 sm:left-32 w-16 sm:w-20 blob-tertiary" viewBox="0 0 80 70" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15 35
                                   C15 15, 45 5, 60 20
                                   C75 40, 55 70, 30 65
                                   C10 60, 0 50, 15 35 Z"
                                fill="#FDE68A"
                                opacity="0.16"
                            />
                        </svg>
                        
                        <!-- Additional Accent Blob -->
                        <svg class="absolute bottom-32 right-24 sm:bottom-40 sm:right-32 w-18 sm:w-24 blob-tertiary-2" viewBox="0 0 90 75" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18 37
                                   C18 18, 48 8, 65 22
                                   C82 38, 68 75, 40 70
                                   C15 65, 5 55, 18 37 Z"
                                fill="#FEF3C7"
                                opacity="0.16"
                            />
                        </svg>
                    </div>

                    <!-- Car Image -->
                    <div class="relative z-10">
                        <!-- Image Container -->
                        <div class="relative">
                            <!-- Main Image -->
                            <img
                                src="includes/img/evacuator.png"
                                alt="Evacuator auto în <?php echo htmlspecialchars($cityName); ?>"
                                class="relative max-w-full sm:max-w-md lg:max-w-2xl w-full h-auto object-contain"
                            />
                        </div>
                    </div>
                </div>
                
                <!-- Key Points Below Image - Hidden on mobile -->
                <div class="hidden lg:flex flex-wrap items-center justify-center gap-3 sm:gap-4 mt-6 lg:mt-8">
                    <div class="group flex items-center gap-2 bg-white/80 backdrop-blur-sm rounded-xl px-3 py-2 border border-yellow-200/40 shadow-sm hover:bg-white hover:border-yellow-300/60 transition-all duration-300 hover:shadow-md">
                        <div class="w-8 h-8 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-lg flex items-center justify-center shadow-sm group-hover:shadow-md transition-all duration-300">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <span class="font-bold text-gray-800 text-xs sm:text-sm"><?php echo t('disponibil_24_7'); ?></span>
                    </div>
                    <div class="group flex items-center gap-2 bg-white/80 backdrop-blur-sm rounded-xl px-3 py-2 border border-yellow-200/40 shadow-sm hover:bg-white hover:border-yellow-300/60 transition-all duration-300 hover:shadow-md">
                        <div class="w-8 h-8 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-lg flex items-center justify-center shadow-sm group-hover:shadow-md transition-all duration-300">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <span class="font-bold text-gray-800 text-xs sm:text-sm"><?php echo t('preturi_corecte'); ?></span>
                    </div>
                    <div class="group flex items-center gap-2 bg-white/80 backdrop-blur-sm rounded-xl px-3 py-2 border border-yellow-200/40 shadow-sm hover:bg-white hover:border-yellow-300/60 transition-all duration-300 hover:shadow-md">
                        <div class="w-8 h-8 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-lg flex items-center justify-center shadow-sm group-hover:shadow-md transition-all duration-300">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <span class="font-bold text-gray-800 text-xs sm:text-sm"><?php echo t('echipament_modern'); ?></span>
                    </div>
                </div>
            </div>
            
            <!-- Left Column - Premium Content -->
            <div class="order-2 lg:order-1 text-center lg:text-left space-y-6 lg:space-y-8">
                <!-- Main Heading -->
                <div class="space-y-3 sm:space-y-4">
                    <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl font-black leading-[0.95] tracking-tight">
                        <span class="block text-gray-900 drop-shadow-[0_1px_3px_rgba(0,0,0,0.08)]"><?php echo t('evacuator'); ?></span>
                        <span class="block text-yellow-500 mt-1 sm:mt-2 drop-shadow-[0_1px_2px_rgba(251,191,36,0.2)]"><?php echo htmlspecialchars($cityName); ?></span>
                    </h1>
                    <p class="text-lg sm:text-xl md:text-2xl text-gray-700 font-medium max-w-xl mx-auto lg:mx-0">
                        <?php echo t('evacuare_auto'); ?> rapidă în <strong class="text-gray-900 font-bold"><?php echo htmlspecialchars($cityName); ?></strong> <?php echo t('si_localitatile'); ?> <?php echo t('localitati_apropiere'); ?>. <?php echo t('ajungem'); ?> <strong class="text-gray-900 font-bold">15–30 <?php echo t('minute'); ?></strong>, <?php echo t('pret_corect'); ?>, <?php echo t('fara_costuri'); ?>.
                    </p>
                </div>
                
                <!-- Stats Section -->
                <div class="grid grid-cols-3 gap-4 mb-6">
                    <div class="bg-white/80 backdrop-blur-sm rounded-xl p-4 border border-yellow-200/40 shadow-md hover:shadow-lg transition-all duration-300 transform hover:scale-105">
                        <div class="text-2xl sm:text-3xl font-black text-yellow-600 mb-1 animate-count">5000+</div>
                        <div class="text-xs sm:text-sm text-gray-600 font-medium"><?php echo t('interventii'); ?></div>
                    </div>
                    <div class="bg-white/80 backdrop-blur-sm rounded-xl p-4 border border-yellow-200/40 shadow-md hover:shadow-lg transition-all duration-300 transform hover:scale-105">
                        <div class="text-2xl sm:text-3xl font-black text-yellow-600 mb-1 animate-count">30+</div>
                        <div class="text-xs sm:text-sm text-gray-600 font-medium"><?php echo t('orase_count'); ?></div>
                    </div>
                    <div class="bg-white/80 backdrop-blur-sm rounded-xl p-4 border border-yellow-200/40 shadow-md hover:shadow-lg transition-all duration-300 transform hover:scale-105">
                        <div class="text-2xl sm:text-3xl font-black text-yellow-600 mb-1 animate-count">15</div>
                        <div class="text-xs sm:text-sm text-gray-600 font-medium"><?php echo t('minute_count'); ?></div>
                    </div>
                </div>
                
                <!-- Premium CTA Button -->
                <div class="pt-4 flex flex-col sm:flex-row items-center gap-3 sm:gap-4">
                    <a href="tel:022800800" class="group relative inline-flex items-center justify-center gap-3 bg-yellow-500 hover:bg-yellow-600 text-gray-900 font-bold py-4 px-8 sm:px-10 rounded-2xl text-base sm:text-lg transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-[1.02] w-full sm:w-auto overflow-hidden">
                        <!-- Animated Background -->
                        <div class="absolute inset-0 bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <!-- Ripple Effect -->
                        <div class="absolute inset-0 bg-white/20 rounded-2xl scale-0 group-hover:scale-100 transition-transform duration-500"></div>
                        
                        <!-- Content -->
                        <div class="relative z-10 flex items-center gap-3">
                            <!-- Phone Icon -->
                            <div class="w-10 h-10 bg-white/20 rounded-xl flex items-center justify-center group-hover:rotate-12 transition-transform duration-300">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                                </svg>
                            </div>
                            
                            <!-- Text Content -->
                            <div class="text-left">
                                <div class="text-xs font-semibold opacity-80 mb-0.5 leading-tight"><?php echo t('suna_acum'); ?></div>
                                <div class="text-xl sm:text-2xl font-black tracking-tight leading-tight">022 800 800</div>
                            </div>
                        </div>
                    </a>
                    
                    <!-- Scroll to Services Button -->
                    <a href="#servicii" class="group relative inline-flex items-center justify-center gap-2 text-gray-700 hover:text-gray-900 font-semibold py-4 px-6 sm:px-8 rounded-2xl text-base sm:text-lg transition-all duration-300 border-2 border-gray-300 hover:border-gray-400 bg-white hover:bg-gray-50 shadow-md hover:shadow-lg w-full sm:w-auto">
                        <span><?php echo t('vezi_servicii'); ?></span>
                        <svg class="w-5 h-5 transition-transform group-hover:translate-y-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <a href="#servicii" class="w-12 h-12 rounded-full bg-white/80 backdrop-blur-sm flex items-center justify-center shadow-md hover:bg-white hover:shadow-lg transition-all duration-300 border border-gray-200/50">
            <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </a>
    </div>
</section>

<style>
    /* Refined Liquid Blob Animations - Premium Timing */
    @keyframes blobFloat {
        0%, 100% {
            transform: translate(0, 0) scale(1) rotate(0deg);
        }
        25% {
            transform: translate(15px, -15px) scale(1.03) rotate(1deg);
        }
        50% {
            transform: translate(-10px, 10px) scale(0.98) rotate(-1deg);
        }
        75% {
            transform: translate(10px, 15px) scale(1.02) rotate(0.5deg);
        }
    }
    
    @keyframes blobPulse {
        0%, 100% {
            opacity: 1;
            transform: scale(1);
        }
        50% {
            opacity: 0.88;
            transform: scale(1.06);
        }
    }
    
    @keyframes orbFloat1 {
        0%, 100% {
            transform: translate(0, 0) scale(1);
        }
        50% {
            transform: translate(25px, -25px) scale(1.08);
        }
    }
    
    @keyframes orbFloat2 {
        0%, 100% {
            transform: translate(0, 0) scale(1);
        }
        50% {
            transform: translate(-20px, 20px) scale(1.12);
        }
    }
    
    @keyframes orbFloat3 {
        0%, 100% {
            transform: translate(0, 0) scale(1);
        }
        50% {
            transform: translate(30px, -30px) scale(1.15);
        }
    }
    
    @keyframes orbFloat4 {
        0%, 100% {
            transform: translate(0, 0) scale(1);
        }
        50% {
            transform: translate(-25px, 25px) scale(1.1);
        }
    }
    
    @keyframes particle1 {
        0%, 100% {
            transform: translate(0, 0) scale(1);
            opacity: 0.4;
        }
        50% {
            transform: translate(50px, -50px) scale(1.5);
            opacity: 0.8;
        }
    }
    
    @keyframes particle2 {
        0%, 100% {
            transform: translate(0, 0) scale(1);
            opacity: 0.3;
        }
        50% {
            transform: translate(-40px, 40px) scale(1.3);
            opacity: 0.7;
        }
    }
    
    @keyframes particle3 {
        0%, 100% {
            transform: translate(0, 0) scale(1);
            opacity: 0.35;
        }
        50% {
            transform: translate(35px, 35px) scale(1.4);
            opacity: 0.75;
        }
    }
    
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    @keyframes countUp {
        from {
            opacity: 0;
            transform: scale(0.8);
        }
        to {
            opacity: 1;
            transform: scale(1);
        }
    }
    
    .blob-main {
        animation: blobFloat 28s ease-in-out infinite;
    }
    
    .animate-orb-float-3 {
        animation: orbFloat3 30s ease-in-out infinite;
        animation-delay: -10s;
    }
    
    .animate-orb-float-4 {
        animation: orbFloat4 35s ease-in-out infinite;
        animation-delay: -15s;
    }
    
    .animate-particle-1 {
        animation: particle1 8s ease-in-out infinite;
    }
    
    .animate-particle-2 {
        animation: particle2 10s ease-in-out infinite;
        animation-delay: -2s;
    }
    
    .animate-particle-3 {
        animation: particle3 9s ease-in-out infinite;
        animation-delay: -4s;
    }
    
    .animate-fade-in-up {
        animation: fadeInUp 0.8s ease-out forwards;
        opacity: 0;
    }
    
    .animate-count {
        animation: countUp 1s ease-out forwards;
    }
    
    .blob-secondary-1 {
        animation: blobFloat 20s ease-in-out infinite reverse;
        animation-delay: -6s;
    }
    
    .blob-secondary-2 {
        animation: blobFloat 24s ease-in-out infinite;
        animation-delay: -9s;
    }
    
    .blob-tertiary {
        animation: blobPulse 16s ease-in-out infinite;
        animation-delay: -4s;
    }
    
    .blob-tertiary-2 {
        animation: blobPulse 18s ease-in-out infinite;
        animation-delay: -7s;
    }
    
    .animate-orb-float-1 {
        animation: orbFloat1 22s ease-in-out infinite;
    }
    
    .animate-orb-float-2 {
        animation: orbFloat2 26s ease-in-out infinite;
        animation-delay: -8s;
    }
    
    .blob-path {
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }
</style>
