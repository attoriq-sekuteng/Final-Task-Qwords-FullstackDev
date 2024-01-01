<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Navbar Sticky</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"></head>

    <link rel='dns-prefetch' href='//unpkg.com' />
<link data-optimized="1" rel='stylesheet' id='wc-blocks-vendors-style-css' href='https://qwords.com/v2/wp-content/litespeed/css/8804b9e1b1c6a0a8208a9909b2974f11.css?ver=21bde' type='text/css' media='all' />
<link data-optimized="1" rel='stylesheet' id='wc-blocks-style-css' href='https://qwords.com/v2/wp-content/litespeed/css/ea492d7110f3c43efa22b253d41a0dbd.css?ver=d9b3d' type='text/css' media='all' />
<style id='global-styles-inline-css' type='text/css'>
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}body .is-layout-grid{display: grid;}body .is-layout-grid > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
.wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
.wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
.btn.btn-outline-qw-primary {
    border-color: #FF6D0B; 
}
</style>
<link data-optimized="1" rel='stylesheet' id='contact-form-7-css' href='https://qwords.com/v2/wp-content/litespeed/css/a50c692a4c10f88e7dd62f0f5361e953.css?ver=33267' type='text/css' media='all' />
<link data-optimized="1" rel='stylesheet' id='woocommerce-layout-css' href='https://qwords.com/v2/wp-content/litespeed/css/54787d7c59e74b061cfe14a25c0a0ae7.css?ver=da2e6' type='text/css' media='all' />
<link data-optimized="1" rel='stylesheet' id='woocommerce-smallscreen-css' href='https://qwords.com/v2/wp-content/litespeed/css/bc250c910992dd4fdbbbace8d38ae077.css?ver=20499' type='text/css' media='only screen and (max-width: 768px)' />
<link data-optimized="1" rel='stylesheet' id='woocommerce-general-css' href='https://qwords.com/v2/wp-content/litespeed/css/4ef6743108b2d595f323cdac44cd474c.css?ver=042a9' type='text/css' media='all' />
<style id='woocommerce-inline-inline-css' type='text/css'>
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link data-optimized="1" rel='stylesheet' id='navbar-css' href='https://qwords.com/v2/wp-content/litespeed/css/f52ee7d68e4880039ff37fa1e77a8afa.css?ver=d840a' type='text/css' media='all' />
<link data-optimized="1" rel='stylesheet' id='footer-css' href='https://qwords.com/v2/wp-content/litespeed/css/52ebc9615e101eadb57851d311a05f0a.css?ver=3cd7a' type='text/css' media='all' />
<link data-optimized="1" rel='stylesheet' id='bootstrap-css' href='https://qwords.com/v2/wp-content/litespeed/css/bfb057d2d25a3ce4acecaea4d99f3217.css?ver=f84ba' type='text/css' media='all' />
<link data-optimized="1" rel='stylesheet' id='main-css' href='https://qwords.com/v2/wp-content/litespeed/css/73b0d84f35bfa88b5de4dae0f5ec7213.css?ver=9346d' type='text/css' media='all' />
<link data-optimized="1" rel='stylesheet' id='custom-css' href='https://qwords.com/v2/wp-content/litespeed/css/e1af234f9cfee1ed4338ec8595e9839a.css?ver=de39f' type='text/css' media='all' />
<link data-optimized="1" rel='stylesheet' id='override-css' href='https://qwords.com/v2/wp-content/litespeed/css/356f93e0d32943d7788a079ee271ace7.css?ver=c1edb' type='text/css' media='all' />
<script type="text/javascript" src="https://qwords.com/v2/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
<script type="text/javascript" src="https://qwords.com/v2/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1' defer " id="jquery-migrate-js"></script>
<script type="text/javascript" src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js' defer " id="scrollReveal-js"></script>
<link rel="https://api.w.org/" href="https://qwords.com/v2/wp-json/" /><link rel="alternate" type="application/json" href="https://qwords.com/v2/wp-json/wp/v2/pages/64" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://qwords.com/v2/xmlrpc.php?rsd" />
<meta name="generator" content="WordPress 6.4.2" />
<meta name="generator" content="WooCommerce 7.3.0" />
<link rel='shortlink' href='https://qwords.com/v2/' />
<link rel="alternate" type="application/json+oembed" href="https://qwords.com/v2/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fqwords.com%2Fv2%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://qwords.com/v2/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fqwords.com%2Fv2%2F&format=xml" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;700;800&display=swap" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;700;800&display=swap" media="print" onload="this.media='all'" />
	<noscript>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;700;800&display=swap" />
	</noscript>
	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
	<link rel="icon" href="https://qwords.com/v2/wp-content/uploads/2022/12/cropped-logo-qw-light-32x32.png" sizes="32x32" />
