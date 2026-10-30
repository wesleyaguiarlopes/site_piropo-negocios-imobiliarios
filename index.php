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
        <link rel="stylesheet" href="/assets/css/header.css">
        <link rel="stylesheet" href="/assets/css/index/home.css">
        <link rel="stylesheet" href="/assets/css/index/residences.css">

        <script src="/assets/js/header.js" defer></script>

        <title>Piropo Negócios Imobiliários</title>
    </head>
    <body>
        <header id="header">
            <?php require __DIR__ . '/assets/php/header.php'; ?>
        </header>
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

            <section class="residences" id="residenciais" aria-labelledby="title">
                <div class="content">
                    <p class="eyebrow">Piropo Negócios Imobiliários</p>
                    <h2 id="title">Conheça nossos residenciais</h2>
                    <p>Um espaço reservado para apresentar os empreendimentos Piropo.</p>
                </div>

                <?php
                    $residenciaisPorStatus = require __DIR__ . '/assets/php/residences.php';
                    $residenciaisDisponiveis = $residenciaisPorStatus['available'];
                    $residenciaisVendidos = $residenciaisPorStatus['sold'];
                ?>
                <div class="galleries">
                    <section class="group" aria-labelledby="available-residences-title">
                        <div class="group-heading">
                            <h3 id="available-residences-title">Lotes disponíveis para compra</h3>
                        </div>
                        <ul class="gallery" aria-label="Residenciais com lotes disponíveis para compra">
                            <?php foreach ($residenciaisDisponiveis as $residencial): ?>
                                <li class="card">
                                    <a class="card-link" href="#" aria-label="Conhecer <?= htmlspecialchars($residencial['name'], ENT_QUOTES, 'UTF-8') ?>">
                                        <span class="photo" aria-hidden="true">
                                            <?php $imageBase = htmlspecialchars($residencial['image_base'], ENT_QUOTES, 'UTF-8'); ?>
                                            <picture>
                                                <source type="image/avif" srcset="<?= $imageBase ?>_480w.avif 480w, <?= $imageBase ?>_800w.avif 800w, <?= $imageBase ?>_1600w.avif 1600w" sizes="<?= htmlspecialchars($residencial['sizes'], ENT_QUOTES, 'UTF-8') ?>">
                                                <source type="image/webp" srcset="<?= $imageBase ?>_480w.webp 480w, <?= $imageBase ?>_800w.webp 800w, <?= $imageBase ?>_1600w.webp 1600w" sizes="<?= htmlspecialchars($residencial['sizes'], ENT_QUOTES, 'UTF-8') ?>">
                                                <img src="<?= $imageBase ?>_800w.jpg" srcset="<?= $imageBase ?>_480w.jpg 480w, <?= $imageBase ?>_800w.jpg 800w, <?= $imageBase ?>_1600w.jpg 1600w" sizes="<?= htmlspecialchars($residencial['sizes'], ENT_QUOTES, 'UTF-8') ?>" width="1600" height="900" alt="" loading="lazy" decoding="async">
                                            </picture>
                                        </span>
                                        <span class="label">
                                            <span class="label-icon" aria-hidden="true">
                                                <img src="<?= htmlspecialchars($residencial['icon'], ENT_QUOTES, 'UTF-8') ?>" alt="">
                                            </span>
                                            <span class="label-copy">
                                                <span class="label-name"><?= htmlspecialchars($residencial['name'], ENT_QUOTES, 'UTF-8') ?></span>
                                                <span class="label-city">
                                                    <img src="/assets/images/icons/location-pin.svg" alt="" aria-hidden="true">
                                                    <span><?= htmlspecialchars($residencial['city'] . ' / ' . $residencial['state'], ENT_QUOTES, 'UTF-8') ?></span>
                                                </span>
                                                <span class="label-area">
                                                    <img src="/assets/images/icons/lot-area.svg" alt="" aria-hidden="true">
                                                    <span>Lotes a partir de <?= number_format($residencial['lot_area'], 0, ',', '.') ?> m²</span>
                                                </span>
                                            </span>
                                        </span>
                                        <span class="button cta" aria-hidden="true">
                                            <span>Conhecer</span>
                                            <span class="button-icon-wrap" aria-hidden="true">
                                                <img class="button-icon" src="/assets/images/icons/arrow-up.svg" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </section>

                    <section class="group group--sold" aria-labelledby="sold-residences-title">
                        <div class="group-heading group-heading--sold">
                            <div>
                                <p class="group-eyebrow">Vitrine de Sucesso</p>
                                <h3 id="sold-residences-title">Residenciais Vendidos</h3>
                            </div>
                            <img class="sold-stamp" src="/assets/images/stamps/icone_selo_100%25-vendido.svg" alt="100% dos lotes vendidos">
                        </div>
                        <p class="group-description">Conheça projetos que já tiveram todos os lotes vendidos e fazem parte da trajetória da Piropo.</p>
                        <ul class="gallery<?= count($residenciaisVendidos) <= 2 ? ' gallery--few' : '' ?>" aria-label="Residenciais com 100% dos lotes vendidos">
                            <?php foreach ($residenciaisVendidos as $residencial): ?>
                                <li class="card">
                                    <a class="card-link" href="#" aria-label="Conhecer <?= htmlspecialchars($residencial['name'], ENT_QUOTES, 'UTF-8') ?>">
                                        <span class="photo" aria-hidden="true">
                                            <?php $imageBase = htmlspecialchars($residencial['image_base'], ENT_QUOTES, 'UTF-8'); ?>
                                            <picture>
                                                <source type="image/avif" srcset="<?= $imageBase ?>_480w.avif 480w, <?= $imageBase ?>_800w.avif 800w, <?= $imageBase ?>_1600w.avif 1600w" sizes="<?= htmlspecialchars($residencial['sizes'], ENT_QUOTES, 'UTF-8') ?>">
                                                <source type="image/webp" srcset="<?= $imageBase ?>_480w.webp 480w, <?= $imageBase ?>_800w.webp 800w, <?= $imageBase ?>_1600w.webp 1600w" sizes="<?= htmlspecialchars($residencial['sizes'], ENT_QUOTES, 'UTF-8') ?>">
                                                <img src="<?= $imageBase ?>_800w.jpg" srcset="<?= $imageBase ?>_480w.jpg 480w, <?= $imageBase ?>_800w.jpg 800w, <?= $imageBase ?>_1600w.jpg 1600w" sizes="<?= htmlspecialchars($residencial['sizes'], ENT_QUOTES, 'UTF-8') ?>" width="1600" height="900" alt="" loading="lazy" decoding="async">
                                            </picture>
                                        </span>
                                        <span class="label">
                                            <span class="label-icon" aria-hidden="true">
                                                <img src="<?= htmlspecialchars($residencial['icon'], ENT_QUOTES, 'UTF-8') ?>" alt="">
                                            </span>
                                            <span class="label-copy">
                                                <span class="label-name"><?= htmlspecialchars($residencial['name'], ENT_QUOTES, 'UTF-8') ?></span>
                                                <span class="label-city">
                                                    <img src="/assets/images/icons/location-pin.svg" alt="" aria-hidden="true">
                                                    <span><?= htmlspecialchars($residencial['city'] . ' / ' . $residencial['state'], ENT_QUOTES, 'UTF-8') ?></span>
                                                </span>
                                                <span class="label-area">
                                                    <img src="/assets/images/icons/lot-area.svg" alt="" aria-hidden="true">
                                                    <span>Lotes a partir de <?= number_format($residencial['lot_area'], 0, ',', '.') ?> m²</span>
                                                </span>
                                            </span>
                                        </span>
                                        <span class="button cta" aria-hidden="true">
                                            <span>Conhecer</span>
                                            <span class="button-icon-wrap" aria-hidden="true">
                                                <img class="button-icon" src="/assets/images/icons/arrow-up.svg" alt="">
                                            </span>
                                        </span>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </section>
                </div>
            </section>
        </main>
    </body>
</html>