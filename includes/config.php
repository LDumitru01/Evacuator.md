<?php
// Configurație comună pentru toate orașele

// Gestionare limbi (ro/ru) - din URL path sau GET parameter
$lang = 'ro'; // default

// Detect language from URL path (e.g., /ro/ or /ru/)
$requestUri = $_SERVER['REQUEST_URI'];
$pathParts = explode('/', trim(parse_url($requestUri, PHP_URL_PATH), '/'));

if (!empty($pathParts[0]) && in_array($pathParts[0], ['ro', 'ru'])) {
    $lang = $pathParts[0];
} elseif (isset($_GET['lang']) && in_array($_GET['lang'], ['ro', 'ru'])) {
    $lang = $_GET['lang'];
} elseif (isset($_COOKIE['lang']) && in_array($_COOKIE['lang'], ['ro', 'ru'])) {
    $lang = $_COOKIE['lang'];
}

// Set cookie
setcookie('lang', $lang, time() + (365 * 24 * 60 * 60), '/');

// Detect city from URL path if in format /ro/oras/{city}
$cityName = 'Chișinău'; // default
if (!empty($pathParts[1]) && $pathParts[1] === 'oras' && !empty($pathParts[2])) {
    $cityName = htmlspecialchars(trim(urldecode($pathParts[2])));
} elseif (isset($_GET['city'])) {
    $cityName = htmlspecialchars(trim($_GET['city']));
}