<link rel="icon" href="https://qwords.com/v2/wp-content/uploads/2022/12/cropped-logo-qw-light-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="https://qwords.com/v2/wp-content/uploads/2022/12/cropped-logo-qw-light-180x180.png" />
<meta name="msapplication-TileImage" content="https://qwords.com/v2/wp-content/uploads/2022/12/cropped-logo-qw-light-270x270.png" />
<link rel="preload" href="https://qwords.com/v2/wp-content/themes/qwords/assets/images/shapes/webp/main-bg.webp" as="image">
<link rel="preload" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<link rel="preload" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.csss" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">
</noscript>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>    <!-- Favicons -->
    <link href="<?= base_url('arsha-assets'); ?>/img/favicon.png" rel="icon">
    <link href="<?= base_url('arsha-assets'); ?>/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('arsha-assets'); ?>/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url('arsha-assets'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('arsha-assets'); ?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('arsha-assets'); ?>/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('arsha-assets'); ?>/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url('arsha-assets'); ?>/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url('arsha-assets'); ?>/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('arsha-assets'); ?>/css/style.css" rel="stylesheet">
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-white sticky-top">
    <div class="container-fluid">
        <!-- Logo Perusahaan (mentok kiri) -->
        <a class="navbar-brand" href="#">
            <img data-no-lazy="1" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/logo-qw-light.webp" alt="qwords.webp" width="140px" height="55px" />
        </a>
        <!-- Tombol Toggle untuk Tampilan Mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Daftar Navigasi -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto"> <!-- mx-auto untuk membuatnya menjadi center -->
                <!-- Cloud Hosting (Dropdown) -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark fw-bold" href="#" id="cloudHostingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Cloud Hosting
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="cloudHostingDropdown">
                        <!-- Isi Dropdown Cloud Hosting -->
                        <li><a class="dropdown-item" href="#">Pilihan 1</a></li>
                        <li><a class="dropdown-item" href="#">Pilihan 2</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark fw-bold" href="#" id="cloudHostingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Server
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="cloudHostingDropdown">
                        <!-- Isi Dropdown Cloud Hosting -->
                        <li><a class="dropdown-item" href="#">Pilihan 1</a></li>
                        <li><a class="dropdown-item" href="#">Pilihan 2</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark fw-bold" href="#" id="cloudHostingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Domain
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="cloudHostingDropdown">
                        <!-- Isi Dropdown Cloud Hosting -->
                        <li><a class="dropdown-item" href="#">Pilihan 1</a></li>
                        <li><a class="dropdown-item" href="#">Pilihan 2</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark fw-bold" href="#" id="cloudHostingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Email Suite
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="cloudHostingDropdown">
                        <!-- Isi Dropdown Cloud Hosting -->
                        <li><a class="dropdown-item" href="#">Pilihan 1</a></li>
                        <li><a class="dropdown-item" href="#">Pilihan 2</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark fw-bold" href="#" id="cloudHostingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="cloudHostingDropdown">
                        <!-- Isi Dropdown Cloud Hosting -->
                        <li><a class="dropdown-item" href="#">Pilihan 1</a></li>
                        <li><a class="dropdown-item" href="#">Pilihan 2</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark fw-bold" href="#" id="cloudHostingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Internet Access
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="cloudHostingDropdown">
                        <!-- Isi Dropdown Cloud Hosting -->
                        <li><a class="dropdown-item" href="#">Pilihan 1</a></li>
                        <li><a class="dropdown-item" href="#">Pilihan 2</a></li>
                    </ul>
                </li>


            </ul>

            <!-- Tombol Login dan Daftar (mentok kanan) -->
            <ul class="navbar-nav">
                <button class="btn btn-outline-qw-primary mx-1 rounded-5 fw-bold" data-bs-toggle="dropdown" aria-expanded="false">Daftar</button>
                <button class="btn btn-outline-qw-primary mx-1 rounded-5 fw-bold" data-bs-toggle="dropdown" aria-expanded="false">Log in</button>
            </ul>

        </div>
    </div>
</nav>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Cloud Hosting untuk <span class="text-qw-primary">Kesuksesan Websitemu!</span></h1>
          <h2 class="fw-light">Qwords menawarkan layanan Cloud Hosting yang Cepat, Aman, dan Dukungan 24 jam untuk memenuhi kebutuhan hosting Anda. Tersertifikasi ISO 27001 dengan Data Center Tier 3. </h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Cek Domain</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="<?= base_url('arsha-assets'); ?>/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
<section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img data-lazyloaded="1" data-placeholder-resp="100%x100%" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHZpZXdCb3g9IjAgMCAxMDAlIDEwMCUiPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHN0eWxlPSJmaWxsOiNjZmQ0ZGI7ZmlsbC1vcGFjaXR5OiAwLjE7Ii8+PC9zdmc+" loading="lazy" data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/code.webp" alt="code.webp" width="100%" height="100%"><noscript><img loading="lazy" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/code.webp" alt="code.webp" width="100%" height="100%"></noscript>
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img data-lazyloaded="1" data-placeholder-resp="100%x100%" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHZpZXdCb3g9IjAgMCAxMDAlIDEwMCUiPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHN0eWxlPSJmaWxsOiNjZmQ0ZGI7ZmlsbC1vcGFjaXR5OiAwLjE7Ii8+PC9zdmc+" loading="lazy" data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/icann-logo.webp" alt="icann-logo.webp" width="100%" height="100%"><noscript><img loading="lazy" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/icann-logo.webp" alt="icann-logo.webp" width="100%" height="100%"></noscript>
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img data-lazyloaded="1" data-placeholder-resp="100pxx100px" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDBwIiBoZWlnaHQ9IiIgdmlld0JveD0iMCAwIDEwMHAgIj48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBzdHlsZT0iZmlsbDojY2ZkNGRiO2ZpbGwtb3BhY2l0eTogMC4xOyIvPjwvc3ZnPg==" loading="lazy" data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/badge_litespeed.svg" alt="badge_litespeed.svg" width="100px" height="100px"><noscript><img loading="lazy" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/badge_litespeed.svg" alt="badge_litespeed.svg" width="100px" height="100px"></noscript>
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img data-lazyloaded="1" data-placeholder-resp="100pxx100px" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDBwIiBoZWlnaHQ9IiIgdmlld0JveD0iMCAwIDEwMHAgIj48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBzdHlsZT0iZmlsbDojY2ZkNGRiO2ZpbGwtb3BhY2l0eTogMC4xOyIvPjwvc3ZnPg==" loading="lazy" data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/badge_whmadmin.svg" alt="badge_whmadmin.svg" width="100px" height="100px"><noscript><img loading="lazy" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/badge_whmadmin.svg" alt="badge_whmadmin.svg" width="100px" height="100px"></noscript>
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img data-lazyloaded="1" data-placeholder-resp="100%x100%" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHZpZXdCb3g9IjAgMCAxMDAlIDEwMCUiPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHN0eWxlPSJmaWxsOiNjZmQ0ZGI7ZmlsbC1vcGFjaXR5OiAwLjE7Ii8+PC9zdmc+" loading="lazy" data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/acronis-cloud-tech.webp" alt="acronis-cloud-tech.webp" width="100%" height="100%"><noscript><img loading="lazy" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/acronis-cloud-tech.webp" alt="acronis-cloud-tech.webp" width="100%" height="100%"></noscript>
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img data-lazyloaded="1" data-placeholder-resp="100%x100%" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHZpZXdCb3g9IjAgMCAxMDAlIDEwMCUiPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHN0eWxlPSJmaWxsOiNjZmQ0ZGI7ZmlsbC1vcGFjaXR5OiAwLjE7Ii8+PC9zdmc+" loading="lazy" data-src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/acronis-cloud-sales.webp" alt="acronis-cloud-sales.webp" width="100%" height="100%"><noscript><img loading="lazy" src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/acronis-cloud-sales.webp" alt="acronis-cloud-sales.webp" width="100%" height="100%"></noscript>
          </div>

        </div>

      </div>
