<!-- Despre Evacuator Section - Modern Premium Design -->
<section id="despre" class="relative py-24 px-4 overflow-hidden bg-white">
    <!-- Subtle Background Pattern -->
    <div class="absolute inset-0 opacity-[0.02]">
        <div class="absolute inset-0" style="background-image: linear-gradient(rgba(0,0,0,0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(0,0,0,0.1) 1px, transparent 1px); background-size: 50px 50px;"></div>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 bg-yellow-50 border border-yellow-200 rounded-full px-5 py-2 mb-6">
                <svg class="w-4 h-4 text-yellow-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"></path>
                    <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z"></path>
                </svg>
                <span class="text-yellow-600 text-sm font-semibold"><?php echo t('flota_moderna'); ?></span>
            </div>
            <h2 class="text-5xl sm:text-6xl md:text-7xl font-extrabold mb-6 leading-tight">
                <span class="block text-gray-900"><?php echo t('tipuri_vehicule'); ?></span>
                <span class="block text-yellow-500 mt-2"><?php echo t('evacuate'); ?></span>
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                <?php echo t('echipament_modern_text'); ?>
            </p>
        </div>
        
        <!-- Vehicle Types Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-20">
            <!-- Autoturisme -->
            <div class="group relative bg-gradient-to-br from-white to-gray-50 rounded-2xl p-6 border-2 border-gray-100 hover:border-yellow-400 transition-all duration-500 shadow-lg hover:shadow-2xl hover:shadow-yellow-500/20 transform hover:-translate-y-2">
                <div class="absolute top-4 right-4 w-14 h-14 bg-yellow-100 rounded-xl flex items-center justify-center group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 z-10">
                    <svg class="w-7 h-7 text-yellow-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"></path>
                        <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z"></path>
                    </svg>
                </div>
                <div class="pr-20">
                    <h3 class="text-xl font-bold text-gray-900 mb-3"><?php echo t('autoturisme'); ?></h3>
                    <p class="text-gray-600 leading-relaxed text-sm"><?php echo t('toate_marcile'); ?></p>
                </div>
            </div>
            
            <!-- SUV-uri -->
            <div class="group relative bg-gradient-to-br from-white to-gray-50 rounded-2xl p-6 border-2 border-gray-100 hover:border-yellow-400 transition-all duration-500 shadow-lg hover:shadow-2xl hover:shadow-yellow-500/20 transform hover:-translate-y-2">
                <div class="absolute top-4 right-4 w-14 h-14 bg-yellow-100 rounded-xl flex items-center justify-center group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 z-10">
                    <svg class="w-7 h-7 text-yellow-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"></path>
                        <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z"></path>
                    </svg>
                </div>
                <div class="pr-20">
                    <h3 class="text-xl font-bold text-gray-900 mb-3"><?php echo t('suv_uri'); ?></h3>
                    <p class="text-gray-600 leading-relaxed text-sm"><?php echo t('inclusiv_modele'); ?></p>
                </div>
            </div>
            
            <!-- Microbuze -->
            <div class="group relative bg-gradient-to-br from-white to-gray-50 rounded-2xl p-6 border-2 border-gray-100 hover:border-yellow-400 transition-all duration-500 shadow-lg hover:shadow-2xl hover:shadow-yellow-500/20 transform hover:-translate-y-2">
                <div class="absolute top-4 right-4 w-14 h-14 bg-yellow-100 rounded-xl flex items-center justify-center group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 z-10">
                    <svg class="w-7 h-7 text-yellow-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"></path>
                        <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z"></path>
                    </svg>
                </div>
                <div class="pr-20">
                    <h3 class="text-xl font-bold text-gray-900 mb-3"><?php echo t('microbuze'); ?></h3>
                    <p class="text-gray-600 leading-relaxed text-sm"><?php echo t('pana_la_9'); ?></p>
                </div>
            </div>
            
            <!-- Vehicule avariate -->
            <div class="group relative bg-gradient-to-br from-white to-gray-50 rounded-2xl p-6 border-2 border-gray-100 hover:border-yellow-400 transition-all duration-500 shadow-lg hover:shadow-2xl hover:shadow-yellow-500/20 transform hover:-translate-y-2">
                <div class="absolute top-4 right-4 w-14 h-14 bg-yellow-100 rounded-xl flex items-center justify-center group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 z-10">
                    <svg class="w-7 h-7 text-yellow-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="pr-20">
                    <h3 class="text-xl font-bold text-gray-900 mb-3"><?php echo t('vehicule_avariate'); ?></h3>
                    <p class="text-gray-600 leading-relaxed text-sm"><?php echo t('inclusiv_accidente'); ?></p>
                </div>
            </div>
        </div>
        
        <!-- Coverage Section -->
        <div class="bg-gradient-to-br from-gray-50 to-white rounded-3xl p-10 md:p-16 border-2 border-gray-100 shadow-2xl">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Left Column -->
                <div>
                    <div class="inline-flex items-center gap-2 bg-yellow-100 border border-yellow-200 rounded-full px-4 py-2 mb-6">
                        <svg class="w-4 h-4 text-yellow-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-yellow-600 text-sm font-semibold"><?php echo t('acoperire_completa'); ?></span>
                    </div>
                    <h3 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-6 leading-tight">
                        <?php echo t('servicii_in_zona'); ?>
                        <span class="block text-yellow-500 mt-2"><?php echo htmlspecialchars($cityName); ?></span>
                    </h3>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        <?php echo t('acoperim_intreaga'); ?> <strong class="text-gray-900"><?php echo htmlspecialchars($cityName); ?></strong>, <?php echo t('de_la_centru'); ?> 
                        <strong class="text-yellow-600"><?php echo t('cunoastem_perfect'); ?></strong> <?php echo t('toate_traseele'); ?>
                    </p>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center gap-4 group">
                            <div class="w-12 h-12 bg-yellow-500 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-lg text-gray-700 font-medium"><?php echo t('centru_oras'); ?></span>
                        </li>
                        <li class="flex items-center gap-4 group">
                            <div class="w-12 h-12 bg-yellow-500 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-lg text-gray-700 font-medium"><?php echo t('zone_industriale'); ?></span>
                        </li>
                        <li class="flex items-center gap-4 group">
                            <div class="w-12 h-12 bg-yellow-500 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-lg text-gray-700 font-medium"><?php echo t('localitati_sate'); ?></span>
                        </li>
                    </ul>
                </div>
                
                <!-- Right Column - Why Choose Us -->
                <div class="relative">
                    <div class="bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-3xl p-10 border-2 border-yellow-400 shadow-2xl shadow-yellow-500/30">
                        <h4 class="text-3xl font-bold text-white mb-8 flex items-center gap-3">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <?php echo t('de_ce_sa_ne_alegi'); ?>
                        </h4>
                        <ul class="space-y-6">
                            <li class="flex items-start gap-4 group">
                                <div class="w-10 h-10 bg-white/20 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-white/30 transition-all">
                                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div>
                                    <span class="text-white font-bold text-lg block mb-1"><?php echo t('experienta'); ?></span>
                                    <span class="text-yellow-50"><?php echo t('peste_10_ani'); ?></span>
                                </div>
                            </li>
                            <li class="flex items-start gap-4 group">
                                <div class="w-10 h-10 bg-white/20 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-white/30 transition-all">
                                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div>
                                    <span class="text-white font-bold text-lg block mb-1"><?php echo t('asigurare'); ?></span>
                                    <span class="text-yellow-50"><?php echo t('acoperire_completa_vehicul'); ?></span>
                                </div>
                            </li>
                            <li class="flex items-start gap-4 group">
                                <div class="w-10 h-10 bg-white/20 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-white/30 transition-all">
                                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div>
                                    <span class="text-white font-bold text-lg block mb-1"><?php echo t('licente'); ?></span>
                                    <span class="text-yellow-50"><?php echo t('autorizatii_valabile'); ?></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