// Traduceri
$translations = [
    'ro' => [
        'evacuator' => 'Evacuator',
        'interventie_rapida' => 'Intervenție Rapidă',
        'disponibil_24_7' => 'Disponibil 24/7',
        'evacuare_auto' => 'Evacuare auto',
        'localitati_apropiere' => 'localitățile din apropiere',
        'ajungem' => 'Ajungem în',
        'minute' => 'minute',
        'pret_corect' => 'preț corect',
        'fara_costuri' => 'fără costuri ascunse',
        'suna_acum' => 'Sună acum',
        'vezi_servicii' => 'Vezi servicii',
        'moldova' => 'Moldova',
        'remorcare_auto' => 'remorcare auto',
        'servicii_auto' => 'servicii auto',
        'servicii' => 'Servicii',
        'comanda' => 'Cum comand',
        'despre' => 'Despre',
        'preturi' => 'Prețuri',
        'recenzii' => 'Recenzii',
        'orase' => 'Orașe',
        'nevoie_acum' => 'Ai nevoie acum?',
        // Hero Section
        'interventie_rapida_text' => 'Intervenție rapidă în',
        'si_localitatile' => 'și',
        'preturi_corecte' => 'Prețuri Corecte',
        'echipament_modern' => 'Echipament Modern',
        'interventii' => 'Intervenții',
        'orase_count' => 'Orașe',
        'minute_count' => 'Minute',
        // Servicii Section
        'tarife_transparente' => 'Tarife Transparente',
        'servicii_evacuator' => 'Servicii evacuator',
        'preturi_clare' => 'Prețuri clare și transparente, adaptate după categoria vehiculului tău',
        'categoria' => 'Categoria',
        'masa_totala' => 'Masa totală',
        'pana_la' => 'până la',
        'kg' => 'kg',
        'de_la' => 'de la',
        'lei' => 'lei',
        'autoturisme' => 'Autoturisme',
        'motociclete' => 'Motociclete',
        'scutere' => 'Scutere',
        'masini_mici' => 'Mașini mici',
        'comenzi' => 'Comenzi',
        'in_oras' => 'În oraș',
        'extraurban' => 'Extraurban',
        'ai_nevoie_pret' => 'Ai nevoie de un preț exact?',
        'suna_acum_pret' => 'Sună acum și primești un preț transparent înainte de intervenție. Fără surprize, fără costuri ascunse.',
        // Comanda Section
        'rezervare_instant' => 'Rezervare Instant',
        'cum_rezervi' => 'Cum rezervi servicii de',
        'in_3_pasi' => 'în 3 pași simpli',
        'rezervarea_unui' => 'Rezervarea unui',
        'este_rapida' => 'este rapidă și fără bătăi de cap.',
        'servicii_profesionale' => 'Servicii profesionale de remorcare auto disponibile 24/7 în',
        'apelezi_serviciul' => 'Apelezi serviciul de evacuator',
        'contacteaza' => 'Contactează',
        'operatorul_nostru' => 'Operatorul nostru colectează informațiile despre locația și tipul vehiculului care necesită remorcare.',
        'confirmam_detalii' => 'Confirmăm detaliile pentru remorcare',
        'echipa_noastra' => 'Echipa noastră validează adresa exactă, tipul de vehicul și starea acestuia. Îți oferim estimarea timpului de sosire a echipajului de remorcare.',
        'echipajul_ajunge' => 'Echipajul ajunge la locație',
        'echipajul_nostru' => 'Echipajul nostru ajunge rapid la adresa indicată și efectuează remorcarea vehiculului cu echipament profesional.',
        'rezerva_online' => 'Rezervă online',
        'solicita_evacuator' => 'Solicită Evacuator în',
        'serviciul_nostru_de' => 'Serviciul nostru de',
        'si_remorcare_auto' => 'și remorcare auto în',
        'este_disponibil' => 'este disponibil',
        'raspundem_imediat' => 'Răspundem imediat la apeluri pentru servicii de remorcare.',
        'numar_unic' => 'Număr unic',
        'min_max' => 'min max',
        'zile_an' => 'zile/an',
        'sigur' => 'sigur',
        'preturi_transparente' => 'Prețuri transparente',
        'pentru_servicii_evacuator' => 'pentru servicii evacuator',
        'raspuns_imediat' => 'Răspuns imediat',
        'pentru_remorcare' => 'pentru remorcare în',
        'echipament_modern_comanda' => 'Echipament modern',
        'pentru_evacuator_auto' => 'pentru evacuator auto',
        // Despre Section
        'flota_moderna' => 'Flotă Modernă',
        'tipuri_vehicule' => 'Tipuri de vehicule',
        'evacuate' => 'evacuate',
        'echipament_modern_text' => 'Echipament modern pentru transport sigur al oricărui tip de vehicul',
        'toate_marcile' => 'Toate mărcile și modelele, de la compacte la limuzine',
        'suv_uri' => 'SUV-uri',
        'inclusiv_modele' => 'Inclusiv modele mari și 4x4, cu echipament specializat',
        'microbuze' => 'Microbuze',
        'pana_la_9' => 'Până la 9 locuri, transport sigur și profesional',
        'vehicule_avariate' => 'Vehicule avariate',
        'inclusiv_accidente' => 'Inclusiv accidente, panne sau blocaje complete',
        'acoperire_completa' => 'Acoperire Completă',
        'servicii_in_zona' => 'Servicii în toată zona',
        'acoperim_intreaga' => 'Acoperim întreaga zonă',
        'de_la_centru' => 'de la centrul orașului până la cele mai îndepărtate cartiere și localități din apropiere.',
        'cunoastem_perfect' => 'Cunoaștem perfect',
        'toate_traseele' => 'toate traseele și accesăm rapid orice punct.',
        'centru_oras' => 'Centru oraș și cartiere rezidențiale',
        'zone_industriale' => 'Zone industriale și comerciale',
        'localitati_sate' => 'Localități și sate din apropiere',
        'de_ce_sa_ne_alegi' => 'De ce să ne alegi?',
        'experienta' => 'Experiență',
        'peste_10_ani' => 'Peste 10 ani pe piață, mii de intervenții reușite',
        'asigurare' => 'Asigurare',
        'acoperire_completa_vehicul' => 'Acoperire completă pentru vehiculul tău',
        'licente' => 'Licențe',
        'autorizatii_valabile' => 'Autorizații valabile și actualizate',
        // Recenzii Section
        'recenzii_clienti' => 'Recenzii Clienți',
        'ce_spun_clientii' => 'Ce spun clienții despre',
        'mii_clienti' => 'Mii de clienți mulțumiți în',
        'si_in_toata' => 'și în toată Moldova',
        'client_verificat' => 'Client verificat',
        'rating_mediu' => 'Rating mediu',
        'clienti_multumiti' => 'Clienți mulțumiți',
        'satisfactie' => 'Satisfacție',
        'ai_beneficiat' => 'Ai beneficiat de serviciile noastre?',
        'lasa_recenzie' => 'Lasă și tu o recenzie!',
        'contacteaza_ne_acum' => 'Contactează-ne acum',
        // Alte Orase Section
        'acoperire_nationala' => 'Acoperire Națională',
        'evacuator_si_in' => 'Evacuator și în',
        'alte_orase' => 'alte orașe',
        'acoperim_toata' => 'Acoperim toată Republica Moldova cu servicii rapide și profesionale',
        'orasul_curent' => 'Orașul curent',
        'peste' => 'Peste',
        'localitati_acoperite' => 'localități acoperite',
        'servicii_profesionale_evacuare' => 'Servicii profesionale de evacuare auto în toate orașele și raioanele din Republica Moldova',
        'si_multe_alte' => 'Și multe alte localități din toată țara',
        'cauti_evacuator' => 'Cauți evacuator în alt oraș?',
        'suna_ne_acum' => 'Sună-ne acum și primești preț exact înainte de intervenție. Acoperim toată Republica Moldova cu servicii rapide și profesionale.',
        // Nevoie Acum Section
        'ai_nevoie_de' => 'Ai nevoie de',
        'evacuator_acum' => 'evacuator acum?',
        'suna_acum_pentru' => 'Sună acum pentru intervenție rapidă în',
        // Footer
        'servicii_profesionale_footer' => 'Servicii profesionale de evacuare auto în',
        'si_toata_tara' => 'și toată țara. Disponibil 24/7, intervenție rapidă, preț corect.',
        'linkuri_rapide' => 'Linkuri rapide',
        'servicii_evacuator_footer' => 'Servicii evacuator',
        'cum_comand_footer' => 'Cum comand',
        'recenzii_clienti_footer' => 'Recenzii clienți',
        'orase_principale' => 'Orașe principale',
        'toate_orasele' => 'Toate orașele',
        'contact' => 'Contact',
        'telefon' => 'Telefon',
        'program' => 'Program',
        'non_stop' => 'Non-stop',
        '24_ore_7_zile' => '24 ore / 7 zile',
        'zona_acoperire' => 'Zona de acoperire',
        'toata_republica' => 'Toată Republica Moldova',
        'toate_drepturile' => 'Toate drepturile rezervate.',
        'servicii_evacuare' => 'Servicii de evacuare auto profesionale în',
        'si_toata_tara_footer' => 'și toată țara.'
    ],
    'ru' => [
        'evacuator' => 'Эвакуатор',
        'interventie_rapida' => 'Быстрая помощь',
        'disponibil_24_7' => 'Доступен 24/7',
        'evacuare_auto' => 'Эвакуация авто',
        'localitati_apropiere' => 'ближайшие населенные пункты',
        'ajungem' => 'Прибываем за',
        'minute' => 'минут',
        'pret_corect' => 'честная цена',
        'fara_costuri' => 'без скрытых платежей',
        'suna_acum' => 'Позвоните сейчас',
        'vezi_servicii' => 'Посмотреть услуги',
        'moldova' => 'Молдова',
        'remorcare_auto' => 'эвакуация авто',
        'servicii_auto' => 'автоуслуги',
        'servicii' => 'Услуги',
        'comanda' => 'Как заказать',
        'despre' => 'О нас',
        'preturi' => 'Цены',
        'recenzii' => 'Отзывы',
        'orase' => 'Города',
        'nevoie_acum' => 'Нужен сейчас?',
        // Hero Section
        'interventie_rapida_text' => 'Быстрая помощь в',
        'si_localitatile' => 'и',
        'preturi_corecte' => 'Честные цены',
        'echipament_modern' => 'Современное оборудование',
        'interventii' => 'Вызовов',
        'orase_count' => 'Городов',
        'minute_count' => 'Минут',
        // Servicii Section
        'tarife_transparente' => 'Прозрачные тарифы',
        'servicii_evacuator' => 'Услуги эвакуатора',
        'preturi_clare' => 'Четкие и прозрачные цены, адаптированные под категорию вашего автомобиля',
        'categoria' => 'Категория',
        'masa_totala' => 'Общая масса',
        'pana_la' => 'до',
        'kg' => 'кг',
        'de_la' => 'от',
        'lei' => 'лей',
        'autoturisme' => 'Легковые автомобили',
        'motociclete' => 'Мотоциклы',
        'scutere' => 'Скутеры',
        'masini_mici' => 'Малые автомобили',
        'comenzi' => 'Заказов',
        'in_oras' => 'В городе',
        'extraurban' => 'За городом',
        'ai_nevoie_pret' => 'Нужна точная цена?',
        'suna_acum_pret' => 'Позвоните сейчас и получите прозрачную цену до вмешательства. Без сюрпризов, без скрытых платежей.',
        // Comanda Section
        'rezervare_instant' => 'Мгновенное бронирование',
        'cum_rezervi' => 'Как заказать услуги',
        'in_3_pasi' => 'в 3 простых шага',
        'rezervarea_unui' => 'Бронирование',
        'este_rapida' => 'быстрое и без проблем.',
        'servicii_profesionale' => 'Профессиональные услуги эвакуации авто доступны 24/7 в',
        'apelezi_serviciul' => 'Звоните в службу эвакуации',
        'contacteaza' => 'Свяжитесь с',
        'operatorul_nostru' => 'Наш оператор собирает информацию о местоположении и типе транспортного средства, требующего эвакуации.',
        'confirmam_detalii' => 'Подтверждаем детали для эвакуации',
        'echipa_noastra' => 'Наша команда проверяет точный адрес, тип транспортного средства и его состояние. Мы предоставляем оценку времени прибытия экипажа эвакуации.',
        'echipajul_ajunge' => 'Экипаж прибывает на место',
        'echipajul_nostru' => 'Наш экипаж быстро прибывает по указанному адресу и выполняет эвакуацию транспортного средства профессиональным оборудованием.',
        'rezerva_online' => 'Забронировать онлайн',
        'solicita_evacuator' => 'Заказать эвакуатор в',
        'serviciul_nostru_de' => 'Наш сервис',
        'si_remorcare_auto' => 'и эвакуация авто в',
        'este_disponibil' => 'доступен',
        'raspundem_imediat' => 'Отвечаем сразу на звонки для услуг эвакуации.',
        'numar_unic' => 'Единый номер',
        'min_max' => 'мин макс',
        'zile_an' => 'дней/год',
        'sigur' => 'безопасно',
        'preturi_transparente' => 'Прозрачные цены',
        'pentru_servicii_evacuator' => 'для услуг эвакуации',
        'raspuns_imediat' => 'Мгновенный ответ',
        'pentru_remorcare' => 'для эвакуации в',
        'echipament_modern_comanda' => 'Современное оборудование',
        'pentru_evacuator_auto' => 'для автоэвакуации',
        // Despre Section
        'flota_moderna' => 'Современный парк',
        'tipuri_vehicule' => 'Типы транспортных средств',
        'evacuate' => 'эвакуируемых',
        'echipament_modern_text' => 'Современное оборудование для безопасной перевозки любого типа транспортного средства',
        'toate_marcile' => 'Все марки и модели, от компактных до лимузинов',
        'suv_uri' => 'Внедорожники',
        'inclusiv_modele' => 'Включая большие модели и 4x4, со специализированным оборудованием',
        'microbuze' => 'Микроавтобусы',
        'pana_la_9' => 'До 9 мест, безопасная и профессиональная перевозка',
        'vehicule_avariate' => 'Поврежденные транспортные средства',
        'inclusiv_accidente' => 'Включая аварии, поломки или полные блокировки',
        'acoperire_completa' => 'Полное покрытие',
        'servicii_in_zona' => 'Услуги по всей зоне',
        'acoperim_intreaga' => 'Мы покрываем всю зону',
        'de_la_centru' => 'от центра города до самых отдаленных районов и близлежащих населенных пунктов.',
        'cunoastem_perfect' => 'Мы отлично знаем',
        'toate_traseele' => 'все маршруты и быстро добираемся до любой точки.',
        'centru_oras' => 'Центр города и жилые районы',
        'zone_industriale' => 'Промышленные и коммерческие зоны',
        'localitati_sate' => 'Населенные пункты и близлежащие села',
        'de_ce_sa_ne_alegi' => 'Почему выбрать нас?',
        'experienta' => 'Опыт',
        'peste_10_ani' => 'Более 10 лет на рынке, тысячи успешных вызовов',
        'asigurare' => 'Страхование',
        'acoperire_completa_vehicul' => 'Полное покрытие для вашего транспортного средства',
        'licente' => 'Лицензии',
        'autorizatii_valabile' => 'Действующие и обновленные разрешения',
        // Recenzii Section
        'recenzii_clienti' => 'Отзывы клиентов',
        'ce_spun_clientii' => 'Что говорят клиенты о',
        'mii_clienti' => 'Тысячи довольных клиентов в',
        'si_in_toata' => 'и по всей Молдове',
        'client_verificat' => 'Проверенный клиент',
        'rating_mediu' => 'Средний рейтинг',
        'clienti_multumiti' => 'Довольные клиенты',
        'satisfactie' => 'Удовлетворенность',
        'ai_beneficiat' => 'Вы пользовались нашими услугами?',
        'lasa_recenzie' => 'Оставьте и вы отзыв!',
        'contacteaza_ne_acum' => 'Свяжитесь с нами сейчас',
        // Alte Orase Section
        'acoperire_nationala' => 'Национальное покрытие',
        'evacuator_si_in' => 'Эвакуатор и в',
        'alte_orase' => 'других городах',
        'acoperim_toata' => 'Мы покрываем всю Республику Молдова быстрыми и профессиональными услугами',
        'orasul_curent' => 'Текущий город',
        'peste' => 'Более',
        'localitati_acoperite' => 'населенных пунктов покрыто',
        'servicii_profesionale_evacuare' => 'Профессиональные услуги эвакуации авто во всех городах и районах Республики Молдова',
        'si_multe_alte' => 'И многие другие населенные пункты по всей стране',
        'cauti_evacuator' => 'Ищете эвакуатор в другом городе?',
        'suna_ne_acum' => 'Позвоните нам сейчас и получите точную цену до вмешательства. Мы покрываем всю Республику Молдова быстрыми и профессиональными услугами.',
        // Nevoie Acum Section
        'ai_nevoie_de' => 'Нужен',
        'evacuator_acum' => 'эвакуатор сейчас?',
        'suna_acum_pentru' => 'Позвоните сейчас для быстрой помощи в',
        // Footer
        'servicii_profesionale_footer' => 'Профессиональные услуги эвакуации авто в',
        'si_toata_tara' => 'и по всей стране. Доступен 24/7, быстрая помощь, честная цена.',
        'linkuri_rapide' => 'Быстрые ссылки',
        'servicii_evacuator_footer' => 'Услуги эвакуатора',
        'cum_comand_footer' => 'Как заказать',
        'recenzii_clienti_footer' => 'Отзывы клиентов',
        'orase_principale' => 'Основные города',
        'toate_orasele' => 'Все города',
        'contact' => 'Контакты',
        'telefon' => 'Телефон',
        'program' => 'График',
        'non_stop' => 'Круглосуточно',
        '24_ore_7_zile' => '24 часа / 7 дней',
        'zona_acoperire' => 'Зона покрытия',
        'toata_republica' => 'Вся Республика Молдова',
        'toate_drepturile' => 'Все права защищены.',
        'servicii_evacuare' => 'Профессиональные услуги эвакуации авто в',
        'si_toata_tara_footer' => 'и по всей стране.'
    ]
];