</section>
<section id="search-domain">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div id="inner-search-domain">
					<div class="text-center w-100 search-wrapper">
						<h2 class="fw-bolder">Cari Nama Domainmu</h2>
						<p class="mb-0 mx-auto">
							Nama Domain digunakan untuk mempermudah pengunjung menuju ke situs Anda. Pilih nama domain yang paling mencerminkan bisnis, produk, atau layanan Anda.
						</p>
						<form class="row mt-5" onsubmit="return false">
							<div class="col-12 col-sm-7 col-md-7 col-lg-8">
								<div class="input-group input-group-lg">
									<input type="text" class="form-control border-0" name="domain" id="domain-input" placeholder="Cari nama domain Anda" />
								</div>
							</div>
							<div class="col-12 col-sm-5 col-md-5 col-lg-2 mt-3 mt-sm-0">
								<div class="input-group input-group-lg">
									<select id="select-tld" class="form-select border-0">
										<option selected value=".id">.id</option>
									</select>
								</div>
							</div>
							<div class="col-12 col-lg-2 mt-3 mt-lg-0">
								<div class="d-grid">
									<button type="button" class="btn btn-dark" id="btn-checkdomain">Cari</button>
								</div>
							</div>
						</form>
						<div class="discount-box mt-5">
							<div class="row justify-content-center">
								<div class="col-12 col-lg-6">
									<div class="d-flex flex-wrap justify-content-around justify-content-lg-center gap-3">
										<div>
											<div class="fw-bold" style="background-color: black; padding: 3px;">
												.com
											</div>
											<h3 class="fw-bold">Rp 165.000</h3>
										</div>
										<div class="d-none d-sm-block vr"></div>
										<div>
											<div class="fw-bold" style="background-color: black; padding: 3px;">
												.id
											</div>
											<h3 class="fw-bold">Rp 225.000</h3>
										</div>
										<div class="d-none d-sm-block vr"></div>
										<div>
											<div class="fw-bold" style="background-color: black; padding: 3px;">
												.info
											</div>
											<h3 class="fw-bold">Rp 77.000</h3>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
  

<!-- Sertakan file Bootstrap JS dan Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  <!-- Arsha js -->
  <script src="<?= base_url('arsha-assets'); ?>/vendor/aos/aos.js"></script>
  <script src="<?= base_url('arsha-assets'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('arsha-assets'); ?>/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url('arsha-assets'); ?>/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url('arsha-assets'); ?>/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url('arsha-assets'); ?>/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="<?= base_url('arsha-assets'); ?>/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url('arsha-assets'); ?>/js/main.js"></script>

    <!-- Qwords js -->

