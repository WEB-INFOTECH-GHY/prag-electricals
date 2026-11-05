<!doctype html>
<html lang="en">

<head>
    <!-- Required Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
<?php
// Default SEO values (Homepage)
$defaultTitle = "Prag Electricals Pvt. Ltd. | Transformer Manufacturer in Assam";
$defaultDescription = "Prag Electricals Pvt. Ltd., established in 1977, is a Guwahati-based transformer manufacturer specializing in distribution and power transformers up to 5.0 MVA, transformer repair, testing, maintenance, pressed steel radiators and electrical projects across Northeast India.";
$defaultKeywords = "Prag Electricals, transformer manufacturer Assam, transformer manufacturer Guwahati, power transformer, distribution transformer, transformer up to 5 MVA, transformer repair Assam, transformer testing, transformer maintenance, pressed steel radiators, electrical projects Assam, electrical contractor Guwahati, transformer company Northeast India";

$pageTitle = $pageTitle ?? $defaultTitle;
$pageDescription = $pageDescription ?? $defaultDescription;
$pageKeywords = $pageKeywords ?? $defaultKeywords;
$pageAuthor = $pageAuthor ?? "Prag Electricals Pvt. Ltd.";

// Dynamic canonical URL
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
$domain = $_SERVER['HTTP_HOST'] ?? 'pragelectricals.com';
$currentPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);

// Homepage canonical normalization
if ($currentPath === '/index.php' || $currentPath === '') {
    $currentPath = '/';
}

$canonicalUrl = $protocol . $domain . $currentPath;
?>

<title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
<meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">
<meta name="keywords" content="<?= htmlspecialchars($pageKeywords, ENT_QUOTES, 'UTF-8') ?>">
<meta name="author" content="<?= htmlspecialchars($pageAuthor, ENT_QUOTES, 'UTF-8') ?>">
<meta name="robots" content="index, follow">
<meta name="googlebot" content="index, follow">
<link rel="canonical" href="<?= htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8') ?>">


    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title"
        content="Prag Electricals Pvt. Ltd. | Transformer Manufacturer in Assam">
    <meta property="og:description"
        content="Transformer manufacturing, repair, testing, maintenance, pressed steel radiators and electrical projects. Serving Northeast India since 1977.">
    <meta property="og:url" content="https://pragelectricals.com/">
    <meta property="og:site_name" content="Prag Electricals Pvt. Ltd.">
    <meta property="og:image" content="https://pragelectricals.com/web/logo1.png">

    <!-- Twitter / X -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title"
        content="Prag Electricals Pvt. Ltd. | Transformer Manufacturer in Assam">
    <meta name="twitter:description"
        content="Distribution and power transformers up to 5.0 MVA, transformer repair, testing, maintenance, pressed steel radiators and electrical projects.">
    <meta name="twitter:image" content="https://pragelectricals.com/web/logo1.png">

    <!-- Theme Color -->
    <meta name="theme-color" content="#d71920">

    <!-- Favicon -->
    <link rel="icon" href="web/logo1.png" type="image/png">

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- jQuery UI CSS -->
    <!-- <link href="assets/css/jquery-ui.css" rel="stylesheet"> -->

    <!-- Bootstrap Icons CSS -->
    <link href="assets/css/bootstrap-icons.css" rel="stylesheet">

    <!-- Animation CSS -->
    <link href="assets/css/animate.min.css" rel="stylesheet">

    <!-- FancyBox CSS -->
    <link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">

    <!-- Swiper Slider CSS -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <!-- Slick Slider CSS -->
    <!-- <link rel="stylesheet" href="assets/css/slick.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/slick-theme.css"> -->

    <!-- BoxIcons CSS -->
    <!-- <link href="assets/css/boxicons.min.css" rel="stylesheet"> -->

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">


</head>

<body class="tt-magic-cursor industry-home">

    <div id="magic-cursor">
        <div id="ball"></div>
    </div>

    <!-- Back To Top -->
    <div class="progress-wrap">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
		</svg>
        <svg class="arrow" width="22" height="25" viewBox="0 0 24 23" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M0.556131 11.4439L11.8139 0.186067L13.9214 2.29352L13.9422 20.6852L9.70638 20.7061L9.76793 8.22168L3.6064 14.4941L0.556131 11.4439Z"/>
            <path d="M23.1276 11.4999L16.0288 4.40105L15.9991 10.4203L20.1031 14.5243L23.1276 11.4999Z"/>
        </svg>
	</div>

    <!-- Sidebar Menu -->
