<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Style Sheets -->
        <link rel="stylesheet" href="/assets/css/fonts.css">
        <link rel="stylesheet" href="/assets/css/color-palettes.css">
        <link rel="stylesheet" href="/assets/css/global.css">

        <!-- style sheets exclusive to this file -->
        <link rel="stylesheet" href="/assets/css/index/home.css">

        <title>Piropo Negócios Imobiliários</title>
    </head>
    <body>
        <main>
            <section id="home" aria-labelledby="headline">
                <picture class="wallpaper-area" aria-hidden="true">
                    <!-- ultrawide -->
                    <source media="(min-width: 2560px) and (min-aspect-ratio: 21/9)" srcset="/assets/images/wallpaper/hero/wallpaper_hero-ultrawide.avif" type="image/avif">
                    <source media="(min-width: 2560px) and (min-aspect-ratio: 21/9)" srcset="/assets/images/wallpaper/hero/wallpaper_hero-ultrawide.webp" type="image/webp">

                    <!-- widescreen -->
                    <source media="(min-width: 1920px) and (min-aspect-ratio: 16/9)" srcset="/assets/images/wallpaper/hero/wallpaper_hero-widescreen.avif" type="image/avif">
                    <source media="(min-width: 1920px) and (min-aspect-ratio: 16/9)" srcset="/assets/images/wallpaper/hero/wallpaper_hero-widescreen.webp" type="image/webp">

                    <!-- desktop -->
                    <source media="(min-width: 1200px)" srcset="/assets/images/wallpaper/hero/wallpaper_hero-desktop.avif" type="image/avif">
                    <source media="(min-width: 1200px)" srcset="/assets/images/wallpaper/hero/wallpaper_hero-desktop.webp" type="image/webp">

                    <!-- tablet -->
                    <source media="(min-width: 768px)" srcset="/assets/images/wallpaper/hero/wallpaper_hero-tablet.avif" type="image/avif">
                    <source media="(min-width: 768px)" srcset="/assets/images/wallpaper/hero/wallpaper_hero-tablet.webp" type="image/webp">

                    <!-- smartphone -->
                    <source srcset="/assets/images/wallpaper/hero/wallpaper_hero-smartphone.avif" type="image/avif">
                    <source srcset="/assets/images/wallpaper/hero/wallpaper_hero-smartphone.webp" type="image/webp">

                    <!-- fallback -->
                    <img class="wallpaper" src="/assets/images/wallpaper/hero/wallpaper_hero-desktop.jpg" alt="" fetchpriority="high" decoding="async">
                </picture>

                <div class="overlay" aria-hidden="true"></div>

                <div class="hero-content">
                    <h1 id="headline">Seu terreno para chácara está aqui!</h1>
                    <p class="subheadline">Lotes em condomínios fechados no interior de São Paulo.</p>
                    <p class="locations">
                        <img class="location-icon" src="/assets/images/icons/location-pin.svg" alt="" aria-hidden="true">
                        <span class="list-of-cities">
                            <span class="city">Araçoiaba da Serra</span>
                            <span aria-hidden="true">●</span>
                            <span class="city">Mairinque</span>
                            <span aria-hidden="true">●</span>
                            <span class="city">Alumínio</span>
                        </span>
                    </p>
                    <div class="actions">
                        <a class="button hero-button" href="#residenciais">
                            <span>Conheça os residenciais</span>
                            <span class="button-icon-wrap" aria-hidden="true">
                                <img class="button-icon" src="/assets/images/icons/arrow-up.svg" alt="" aria-hidden="true">
                            </span>
                        </a>
                    </div>
                </div>

                <div class="hero-scroll-cue" aria-hidden="true">
                    <img class="hero-scroll-icon hero-scroll-mouse" src="/assets/images/icons/scroll-mouse.svg" alt="">
                    <img class="hero-scroll-icon hero-scroll-chevron" src="/assets/images/icons/chevron-down.svg" alt="">
                </div>
            </section>
        </main>
    </body>
</html>