<script src="data:text/javascript;base64,dmFyIGlmcmFtZT1kb2N1bWVudC5jcmVhdGVFbGVtZW50KCdpZnJhbWUnKTtpZnJhbWUuaWQ9ImdlbmlvLWNoYXQiCmRvY3VtZW50LmJvZHkuYXBwZW5kQ2hpbGQoaWZyYW1lKTt2YXIgaHRtbGNvZGU9YAogICAgICAgIDxzdHlsZT4KICAgICAgICAgICAgYm9keSB7CiAgICAgICAgICAgICAgICAtLWNoYWtyYS1jb2xvcnMtY2hha3JhLWJvZHktYmc6dHJhbnNwYXJlbnQ7ICAKICAgICAgICAgICAgICAgIC0tY2hha3JhLWNvbG9ycy1ibGFja0FscGhhLTYwMDowOwogICAgICAgICAgICB9CiAgICAgICAgICAgIAogICAgICAgICAgICAuY3NzLXdvbmRzeSB7CiAgICAgICAgICAgICAgICBwYWRkaW5nLWlubGluZS1zdGFydDogMCAhaW1wb3J0YW50OwogICAgICAgICAgICAgICAgcGFkZGluZy1pbmxpbmUtZW5kOiAwICFpbXBvcnRhbnQ7CiAgICAgICAgICAgIH0KICAgICAgICAgICAgCiAgICAgICAgICAgICNjb250YWluZXItY2hhdHsKICAgICAgICAgICAgICAgIG1heC1oZWlnaHQ6NTAwcHg7CiAgICAgICAgICAgICAgICBwb3NpdGlvbjogcmVsYXRpdmU7CiAgICAgICAgICAgIH0KICAgICAgICAgICAgCiAgICAgICAgICAgIC5jc3MtcTB3bXN7CiAgICAgICAgICAgICAgICBwb3NpdGlvbjogYWJzb2x1dGUgIWltcG9ydGFudDsKICAgICAgICAgICAgICAgIHRvcDozLjUlICFpbXBvcnRhbnQ7CiAgICAgICAgICAgICAgICBsZWZ0OjUwJSAhaW1wb3J0YW50OwogICAgICAgICAgICB9CiAgICAgICAgICAgIAogICAgICAgICAgICAuY3NzLWhkcWwwaHsKICAgICAgICAgICAgICAgIHBvc2l0aW9uOnJlbGF0aXZlICFpbXBvcnRhbnQ7CiAgICAgICAgICAgICAgICBsZWZ0Oi03NSUgIWltcG9ydGFudDsKICAgICAgICAgICAgfQogICAgICAgICAgICAKICAgICAgICAgICAgLmNzcy11N3hrMGV7CiAgICAgICAgICAgICAgICBtYXJnaW4tdG9wOjMlICFpbXBvcnRhbnQ7CiAgICAgICAgICAgIH0KICAgICAgICAgICAgCiAgICAgICAgPC9zdHlsZT4KICAgICAgICA8bGluayByZWw9InN0eWxlc2hlZXQiIHR5cGU9InRleHQvY3NzIiAgaHJlZj0iaHR0cHM6Ly9jbGllbnQtY2hhdC5nZW5pby5pZC9zdGF0aWMvY3NzL21haW4uY3NzIiA+CiAgICAgICAgPHNjcmlwdCB0eXBlPSJtb2R1bGUiIGlkPSJxY2hhdC1jbGllbnQiIHNyYz0iaHR0cHM6Ly9jbGllbnQtY2hhdC5nZW5pby5pZC9zdGF0aWMvanMvYnVuZGxlLmpzP2FwaV9rZXk9JDJ5JDEwJDI3b1M0ZEoycGpocXlMWTdBZXN1UC50TjhPY1RyWUNGWjM5RVEzcm4uZ0VNdk96cjZaZ2Z5IiBvbmxvYWQ9ImFkZEV2ZW50KCkiPjxgK2Avc2NyaXB0PgogICAgICAgIDxzY3JpcHQ+CiAgICAgICAgCiAgICAgICAgICAgICB3aW5kb3cubW9iaWxlQ2hlY2sgPSBmdW5jdGlvbiBkZXRlY3RNb2IoKSB7CiAgICAgICAgICAgICAgICBjb25zdCB0b01hdGNoID0gWwogICAgICAgICAgICAgICAgICAgIC9BbmRyb2lkL2ksCiAgICAgICAgICAgICAgICAgICAgL3dlYk9TL2ksCiAgICAgICAgICAgICAgICAgICAgL2lQaG9uZS9pLAogICAgICAgICAgICAgICAgICAgIC9pUGFkL2ksCiAgICAgICAgICAgICAgICAgICAgL2lQb2QvaSwKICAgICAgICAgICAgICAgICAgICAvQmxhY2tCZXJyeS9pLAogICAgICAgICAgICAgICAgICAgIC9XaW5kb3dzIFBob25lL2kKICAgICAgICAgICAgICAgIF07CiAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgIHJldHVybiB0b01hdGNoLnNvbWUoKHRvTWF0Y2hJdGVtKSA9PiB7CiAgICAgICAgICAgICAgICAgICAgcmV0dXJuIG5hdmlnYXRvci51c2VyQWdlbnQubWF0Y2godG9NYXRjaEl0ZW0pOwogICAgICAgICAgICAgICAgfSk7CiAgICAgICAgICAgIH0KICAgICAgICAgICAgCiAgICAgICAgICAgIGZ1bmN0aW9uIHdhaXRGb3JFbG0oc2VsZWN0b3IpIHsKICAgICAgICAgICAgICAgIHJldHVybiBuZXcgUHJvbWlzZShyZXNvbHZlID0+IHsKICAgICAgICAgICAgICAgICAgICBpZiAoZG9jdW1lbnQucXVlcnlTZWxlY3RvcihzZWxlY3RvcikpIHsKICAgICAgICAgICAgICAgICAgICAgICAgcmV0dXJuIHJlc29sdmUoZG9jdW1lbnQucXVlcnlTZWxlY3RvcihzZWxlY3RvcikpOwogICAgICAgICAgICAgICAgICAgIH0KICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgY29uc3Qgb2JzZXJ2ZXIgPSBuZXcgTXV0YXRpb25PYnNlcnZlcihtdXRhdGlvbnMgPT4gewogICAgICAgICAgICAgICAgICAgICAgICBpZiAoZG9jdW1lbnQucXVlcnlTZWxlY3RvcihzZWxlY3RvcikpIHsKICAgICAgICAgICAgICAgICAgICAgICAgICAgIHJlc29sdmUoZG9jdW1lbnQucXVlcnlTZWxlY3RvcihzZWxlY3RvcikpOwogICAgICAgICAgICAgICAgICAgICAgICAgICAgb2JzZXJ2ZXIuZGlzY29ubmVjdCgpOwogICAgICAgICAgICAgICAgICAgICAgICB9CiAgICAgICAgICAgICAgICAgICAgfSk7CiAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgIG9ic2VydmVyLm9ic2VydmUoZG9jdW1lbnQuYm9keSwgewogICAgICAgICAgICAgICAgICAgICAgICBjaGlsZExpc3Q6IHRydWUsCiAgICAgICAgICAgICAgICAgICAgICAgIHN1YnRyZWU6IHRydWUKICAgICAgICAgICAgICAgICAgICB9KTsKICAgICAgICAgICAgICAgIH0pOwogICAgICAgICAgICB9CiAgICAgICAgICAgIAogICAgICAgICAgICBmdW5jdGlvbiB3YWl0Rm9yRWxtQWxsKHNlbGVjdG9yKSB7CiAgICAgICAgICAgICAgICByZXR1cm4gbmV3IFByb21pc2UocmVzb2x2ZSA9PiB7CiAgICAgICAgICAgICAgICAgICAgaWYgKGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoc2VsZWN0b3IpKSB7CiAgICAgICAgICAgICAgICAgICAgICAgIHJldHVybiByZXNvbHZlKGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoc2VsZWN0b3IpKTsKICAgICAgICAgICAgICAgICAgICB9CiAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgIGNvbnN0IG9ic2VydmVyID0gbmV3IE11dGF0aW9uT2JzZXJ2ZXIobXV0YXRpb25zID0+IHsKICAgICAgICAgICAgICAgICAgICAgICAgaWYgKGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoc2VsZWN0b3IpKSB7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICByZXNvbHZlKGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoc2VsZWN0b3IpKTsKICAgICAgICAgICAgICAgICAgICAgICAgICAgIG9ic2VydmVyLmRpc2Nvbm5lY3QoKTsKICAgICAgICAgICAgICAgICAgICAgICAgfQogICAgICAgICAgICAgICAgICAgIH0pOwogICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICBvYnNlcnZlci5vYnNlcnZlKGRvY3VtZW50LmJvZHksIHsKICAgICAgICAgICAgICAgICAgICAgICAgY2hpbGRMaXN0OiB0cnVlLAogICAgICAgICAgICAgICAgICAgICAgICBzdWJ0cmVlOiB0cnVlCiAgICAgICAgICAgICAgICAgICAgfSk7CiAgICAgICAgICAgICAgICB9KTsKICAgICAgICAgICAgfQogICAgICAgICAgICAKICAgICAgICAgICAgCiAgICAgICAgICAgIGZ1bmN0aW9uIHNldENsaXBQYXRoRG93bigpewogICAgICAgICAgICAgICAgc2V0VGltZW91dChmdW5jdGlvbigpewogICAgICAgICAgICAgICAgICAgIGlmICh3aW5kb3cubW9iaWxlQ2hlY2soKSl7CiAgICAgICAgICAgICAgICAgICAgICAgIHdpbmRvdy5wYXJlbnQuZG9jdW1lbnQucXVlcnlTZWxlY3RvcignI2dlbmlvLWNoYXQnKS5zdHlsZS5jbGlwUGF0aCA9ICdpbnNldCg4NSUgMHB4IDAlIDc1JSknOyAgICAKICAgICAgICAgICAgICAgICAgICB9IGVsc2UgewogICAgICAgICAgICAgICAgICAgICAgICB3aW5kb3cucGFyZW50LmRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJyNnZW5pby1jaGF0Jykuc3R5bGUuY2xpcFBhdGggPSAnaW5zZXQoODAlIDBweCAwJSA5MCUpJzsgIAogICAgICAgICAgICAgICAgICAgICAgICB3aW5kb3cucGFyZW50LmRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJyNnZW5pby1jaGF0Jykuc3R5bGUud2lkdGggPSAiOTAlIjsKICAgICAgICAgICAgICAgICAgICAgICAgd2luZG93LnBhcmVudC5kb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcjZ2VuaW8tY2hhdCcpLnN0eWxlLmhlaWdodCA9ICI5MCUiOwogICAgICAgICAgICAgICAgICAgIH0gCiAgICAgICAgICAgICAgICB9LDUwMCkKICAgICAgICAgICAgfQogICAgICAgICAgICAKICAgICAgICAgICAgCiAgICAgICAgICAgIC8vIFRoaXMgZnVuY3Rpb24gZm9yIGFkZCBjbGlwYXRoLCBzbyB1c2VyIGNhbiBjbGljayBsaW5rIGJlaGluZCBpZnJhbWUKICAgICAgICAgICAgCiAgICAgICAgICAgIGZ1bmN0aW9uIGFkZEV2ZW50KCl7CiAgICAgICAgICAgICAgICBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcjcm9vdC1jbGllbnQtY2hhdHZvbHV0aW9uJykub25jbGljayA9IGZ1bmN0aW9uKGV2KXsKCiAgICAgICAgICAgICAgICAgICAgaWYgKHdpbmRvdy5tb2JpbGVDaGVjaygpKXsKICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgd2luZG93LnBhcmVudC5kb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcjZ2VuaW8tY2hhdCcpLnN0eWxlLmJvdHRvbSA9ICIxcHgiOwogICAgICAgICAgICAgICAgICAgICAgICB3aW5kb3cucGFyZW50LmRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJyNnZW5pby1jaGF0Jykuc3R5bGUucmlnaHQgPSAiMnB4IjsKICAgICAgICAgICAgICAgICAgICAgICAgd2luZG93LnBhcmVudC5kb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcjZ2VuaW8tY2hhdCcpLnN0eWxlLndpZHRoID0gIjk5JSI7CiAgICAgICAgICAgICAgICAgICAgICAgIHdpbmRvdy5wYXJlbnQuZG9jdW1lbnQucXVlcnlTZWxlY3RvcignI2dlbmlvLWNoYXQnKS5zdHlsZS5oZWlnaHQgPSAiOTklIjsKICAgICAgICAgICAgICAgICAgICAgICAgd2luZG93LnBhcmVudC5kb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcjZ2VuaW8tY2hhdCcpLnN0eWxlLmNsaXBQYXRoID0gJ25vbmUnOyAKICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgfSBlbHNlIHsKICAgICAgICAgICAgICAgICAgICAgICAgLy8gd2luZG93LnBhcmVudC5kb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcjZ2VuaW8tY2hhdCcpLnN0eWxlLmNsaXBQYXRoID0gJ2luc2V0KDEzJSAwcHggMCUgNzAlKSc7CiAgICAgICAgICAgICAgICAgICAgICAgIHdpbmRvdy5wYXJlbnQuZG9jdW1lbnQucXVlcnlTZWxlY3RvcignI2dlbmlvLWNoYXQnKS5zdHlsZS5jbGlwUGF0aCA9ICdub25lJzsKICAgICAgICAgICAgICAgICAgICAgICAgd2luZG93LnBhcmVudC5kb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcjZ2VuaW8tY2hhdCcpLnN0eWxlLndpZHRoID0gIjI1JSI7CiAgICAgICAgICAgICAgICAgICAgICAgIHdpbmRvdy5wYXJlbnQuZG9jdW1lbnQucXVlcnlTZWxlY3RvcignI2dlbmlvLWNoYXQnKS5zdHlsZS5oZWlnaHQgPSAiOTAlIjsKICAgICAgICAgICAgICAgICAgICB9CiAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgaWYgKEJvb2xlYW4oZXYudGFyZ2V0LmNsb3Nlc3QoJyNidG4tY2V2by1jbG9zZScpKSl7CiAgICAgICAgICAgICAgICAgICAgICAgIHNldENsaXBQYXRoRG93bigpOwogICAgICAgICAgICAgICAgICAgIH0KICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICBpZiAoQm9vbGVhbihldi50YXJnZXQuY2xvc2VzdCgnLmJ0bi1wZXJrZWNpbC1jZXZvJykpKXsKICAgICAgICAgICAgICAgICAgICAgICAgc2V0Q2xpcFBhdGhEb3duKCk7CiAgICAgICAgICAgICAgICAgICAgfQogICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgfQogICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgd2FpdEZvckVsbSgnLmJ0bi1wZXJrZWNpbC1jZXZvJykKICAgICAgICAgICAgICAgICAgICAudGhlbigoZWxtKSA9PiB7CiAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICBlbG0ub25jbGljayA9ICgpID0+IHsKICAgICAgICAgICAgICAgICAgICAgICAgICAgIHNldENsaXBQYXRoRG93bigpOwogICAgICAgICAgICAgICAgICAgICAgICB9CiAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgIH0pOwogICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgIHdhaXRGb3JFbG0oJyNidG4tY2V2by1jbG9zZScpCiAgICAgICAgICAgICAgICAgICAgLnRoZW4oKGVsbSkgPT4gewogICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICBlbG0ub25jbGljayA9ICgpID0+IHsKICAgICAgICAgICAgICAgICAgICAgICAgICAgIHNldENsaXBQYXRoRG93bigpOwogICAgICAgICAgICAgICAgICAgICAgICB9CiAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgIH0pOwogICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgIHdhaXRGb3JFbG0oJyNjb250YWluZXItY2hhdCcpCiAgICAgICAgICAgICAgICAgICAgLnRoZW4oKGVsbSkgPT4gewoKICAgICAgICAgICAgICAgICAgICAgICAgaWYgKGVsbSAmJiBlbG0ub2Zmc2V0UGFyZW50ICE9PSBudWxsKXsKICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlmICh3aW5kb3cubW9iaWxlQ2hlY2soKSl7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgd2luZG93LnBhcmVudC5kb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcjZ2VuaW8tY2hhdCcpLnN0eWxlLmJvdHRvbSA9ICIxcHgiOwogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHdpbmRvdy5wYXJlbnQuZG9jdW1lbnQucXVlcnlTZWxlY3RvcignI2dlbmlvLWNoYXQnKS5zdHlsZS5yaWdodCA9ICIycHgiOwogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHdpbmRvdy5wYXJlbnQuZG9jdW1lbnQucXVlcnlTZWxlY3RvcignI2dlbmlvLWNoYXQnKS5zdHlsZS53aWR0aCA9ICI5OSUiOwogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHdpbmRvdy5wYXJlbnQuZG9jdW1lbnQucXVlcnlTZWxlY3RvcignI2dlbmlvLWNoYXQnKS5zdHlsZS5oZWlnaHQgPSAiOTklIjsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB3aW5kb3cucGFyZW50LmRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJyNnZW5pby1jaGF0Jykuc3R5bGUuY2xpcFBhdGggPSAnbm9uZSc7ICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgfSBlbHNlIHsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAvLyB3aW5kb3cucGFyZW50LmRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJyNnZW5pby1jaGF0Jykuc3R5bGUuY2xpcFBhdGggPSAnaW5zZXQoMTMlIDBweCAwJSA3MCUpJzsKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB3aW5kb3cucGFyZW50LmRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJyNnZW5pby1jaGF0Jykuc3R5bGUuY2xpcFBhdGggPSAnbm9uZSc7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgd2luZG93LnBhcmVudC5kb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcjZ2VuaW8tY2hhdCcpLnN0eWxlLndpZHRoID0gIjI1JSI7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgd2luZG93LnBhcmVudC5kb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcjZ2VuaW8tY2hhdCcpLnN0eWxlLmhlaWdodCA9ICI5MCUiOwogICAgICAgICAgICAgICAgICAgICAgICAgICAgfQogICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgIH0gZWxzZSB7CiAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgc2V0Q2xpcFBhdGhEb3duKCk7CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgfSAgCiAgICAgICAgICAgICAgICAgICAgfSk7CgogICAgICAgICAgICB9CiAgICAgICAgICAgIAogICAgICAgICAgICBzZXRDbGlwUGF0aERvd24oKTsKICAgICAgICAgICAgCiAgICAgICAgPGArYC9zY3JpcHQ+YAppZnJhbWUuc2V0QXR0cmlidXRlKCJzdHlsZSIsInBvc2l0aW9uOmZpeGVkOyBib3R0b206NXB4OyByaWdodDo1cHg7IHdpZHRoOjkwJTsgaGVpZ2h0OjkwJTsgbWFyZ2luOjA7IHBhZGRpbmc6MDtib3JkZXI6bm9uZTtvdmVyZmxvdzpoaWRkZW47IHotaW5kZXg6OTk5OTk5OyIpO2lmcmFtZS5zZXRBdHRyaWJ1dGUoImFsbG93dHJhbnNwYXJlbmN5IiwidHJ1ZSIpO2lmcmFtZS5zZXRBdHRyaWJ1dGUoInRpdGxlIiwiTGl2ZSBDaGF0IFF3b3JkcyIpO2lmcmFtZS5jb250ZW50V2luZG93LmRvY3VtZW50Lm9wZW4oKTtpZnJhbWUuY29udGVudFdpbmRvdy5kb2N1bWVudC53cml0ZShodG1sY29kZSk7aWZyYW1lLmNvbnRlbnRXaW5kb3cuZG9jdW1lbnQuY2xvc2UoKQ==" defer></script>
<script data-optimized="1" type="text/javascript" src="https://qwords.com/v2/wp-content/litespeed/js/ff8ee45de7d5c1db3ba15b1c60a473c3.js?ver=4abef " id="swv-js" defer data-deferred="1"></script>
<script type="text/javascript" id="contact-form-7-js-extra" src="data:text/javascript;base64,dmFyIHdwY2Y3PXsiYXBpIjp7InJvb3QiOiJodHRwczpcL1wvcXdvcmRzLmNvbVwvdjJcL3dwLWpzb25cLyIsIm5hbWVzcGFjZSI6ImNvbnRhY3QtZm9ybS03XC92MSJ9LCJjYWNoZWQiOiIxIn0=" defer></script>
<script data-optimized="1" type="text/javascript" src="https://qwords.com/v2/wp-content/litespeed/js/61605ffdf7677be6eaa388ba112e828b.js?ver=f9d3e " id="contact-form-7-js" defer data-deferred="1"></script>
<script data-optimized="1" type="text/javascript" src="https://qwords.com/v2/wp-content/litespeed/js/0a63d9f49c4238190081c5e2ed8683c5.js?ver=ab1b4 " id="jquery-blockui-js" defer data-deferred="1"></script>
<script type="text/javascript" id="wc-add-to-cart-js-extra" src="data:text/javascript;base64,dmFyIHdjX2FkZF90b19jYXJ0X3BhcmFtcz17ImFqYXhfdXJsIjoiXC92Mlwvd3AtYWRtaW5cL2FkbWluLWFqYXgucGhwIiwid2NfYWpheF91cmwiOiJcL3YyXC8/d2MtYWpheD0lJWVuZHBvaW50JSUiLCJpMThuX3ZpZXdfY2FydCI6IkxpaGF0IGtlcmFuamFuZyIsImNhcnRfdXJsIjoiaHR0cHM6XC9cL3F3b3Jkcy5jb21cL3YyIiwiaXNfY2FydCI6IiIsImNhcnRfcmVkaXJlY3RfYWZ0ZXJfYWRkIjoibm8ifQ==" defer></script>
<script data-optimized="1" type="text/javascript" src="https://qwords.com/v2/wp-content/litespeed/js/ae57a78ccd6869be700cbc940ba109f4.js?ver=b0d71 " id="wc-add-to-cart-js" defer data-deferred="1"></script>
<script data-optimized="1" type="text/javascript" src="https://qwords.com/v2/wp-content/litespeed/js/1abfb560723cd1db4b7407169db6b85d.js?ver=6a1aa " id="js-cookie-js" defer data-deferred="1"></script>
<script type="text/javascript" id="woocommerce-js-extra" src="data:text/javascript;base64,dmFyIHdvb2NvbW1lcmNlX3BhcmFtcz17ImFqYXhfdXJsIjoiXC92Mlwvd3AtYWRtaW5cL2FkbWluLWFqYXgucGhwIiwid2NfYWpheF91cmwiOiJcL3YyXC8/d2MtYWpheD0lJWVuZHBvaW50JSUifQ==" defer></script>
<script data-optimized="1" type="text/javascript" src="https://qwords.com/v2/wp-content/litespeed/js/57f15691e0b27b28e5ea8d889f8c92d2.js?ver=db0fe " id="woocommerce-js" defer data-deferred="1"></script>
<script type="text/javascript" id="wc-cart-fragments-js-extra" src="data:text/javascript;base64,dmFyIHdjX2NhcnRfZnJhZ21lbnRzX3BhcmFtcz17ImFqYXhfdXJsIjoiXC92Mlwvd3AtYWRtaW5cL2FkbWluLWFqYXgucGhwIiwid2NfYWpheF91cmwiOiJcL3YyXC8/d2MtYWpheD0lJWVuZHBvaW50JSUiLCJjYXJ0X2hhc2hfa2V5Ijoid2NfY2FydF9oYXNoXzkyYzFhNjFiODA5ZDk1NmVlZWY1NWI5YTZlNDJhZmU3IiwiZnJhZ21lbnRfbmFtZSI6IndjX2ZyYWdtZW50c185MmMxYTYxYjgwOWQ5NTZlZWVmNTViOWE2ZTQyYWZlNyIsInJlcXVlc3RfdGltZW91dCI6IjUwMDAifQ==" defer></script>
<script data-optimized="1" type="text/javascript" src="https://qwords.com/v2/wp-content/litespeed/js/854b25a9db8ade9b2653147adc0d114e.js?ver=3a03e " id="wc-cart-fragments-js" defer data-deferred="1"></script>
<script type="text/javascript" src="https://qwords.com/v2/wp-content/themes/qwords/assets/libs/bootstrap@5.2/js/bootstrap.bundle.min.js' defer " id="bootstrap-js-js"></script>
<script type="text/javascript" src="https://qwords.com/v2/wp-content/themes/qwords/assets/libs/toastjs/toast.min.js' defer " id="toast-js"></script>
<script type="text/javascript" src="https://qwords.com/v2/wp-content/themes/qwords/assets/libs/psl/psl.min.js' defer " id="psl-js"></script>
<script type="text/javascript" id="main-js-extra" src="data:text/javascript;base64,dmFyIHdwX2Fzc2V0PXsidXJsIjoiaHR0cHM6XC9cL3F3b3Jkcy5jb21cL3YyXC93cC1jb250ZW50XC90aGVtZXNcL3F3b3JkcyJ9" defer></script>
<script type="text/javascript" src="https://qwords.com/v2/wp-content/themes/qwords/assets/js/main.js' defer " id="main-js"></script>
<script data-no-optimize="1">!function(t,e){"object"==typeof exports&&"undefined"!=typeof module?module.exports=e():"function"==typeof define&&define.amd?define(e):(t="undefined"!=typeof globalThis?globalThis:t||self).LazyLoad=e()}(this,function(){"use strict";function e(){return(e=Object.assign||function(t){for(var e=1;e<arguments.length;e++){var n,a=arguments[e];for(n in a)Object.prototype.hasOwnProperty.call(a,n)&&(t[n]=a[n])}return t}).apply(this,arguments)}function i(t){return e({},it,t)}function o(t,e){var n,a="LazyLoad::Initialized",i=new t(e);try{n=new CustomEvent(a,{detail:{instance:i}})}catch(t){(n=document.createEvent("CustomEvent")).initCustomEvent(a,!1,!1,{instance:i})}window.dispatchEvent(n)}function l(t,e){return t.getAttribute(gt+e)}function c(t){return l(t,bt)}function s(t,e){return function(t,e,n){e=gt+e;null!==n?t.setAttribute(e,n):t.removeAttribute(e)}(t,bt,e)}function r(t){return s(t,null),0}function u(t){return null===c(t)}function d(t){return c(t)===vt}function f(t,e,n,a){t&&(void 0===a?void 0===n?t(e):t(e,n):t(e,n,a))}function _(t,e){nt?t.classList.add(e):t.className+=(t.className?" ":"")+e}function v(t,e){nt?t.classList.remove(e):t.className=t.className.replace(new RegExp("(^|\\s+)"+e+"(\\s+|$)")," ").replace(/^\s+/,"").replace(/\s+$/,"")}function g(t){return t.llTempImage}function b(t,e){!e||(e=e._observer)&&e.unobserve(t)}function p(t,e){t&&(t.loadingCount+=e)}function h(t,e){t&&(t.toLoadCount=e)}function n(t){for(var e,n=[],a=0;e=t.children[a];a+=1)"SOURCE"===e.tagName&&n.push(e);return n}function m(t,e){(t=t.parentNode)&&"PICTURE"===t.tagName&&n(t).forEach(e)}function a(t,e){n(t).forEach(e)}function E(t){return!!t[st]}function I(t){return t[st]}function y(t){return delete t[st]}function A(e,t){var n;E(e)||(n={},t.forEach(function(t){n[t]=e.getAttribute(t)}),e[st]=n)}function k(a,t){var i;E(a)&&(i=I(a),t.forEach(function(t){var e,n;e=a,(t=i[n=t])?e.setAttribute(n,t):e.removeAttribute(n)}))}function L(t,e,n){_(t,e.class_loading),s(t,ut),n&&(p(n,1),f(e.callback_loading,t,n))}function w(t,e,n){n&&t.setAttribute(e,n)}function x(t,e){w(t,ct,l(t,e.data_sizes)),w(t,rt,l(t,e.data_srcset)),w(t,ot,l(t,e.data_src))}function O(t,e,n){var a=l(t,e.data_bg_multi),i=l(t,e.data_bg_multi_hidpi);(a=at&&i?i:a)&&(t.style.backgroundImage=a,n=n,_(t=t,(e=e).class_applied),s(t,ft),n&&(e.unobserve_completed&&b(t,e),f(e.callback_applied,t,n)))}function N(t,e){!e||0<e.loadingCount||0<e.toLoadCount||f(t.callback_finish,e)}function C(t,e,n){t.addEventListener(e,n),t.llEvLisnrs[e]=n}function M(t){return!!t.llEvLisnrs}function z(t){if(M(t)){var e,n,a=t.llEvLisnrs;for(e in a){var i=a[e];n=e,i=i,t.removeEventListener(n,i)}delete t.llEvLisnrs}}function R(t,e,n){var a;delete t.llTempImage,p(n,-1),(a=n)&&--a.toLoadCount,v(t,e.class_loading),e.unobserve_completed&&b(t,n)}function T(o,r,c){var l=g(o)||o;M(l)||function(t,e,n){M(t)||(t.llEvLisnrs={});var a="VIDEO"===t.tagName?"loadeddata":"load";C(t,a,e),C(t,"error",n)}(l,function(t){var e,n,a,i;n=r,a=c,i=d(e=o),R(e,n,a),_(e,n.class_loaded),s(e,dt),f(n.callback_loaded,e,a),i||N(n,a),z(l)},function(t){var e,n,a,i;n=r,a=c,i=d(e=o),R(e,n,a),_(e,n.class_error),s(e,_t),f(n.callback_error,e,a),i||N(n,a),z(l)})}function G(t,e,n){var a,i,o,r,c;t.llTempImage=document.createElement("IMG"),T(t,e,n),E(c=t)||(c[st]={backgroundImage:c.style.backgroundImage}),o=n,r=l(a=t,(i=e).data_bg),c=l(a,i.data_bg_hidpi),(r=at&&c?c:r)&&(a.style.backgroundImage='url("'.concat(r,'")'),g(a).setAttribute(ot,r),L(a,i,o)),O(t,e,n)}function D(t,e,n){var a;T(t,e,n),a=e,e=n,(t=It[(n=t).tagName])&&(t(n,a),L(n,a,e))}function V(t,e,n){var a;a=t,(-1<yt.indexOf(a.tagName)?D:G)(t,e,n)}function F(t,e,n){var a;t.setAttribute("loading","lazy"),T(t,e,n),a=e,(e=It[(n=t).tagName])&&e(n,a),s(t,vt)}function j(t){t.removeAttribute(ot),t.removeAttribute(rt),t.removeAttribute(ct)}function P(t){m(t,function(t){k(t,Et)}),k(t,Et)}function S(t){var e;(e=At[t.tagName])?e(t):E(e=t)&&(t=I(e),e.style.backgroundImage=t.backgroundImage)}function U(t,e){var n;S(t),n=e,u(e=t)||d(e)||(v(e,n.class_entered),v(e,n.class_exited),v(e,n.class_applied),v(e,n.class_loading),v(e,n.class_loaded),v(e,n.class_error)),r(t),y(t)}function $(t,e,n,a){var i;n.cancel_on_exit&&(c(t)!==ut||"IMG"===t.tagName&&(z(t),m(i=t,function(t){j(t)}),j(i),P(t),v(t,n.class_loading),p(a,-1),r(t),f(n.callback_cancel,t,e,a)))}function q(t,e,n,a){var i,o,r=(o=t,0<=pt.indexOf(c(o)));s(t,"entered"),_(t,n.class_entered),v(t,n.class_exited),i=t,o=a,n.unobserve_entered&&b(i,o),f(n.callback_enter,t,e,a),r||V(t,n,a)}function H(t){return t.use_native&&"loading"in HTMLImageElement.prototype}function B(t,i,o){t.forEach(function(t){return(a=t).isIntersecting||0<a.intersectionRatio?q(t.target,t,i,o):(e=t.target,n=t,a=i,t=o,void(u(e)||(_(e,a.class_exited),$(e,n,a,t),f(a.callback_exit,e,n,t))));var e,n,a})}function J(e,n){var t;et&&!H(e)&&(n._observer=new IntersectionObserver(function(t){B(t,e,n)},{root:(t=e).container===document?null:t.container,rootMargin:t.thresholds||t.threshold+"px"}))}function K(t){return Array.prototype.slice.call(t)}function Q(t){return t.container.querySelectorAll(t.elements_selector)}function W(t){return c(t)===_t}function X(t,e){return e=t||Q(e),K(e).filter(u)}function Y(e,t){var n;(n=Q(e),K(n).filter(W)).forEach(function(t){v(t,e.class_error),r(t)}),t.update()}function t(t,e){var n,a,t=i(t);this._settings=t,this.loadingCount=0,J(t,this),n=t,a=this,Z&&window.addEventListener("online",function(){Y(n,a)}),this.update(e)}var Z="undefined"!=typeof window,tt=Z&&!("onscroll"in window)||"undefined"!=typeof navigator&&/(gle|ing|ro)bot|crawl|spider/i.test(navigator.userAgent),et=Z&&"IntersectionObserver"in window,nt=Z&&"classList"in document.createElement("p"),at=Z&&1<window.devicePixelRatio,it={elements_selector:".lazy",container:tt||Z?document:null,threshold:300,thresholds:null,data_src:"src",data_srcset:"srcset",data_sizes:"sizes",data_bg:"bg",data_bg_hidpi:"bg-hidpi",data_bg_multi:"bg-multi",data_bg_multi_hidpi:"bg-multi-hidpi",data_poster:"poster",class_applied:"applied",class_loading:"litespeed-loading",class_loaded:"litespeed-loaded",class_error:"error",class_entered:"entered",class_exited:"exited",unobserve_completed:!0,unobserve_entered:!1,cancel_on_exit:!0,callback_enter:null,callback_exit:null,callback_applied:null,callback_loading:null,callback_loaded:null,callback_error:null,callback_finish:null,callback_cancel:null,use_native:!1},ot="src",rt="srcset",ct="sizes",lt="poster",st="llOriginalAttrs",ut="loading",dt="loaded",ft="applied",_t="error",vt="native",gt="data-",bt="ll-status",pt=[ut,dt,ft,_t],ht=[ot],mt=[ot,lt],Et=[ot,rt,ct],It={IMG:function(t,e){m(t,function(t){A(t,Et),x(t,e)}),A(t,Et),x(t,e)},IFRAME:function(t,e){A(t,ht),w(t,ot,l(t,e.data_src))},VIDEO:function(t,e){a(t,function(t){A(t,ht),w(t,ot,l(t,e.data_src))}),A(t,mt),w(t,lt,l(t,e.data_poster)),w(t,ot,l(t,e.data_src)),t.load()}},yt=["IMG","IFRAME","VIDEO"],At={IMG:P,IFRAME:function(t){k(t,ht)},VIDEO:function(t){a(t,function(t){k(t,ht)}),k(t,mt),t.load()}},kt=["IMG","IFRAME","VIDEO"];return t.prototype={update:function(t){var e,n,a,i=this._settings,o=X(t,i);{if(h(this,o.length),!tt&&et)return H(i)?(e=i,n=this,o.forEach(function(t){-1!==kt.indexOf(t.tagName)&&F(t,e,n)}),void h(n,0)):(t=this._observer,i=o,t.disconnect(),a=t,void i.forEach(function(t){a.observe(t)}));this.loadAll(o)}},destroy:function(){this._observer&&this._observer.disconnect(),Q(this._settings).forEach(function(t){y(t)}),delete this._observer,delete this._settings,delete this.loadingCount,delete this.toLoadCount},loadAll:function(t){var e=this,n=this._settings;X(t,n).forEach(function(t){b(t,e),V(t,n,e)})},restoreAll:function(){var e=this._settings;Q(e).forEach(function(t){U(t,e)})}},t.load=function(t,e){e=i(e);V(t,e)},t.resetStatus=function(t){r(t)},Z&&function(t,e){if(e)if(e.length)for(var n,a=0;n=e[a];a+=1)o(t,n);else o(t,e)}(t,window.lazyLoadOptions),t});!function(e,t){"use strict";function a(){t.body.classList.add("litespeed_lazyloaded")}function n(){console.log("[LiteSpeed] Start Lazy Load Images"),d=new LazyLoad({elements_selector:"[data-lazyloaded]",callback_finish:a}),o=function(){d.update()},e.MutationObserver&&new MutationObserver(o).observe(t.documentElement,{childList:!0,subtree:!0,attributes:!0})}var d,o;e.addEventListener?e.addEventListener("load",n,!1):e.attachEvent("onload",n)}(window,document);</script><script data-no-optimize="1">var litespeed_vary=document.cookie.replace(/(?:(?:^|.*;\s*)_lscache_vary\s*\=\s*([^;]*).*$)|^.*$/,"");litespeed_vary||fetch("/v2/wp-content/plugins/litespeed-cache/guest.vary.php",{method:"POST",cache:"no-cache",redirect:"follow"}).then(e=>e.json()).then(e=>{console.log(e),e.hasOwnProperty("reload")&&"yes"==e.reload&&(sessionStorage.setItem("litespeed_docref",document.referrer),window.location.reload(!0))});</script></body>

</body>
</html>