<div class="right-sidebar-menu two">
    <div class="right-sidebar-menu-wrap">

        <div class="sidebar-logo-area d-flex justify-content-between align-items-center">
            <div class="sidebar-logo-wrap">
                <a href="index.php">
                    <img alt="Prag Electricals Pvt. Ltd." src="web/logo1.png">
                </a>
            </div>

            <div class="right-sidebar-close-btn">
                <i class="bi bi-x"></i>
            </div>
        </div>

        <div class="sidebar-content-wrap">

            <div class="title-area">
                <span>Get In Touch With Us</span>
                <h2>Connect with Prag Electricals</h2>
                <p>Trusted transformer manufacturing and electrical solutions since 1977, serving Assam and the Northeast with quality, reliability and engineering expertise.</p>
            </div>

            <ul class="contact-area">

                <li>
                    <div class="single-contact">
                        <div class="icon">
                            <i class="bi bi-telephone"></i>
                        </div>

                        <div class="content">
                            <span>CALL ANY TIME</span>
                            <h6>
                                <a href="tel:+919435190931">+91 94351 90931</a>
                            </h6>
                        </div>
                    </div>

                    <svg class="arrow" width="8" height="29" viewBox="0 0 8 29" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.33333 3C1.33333 4.47276 2.52724 5.66667 4 5.66667C5.47276 5.66667 6.66667 4.47276 6.66667 3C6.66667 1.52724 5.47276 0.333333 4 0.333333C2.52724 0.333333 1.33333 1.52724 1.33333 3ZM3.64645 28.3536C3.84171 28.5488 4.15829 28.5488 4.35355 28.3536L7.53553 25.1716C7.7308 24.9763 7.7308 24.6597 7.53553 24.4645C7.34027 24.2692 7.02369 24.2692 6.82843 24.4645L4 27.2929L1.17157 24.4645C0.976311 24.2692 0.659728 24.2692 0.464466 24.4645C0.269204 24.6597 0.269204 24.9763 0.464466 25.1716L3.64645 28.3536ZM3.5 3V28H4.5V3H3.5Z"/>
                    </svg>
                </li>

                <li>
                    <div class="single-contact">
                        <div class="icon">
                            <i class="bi bi-geo-alt"></i>
                        </div>

                        <div class="content">
                            <span>HEAD OFFICE</span>
                            <h6>
                                <a href="#">Guwahati, Assam, India</a>
                            </h6>
                        </div>
                    </div>

                    <svg class="arrow" width="8" height="29" viewBox="0 0 8 29" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.33333 3C1.33333 4.47276 2.52724 5.66667 4 5.66667C5.47276 5.66667 6.66667 4.47276 6.66667 3C6.66667 1.52724 5.47276 0.333333 4 0.333333C2.52724 0.333333 1.33333 1.52724 1.33333 3ZM3.64645 28.3536C3.84171 28.5488 4.15829 28.5488 4.35355 28.3536L7.53553 25.1716C7.7308 24.9763 7.7308 24.6597 7.53553 24.4645C7.34027 24.2692 7.02369 24.2692 6.82843 24.4645L4 27.2929L1.17157 24.4645C0.976311 24.2692 0.659728 24.2692 0.464466 24.2692C0.269204 24.6597 0.269204 24.9763 0.464466 25.1716L3.64645 28.3536ZM3.5 3V28H4.5V3H3.5Z"/>
                    </svg>
                </li>

                <li>
                    <div class="single-contact social">
                        <div class="icon">
                            <i class="bi bi-share"></i>
                        </div>

                        <div class="content">
                            <span>FOLLOW US</span>
                            <h6>
                                <a href="#">LinkedIn</a>,
                                <a href="#">Facebook</a>,
                                <a href="#">Instagram</a>
                            </h6>
                        </div>
                    </div>

                    <svg class="arrow" width="8" height="29" viewBox="0 0 8 29" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.33333 3C1.33333 4.47276 2.52724 5.66667 4 5.66667C5.47276 5.66667 6.66667 4.47276 6.66667 3C6.66667 1.52724 5.47276 0.333333 4 0.333333C2.52724 0.333333 1.33333 1.52724 1.33333 3ZM3.64645 28.3536C3.84171 28.5488 4.15829 28.5488 4.35355 28.3536C4.5488 28.1583 4.5488 27.8417 4.35355 27.6464L1.17157 24.4645C0.976311 24.2692 0.659728 24.2692 0.464466 24.4645C0.269204 24.6597 0.269204 24.9763 0.464466 25.1716L3.64645 28.3536ZM3.5 3V28H4.5V3H3.5Z"/>
                    </svg>
                </li>

                <li>
                    <div class="single-contact">
                        <div class="icon">
                            <i class="bi bi-envelope"></i>
                        </div>

                        <div class="content">
                            <span>SAY HELLO</span>
                            <h6>
                                <a href="mailto:pragelectricals@gmail.com">pragelectricals@gmail.com</a>
                            </h6>
                        </div>
                    </div>
                </li>

            </ul>

            <ul class="address-area">

                <li class="single-address">
                    <span>HEAD OFFICE</span>
                    <a href="#">Guwahati, Assam, India</a>
                </li>

                <li class="single-address">
                    <span>ESTABLISHED</span>
                    <a href="#">1977</a>
                </li>

                <li class="single-address">
                    <span>GSTIN</span>
                    <a href="#">18AABCP2793H1Z7</a>
                </li>

            </ul>

            <a href="contact.php" class="all-location-btn">Contact Us</a>

        </div>

        <div class="sidebar-bottom-area">
            <p>
                © <?php echo date('Y'); ?>
                <a href="index.php">Prag Electricals Pvt. Ltd.</a>
            </p>
        </div>

    </div>
