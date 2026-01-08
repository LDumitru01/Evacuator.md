<!-- Alte Orașe Section - Modern Premium Design -->
<section id="alte-orase" class="relative py-24 px-4 overflow-hidden bg-gradient-to-b from-white to-gray-50">
    <!-- Subtle Background Pattern -->
    <div class="absolute inset-0 opacity-[0.02]">
        <div class="absolute inset-0" style="background-image: linear-gradient(rgba(0,0,0,0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(0,0,0,0.1) 1px, transparent 1px); background-size: 50px 50px;"></div>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 bg-yellow-50 border border-yellow-200 rounded-full px-5 py-2 mb-6">
                <svg class="w-4 h-4 text-yellow-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                </svg>
                <span class="text-yellow-600 text-sm font-semibold"><?php echo t('acoperire_nationala'); ?></span>
            </div>
            <h2 class="text-5xl sm:text-6xl md:text-7xl font-extrabold mb-6 leading-tight">
                <span class="block text-gray-900"><?php echo t('evacuator_si_in'); ?></span>
                <span class="block text-yellow-500 mt-2"><?php echo t('alte_orase'); ?></span>
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                <?php echo t('acoperim_toata'); ?>
            </p>
        </div>
        
        <!-- Cities Grid -->
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4 mb-16">
            <?php 
            foreach ($oraseLinkuri as $oras): 
                $isCurrent = (strcasecmp($oras, $cityName) === 0);
                $orasSlug = strtolower(str_replace(['ă', 'â', 'î', 'ș', 'ț', ' '], ['a', 'a', 'i', 's', 't', '-'], $oras));
            ?>
                <?php if ($isCurrent): ?>
                    <!-- Current City - Highlighted -->
                    <div class="group relative bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-2xl p-5 text-center border-2 border-yellow-400 shadow-lg hover:shadow-2xl hover:shadow-yellow-500/30 transform hover:-translate-y-1 transition-all duration-300">
                        <div class="absolute top-2 right-2 w-6 h-6 bg-white/30 rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="mb-2">
                            <svg class="w-8 h-8 text-white mx-auto mb-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"></path>
                                <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z"></path>
                            </svg>
                        </div>
                        <span class="font-bold text-white text-sm leading-tight block"><?php echo $oras; ?></span>
                        <span class="text-yellow-100 text-xs mt-1 block"><?php echo t('orasul_curent'); ?></span>
                    </div>
                <?php else: ?>
                    <!-- Other Cities - Clickable -->
                    <a href="<?php echo getLangUrl('oras.php', ['city' => $oras]); ?>" class="group relative bg-white rounded-2xl p-5 text-center border-2 border-gray-100 hover:border-yellow-400 shadow-md hover:shadow-2xl hover:shadow-yellow-500/20 transform hover:-translate-y-2 transition-all duration-300 block">
                        <div class="mb-2">
                            <div class="w-12 h-12 bg-yellow-100 rounded-xl flex items-center justify-center mx-auto mb-2 group-hover:bg-yellow-500 group-hover:scale-110 transition-all duration-300">
                                <svg class="w-6 h-6 text-yellow-600 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"></path>
                                    <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z"></path>
                                </svg>
                            </div>
                        </div>
                        <span class="font-bold text-gray-900 text-sm leading-tight block group-hover:text-yellow-600 transition-colors">Evacuator</span>
                        <span class="text-gray-600 text-xs mt-1 block group-hover:text-gray-900 transition-colors"><?php echo $oras; ?></span>
                    </a>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
        
        <!-- Additional Cities Info -->
        <div class="bg-gradient-to-br from-gray-50 to-white rounded-3xl p-8 md:p-12 border-2 border-gray-100 shadow-xl mb-12">
            <div class="text-center mb-8">
                <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    <?php echo t('peste'); ?> <span class="text-yellow-500"><?php echo count($oraseAcoperite); ?>+</span> <?php echo t('localitati_acoperite'); ?>
                </h3>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    <?php echo t('servicii_profesionale_evacuare'); ?>
                </p>
            </div>
            
            <!-- All Cities List -->
            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 mb-8">
                <?php 
                $displayedCities = array_slice($oraseAcoperite, 0, 16); // Show first 16 cities
                foreach ($displayedCities as $oras): 
                    $isInMainList = in_array($oras, $oraseLinkuri);
                ?>
                    <div class="flex items-center gap-2 text-gray-700 group">
                        <svg class="w-4 h-4 text-yellow-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-sm group-hover:text-gray-900 transition-colors"><?php echo $oras; ?></span>
                        <?php if ($isInMainList): ?>
                            <span class="text-xs text-yellow-600 font-semibold">•</span>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
            
            <?php if (count($oraseAcoperite) > 16): ?>
                <div class="text-center">
                    <p class="text-gray-600 mb-4">
                        <?php echo t('si_multe_alte'); ?>
                    </p>
                </div>
            <?php endif; ?>
        </div>
        
        <!-- CTA Section -->
        <div class="bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-3xl p-8 md:p-12 text-center border-2 border-yellow-400 shadow-2xl shadow-yellow-500/30">
            <div class="max-w-2xl mx-auto">
                <div class="inline-flex items-center gap-2 bg-white/20 backdrop-blur-sm rounded-full px-5 py-2 mb-6 border border-white/30">
                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                    </svg>
                    <span class="text-white text-sm font-semibold"><?php echo t('disponibil_24_7'); ?></span>
                </div>
                <h3 class="text-3xl md:text-4xl font-bold text-white mb-4">
                    <?php echo t('cauti_evacuator'); ?>
                </h3>
                <p class="text-yellow-50 text-lg mb-8 leading-relaxed">
                    <?php echo t('suna_ne_acum'); ?>
                </p>
                <a href="tel:022800800" class="inline-flex items-center gap-3 bg-white hover:bg-gray-50 text-gray-900 font-bold py-4 px-8 rounded-2xl text-lg transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                    </svg>
                    <span>022 800 800</span>
                </a>
            </div>
        </div>
    </div>
</section>
