<!-- Recenzii Section - Modern Dynamic Design -->
<section id="recenzii" class="relative py-24 px-4 overflow-hidden bg-gradient-to-b from-white via-gray-50 to-white">
    <!-- Animated Background -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute inset-0 opacity-[0.02]" style="background-image: linear-gradient(rgba(0,0,0,0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(0,0,0,0.1) 1px, transparent 1px); background-size: 50px 50px;"></div>
        <!-- Floating Elements -->
        <div class="absolute top-10 left-10 w-64 h-64 bg-yellow-400/5 rounded-full blur-3xl animate-float-review-1"></div>
        <div class="absolute bottom-10 right-10 w-80 h-80 bg-yellow-500/5 rounded-full blur-3xl animate-float-review-2"></div>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto">
        <!-- Header Section -->
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 bg-gradient-to-r from-yellow-50 to-yellow-100 border-2 border-yellow-200 rounded-full px-6 py-3 mb-8 shadow-lg">
                <svg class="w-5 h-5 text-yellow-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>
                <span class="text-yellow-700 text-sm font-bold"><?php echo t('recenzii_clienti'); ?></span>
            </div>
            <h2 class="text-5xl sm:text-6xl md:text-7xl font-extrabold mb-6 leading-tight">
                <span class="block text-gray-900"><?php echo t('ce_spun_clientii'); ?></span>
                <span class="block text-yellow-500 mt-3 bg-gradient-to-r from-yellow-500 to-yellow-600 bg-clip-text text-transparent"><?php echo t('evacuator'); ?> <?php echo $lang === 'ru' ? 'в' : 'în'; ?> <?php echo htmlspecialchars($cityName); ?></span>
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                <?php echo t('mii_clienti'); ?> <?php echo htmlspecialchars($cityName); ?> <?php echo t('si_in_toata'); ?> <?php echo t('moldova'); ?>
            </p>
        </div>
        
        <!-- Reviews Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            <?php foreach ($recenzii as $index => $recenzie): ?>
            <div class="group relative bg-white rounded-3xl p-8 border-2 border-gray-100 shadow-lg hover:shadow-2xl hover:border-yellow-400 transition-all duration-500 transform hover:-translate-y-2 hover:scale-[1.02]">
                <!-- Decorative Corner Element -->
                <div class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-br from-yellow-400/10 to-transparent rounded-bl-3xl"></div>
                
                <!-- Rating Stars -->
                <div class="flex items-center gap-1 mb-6">
                    <?php for ($i = 0; $i < $recenzie['rating']; $i++): ?>
                        <svg class="w-6 h-6 text-yellow-500 transform group-hover:scale-110 transition-transform duration-300" style="transition-delay: <?php echo $i * 50; ?>ms;" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    <?php endfor; ?>
                </div>
                
                <!-- Quote Icon -->
                <div class="mb-4">
                    <svg class="w-12 h-12 text-yellow-500/20" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V8a1 1 0 112 0v2.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                
                <!-- Review Text -->
                <p class="text-gray-700 leading-relaxed text-lg mb-6 relative z-10">
                    "<?php echo htmlspecialchars($recenzie['text']); ?>"
                </p>
                
                <!-- Author Info -->
                <div class="flex items-center gap-3 pt-6 border-t-2 border-gray-100">
                    <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <span class="text-white font-bold text-lg"><?php echo strtoupper(substr($recenzie['autor'], 0, 1)); ?></span>
                    </div>
                    <div>
                        <p class="text-gray-900 font-bold text-lg"><?php echo htmlspecialchars($recenzie['autor']); ?></p>
                        <p class="text-gray-500 text-sm"><?php echo t('client_verificat'); ?></p>
                    </div>
                </div>
                
                <!-- Hover Glow Effect -->
                <div class="absolute inset-0 bg-gradient-to-br from-yellow-400/5 to-transparent rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <!-- Trust Stats Section -->
        <div class="mt-16 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-3xl p-10 md:p-12 border-2 border-yellow-400 shadow-2xl shadow-yellow-500/30">
            <div class="grid sm:grid-cols-3 gap-8 text-center">
                <div class="transform hover:scale-110 transition-transform duration-300">
                    <div class="inline-flex items-center justify-center w-20 h-20 bg-white/20 backdrop-blur-sm rounded-full mb-4 shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    </div>
                    <p class="text-4xl font-extrabold text-white mb-2">5.0</p>
                    <p class="text-yellow-50 text-sm font-semibold uppercase tracking-wide"><?php echo t('rating_mediu'); ?></p>
                </div>
                <div class="transform hover:scale-110 transition-transform duration-300">
                    <div class="inline-flex items-center justify-center w-20 h-20 bg-white/20 backdrop-blur-sm rounded-full mb-4 shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                        </svg>
                    </div>
                    <p class="text-4xl font-extrabold text-white mb-2">500+</p>
                    <p class="text-yellow-50 text-sm font-semibold uppercase tracking-wide"><?php echo t('clienti_multumiti'); ?></p>
                </div>
                <div class="transform hover:scale-110 transition-transform duration-300">
                    <div class="inline-flex items-center justify-center w-20 h-20 bg-white/20 backdrop-blur-sm rounded-full mb-4 shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <p class="text-4xl font-extrabold text-white mb-2">100%</p>
                    <p class="text-yellow-50 text-sm font-semibold uppercase tracking-wide"><?php echo t('satisfactie'); ?></p>
                </div>
            </div>
        </div>
        
        <!-- CTA Section -->
        <div class="mt-12 text-center">
            <p class="text-xl text-gray-700 mb-6 font-semibold">
                <?php echo t('ai_beneficiat'); ?> <strong class="text-yellow-600"><?php echo t('lasa_recenzie'); ?></strong>
            </p>
            <a href="tel:022800800" class="inline-flex items-center gap-3 bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-4 px-8 rounded-xl text-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                </svg>
                <span><?php echo t('contacteaza_ne_acum'); ?></span>
            </a>
        </div>
    </div>
</section>

<style>
    @keyframes float-review-1 {
        0%, 100% {
            transform: translate(0, 0) scale(1);
        }
        50% {
            transform: translate(20px, -20px) scale(1.1);
        }
    }
    
    @keyframes float-review-2 {
        0%, 100% {
            transform: translate(0, 0) scale(1);
        }
        50% {
            transform: translate(-25px, 25px) scale(1.15);
        }
    }
    
    .animate-float-review-1 {
        animation: float-review-1 18s ease-in-out infinite;
    }
    
    .animate-float-review-2 {
        animation: float-review-2 22s ease-in-out infinite;
        animation-delay: -7s;
    }
</style>
