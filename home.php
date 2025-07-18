<?php
/*
Template Name: Home
*/
get_header();
?>

<main class="main">
    <section class="hero">
        <div class="container">
            <h1 class="hero__title">МЕБЕЛЬ И САНТЕХНИКА ДЛЯ КУХНИ И ВАННОЙ В наличий и Под заказ</h1>
            <div class="hero__inner">
                <p class="hero__inner-text">Товары от известных торговых российских и зарубежных брендов. Мы максимально приближены к покупателю и предлагаем качественный товар с минимальной торговой наценкой.</p>
                <a href="/shop" class="blue-button">Перейти&nbsp;в&nbsp;каталог</a>
            </div>
        </div>
    </section>

    <section class="catalog-section">
        <div class="image-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/img/pioner.svg" alt="пионер">
        </div>
        <div class="container">
            <div class="catalog-section__inner">
                <h2 class="catalog-section__title">Каталог продукции</h2>
                <p>Работаем только с проверенными поставщиками, что гарантирует долговечность и надежность каждого изделия</p>
            </div>
        </div>
        <div class="catalog-section__wrapper">
            <div class="catalog-section__item">
                <a href="/product-category/сантехника/" class="catalog-section__item-link">
                    <div class="catalog-section__item-inner">
                        <h3>cантехника</h3>
                        <svg width="47" height="16" viewBox="0 0 47 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M46.3067 8.76448C46.6972 8.37396 46.6972 7.74079 46.3067 7.35027L39.9427 0.986305C39.5522 0.595781 38.919 0.595781 38.5285 0.986305C38.138 1.37683 38.138 2.00999 38.5285 2.40052L44.1853 8.05737L38.5285 13.7142C38.138 14.1048 38.138 14.7379 38.5285 15.1284C38.919 15.519 39.5522 15.519 39.9427 15.1284L46.3067 8.76448ZM0.679565 8.05737V9.05737H45.5995V8.05737V7.05737H0.679565V8.05737Z" fill="white" />
                            </svg>
                    </div>
                    <img width="915" height="420" src="<?php echo get_template_directory_uri(); ?>/img/catalog-item-1.webp" alt="cантехника">
                </a>
            </div>
            <div class="catalog-section__item">
                <a href="/product-category/мебель/" class="catalog-section__item-link">
                    <div class="catalog-section__item-inner">
                        <h3>мебель</h3>
                        <svg width="47" height="16" viewBox="0 0 47 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M46.3067 8.76448C46.6972 8.37396 46.6972 7.74079 46.3067 7.35027L39.9427 0.986305C39.5522 0.595781 38.919 0.595781 38.5285 0.986305C38.138 1.37683 38.138 2.00999 38.5285 2.40052L44.1853 8.05737L38.5285 13.7142C38.138 14.1048 38.138 14.7379 38.5285 15.1284C38.919 15.519 39.5522 15.519 39.9427 15.1284L46.3067 8.76448ZM0.679565 8.05737V9.05737H45.5995V8.05737V7.05737H0.679565V8.05737Z" fill="white" />
                            </svg>
                    </div>
                    <img width="855" height="420" src="<?php echo get_template_directory_uri(); ?>/img/catalog-item-2.webp" alt="мебель">
                </a>
            </div>
        </div>
    </section>

    <section class="about-section">
        <div class="container">
            <div class="about-section__header">
                <h2 class="about-section__title">О&nbsp;нас</h2>
                <div class="about-section__header-line">
                    <svg width="49" height="36" viewBox="0 0 49 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M48.9979 0.444946V35.5551H39.0283L27.5417 0.444946H48.9979ZM22.3402 0.444946V35.5551H12.3706L0.883972 0.444946H22.3402Z" fill="#E6E6EF" />
                    </svg>
                </div>
                <p class="about-section__text">Уют начинается с мебели, а мебель начинается с нас</p>
            </div>
            <div class="about-section__wrapper">
                <div class="about-section__item">
                    <div class="image-wrapper image-wrapper-animate">
                        <img width="704" height="685" src="<?php echo get_template_directory_uri(); ?>/img/about-1.webp" alt="о нас">
                    </div>
                </div>
                <div class="about-section__item">
                    <ul class="about-section__list">
                        <li class="about-section__item">
                            <div class="about-section__item-inner">
                                <span>{01}</span>
                                <p>точность</p>
                            </div>
                            <p class="about-section__item-text">Мебель на заказ всегда делается применительно к габаритам места установки с точностью до миллиметра. Встроенный шкаф купе, стеллаж или стол, изготовленные на заказ, будут установлены без зазоров и щелей, даже если стены имеют неровности.</p>
                        </li>
                        <li class="about-section__item">
                            <div class="about-section__item-inner">
                                <span>{02}</span>
                                <p>Долговечность материалов</p>
                            </div>
                            <p class="about-section__item-text">При производстве мебели используются качественные материалы, с которыми ничего не произойдет со временем. Срок службы мебели, фактически, не менее 15 лет. Наша мебель прослужит с лёгкостью до следующего апгрейда Вашего дома!.</p>
                        </li>
                        <li class="about-section__item">
                            <div class="about-section__item-inner">
                                <span>{03}</span>
                                <p>Решение под ключ</p>
                            </div>
                            <p class="about-section__item-text">В расчёт стоимости всегда включены все затраты - проектирование, изготовление, доставка, сборка и установка. Мы решаем вопрос мебелирования комплексно, без "головной боли".</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
