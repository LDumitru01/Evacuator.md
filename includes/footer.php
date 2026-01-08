    <!-- Footer -->
    <footer class="relative bg-gradient-to-b from-gray-50 to-white border-t border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <!-- Main Footer Content -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12 mb-12">
                <!-- Column 1: Logo & Description -->
                <div class="lg:col-span-1">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-12 h-12 bg-yellow-500 rounded-lg flex items-center justify-center">
                            <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"></path>
                                <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z"></path>
                            </svg>
                        </div>
                        <div>
                            <div class="text-xl font-bold text-gray-900"><?php echo t('evacuator_auto'); ?></div>
                            <div class="text-xs text-gray-500"><?php echo t('moldova'); ?></div>
                        </div>
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">
                        <?php echo t('servicii_profesionale_footer'); ?> <?php echo htmlspecialchars($cityName ?? t('moldova')); ?> <?php echo t('si_toata_tara'); ?>
                    </p>
                    <!-- Phone CTA -->
                    <a href="tel:022800800" class="inline-flex items-center gap-2 bg-yellow-500 hover:bg-yellow-600 text-white font-bold px-5 py-3 rounded-xl transition-all duration-300 shadow-md hover:shadow-lg transform hover:scale-105">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                        </svg>
                        <span class="text-lg">022 800 800</span>
                    </a>
                </div>

                <!-- Column 2: Quick Links -->
                <div>
                    <h3 class="text-lg font-bold text-gray-900 mb-4"><?php echo t('linkuri_rapide'); ?></h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="#servicii" class="text-gray-600 hover:text-yellow-600 transition-colors text-sm flex items-center gap-2 group">
                                <svg class="w-4 h-4 text-yellow-500 opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                                <?php echo t('servicii_evacuator_footer'); ?>
                            </a>
                        </li>
                        <li>
                            <a href="#comanda" class="text-gray-600 hover:text-yellow-600 transition-colors text-sm flex items-center gap-2 group">
                                <svg class="w-4 h-4 text-yellow-500 opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                                <?php echo t('cum_comand_footer'); ?>
                            </a>
                        </li>
                        <li>
                            <a href="#despre" class="text-gray-600 hover:text-yellow-600 transition-colors text-sm flex items-center gap-2 group">
                                <svg class="w-4 h-4 text-yellow-500 opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                                <?php echo t('despre'); ?>
                            </a>
                        </li>
                        <li>
                            <a href="#recenzii" class="text-gray-600 hover:text-yellow-600 transition-colors text-sm flex items-center gap-2 group">
                                <svg class="w-4 h-4 text-yellow-500 opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                                <?php echo t('recenzii_clienti_footer'); ?>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Column 3: Cities -->
                <div>
                    <h3 class="text-lg font-bold text-gray-900 mb-4"><?php echo t('orase_principale'); ?></h3>
                    <ul class="space-y-3">
                        <?php 
                        $mainCities = array_slice($oraseLinkuri, 0, 6);
                        foreach ($mainCities as $oras): 
                            $isCurrent = (strcasecmp($oras, $cityName ?? '') === 0);
                        ?>
                            <li>
                                <a href="<?php echo getLangUrl('oras.php', ['city' => $oras]); ?>" class="text-gray-600 hover:text-yellow-600 transition-colors text-sm flex items-center gap-2 group <?php echo $isCurrent ? 'text-yellow-600 font-semibold' : ''; ?>">
                                    <svg class="w-4 h-4 text-yellow-500 opacity-0 group-hover:opacity-100 transition-opacity <?php echo $isCurrent ? 'opacity-100' : ''; ?>" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <?php echo t('evacuator'); ?> <?php echo $oras; ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                        <li>
                            <a href="#alte-orase" class="text-yellow-600 hover:text-yellow-700 font-semibold text-sm flex items-center gap-2 group">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                                <?php echo t('toate_orasele'); ?> →
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Column 4: Contact Info -->
                <div>
                    <h3 class="text-lg font-bold text-gray-900 mb-4"><?php echo t('contact'); ?></h3>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3">
                            <div class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-yellow-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                                </svg>
                            </div>
                            <div>
                                <div class="text-gray-900 font-semibold text-sm mb-1"><?php echo t('telefon'); ?></div>
                                <a href="tel:022800800" class="text-yellow-600 hover:text-yellow-700 font-bold text-lg">022 800 800</a>
                                <div class="text-gray-500 text-xs mt-1"><?php echo t('disponibil_24_7'); ?></div>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-yellow-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <div class="text-gray-900 font-semibold text-sm mb-1"><?php echo t('program'); ?></div>
                                <div class="text-gray-600 text-sm"><?php echo t('non_stop'); ?></div>
                                <div class="text-gray-500 text-xs mt-1"><?php echo t('24_ore_7_zile'); ?></div>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-yellow-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <div class="text-gray-900 font-semibold text-sm mb-1"><?php echo t('zona_acoperire'); ?></div>
                                <div class="text-gray-600 text-sm"><?php echo t('toata_republica'); ?></div>
                                <div class="text-gray-500 text-xs mt-1"><?php echo count($oraseAcoperite); ?>+ <?php echo $lang === 'ru' ? 'населенных пунктов' : 'localități'; ?></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="border-t border-gray-200 pt-8">
                <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                    <!-- Copyright -->
                    <div class="text-center md:text-left">
                        <p class="text-gray-600 text-sm">
                            &copy; <?php echo date('Y'); ?> <span class="font-semibold text-gray-900"><?php echo t('evacuator_auto'); ?> <?php echo t('moldova'); ?></span>. <?php echo t('toate_drepturile'); ?>
                        </p>
                        <p class="text-gray-500 text-xs mt-1">
                            <?php echo t('servicii_evacuare'); ?> <?php echo htmlspecialchars($cityName ?? t('moldova')); ?> <?php echo t('si_toata_tara_footer'); ?>
                        </p>
                    </div>

                    <!-- Additional Links -->
                    <div class="flex flex-wrap items-center justify-center gap-6 text-sm">
                        <a href="#servicii" class="text-gray-500 hover:text-yellow-600 transition-colors">Servicii</a>
                        <a href="#preturi" class="text-gray-500 hover:text-yellow-600 transition-colors">Prețuri</a>
                        <a href="#alte-orase" class="text-gray-500 hover:text-yellow-600 transition-colors">Orașe</a>
                        <a href="#recenzii" class="text-gray-500 hover:text-yellow-600 transition-colors">Recenzii</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scroll pentru butoane
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>
