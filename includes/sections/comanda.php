<!-- Comandă Evacuator Section - Dynamic Premium Design -->
<section id="comanda" class="relative py-24 px-4 overflow-hidden bg-gradient-to-b from-white via-gray-50 to-white">
    <!-- Animated Background -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: linear-gradient(rgba(0,0,0,0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(0,0,0,0.1) 1px, transparent 1px); background-size: 50px 50px;"></div>
        <!-- Floating Orbs -->
        <div class="absolute top-20 right-10 w-72 h-72 bg-yellow-400/10 rounded-full blur-3xl animate-float-1"></div>
        <div class="absolute bottom-20 left-10 w-96 h-96 bg-yellow-500/10 rounded-full blur-3xl animate-float-2"></div>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto">
        <!-- Header Section -->
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 bg-gradient-to-r from-yellow-50 to-yellow-100 border-2 border-yellow-200 rounded-full px-6 py-3 mb-8 shadow-lg animate-fade-in">
                <div class="w-2 h-2 bg-yellow-500 rounded-full animate-pulse"></div>
                <svg class="w-5 h-5 text-yellow-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                </svg>
                <span class="text-yellow-700 text-sm font-bold"><?php echo t('rezervare_instant'); ?></span>
            </div>
            <h2 class="text-5xl sm:text-6xl md:text-7xl font-extrabold mb-8 leading-tight">
                <span class="block text-gray-900"><?php echo t('cum_rezervi'); ?></span>
                <span class="block text-yellow-500 mt-3 bg-gradient-to-r from-yellow-500 to-yellow-600 bg-clip-text text-transparent"><?php echo t('evacuator'); ?> <?php echo $lang === 'ru' ? 'в' : 'în'; ?> <?php echo htmlspecialchars($cityName); ?></span>
                <span class="block text-gray-700 text-4xl sm:text-5xl mt-4 font-bold"><?php echo t('in_3_pasi'); ?></span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                <?php echo t('rezervarea_unui'); ?> <strong class="text-gray-900"><?php echo t('evacuator'); ?> <?php echo $lang === 'ru' ? 'в' : 'în'; ?> <?php echo htmlspecialchars($cityName); ?></strong> <?php echo t('este_rapida'); ?> 
                <span class="block mt-3 font-bold text-yellow-600 text-lg"><?php echo t('servicii_profesionale'); ?> <?php echo htmlspecialchars($cityName); ?>.</span>
            </p>
        </div>

        <!-- Main Content Grid -->
        <div class="grid lg:grid-cols-2 gap-12 mb-16">
            <!-- Left Column - Dynamic Process Steps -->
            <div class="space-y-8 relative">
                <!-- Timeline Line -->
                <div class="absolute left-7 top-0 bottom-0 w-1 bg-gradient-to-b from-yellow-400 via-yellow-500 to-yellow-600 rounded-full opacity-30 hidden lg:block"></div>
                
                <!-- Step 1 -->
                <div class="relative group">
                    <div class="absolute lg:-left-4 left-4 top-4 lg:top-0 w-12 h-12 lg:w-16 lg:h-16 bg-yellow-500 rounded-full flex items-center justify-center shadow-xl z-10 transform group-hover:scale-125 transition-all duration-500 border-4 border-white">
                        <span class="text-white font-extrabold text-xl lg:text-2xl">1</span>
                        <div class="absolute inset-0 bg-yellow-400 rounded-full animate-ping opacity-75"></div>
                    </div>
                    <div class="ml-0 lg:ml-12 mt-16 lg:mt-0 bg-white rounded-3xl p-5 sm:p-6 lg:p-8 border-2 border-gray-100 shadow-xl hover:shadow-2xl hover:border-yellow-400 transition-all duration-500 transform hover:-translate-y-2 hover:scale-[1.02]">
                        <div class="flex flex-col sm:flex-row items-start gap-3 sm:gap-4 mb-4">
                            <div class="w-12 h-12 sm:w-14 sm:h-14 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-2xl flex items-center justify-center shadow-lg group-hover:rotate-12 transition-transform duration-500 flex-shrink-0">
                                <svg class="w-6 h-6 sm:w-7 sm:h-7 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl sm:text-2xl font-extrabold text-gray-900 mb-2 sm:mb-3"><?php echo t('apelezi_serviciul'); ?></h3>
                                <p class="text-gray-600 leading-relaxed text-base sm:text-lg"><?php echo t('contacteaza'); ?> <strong class="text-yellow-600"><?php echo t('evacuator'); ?> <?php echo $lang === 'ru' ? 'в' : 'în'; ?> <?php echo htmlspecialchars($cityName); ?></strong> <?php echo $lang === 'ru' ? 'по' : 'la'; ?> <strong class="text-yellow-600 text-lg sm:text-xl">022 800 800</strong>. <?php echo t('operatorul_nostru'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="relative group">
                    <div class="absolute lg:-left-4 left-4 top-4 lg:top-0 w-12 h-12 lg:w-16 lg:h-16 bg-yellow-500 rounded-full flex items-center justify-center shadow-xl z-10 transform group-hover:scale-125 transition-all duration-500 border-4 border-white">
                        <span class="text-white font-extrabold text-xl lg:text-2xl">2</span>
                        <div class="absolute inset-0 bg-yellow-400 rounded-full animate-ping opacity-75"></div>
                    </div>
                    <div class="ml-0 lg:ml-12 mt-16 lg:mt-0 bg-white rounded-3xl p-5 sm:p-6 lg:p-8 border-2 border-gray-100 shadow-xl hover:shadow-2xl hover:border-yellow-400 transition-all duration-500 transform hover:-translate-y-2 hover:scale-[1.02]">
                        <div class="flex flex-col sm:flex-row items-start gap-3 sm:gap-4 mb-4">
                            <div class="w-12 h-12 sm:w-14 sm:h-14 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-2xl flex items-center justify-center shadow-lg group-hover:rotate-12 transition-transform duration-500 flex-shrink-0">
                                <svg class="w-6 h-6 sm:w-7 sm:h-7 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl sm:text-2xl font-extrabold text-gray-900 mb-2 sm:mb-3"><?php echo t('confirmam_detalii'); ?></h3>
                                <p class="text-gray-600 leading-relaxed text-base sm:text-lg"><?php echo t('echipa_noastra'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="relative group">
                    <div class="absolute lg:-left-4 left-4 top-4 lg:top-0 w-12 h-12 lg:w-16 lg:h-16 bg-yellow-500 rounded-full flex items-center justify-center shadow-xl z-10 transform group-hover:scale-125 transition-all duration-500 border-4 border-white">
                        <span class="text-white font-extrabold text-xl lg:text-2xl">3</span>
                        <div class="absolute inset-0 bg-yellow-400 rounded-full animate-ping opacity-75"></div>
                    </div>
                    <div class="ml-0 lg:ml-12 mt-16 lg:mt-0 bg-white rounded-3xl p-5 sm:p-6 lg:p-8 border-2 border-gray-100 shadow-xl hover:shadow-2xl hover:border-yellow-400 transition-all duration-500 transform hover:-translate-y-2 hover:scale-[1.02]">
                        <div class="flex flex-col sm:flex-row items-start gap-3 sm:gap-4 mb-4">
                            <div class="w-12 h-12 sm:w-14 sm:h-14 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-2xl flex items-center justify-center shadow-lg group-hover:rotate-12 transition-transform duration-500 flex-shrink-0">
                                <svg class="w-6 h-6 sm:w-7 sm:h-7 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"></path>
                                    <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl sm:text-2xl font-extrabold text-gray-900 mb-2 sm:mb-3"><?php echo t('echipajul_ajunge'); ?></h3>
                                <p class="text-gray-600 leading-relaxed text-base sm:text-lg"><?php echo t('echipajul_nostru'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column - Premium CTA Card -->
            <div class="lg:sticky lg:top-8 h-fit">
                <div class="relative bg-gradient-to-br from-yellow-500 via-yellow-500 to-yellow-600 rounded-3xl p-10 shadow-2xl shadow-yellow-500/40 border-2 border-yellow-400 overflow-hidden">
                    <!-- Animated Background Pattern -->
                    <div class="absolute inset-0 opacity-10">
                        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 2px 2px, rgba(255,255,255,0.3) 1px, transparent 0); background-size: 30px 30px;"></div>
                    </div>
                    
                    <!-- Glow Effect -->
                    <div class="absolute -inset-1 bg-gradient-to-r from-yellow-400 to-yellow-600 rounded-3xl blur-xl opacity-50 animate-pulse"></div>
                    
                    <div class="relative z-10">
                        <div class="text-center mb-8">
                            <div class="inline-flex items-center justify-center w-24 h-24 bg-white/30 backdrop-blur-sm rounded-full mb-6 shadow-2xl transform hover:scale-110 transition-transform duration-500">
                                <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                                </svg>
                            </div>
                            <h3 class="text-4xl font-extrabold text-white mb-4 leading-tight"><?php echo t('solicita_evacuator'); ?><br><?php echo htmlspecialchars($cityName); ?></h3>
                            <p class="text-yellow-50 text-lg mb-8 leading-relaxed">
                                <?php echo t('serviciul_nostru_de'); ?> <strong class="text-white"><?php echo t('evacuator'); ?> <?php echo t('si_remorcare_auto'); ?> <?php echo htmlspecialchars($cityName); ?></strong> <?php echo t('este_disponibil'); ?> <strong class="text-white"><?php echo t('disponibil_24_7'); ?></strong>. <?php echo t('raspundem_imediat'); ?>
                            </p>
                        </div>

                        <!-- Phone Number Display -->
                        <div class="bg-white rounded-2xl p-8 mb-8 text-center shadow-2xl transform hover:scale-105 transition-transform duration-300">
                            <p class="text-gray-500 text-sm mb-3 font-semibold uppercase tracking-wide"><?php echo t('numar_unic'); ?></p>
                            <a href="tel:022800800" class="text-5xl font-extrabold text-yellow-600 hover:text-yellow-700 transition-colors block tracking-tight">
                                022 800 800
                            </a>
                        </div>

                        <!-- CTA Buttons -->
                        <div class="space-y-4 mb-8">
                            <a href="tel:022800800" class="group relative w-full bg-white hover:bg-gray-50 text-yellow-600 font-extrabold py-6 px-6 rounded-2xl text-xl transition-all duration-300 transform hover:scale-105 shadow-2xl flex items-center justify-center gap-4 overflow-hidden">
                                <div class="absolute inset-0 bg-gradient-to-r from-yellow-400/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                <svg class="w-7 h-7 transition-transform group-hover:scale-110 group-hover:rotate-12 relative z-10" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                                </svg>
                                <span class="relative z-10"><?php echo t('suna_acum'); ?></span>
                            </a>
                            <a href="#servicii" class="w-full bg-white/20 hover:bg-white/30 backdrop-blur-sm border-2 border-white/50 text-white font-bold py-5 px-6 rounded-2xl text-lg transition-all duration-300 transform hover:scale-105 flex items-center justify-center gap-3 shadow-lg">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                                </svg>
                                <span><?php echo t('vezi_servicii'); ?></span>
                            </a>
                        </div>

                        <!-- Trust Indicators -->
                        <div class="pt-8 border-t-2 border-white/30">
                            <div class="grid grid-cols-3 gap-4 text-center">
                                <div class="transform hover:scale-110 transition-transform duration-300">
                                    <p class="text-3xl font-extrabold text-white mb-1">30</p>
                                    <p class="text-xs text-yellow-50 font-semibold uppercase tracking-wide"><?php echo t('min_max'); ?></p>
                                </div>
                                <div class="transform hover:scale-110 transition-transform duration-300">
                                    <p class="text-3xl font-extrabold text-white mb-1">365</p>
                                    <p class="text-xs text-yellow-50 font-semibold uppercase tracking-wide"><?php echo t('zile_an'); ?></p>
                                </div>
                                <div class="transform hover:scale-110 transition-transform duration-300">
                                    <p class="text-3xl font-extrabold text-white mb-1">100%</p>
                                    <p class="text-xs text-yellow-50 font-semibold uppercase tracking-wide"><?php echo t('sigur'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Info Bar - Enhanced -->
        <div class="bg-gradient-to-r from-gray-50 to-white rounded-3xl p-8 border-2 border-gray-200 shadow-xl">
            <div class="grid md:grid-cols-3 gap-6">
                <div class="flex items-center gap-4 group">
                    <div class="w-14 h-14 bg-yellow-500 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                        <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-gray-900 font-bold text-lg"><?php echo t('preturi_transparente'); ?></p>
                        <p class="text-gray-600 text-sm"><?php echo t('pentru_servicii_evacuator'); ?></p>
                    </div>
                </div>
                <div class="flex items-center gap-4 group">
                    <div class="w-14 h-14 bg-yellow-500 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                        <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-gray-900 font-bold text-lg"><?php echo t('raspuns_imediat'); ?></p>
                        <p class="text-gray-600 text-sm"><?php echo t('pentru_remorcare'); ?> <?php echo htmlspecialchars($cityName); ?></p>
                    </div>
                </div>
                <div class="flex items-center gap-4 group">
                    <div class="w-14 h-14 bg-yellow-500 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                        <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-gray-900 font-bold text-lg"><?php echo t('echipament_modern_comanda'); ?></p>
                        <p class="text-gray-600 text-sm"><?php echo t('pentru_evacuator_auto'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    @keyframes float-1 {
        0%, 100% {
            transform: translate(0, 0) scale(1);
        }
        50% {
            transform: translate(30px, -30px) scale(1.1);
        }
    }
    
    @keyframes float-2 {
        0%, 100% {
            transform: translate(0, 0) scale(1);
        }
        50% {
            transform: translate(-25px, 25px) scale(1.15);
        }
    }
    
    @keyframes fade-in {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .animate-float-1 {
        animation: float-1 20s ease-in-out infinite;
    }
    
    .animate-float-2 {
        animation: float-2 25s ease-in-out infinite;
        animation-delay: -5s;
    }
    
    .animate-fade-in {
        animation: fade-in 0.8s ease-out;
    }
</style>
