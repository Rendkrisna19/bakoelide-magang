<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bakoel Ide | <?php echo $__env->yieldContent('title'); ?></title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/components.css')); ?>?v=<?php echo e(time()); ?>">
    <?php
        // Pastikan $translator tersedia di semua halaman
        $translator = $translator ?? new \Stichoza\GoogleTranslate\GoogleTranslate(app()->getLocale());
    ?>
</head>

<body>
    <a href="https://wa.me/6281234567890" target="_blank" class="whatsapp-float">
        <i class="fab fa-whatsapp"></i>
    </a>

    
    <?php echo $__env->make('navbar.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('hero'); ?>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    
    <?php if(View::hasSection('hide_footer')): ?>
    <?php else: ?>
        <?php echo $__env->make('footer.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="<?php echo e(asset('assets/js/scripts.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('script'); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\bakoelide-magang-main\resources\views/main.blade.php ENDPATH**/ ?>