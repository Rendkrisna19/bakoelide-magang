<footer class="footer">
    <div class="footer-container">
        <div class="footer-section footer-logo">
            <img src="<?php echo e(asset('img/logo.png')); ?>" alt="Bakoelide Logo">
        </div>
        <div class="footer-links">
            <div class="footer-section">
                <h3><?php echo e($translator->translate('Quick Links')); ?></h3>
                <ul>
                    <li><a href="<?php echo e(route('home')); ?>"><?php echo e($translator->translate('Home')); ?></a></li>
                    <li><a href="<?php echo e(route('contact')); ?>"><?php echo e($translator->translate('Contact Us')); ?></a></li>
                    <li><a href="<?php echo e(route('blog')); ?>"><?php echo e($translator->translate('Blogs')); ?></a></li>
                    <li><a href="<?php echo e(route('blank-page')); ?>"><?php echo e($translator->translate('FAQ')); ?></a></li>
                    <li><a href="<?php echo e(route('blank-page')); ?>"><?php echo e($translator->translate('Privacy Policy')); ?></a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3><?php echo e($translator->translate('Resources')); ?></h3>
                <ul>
                    <li><a href="<?php echo e(route('blank-page')); ?>"><?php echo e($translator->translate('Templates')); ?></a></li>
                    <li><a href="<?php echo e(route('blank-page')); ?>"><?php echo e($translator->translate('Tutorials')); ?></a></li>
                    <li><a href="<?php echo e(route('blank-page')); ?>"><?php echo e($translator->translate('Social Commerce Tips')); ?></a></li>
                </ul>
            </div>
        </div>
        <div class="footer-section">
            <h3><?php echo e($translator->translate('Supports')); ?></h3>
            <div class="contact-info">
                <p><i class="fas fa-envelope"></i> <a href="mailto:admin@bakoelide.com">admin@bakoelide.com</a></p>
                <p><i class="fas fa-phone"></i> 0878-849-631-86</p>
                <p><i class="fas fa-map-marker-alt"></i> 18 Office Lt. 25, Suite A 2, Jl. TB Simatupang, Jakarta
                    12520</p>
            </div>
            <div class="social-icons">
                <a href="<?php echo e(route('blank-page')); ?>"><i class="fab fa-instagram"></i></a>
                <a href="<?php echo e(route('blank-page')); ?>"><i class="fab fa-linkedin"></i></a>
                <a href="<?php echo e(route('blank-page')); ?>"><i class="fab fa-facebook"></i></a>
                <a href="<?php echo e(route('blank-page')); ?>"><i class="fab fa-tiktok"></i></a>
            </div>
        </div>
    </div>
</footer>
<?php /**PATH C:\xampp\htdocs\bakoelide-magang-main\resources\views/footer/footer.blade.php ENDPATH**/ ?>