$t = $translations[$lang];

// Funcție helper pentru traduceri
function t($key) {
    global $t;
    return isset($t[$key]) ? $t[$key] : $key;
}

// Lista orașelor pentru linkuri interne SEO
$oraseLinkuri = [
    'Chișinău', 'Ialoveni', 'Călărași', 'Orhei', 'Strășeni', 'Hîncești',
    'Bălți', 'Ungheni', 'Soroca', 'Cahul', 'Comrat', 'Bender'
];

// Lista completă orașelor acoperite
$oraseAcoperite = [
    'Chișinău', 'Bălți', 'Tiraspol', 'Bender', 'Rîbnița', 'Cahul', 'Ungheni', 
    'Soroca', 'Orhei', 'Comrat', 'Căușeni', 'Ceadîr-Lunga', 'Vulcănești', 
    'Hîncești', 'Leova', 'Cimișlia', 'Ștefan Vodă', 'Cantemir', 'Taraclia',
    'Basarabeasca', 'Glodeni', 'Fălești', 'Sîngerei', 'Drochia', 'Rîșcani',
    'Dondușeni', 'Edineț', 'Briceni', 'Ocnița', 'Donduseni', 'Florești',
    'Strășeni', 'Călărași', 'Ialoveni', 'Nisporeni', 'Rezina', 'Telenești',
    'Șoldănești', 'Dubăsari', 'Criuleni', 'Anenii Noi'
];

