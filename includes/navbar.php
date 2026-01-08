<!-- Navigation Header -->
<header class="sticky top-0 z-50 bg-white border-b border-gray-200 shadow-sm">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 sm:h-20">
            <!-- Logo Section -->
            <div class="flex items-center gap-2 sm:gap-3">
                <a href="<?php echo getLangUrl('index.php'); ?>" class="flex items-center gap-2 sm:gap-3 group">
                    <img src="<?php echo $baseUrl; ?>includes/img/logo_evacuator.png" alt="Evacuator Auto" class="h-10 sm:h-14 md:h-16 object-contain flex-shrink-0 transition-transform duration-300 group-hover:scale-105">
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center gap-6">
                <a href="#servicii" class="text-gray-700 hover:text-yellow-600 font-medium transition-colors"><?php echo t('servicii'); ?></a>
                <a href="#comanda" class="text-gray-700 hover:text-yellow-600 font-medium transition-colors"><?php echo t('comanda'); ?></a>
                <a href="#despre" class="text-gray-700 hover:text-yellow-600 font-medium transition-colors"><?php echo t('despre'); ?></a>
                <a href="#recenzii" class="text-gray-700 hover:text-yellow-600 font-medium transition-colors"><?php echo t('recenzii'); ?></a>
                <a href="#alte-orase" class="text-gray-700 hover:text-yellow-600 font-medium transition-colors"><?php echo t('orase'); ?></a>
            </div>

            <!-- Phone CTA & Language Selector & Mobile Menu -->
            <div class="flex items-center gap-1.5 sm:gap-3">
                <!-- Language Selector - Direct Buttons -->
                <div class="flex items-center gap-0.5 sm:gap-1 bg-gray-100 rounded-lg p-0.5 sm:p-1">
                    <button onclick="switchLanguage('ro')" class="flex items-center justify-center gap-1 px-2 py-1.5 sm:px-3 sm:py-1.5 text-xs sm:text-sm font-semibold uppercase rounded-md transition-all duration-200 <?php echo $lang === 'ro' ? 'bg-yellow-500 text-white shadow-md' : 'text-gray-600 hover:text-gray-900 hover:bg-gray-50'; ?>">
                        <span class="w-4 h-3 sm:w-5 sm:h-3.5 rounded-sm overflow-hidden flex flex-shrink-0">
                            <span class="w-1/3 bg-blue-600"></span>
                            <span class="w-1/3 bg-yellow-500"></span>
                            <span class="w-1/3 bg-red-600"></span>
                        </span>
                        <span class="hidden xs:inline sm:inline">RO</span>
                    </button>
                    <button onclick="switchLanguage('ru')" class="flex items-center justify-center gap-1 px-2 py-1.5 sm:px-3 sm:py-1.5 text-xs sm:text-sm font-semibold uppercase rounded-md transition-all duration-200 <?php echo $lang === 'ru' ? 'bg-yellow-500 text-white shadow-md' : 'text-gray-600 hover:text-gray-900 hover:bg-gray-50'; ?>">
                        <span class="w-4 h-3 sm:w-5 sm:h-3.5 bg-gradient-to-b from-white via-blue-500 to-red-500 rounded-sm flex-shrink-0"></span>
                        <span class="hidden xs:inline sm:inline">RU</span>
                    </button>
                </div>
                
                <!-- Phone Button -->
                <a href="tel:022800800" class="flex items-center gap-1.5 sm:gap-2 bg-yellow-500 hover:bg-yellow-600 text-white font-bold px-3 sm:px-6 py-2 sm:py-3 rounded-lg sm:rounded-xl transition-all duration-300 shadow-md hover:shadow-lg transform hover:scale-105 text-sm sm:text-base">
                    <svg class="w-4 h-4 sm:w-5 sm:h-5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                    </svg>
                    <span class="hidden sm:inline">022 800 800</span>
                    <span class="sm:hidden text-xs"><?php echo $lang === 'ru' ? 'Звонок' : 'Sună'; ?></span>
                </a>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-button" class="lg:hidden p-2 text-gray-700 hover:text-yellow-600 transition-colors flex-shrink-0">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden lg:hidden pb-4 border-t border-gray-200 mt-4">
            <div class="flex flex-col gap-4 pt-4">
                <a href="#servicii" class="text-gray-700 hover:text-yellow-600 font-medium py-2 transition-colors"><?php echo t('servicii'); ?></a>
                <a href="#comanda" class="text-gray-700 hover:text-yellow-600 font-medium py-2 transition-colors"><?php echo t('comanda'); ?></a>
                <a href="#despre" class="text-gray-700 hover:text-yellow-600 font-medium py-2 transition-colors"><?php echo t('despre'); ?></a>
                <a href="#recenzii" class="text-gray-700 hover:text-yellow-600 font-medium py-2 transition-colors"><?php echo t('recenzii'); ?></a>
                <a href="#alte-orase" class="text-gray-700 hover:text-yellow-600 font-medium py-2 transition-colors"><?php echo t('orase'); ?></a>
            </div>
        </div>
    </nav>
</header>

<script>
    // Mobile menu toggle
    document.getElementById('mobile-menu-button')?.addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu?.classList.toggle('hidden');
    });
    
    // Fast language switching function
    function switchLanguage(lang) {
        // Set cookie immediately
        document.cookie = 'lang=' + lang + '; path=/; max-age=' + (365 * 24 * 60 * 60);
        
        // Get current path and replace language prefix
        let path = window.location.pathname;
        let search = window.location.search;
        
        // Detect base path (e.g., /comand/)
        let basePath = '';
        if (path.indexOf('/comand/') === 0) {
            basePath = '/comand';
            path = path.substring(7); // Remove /comand
        }
        
        // Remove existing language prefix if any
        path = path.replace(/^\/(ro|ru)\//, '/');
        path = path.replace(/^\/(ro|ru)$/, '/');
        
        // Add new language prefix
        if (path === '/' || path === '') {
            path = basePath + '/' + lang + '/';
        } else {
            path = basePath + '/' + lang + path;
        }
        
        // Remove lang parameter from search if exists
        const params = new URLSearchParams(search);
        params.delete('lang');
        const newSearch = params.toString() ? '?' + params.toString() : '';
        
        // Reload page instantly
        window.location.href = path + newSearch;
    }
</script>
