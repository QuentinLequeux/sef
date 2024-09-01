<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Site web de l'association Service d'Entraide Familiale de Huy">
    <meta name="author" content="Quentin Lequeux">
    <meta name="keywords" content="SEF, logement, sans-abri, association, aide, soutien, hébergement, réinsertion, solidarité, repas, lit, bénévole,
        don, humanitaire, prévention, service, social, services sociaux, caritatif, alimentaire, accompagnement, assistance, solidaire, asbl, Huy,
        insertion, famille, accueil">
    <script>
        (g => {
            let h, a, k, p = "The Google Maps JavaScript API", c = "google", l = "importLibrary", q = "__ib__",
                m = document, b = window;
            b = b[c] || (b[c] = {});
            let d = b.maps || (b.maps = {}), r = new Set, e = new URLSearchParams,
                u = () => h || (h = new Promise(async (f, n) => {
                    await (a = m.createElement("script"));
                    e.set("libraries", [...r] + "");
                    for (k in g) e.set(k.replace(/[A-Z]/g, t => "_" + t[0].toLowerCase()), g[k]);
                    e.set("callback", c + ".maps." + q);
                    a.src = `https://maps.${c}apis.com/maps/api/js?` + e;
                    d[q] = f;
                    a.onerror = () => h = n(Error(p + " could not load."));
                    a.nonce = m.querySelector("script[nonce]")?.nonce || "";
                    m.head.append(a)
                }));
            d[l] ? console.warn(p + " only loads once. Ignoring:", g) : d[l] = (f, ...n) => r.add(f) && u().then(() => d[l](f, ...n))
        })
        ({key: "AIzaSyAkqkHFhbOzbyex_ix6e6_8VpLmbqBJevs", v: "beta"});
    </script>
    <link rel="icon" type="image/svg" href="/wp-content/themes/sef/resources/img/favicon.svg">
    <link rel="apple-touch-icon" type="image/svg" href="/wp-content/themes/sef/resources/img/favicon.svg">
    <link rel="apple-touch-icon-precomposed" type="image/svg" href="/wp-content/themes/sef/resources/img/favicon.svg">
    <link rel="stylesheet" href="<?= dw_asset('css/style.css'); ?>">
    <link rel="stylesheet" href="https://use.typekit.net/uru3cvy.css">
    <title><?= wp_title(''); ?> - Service d'Entraide Familiale - Huy</title>
</head>
<body itemscope="" itemtype="https://schema.org/Organization">
<header>
    <h1 class="sro" itemprop="legalName">
        <?= wp_title(''); ?>
    </h1>
    <nav class="nav">
        <div class="nav__burger">
            <a class="nav__image" href="http://localhost:8888/accueil/" title="Vers la page d'accueil">
                <img src="/wp-content/themes/sef/resources/img/logo.svg" width="150" height="50" alt="Logo de l'association">
            </a>
        </div>
        <div class="nav__wrapper">
            <h2 class="sro" aria-level="2">
                Navigation principale
            </h2>
            <a class="nav__image" href="http://localhost:8888/accueil/" title="Vers la page d'accueil">
                <img src="/wp-content/themes/sef/resources/img/logo.svg" width="150" height="50" alt="Logo de l'association">
            </a>
            <?php wp_nav_menu(['theme_location' => 'main']); ?>
        </div>
        <div class="burger">
            <input type="checkbox" class="burger-shower" id="burger">
            <label class="hamburger" for="burger">
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
            </label>
            <ul class="burger-menu">
                <li class="burger-item"><a href="http://localhost:8888/accueil/" title="Vers la page d'accueil">Accueil</a></li>
                <li class="burger-item"><a href="http://localhost:8888/sef/" title="Vers la page sef">SEF</a></li>
                <li class="burger-item"><a href="http://localhost:8888/nous-soutenir/" title="Vers la page nous soutenir">Nous&nbsp;soutenir</a></li>
                <li class="burger-item"><a href="http://localhost:8888/boutiques/" title="Vers la page boutiques">Boutiques</a></li>
                <li class="burger-item"><a href="http://localhost:8888/actualites/" title="Vers la page actualités">Actualit&eacute;s</a></li>
                <li class="burger-item"><a href="http://localhost:8888/contact/" title="Vers la page contact">Contact</a></li>
            </ul>
            <div class="overlay"></div>
            <a class="social" title="Vers la page Facebook de l'asbl" href="https://www.facebook.com/sef.huy">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                     x="0px" y="0px" width="30px" height="30px"
                     viewBox="0 0 512 512"
                     xml:space="preserve">
                    <g>
                        <path d="M308.3,508.5c-2.5,0.1-4.1,0.3-5.7,0.3c-34.2,0-68.3-0.1-102.5,0.1c-4.8,0-6.1-1.3-6.1-6.1c0.1-79.6,0.1-159.3,0.1-238.9
		                               c0-2.1,0-4.2,0-6.9c-18.6,0-36.7,0-55.1,0c0-28.4,0-56.3,0-85c1.9,0,3.7,0,5.4,0c15,0,30-0.1,45,0.1c3.8,0,4.8-1.1,4.8-4.8
		                               c-0.2-22.3-0.2-44.7,0-67c0.1-15.6,2.6-30.8,9.8-44.9c10.3-19.9,26.6-32.8,47.2-40.8c16.8-6.6,34.5-9,52.3-9.3
		                               c29-0.4,58-0.2,87-0.3c2.7,0,4.9-0.1,4.9,3.7c-0.1,27.5-0.1,55-0.1,82.5c0,0.3-0.1,0.6-0.5,1.9c-1.7,0-3.6,0-5.5,0
		                               c-18,0-36-0.1-54,0c-10.4,0-18.8,4.2-24.1,13.3c-1.6,2.7-2.6,6.2-2.6,9.4c-0.3,17,0,34-0.2,51c0,4,1.2,5.1,5.1,5.1
		                               c25-0.2,50-0.1,75-0.1c2,0,3.9,0,7.3,0c-3.5,28.6-6.9,56.6-10.4,84.9c-26,0-51.3,0-77.1,0C308.3,340.8,308.3,424.4,308.3,508.5z"/>
                    </g>
                </svg>
            </a>
        </div>
    </nav>
</header>