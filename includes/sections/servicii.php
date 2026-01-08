<!-- Servicii Section - Premium Category Design -->
<section id="servicii" class="relative py-24 px-4 overflow-hidden bg-gradient-to-b from-white to-gray-50">
    <!-- Subtle Background Pattern -->
    <div class="absolute inset-0 opacity-[0.02]">
        <div class="absolute inset-0" style="background-image: linear-gradient(rgba(0,0,0,0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(0,0,0,0.1) 1px, transparent 1px); background-size: 50px 50px;"></div>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 bg-yellow-50 border border-yellow-200 rounded-full px-5 py-2 mb-6">
                <svg class="w-4 h-4 text-yellow-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                </svg>
                <span class="text-yellow-600 text-sm font-semibold"><?php echo t('tarife_transparente'); ?></span>
            </div>
            <h2 class="text-5xl sm:text-6xl md:text-7xl font-extrabold mb-6 leading-tight">
                <span class="block text-gray-900"><?php echo t('servicii_evacuator'); ?></span>
                <span class="block text-yellow-500 mt-2"><?php echo htmlspecialchars($cityName); ?></span>
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                <?php echo t('preturi_clare'); ?>
            </p>
        </div>
        
        <!-- Categories Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
            <!-- Categoria A -->
            <div class="group relative bg-white rounded-3xl overflow-hidden border-2 border-gray-100 hover:border-yellow-400 transition-all duration-500 shadow-lg hover:shadow-2xl hover:shadow-yellow-500/20 transform hover:-translate-y-2">
                <!-- Image Section -->
                <div class="relative h-48 overflow-hidden">
                    <!-- Background Image -->
                    <img src="includes/img/categoria-a.png" alt="Categoria A - Autoturisme" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-br from-yellow-400/60 to-yellow-500/80"></div>
                    <!-- Category Badge -->
                    <div class="absolute top-4 left-4 bg-white/20 backdrop-blur-sm rounded-xl px-4 py-2 border border-white/30 z-10">
                        <span class="text-white font-bold text-lg"><?php echo t('categoria'); ?> A</span>
                    </div>
                </div>
                
                <!-- Content Section -->
                <div class="p-6">
                    <!-- Weight Range -->
                    <div class="mb-4">
                        <div class="flex items-center gap-2 text-gray-500 text-sm mb-2">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                            </svg>
                            <span><?php echo t('masa_totala'); ?></span>
                        </div>
                        <p class="text-gray-900 font-bold text-lg">&lt; 2000 KG</p>
                    </div>
                    
                    <!-- Pricing -->
                    <div class="space-y-3 pb-4 border-b border-gray-100">
                        <div class="flex items-start justify-between gap-2">
                            <div class="flex items-center gap-2 text-gray-600 text-sm">
                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                </svg>
                                <span><?php echo t('in_oras'); ?></span>
                            </div>
                            <span class="text-yellow-600 font-bold text-lg"><?php echo t('de_la'); ?> 550 <?php echo t('lei'); ?></span>
                        </div>
                        <div class="flex items-start justify-between gap-2">
                            <div class="flex items-center gap-2 text-gray-600 text-sm">
                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                </svg>
                                <span><?php echo t('extraurban'); ?></span>
                            </div>
                            <span class="text-yellow-600 font-bold text-lg"><?php echo t('de_la'); ?> 10 <?php echo t('lei'); ?>/km</span>
                        </div>
                    </div>
                    
                    <!-- CTA -->
                    <a href="tel:022800800" class="mt-4 w-full bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-3 px-4 rounded-xl text-sm transition-all duration-300 transform hover:scale-105 flex items-center justify-center gap-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                        </svg>
                        <span><?php echo t('suna_acum'); ?></span>
                    </a>
                </div>
            </div>
            
            <!-- Categoria B -->
            <div class="group relative bg-white rounded-3xl overflow-hidden border-2 border-gray-100 hover:border-yellow-400 transition-all duration-500 shadow-lg hover:shadow-2xl hover:shadow-yellow-500/20 transform hover:-translate-y-2">
                <!-- Image Section -->
                <div class="relative h-48 overflow-hidden">
                    <!-- Background Image -->
                    <img src="includes/img/categoria-b.png" alt="Categoria B - Autoturisme" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-br from-yellow-500/60 to-yellow-600/80"></div>
                    <!-- Category Badge -->
                    <div class="absolute top-4 left-4 bg-white/20 backdrop-blur-sm rounded-xl px-4 py-2 border border-white/30 z-10">
                        <span class="text-white font-bold text-lg"><?php echo t('categoria'); ?> B</span>
                    </div>
                </div>
                
                <!-- Content Section -->
                <div class="p-6">
                    <!-- Weight Range -->
                    <div class="mb-4">
                        <div class="flex items-center gap-2 text-gray-500 text-sm mb-2">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                            </svg>
                            <span><?php echo t('masa_totala'); ?></span>
                        </div>
                        <p class="text-gray-900 font-bold text-lg">2010 KG – 2990 KG</p>
                    </div>
                    
                    <!-- Pricing -->
                    <div class="space-y-3 pb-4 border-b border-gray-100">
                        <div class="flex items-start justify-between gap-2">
                            <div class="flex items-center gap-2 text-gray-600 text-sm">
                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                </svg>
                                <span><?php echo t('in_oras'); ?></span>
                            </div>
                            <span class="text-yellow-600 font-bold text-lg"><?php echo t('de_la'); ?> 600 <?php echo t('lei'); ?></span>
                        </div>
                        <div class="flex items-start justify-between gap-2">
                            <div class="flex items-center gap-2 text-gray-600 text-sm">
                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                </svg>
                                <span><?php echo t('extraurban'); ?></span>
                            </div>
                            <span class="text-yellow-600 font-bold text-lg"><?php echo t('de_la'); ?> 11 <?php echo t('lei'); ?>/km</span>
                        </div>
                    </div>
                    
                    <!-- CTA -->
                    <a href="tel:022800800" class="mt-4 w-full bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-3 px-4 rounded-xl text-sm transition-all duration-300 transform hover:scale-105 flex items-center justify-center gap-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                        </svg>
                        <span><?php echo t('suna_acum'); ?></span>
                    </a>
                </div>
            </div>
            
            <!-- Categoria C -->
            <div class="group relative bg-white rounded-3xl overflow-hidden border-2 border-gray-100 hover:border-yellow-400 transition-all duration-500 shadow-lg hover:shadow-2xl hover:shadow-yellow-500/20 transform hover:-translate-y-2">
                <!-- Image Section -->
                <div class="relative h-48 overflow-hidden">
                    <!-- Background Image -->
                    <img src="includes/img/categoria-c.png" alt="Categoria C - Autoturisme" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-br from-yellow-600/60 to-yellow-700/80"></div>
                    <!-- Category Badge -->
                    <div class="absolute top-4 left-4 bg-white/20 backdrop-blur-sm rounded-xl px-4 py-2 border border-white/30 z-10">
                        <span class="text-white font-bold text-lg"><?php echo t('categoria'); ?> C</span>
                    </div>
                </div>
                
                <!-- Content Section -->
                <div class="p-6">
                    <!-- Weight Range -->
                    <div class="mb-4">
                        <div class="flex items-center gap-2 text-gray-500 text-sm mb-2">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                            </svg>
                            <span><?php echo t('masa_totala'); ?></span>
                        </div>
                        <p class="text-gray-900 font-bold text-lg">3000 KG – 4990 KG</p>
                    </div>
                    
                    <!-- Pricing -->
                    <div class="space-y-3 pb-4 border-b border-gray-100">
                        <div class="flex items-start justify-between gap-2">
                            <div class="flex items-center gap-2 text-gray-600 text-sm">
                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                </svg>
                                <span><?php echo t('in_oras'); ?></span>
                            </div>
                            <span class="text-yellow-600 font-bold text-lg"><?php echo t('de_la'); ?> 650 <?php echo t('lei'); ?></span>
                        </div>
                        <div class="flex items-start justify-between gap-2">
                            <div class="flex items-center gap-2 text-gray-600 text-sm">
                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                </svg>
                                <span><?php echo t('extraurban'); ?></span>
                            </div>
                            <span class="text-yellow-600 font-bold text-lg"><?php echo t('de_la'); ?> 13 <?php echo t('lei'); ?>/km</span>
                        </div>
                    </div>
                    
                    <!-- CTA -->
                    <a href="tel:022800800" class="mt-4 w-full bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-3 px-4 rounded-xl text-sm transition-all duration-300 transform hover:scale-105 flex items-center justify-center gap-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                        </svg>
                        <span><?php echo t('suna_acum'); ?></span>
                    </a>
                </div>
            </div>
            
            <!-- Categoria D -->
            <div class="group relative bg-white rounded-3xl overflow-hidden border-2 border-gray-100 hover:border-yellow-400 transition-all duration-500 shadow-lg hover:shadow-2xl hover:shadow-yellow-500/20 transform hover:-translate-y-2">
                <!-- Image Section -->
                <div class="relative h-48 overflow-hidden">
                    <!-- Background Image -->
                    <img src="includes/img/categoria-d.png" alt="Categoria D - Autoturisme" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-br from-yellow-700/60 to-yellow-800/80"></div>
                    <!-- Category Badge -->
                    <div class="absolute top-4 left-4 bg-white/20 backdrop-blur-sm rounded-xl px-4 py-2 border border-white/30 z-10">
                        <span class="text-white font-bold text-lg"><?php echo t('categoria'); ?> D</span>
                    </div>
                </div>
                
                <!-- Content Section -->
                <div class="p-6">
                    <!-- Weight Range -->
                    <div class="mb-4">
                        <div class="flex items-center gap-2 text-gray-500 text-sm mb-2">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                            </svg>
                            <span><?php echo t('masa_totala'); ?></span>
                        </div>
                        <p class="text-gray-900 font-bold text-lg">5000 KG – 15000 KG</p>
                    </div>
                    
                    <!-- Pricing -->
                    <div class="space-y-3 pb-4 border-b border-gray-100">
                        <div class="flex items-start justify-between gap-2">
                            <div class="flex items-center gap-2 text-gray-600 text-sm">
                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                </svg>
                                <span><?php echo t('in_oras'); ?></span>
                            </div>
                            <span class="text-yellow-600 font-bold text-lg"><?php echo t('de_la'); ?> 800 <?php echo t('lei'); ?></span>
                        </div>
                        <div class="flex items-start justify-between gap-2">
                            <div class="flex items-center gap-2 text-gray-600 text-sm">
                                <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                </svg>
                                <span><?php echo t('extraurban'); ?></span>
                            </div>
                            <span class="text-yellow-600 font-bold text-lg"><?php echo t('de_la'); ?> 16 <?php echo t('lei'); ?>/km</span>
                        </div>
                    </div>
                    
                    <!-- CTA -->
                    <a href="tel:022800800" class="mt-4 w-full bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-3 px-4 rounded-xl text-sm transition-all duration-300 transform hover:scale-105 flex items-center justify-center gap-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                        </svg>
                        <span><?php echo t('suna_acum'); ?></span>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Bottom CTA Section -->
        <div class="mt-16 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-3xl p-10 md:p-12 border-2 border-yellow-400 shadow-2xl shadow-yellow-500/30">
            <div class="text-center max-w-3xl mx-auto">
                <h3 class="text-3xl md:text-4xl font-bold text-white mb-4">
                    <?php echo t('ai_nevoie_pret'); ?>
                </h3>
                <p class="text-yellow-50 text-lg mb-8 leading-relaxed">
                    <?php echo t('suna_acum_pret'); ?>
                </p>
                <a href="tel:022800800" class="inline-flex items-center gap-3 bg-white hover:bg-gray-50 text-yellow-600 font-bold py-4 px-8 rounded-xl text-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                    </svg>
                    <span>022 800 800</span>
                </a>
            </div>
        </div>
    </div>
</section>
