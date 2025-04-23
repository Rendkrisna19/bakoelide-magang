<style>
    .dropdown-menu ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .dropdown-menu ul li {
        padding: 8px 12px;
    }

    /* Styling untuk tombol dropdown */
    .dropdown-menu ul li .lang {
        text-decoration: none;
        color: #333;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .dropdown-menu ul li a i {
        margin-right: 8px;
    }

    /* Styling untuk dropdown bahasa */
    .language-dropdown {
        position: absolute;
        left: 0;
        top: 100%;
        width: 150px;
        background-color: white;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        display: none;
        z-index: 10;
    }

    .language-dropdown li {
        padding: 8px;
    }

    .language-dropdown li a {
        display: block;
        padding: 8px;
        color: #333;
        transition: background 0.2s;
    }

    .language-dropdown li a:hover {
        background-color: #f0f0f0;
    }

    /* Menampilkan dropdown saat aktif */
    .language-dropdown.show {
        display: block;
    }
</style>
<nav class="navbar">
    <div class="logo">
        <a href="<?php echo e(route('home')); ?>">
            <img src="<?php echo e(asset('assets/icon/logo.png')); ?>" class="logo">
        </a>
    </div>
    <ul class="nav-links">
        <li><a href="<?php echo e(route('home')); ?>"
                class="<?php echo e(Request::is('/*') ? 'active' : ''); ?>"><?php echo e($translator->translate('Home')); ?></a></li>
        <li><a href="<?php echo e(route('product')); ?>"
                class="<?php echo e(Request::is('products*') ? 'active' : ''); ?>"><?php echo e($translator->translate('Product & Services')); ?></a>
        </li>
        
        
        <a
            href="<?php echo e(route('webinar')); ?>"class="<?php echo e(Request::is('webinar*') ? 'active' : ''); ?>"><?php echo e($translator->translate('Education')); ?></a>
        </li>
        <li><a href="<?php echo e(route('blank-page')); ?>"><?php echo e($translator->translate('Partnership')); ?></a></li>
        <li><a
                href="<?php echo e(route('contact')); ?>"class="<?php echo e(Request::is('contact*') ? 'active' : ''); ?>"><?php echo e($translator->translate('Contact Us')); ?></a>
        </li>
    </ul>
    <div class="icon-navbar">
        <div class="search-bar">
            <input type="text" placeholder="Search...">
        </div>
        <div class="icon">
            <a href="<?php echo e(route('blank-page')); ?>">
                <i class="fa-solid fa-bag-shopping"></i>
            </a>
        </div>
        <div class="icon user-icon">
            <a href="javascript:void(0);" id="userIcon">
                <i class="fa-solid fa-circle-user"></i>
            </a>
            <!-- Dropdown Menu -->
            <div class="dropdown-menu">
                <ul>
                    <?php if(auth()->guard()->check()): ?>
                        <li>
                            <p>Mawar Indah</p>
                        </li>
                        <li>
                            <a href="<?php echo e(route('user-dashboard')); ?>">
                                <i class="fa-solid fa-box"></i> <?php echo e($translator->translate('Dashboard')); ?>

                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('blank-page')); ?>">
                                <i class="fa-solid fa-pen"></i> <?php echo e($translator->translate('Profile')); ?>

                            </a>
                        </li>
                        <!-- Dropdown Bahasa -->
                        <li class="relative">
                            <a href="javascript:void(0);" id="languageDropdownToggle" class="lang">
                                <i class="fa-solid fa-earth-europe"></i> <?php echo e($translator->translate('Language')); ?>

                                <i class="fa-solid fa-chevron-down"></i>
                            </a>
                            <ul id="languageDropdown" class="language-dropdown">
                                <li>
                                    <a href="javascript:void(0);" onclick="changeLanguage('id')">🇮🇩 Bahasa Indonesia</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" onclick="changeLanguage('en')">🇺🇸 English</a>
                                </li>
                            </ul>
                        </li>
                        <div id="google_translate_element" style="display:none;"></div>
                        <li>
                            <a href="<?php echo e(route('blank-page')); ?>">
                                <i class="fa-solid fa-right-from-bracket"></i> <?php echo e($translator->translate('Logout')); ?>

                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if(auth()->guard()->guest()): ?>
                        <li class="relative">
                            <a href="javascript:void(0);" id="languageDropdownToggleGuest" class="lang">
                                <i class="fa-solid fa-earth-europe"></i> <?php echo e($translator->translate('Language')); ?>

                                <i class="fa-solid fa-chevron-down"></i>
                            </a>
                            <ul id="languageDropdownGuest" class="language-dropdown">
                                <li>
                                    <a href="?lang=id">🇮🇩 Bahasa Indonesia</a>
                                </li>
                                <li>
                                    <a href="?lang=en">🇺🇸 English</a>
                                </li>
                            </ul>
                        </li>
                        <div id="google_translate_element" style="display:none;"></div>
                        <li>
                            <a href="<?php echo e(route('blank-page')); ?>">
                                <i class="fa-solid fa-right-to-bracket"></i> <?php echo e($translator->translate('Login')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="hamburger">
        <i class="fa-solid fa-ellipsis"></i>
    </div>
</nav>
<?php /**PATH C:\xampp\htdocs\bakoelide-magang-main\resources\views/navbar/navbar.blade.php ENDPATH**/ ?>