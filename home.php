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
</main>

<?php get_footer(); ?>
