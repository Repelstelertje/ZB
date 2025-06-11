<?php
  $companyName = "Zoekertjes België";
  include('includes/nav_items.php');

  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="nl-BE">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Gratis dating - Ben jij op zoek naar een partner of een leuke gratis date? Hier vind je meer dan 10.000 vrijgezellen. Aanmelding is 100% gratis.">
    <meta name="author" content="Zoekertjes Belgie">
    <meta http-equiv="Content-Security-Policy" content="
    default-src *; 
    font-src 'self' https://fonts.gstatic.com;
    img-src 'self' https://16hl07csd16.nl/ https://region1.google-analytics.com www.googletagmanager.com https://ssl.gstatic.com https://www.gstatic.com https://www.google-analytics.com https://20fhbe2020.be/;
    style-src 'self' https://tagmanager.google.com https://fonts.googleapis.com/ 'unsafe-inline'; 
    style-src-elem 'self' https://tagmanager.google.com https://fonts.googleapis.com/ 'unsafe-inline'; 
    connect-src 'self' https://region1.google-analytics.com https://tagmanager.google.com/ https://www.google-analytics.com https://16hl07csd16.nl/ https://20fhbe2020.be/;
    script-src 'self' http://* https://www.googletagmanager.com https://www.google-analytics.com https://ssl.google-analytics.com https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/ https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/ 'nonce-googletagmanager' 'nonce-2726c7f26c' 'sha256-WwSlXI54tpz3oRisOne8KKEqXFjbTYCI2AzKef7+7nE=' 'unsafe-inline' 'unsafe-eval'
    ">
    <link rel="apple-touch-icon" sizes="57x57" href="img/fav/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/fav/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/fav/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/fav/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/fav/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/fav/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/fav/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/fav/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/fav/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/fav/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/fav/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/fav/favicon-16x16.png">
    <link rel="manifest" href="img/fav/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/fav/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <?php
        // Canonical URL logic
        $baseUrl = "https://zoekertjesbelgie.be";
        $canonicalUrl = $baseUrl; // Default canonical URL
        $title = "Zoekertjes België"; // Default title

        if (isset($_GET['item'])) {
            $canonicalUrl = $baseUrl . "/dating-" . htmlspecialchars($_GET['item']);
            $title = "Dating " . htmlspecialchars($_GET['item']);
        } else if (isset($_GET['id'])) {
            $canonicalUrl = $baseUrl . "/profile?id=" . htmlspecialchars($_GET['id']);
            $title = "Daten met " . htmlspecialchars($_GET['id']);
        } else if (isset($_GET['tip'])) {
            $canonicalUrl = $baseUrl . "/datingtips-" . htmlspecialchars($_GET['tip']);
            $title = "Datingtips " . htmlspecialchars($_GET['tip']);
        }

        echo '<link rel="canonical" href="' . $canonicalUrl . '" >';
        echo '<title>' . $title . '</title>';
    ?>

    <?php
        // standaardwaarden
        $default_title = "Zoekertjes België - Vind en Plaats zoekertjes in België";
        $default_description = "Zoek en plaats eenvoudig oproepjes in heel België. Van dating tot vriendschap, ontdek de beste oproepjes op Zoekertjes België.";
        $default_image = "https://zoekertjesbelgie.be/img/bg.jpg";
        $default_url = "https://zoekertjesbelgie.be";

        // Dynamisch genereren van inhoud gebaseerd op de pagina-URL
        $current_url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        // specifieke pagina's
        if (strpos($current_url, 'dating-antwerpen') !== false) {
            $og_title = "Dating in Antwerpen - Vind je Match op Zoekertjes België";
            $og_description = "Op zoek naar een date in Antwerpen? Plaats je oproepje of reageer op anderen via Zoekertjes België.";
            $og_image = "https://zoekertjesbelgie.be/img/belgie/antwerpen.jpg";
            $og_url = $current_url;
        } elseif (strpos($current_url, 'dating-brussel') !== false) {
            $og_title = "Dating in Brussel - Ontmoet Singles via Zoekertjes België";
            $og_description = "Vind singles in Brussel en plaats je datingoproep eenvoudig via Zoekertjes België.";
            $og_image = "https://zoekertjesbelgie.be/img/belgie/brussel.jpg";
            $og_url = $current_url;
        } elseif (strpos($current_url, 'dating-henegouwen') !== false) {
            $og_title = "Dating in Henegouwen - Vind Je Date op Zoekertjes België";
            $og_description = "Zoek of plaats een datingoproep in Henegouwen. Ontmoet nieuwe mensen via Zoekertjes België.";
            $og_image = "https://zoekertjesbelgie.be/img/belgie/henegouwen.jpg";
            $og_url = $current_url;
        } elseif (strpos($current_url, 'dating-limburg') !== false) {
            $og_title = "Dating in Limburg - Ontmoet Singles via Zoekertjes België";
            $og_description = "Plaats of bekijk datingoproepjes in Limburg op Zoekertjes België en ontmoet nieuwe mensen.";
            $og_image = "https://zoekertjesbelgie.be/img/belgie/limburg.jpg";
            $og_url = $current_url;
        } elseif (strpos($current_url, 'dating-luik') !== false) {
            $og_title = "Dating in Luik - Vind je Match op Zoekertjes België";
            $og_description = "Ontmoet singles in Luik en plaats je oproepje eenvoudig op Zoekertjes België.";
            $og_image = "https://zoekertjesbelgie.be/img/belgie/luik.jpg";
            $og_url = $current_url;
        } elseif (strpos($current_url, 'dating-luxemburg') !== false) {
            $og_title = "Dating in Luxemburg - Vind Singles via Zoekertjes België";
            $og_description = "Zoek of plaats een datingoproep in Luxemburg via Zoekertjes België en ontmoet nieuwe mensen.";
            $og_image = "https://zoekertjesbelgie.be/img/belgie/luxemburg.jpg";
            $og_url = $current_url;
        } elseif (strpos($current_url, 'dating-namen') !== false) {
            $og_title = "Dating in Namen - Ontmoet Singles via Zoekertjes België";
            $og_description = "Vind of plaats een datingoproep in Namen op Zoekertjes België en vergroot je kansen op een geslaagde date.";
            $og_image = "https://zoekertjesbelgie.be/img/belgie/namen.jpg";
            $og_url = $current_url;
        } elseif (strpos($current_url, 'dating-oost-vlaanderen') !== false) {
            $og_title = "Dating in Oost-Vlaanderen - Vind je Date op Zoekertjes België";
            $og_description = "Ontmoet singles in Oost-Vlaanderen en plaats eenvoudig je oproepje via Zoekertjes België.";
            $og_image = "https://zoekertjesbelgie.be/img/belgie/oostvlaanderen.jpg";
            $og_url = $current_url;
        } elseif (strpos($current_url, 'dating-vlaams-brabant') !== false) {
            $og_title = "Dating in Vlaams-Brabant - Vind Singles via Zoekertjes België";
            $og_description = "Zoek of plaats een datingoproep in Vlaams-Brabant op Zoekertjes België en ontmoet nieuwe mensen.";
            $og_image = "https://zoekertjesbelgie.be/img/belgie/vlaamsbrabant.jpg";
            $og_url = $current_url;
        } elseif (strpos($current_url, 'dating-waals-brabant') !== false) {
            $og_title = "Dating in Waals-Brabant - Vind je Match op Zoekertjes België";
            $og_description = "Ontmoet singles in Waals-Brabant en plaats je datingoproep via Zoekertjes België.";
            $og_image = "https://zoekertjesbelgie.be/img//belgie/waalsbrabant.jpg";
            $og_url = $current_url;                                    
        } elseif (strpos($current_url, 'dating-west-vlaanderen') !== false) {
            $og_title = "Dating in West-Vlaanderen - Ontmoet Nieuwe Mensen via Zoekertjes België";
            $og_description = "Plaats of bekijk datingoproepjes in West-Vlaanderen via Zoekertjes België en vind je date.";
            $og_image = "https://zoekertjesbelgie.be/img/belgie/westvlaanderen.jpg";
            $og_url = $current_url;    
        } elseif (strpos($current_url, 'datingtips-stout-contact') !== false) {
            $og_title = "Datingtips Stout Contact";
            $og_description = "Ontdek de Opwinding van Stout Contact: Alles Wat Je Moet Weten Over Sensueel Verbinden";
            $og_image = "https://zoekertjesbelgie.be/img/datingtips/stoutcontact.jpg";
            $og_url = $current_url;    
        } elseif (strpos($current_url, 'datingtips-gratis-dating') !== false) {
            $og_title = "Datingtips Gratis Dating";
            $og_description = "De Ultieme Gids voor Gratis Dating: Vind de Liefde zonder de Portemonnee te Trekken";
            $og_image = "https://zoekertjesbelgie.be/img/datingtips/datingtips1.jpg";
            $og_url = $current_url;    
        } elseif (strpos($current_url, 'datingtips-gegarandeerd-een-date') !== false) {
            $og_title = "Datingtips Gegarandeed een date";
            $og_description = "Datingtips - In 3 stappen gegarandeerd een date!";
            $og_image = "https://zoekertjesbelgie.be/img/datingtips/datingtips2.jpg";
            $og_url = $current_url;    
        } else {
            // Standaardwaarden als de pagina geen specifieke inhoud heeft
            $og_title = $default_title;
            $og_description = $default_description;
            $og_image = $default_image;
            $og_url = $default_url;
        }
    ?>

    <!-- Voeg dynamische Open Graph-tags toe in de HTML -->
    <meta property="og:title" content="<?php echo $og_title; ?>">
    <meta property="og:description" content="<?php echo $og_description; ?>">
    <meta property="og:url" content="<?php echo $og_url; ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo $og_image; ?>">

    <!-- Twitter Cards voor betere integratie met Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $og_title; ?>">
    <meta name="twitter:description" content="<?php echo $og_description; ?>">
    <meta name="twitter:image" content="<?php echo $og_image; ?>">
    <meta name="twitter:url" content="<?php echo $og_url; ?>">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZGF9E4WFZD" nonce="2726c7f26c" SameSite=None; Secure></script>
    <script nonce="2726c7f26c" SameSite=None; Secure>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-ZGF9E4WFZD');
    </script>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body id="top">
    <div id="oproepjes">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="https://zoekertjesbelgie.be/">Zoekertjes België</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu</button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <?php include('includes/nav.php'); ?>
            </div>
        </div>
        </nav>




