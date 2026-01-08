<?php
// --- CONFIGURARE PHP (Ca să nu ai erori dacă variabilele lipsesc) ---
// Dacă ai deja aceste variabile în site-ul tău, poți șterge acest bloc PHP de sus.
if (!isset($cityName)) { $cityName = "Chișinău"; }
if (!isset($baseUrl)) { $baseUrl = ""; } // Lasă gol dacă e în root
if (!function_exists('t')) {
    // Funcție simplă de traducere simulată
    function t($key) {
        $dictionary = [
            'evacuator' => 'Evacuator Auto',
            'evacuare_auto' => 'Servicii de tractare',
            'si_localitatile' => 'și în',
            'localitati_apropiere' => 'suburbii',
            'ajungem' => 'Ajungem în',
            'minute' => 'minute',
            'pret_corect' => 'preț corect',
            'fara_costuri' => 'fără taxe ascunse',
            'disponibil_24_7' => 'Non-Stop 24/7',
            'preturi_corecte' => 'Preț Transparent',
            'echipament_modern' => 'Platformă Pro',
            'interventii' => 'Intervenții',
            'orase_count' => 'Localități',
            'minute_count' => 'Timp Mediu',
            'suna_acum' => 'Sună Dispecer',
            'vezi_servicii' => 'Vezi Tarife',
        ];
        return isset($dictionary[$key]) ? $dictionary[$key] : ucfirst(str_replace('_', ' ', $key));
    }
}
?>

<section class="relative min-h-screen flex items-center justify-center overflow-hidden" 
         style="background: linear-gradient(115deg, #0a0a0a 0%, #171717 45%, #b45309 60%, #fbbf24 100%);">
    
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute inset-0 opacity-[0.04]" 
             style="background-image: url('data:image/svg+xml,%3Csvg viewBox=%220 0 200 200%22 xmlns=%22http://www.w3.org/2000/svg%22%3E%3Cfilter id=%22noise%22%3E%3CfeTurbulence type=%22fractalNoise%22 baseFrequency=%220.65%22 numOctaves=%223%22 stitchTiles=%22stitch%22/%3E%3C/filter%3E%3Crect width=%22100%25%22 height=%22100%25%22 filter=%22url(%23noise)%22/%3E%3C/svg%3E');">
        </div>
        
        <div class="absolute left-0 top-0 bottom-0 w-1/2 opacity-[0.05]" 
             style="background-image: linear-gradient(rgba(255,255,255,0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.1) 1px, transparent 1px); background-size: 40px 40px;">
        </div>

        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-indigo-900/20 rounded-full blur-[120px] animate-pulse-slow"></div>
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-yellow-300/20 rounded-full blur-[100px]"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 w-full">
        <div class="grid lg:grid-cols-2 gap-10 lg:gap-20 items-center">
            
            <div class="order-2 lg:order-1 text-center lg:text-left space-y-8">
                
                <div class="space-y-4">
                    <h1 class="text-5xl sm:text-6xl md:text-7xl lg:text-8xl font-black leading-[0.95] tracking-tight text-white drop-shadow-2xl">
                        <?php echo t('evacuator'); ?>
                        <span class="block mt-2 text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 via-yellow-400 to-yellow-600">
                            <?php echo htmlspecialchars($cityName); ?>
                        </span>
                    </h1>
                    
                    <p class="text-lg sm:text-xl text-gray-400 font-medium max-w-lg mx-auto lg:mx-0 leading-relaxed">
                        Intervenție rapidă. Ajungem în <strong class="text-white border-b border-yellow-500">15-30 minute</strong>. 
                        Servicii premium la preț standard.
                    </p>
                </div>

                <div class="grid grid-cols-3 gap-3 sm:gap-4">
                    <div class="bg-white/5 backdrop-blur-md border border-white/10 rounded-2xl p-4 hover:bg-white/10 transition duration-300">
                        <div class="text-2xl sm:text-3xl font-bold text-yellow-400">24/7</div>
                        <div class="text-xs text-gray-500 font-semibold uppercase">Program</div>
                    </div>
                    <div class="bg-white/5 backdrop-blur-md border border-white/10 rounded-2xl p-4 hover:bg-white/10 transition duration-300">
                        <div class="text-2xl sm:text-3xl font-bold text-yellow-400">15m</div>
                        <div class="text-xs text-gray-500 font-semibold uppercase">Rapiditate</div>
                    </div>
                    <div class="bg-white/5 backdrop-blur-md border border-white/10 rounded-2xl p-4 hover:bg-white/10 transition duration-300">
                        <div class="text-2xl sm:text-3xl font-bold text-yellow-400">100%</div>
                        <div class="text-xs text-gray-500 font-semibold uppercase">Siguranță</div>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start pt-4">
                    <a href="tel:022800800" class="group relative flex items-center justify-center gap-3 bg-yellow-500 hover:bg-yellow-400 text-black font-bold py-4 px-8 rounded-xl transition-all duration-300 transform hover:-translate-y-1 shadow-[0_0_20px_rgba(234,179,8,0.4)]">
                        <span class="absolute inset-0 w-full h-full bg-white/20 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity"></span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg>
                        <span class="text-lg">022 800 800</span>
                    </a>
                    
                    <a href="#servicii" class="flex items-center justify-center gap-2 px-8 py-4 rounded-xl border border-white/20 text-white font-semibold hover:bg-white/10 transition-colors">
                        Servicii
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
                    </a>
                </div>
            </div>

            <div class="order-1 lg:order-2 relative">
                <div class="relative h-[400px] sm:h-[500px] lg:h-[650px] flex items-center justify-center">

                    <div class="relative z-10 transform hover:scale-105 transition-transform duration-700">
                        <img 
                            src="<?php echo $baseUrl; ?>includes/img/evacuator.png" 
                            alt="Evacuator <?php echo htmlspecialchars($cityName); ?>"
                            class="w-full h-auto object-contain drop-shadow-[0_20px_50px_rgba(0,0,0,0.5)]"
                        />
                    </div>
                </div>
            </div>

        </div>
    </div>
    
    <div class="absolute bottom-6 left-1/2 -translate-x-1/2 animate-bounce hidden sm:block">
        <div class="w-8 h-12 rounded-full border-2 border-white/30 flex justify-center p-1">
            <div class="w-1 h-3 bg-yellow-500 rounded-full animate-scroll-down"></div>
        </div>
    </div>

</section>

<style>
    /* Animație fluidă pentru blob */
    @keyframes blobSlow {
        0%, 100% { transform: translate(0px, 0px) scale(1); }
        33% { transform: translate(30px, -50px) scale(1.1); }
        66% { transform: translate(-20px, 20px) scale(0.9); }
    }
    
    /* Plutire elemente */
    @keyframes floatDelayed {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }

    /* Animație pentru scroll mouse */
    @keyframes scrollDown {
        0% { transform: translateY(0); opacity: 1; }
        100% { transform: translateY(15px); opacity: 0; }
    }

    /* Clase utilitare */
    .animate-blob-slow {
        animation: blobSlow 15s infinite ease-in-out alternate;
    }
    
    .animate-float-delayed {
        animation: floatDelayed 6s infinite ease-in-out;
        animation-delay: 1s;
    }
    
    .animate-scroll-down {
        animation: scrollDown 1.5s infinite;
    }
    
    .animate-pulse-slow {
        animation: pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }
</style>