// Funcție pentru a obține datele unui oraș
function getCityData($cityName) {
    $citySlug = strtolower(str_replace(['ă', 'â', 'î', 'ș', 'ț', ' '], ['a', 'a', 'i', 's', 't', '-'], $cityName));
    $cityFile = __DIR__ . '/../cities/' . $citySlug . '.php';
    
    if (file_exists($cityFile)) {
        return include $cityFile;
    }
    
    // Date default dacă nu există fișierul
    return [
        'name' => $cityName,
        'recenzii' => [
            [
                'text' => "Evacuatorul a ajuns foarte repede în {$cityName}. Recomand!",
                'autor' => 'Ion P.',
                'rating' => 5
            ],
            [
                'text' => "Preț corect, servicii rapide, comunicare bună. Mulțumim pentru intervenția în {$cityName}!",
                'autor' => 'Maria D.',
                'rating' => 5
            ],
            [
                'text' => "Profesionali și prompti. Am apelat pentru evacuare în {$cityName} și au ajuns în 20 de minute.",
                'autor' => 'Alexandru M.',
                'rating' => 5
            ]
        ]
    ];
}

// Funcție pentru a genera slug-ul unui oraș
function getCitySlug($cityName) {
    return strtolower(str_replace(['ă', 'â', 'î', 'ș', 'ț', ' '], ['a', 'a', 'i', 's', 't', '-'], $cityName));
}

// Funcție pentru a genera URL-uri cu prefix de limbă
function getLangUrl($path = '', $params = []) {
    global $lang;
    $basePath = '/' . $lang . '/';
    
    // Handle special case for oras.php -> oras/{city}
    if ($path === 'oras.php' && isset($params['city'])) {
        $city = $params['city'];
        // Convert city name to URL-friendly format
        $citySlug = urlencode($city);
        return $basePath . 'oras/' . $citySlug;
    }
    
    // Remove .php extension
    if (substr($path, -4) === '.php') {
        $path = substr($path, 0, -4);
    }
    
    if ($path && $path !== 'index') {
        $basePath .= ltrim($path, '/');
    }
    
    // Add other params if any (excluding city which is in path)
    $otherParams = $params;
    unset($otherParams['city']);
    if (!empty($otherParams)) {
        $queryString = http_build_query($otherParams);
        $basePath .= '?' . $queryString;
    }
    
    return $basePath;
}
?>

