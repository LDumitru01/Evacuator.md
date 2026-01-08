<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo t('evacuator'); ?> în <?php echo htmlspecialchars($cityName ?? t('moldova')); ?> – <?php echo t('interventie_rapida'); ?> 24/7. <?php echo t('evacuare_auto'); ?> în <?php echo htmlspecialchars($cityName ?? t('moldova')); ?> și <?php echo t('localitati_apropiere'); ?>. <?php echo t('ajungem'); ?> 15–30 <?php echo t('minute'); ?>, <?php echo t('pret_corect'); ?>, <?php echo t('fara_costuri'); ?>.">
    <meta name="keywords" content="<?php echo t('evacuator'); ?> auto, <?php echo htmlspecialchars($cityName ?? ''); ?>, <?php echo t('moldova'); ?>, <?php echo t('remorcare_auto'); ?>, <?php echo t('servicii_auto'); ?>">
    <meta name="robots" content="index, follow">
    <title><?php echo t('evacuator'); ?> în <?php echo htmlspecialchars($cityName ?? t('moldova')); ?> – <?php echo t('interventie_rapida'); ?> 24/7 | 022 800 800</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap');
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', system-ui, sans-serif;
            background: #f8f9fa;
            font-weight: 500;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-weight: 800;
            letter-spacing: -0.02em;
        }
        
        .font-bold {
            font-weight: 700;
        }
        
        .font-extrabold {
            font-weight: 900;
        }
        .soft-shadow {
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.08);
        }
        .card-shadow {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .animate-fade-in-up {
            animation: fadeInUp 0.6s ease-out;
        }
    </style>
</head>
<body class="bg-white text-gray-900">
<?php include 'includes/navbar.php'; ?>