</div>

    <!-- header Section Start-->
<header class="header-area style-2">

    <div class="container-fluid d-flex flex-nowrap align-items-center justify-content-between">

        <!-- Logo -->
        <div class="company-logo">

            <a href="index.php" class="logo-black">
                <img
                    src="web/logo1.png"
                    alt="Prag Electricals Pvt. Ltd."
                    class="img-fluid"
                >
            </a>

            <a href="index.php" class="logo-white">
                <img
                    src="web/logo1.png"
                    alt="Prag Electricals Pvt. Ltd."
                    class="img-fluid"
                >
            </a>

        </div>


        <!-- Navigation -->
        <div class="menu-wrap">

            <div class="main-menu">

                <!-- Mobile Logo -->
                <div class="mobile-logo-area d-lg-none d-flex align-items-center justify-content-between">

                    <a href="index.php" class="mobile-logo-wrap">
                        <img
                            src="web/logo1.png"
                            alt="Prag Electricals Pvt. Ltd."
                            class="img-fluid"
                        >
                    </a>

                    <div class="menu-close-btn">
                        <i class="bi bi-x"></i>
                    </div>

                </div>


                <ul class="menu-list">
                    <!-- About -->
                    <li>
                        <a href="index.php">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="about.php">
                            About Us
                        </a>
                    </li>
                    <!-- About -->
                    <!-- <li class="menu-item-has-children">

                        <a href="#" class="drop-down">
                           About Us

                            <svg width="10" height="10" viewBox="0 0 10 10"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 0.0495054L10 10.0001L8.13725 10.0001L-8.22301e-08 1.8812L1.86275 -3.55691e-07L7.35294 5.5446L7.30392 0.0495053L10 0.0495054Z"/>
                                <path d="M-9.6438e-05 10.0002L6.27441 10.0002L3.62736 7.32687L-9.63211e-05 7.32687L-9.6438e-05 10.0002Z"/>
                            </svg>
                        </a>

                        <i class="bi bi-plus dropdown-icon"></i>

                        <ul class="sub-menu">

                            <li>
                                <a href="about.php">
                                    <span>About Us</span>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <span>Karbi Langpi Hydro Electric Project</span>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <span>220 kV Switchyard Works</span>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <span>33/11 kV Substation Projects</span>
                                </a>
                            </li>

                        </ul>

                    </li> -->


                    <!-- Prag Energy Systems -->
                    <!-- <li>
                        <a href="prag-energy-systems.php">
                            Energy Optimization
                        </a>
                    </li> -->



                     <!-- Services -->
                    <li class="menu-item-has-children">

                        <a href="all-solution.php" class="drop-down">
                            Solution & Service

                            <svg width="10" height="10" viewBox="0 0 10 10"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 0.0495054L10 10.0001L8.13725 10.0001L-8.22301e-08 1.8812L1.86275 -3.55691e-07L7.35294 5.5446L7.30392 0.0495053L10 0.0495054Z"/>
                                <path d="M-9.6438e-05 10.0002L6.27441 10.0002L3.62736 7.32687L-9.63211e-05 7.32687L-9.6438e-05 10.0002Z"/>
                            </svg>
                        </a>

                        <i class="bi bi-plus dropdown-icon"></i>

                        <ul class="sub-menu">

                            <li>
                                <a href="all-solution.php">
                                    <span>All Services</span>
                                </a>
                            </li>

                            <li>
                                <a href="transformers.php">
                                    <span>Transformer Repair & Maintenance</span>
                                </a>
                            </li>

                            <li>
                                <a href="pressed-steel-radiator.php">
                                    <span>Pressed Steal Radiator</span>
                                </a>
                            </li>

                            <!-- <li>
                                <a href="prag-energy-systems.php">
                                    <span>Electrical Project Works</span>
                                </a>
                            </li> -->

                        </ul>

                    </li>

                    <li>
                        <a href="blog.php">
                            Insight
                        </a>
                    </li>
                    <li>
                        <a href="certification.php">
                            Certification 
                        </a>
                    </li>


                    

                </ul>


                <!-- Mobile CTA -->
                <a class="primary-btn3 d-lg-none d-flex" href="contact.php">

                    <span>Contact Us</span>

                    <span>Contact Us</span>

                    <svg class="arrow"
                        width="23"
                        height="23"
                        viewBox="0 0 23 23"
                        xmlns="http://www.w3.org/2000/svg">

                        <g>
                            <path d="M0.113861 0H22.9999V4.28425L4.32671 22.9997L0 18.7154L12.7524 6.08815L0.113861 6.20089V0Z"/>
                            <path d="M23 22.9996V8.56848L16.8516 14.6566V22.9996H23Z"/>
                        </g>

                    </svg>

                </a>

            </div>

        </div>


        <!-- Right Navigation -->
        <div class="nav-right">

            <!-- Desktop CTA -->
            <a class="primary-btn3 d-lg-flex d-none" href="contact.php">

                <span>Contact Us</span>

                <span>Contact Us</span>

                <svg class="arrow"
                    width="23"
                    height="23"
                    viewBox="0 0 23 23"
                    xmlns="http://www.w3.org/2000/svg">

                    <g>
                        <path d="M0.113861 0H22.9999V4.28425L4.32671 22.9997L0 18.7154L12.7524 6.08815L0.113861 6.20089V0Z"/>
                        <path d="M23 22.9996V8.56848L16.8516 14.6566V22.9996H23"/>
                    </g>

                </svg>

            </a>



            <!-- Mobile Menu -->
            <div class="sidebar-button mobile-menu-btn">

                <svg width="18"
                    height="18"
                    viewBox="0 0 18 18"
                    xmlns="http://www.w3.org/2000/svg">

                    <path d="M1.29608 0.0658336C0.609639 0.31147 0.139209 0.899069 0.0432028 1.63598C-0.0144009 2.09353 -0.0144009 5.4939 0.0432028 5.95146C0.129608 6.59686 0.489632 7.11703 1.07047 7.42046L1.36329 7.57458H3.83545H6.30761L6.59563 7.42046C6.96525 7.2278 7.25807 6.93401 7.45008 6.56314L7.60369 6.27416V3.79372V1.31328L7.45008 1.02429C7.25807 0.653433 6.96525 0.359633 6.59563 0.166978L6.30761 0.0128531L3.90745 0.00322056C1.83372 -0.00641251 1.4785 0.00322056 1.29608 0.0658336ZM6.2356 0.802741C6.52842 0.956866 6.65803 1.08209 6.79244 1.34699L6.90765 1.57336V3.80817V6.03816L6.74924 6.29824C6.53322 6.66429 6.2068 6.85694 5.74117 6.90029C5.54916 6.91956 4.55549 6.92437 3.52343 6.91474L1.65131 6.90029C1.41129 6.77025 1.12807 6.62094 0.854455 6.20191L0.739248 5.98518V3.79372V1.60226L0.854455 1.38552C1.05607 0.995397 1.33929 0.778659 1.74731 0.706413C1.85292 0.687148 2.85618 0.677515 3.97946 0.677515L6.01959 0.687148L6.2356 0.802741Z"/>

                    <path d="M11.6647 0.0658336C10.9783 0.31147 10.5079 0.899069 10.4119 1.63598C10.3879 1.82863 10.3687 2.80154 10.3687 3.79372C10.3687 4.7859 10.3879 5.75881 10.4119 5.95146C10.4983 6.59686 10.8583 7.11703 11.4391 7.42046L11.7319 7.57458H14.2041H16.6763L16.9643 7.42046C17.3339 7.2278 17.6267 6.93401 17.8187 6.56314L17.9723 6.27416V3.79372V1.31328L17.8187 1.02429C17.6267 0.653433 17.3339 0.359633 16.9643 0.166978L16.6763 0.0128531L14.2761 0.00322056C12.2024 -0.00641251 11.8471 0.00322056 11.6647 0.0658336ZM16.6043 0.802741C16.9019 0.956866 17.0267 1.08209 17.1611 1.35181L17.2811 1.583L17.2763 3.79854C17.2763 5.73472 17.2667 6.03816 17.1995 6.1682C17.0555 6.45237 16.9067 6.61131 16.6475 6.7558L16.3882 6.90029H14.2041H12.02L11.7799 6.77025C11.4967 6.62094 11.3767 6.49571 11.2231 6.20191L11.1079 5.98518V3.79372V1.60226L11.2231 1.38552C11.4247 0.995397 11.7079 0.778659 12.116 0.706413C12.2216 0.687148 13.2248 0.677515 14.3481 0.677515L16.3882 0.687148L16.6043 0.802741Z"/>

                    <path d="M1.29608 10.4693C0.609639 10.7149 0.139209 11.3025 0.0432028 12.0394C-0.0144009 12.497 -0.0144009 15.8973 0.0432028 16.3549C0.129608 17.0003 0.489632 17.5205 1.07047 17.8239L1.36329 17.978H3.83545H6.30761L6.59563 17.8239C6.96525 17.6312 7.25807 17.3374 7.45008 16.9666L7.60369 16.6776V14.1972V11.7167L7.45008 11.4277C7.25807 11.0569 6.96525 10.7631 6.59563 10.5704L6.30761 10.4163L3.90745 10.4067C1.83372 10.397 1.4785 10.4067 1.29608 10.4693ZM6.2356 11.2062C6.52842 11.3603 6.65803 11.4855 6.79244 11.7504L6.90765 11.9768V14.2116V16.4416L6.74924 16.7017C6.53322 17.0677 6.2068 17.2604 5.74117 17.3037C5.54916 17.323 4.55549 17.3278 3.52343 17.3182L1.65131 17.3037L1.41129 17.1737C1.12807 17.0244 1.00807 16.8992 0.854455 16.6054L0.739248 16.3886V14.1972V12.0057L0.854455 11.789C1.05607 11.3988 1.33929 11.1821 1.74731 11.1099C1.85292 11.0906 2.85618 11.081 3.97946 11.081L6.01959 11.0906L6.2356 11.2062Z"/>

                    <path d="M13.2441 10.4934C11.8856 10.8498 10.8583 11.8853 10.5079 13.2531C10.3735 13.7781 10.3735 14.6162 10.5079 15.1412C10.8343 16.4127 11.732 17.3808 12.9945 17.8239C13.3593 17.9491 13.4937 17.9732 14.0601 17.9925C14.617 18.0117 14.7754 17.9973 15.1162 17.9106C16.5179 17.5542 17.5452 16.5283 17.9052 15.1219C18.0348 14.6162 18.03 13.7685 17.9004 13.2531C17.55 11.8757 16.5179 10.8401 15.145 10.4885C14.6314 10.3585 13.7529 10.3585 13.2441 10.4934ZM15.2314 11.2784C15.7066 11.4518 16.0475 11.6782 16.4363 12.0828C17.0075 12.6848 17.2763 13.3639 17.2763 14.2068C17.2763 15.0882 17.0075 15.7288 16.3691 16.3645C15.721 17.0099 15.0826 17.2796 14.2186 17.2845C13.7001 17.2845 13.3113 17.193 12.8121 16.957C12.5336 16.8221 12.3608 16.692 12.0392 16.3694C11.396 15.724 11.132 15.0882 11.132 14.1972C11.132 13.3495 11.396 12.6896 11.972 12.0828C12.3608 11.6782 12.7017 11.4518 13.1817 11.2736C13.7913 11.0521 14.6218 11.0521 15.2314 11.2784Z"/>

                </svg>

            </div>

        </div>

    </div>

</header>
    <!-- header Section End-->