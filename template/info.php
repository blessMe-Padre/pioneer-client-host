<?php
/*
Template Name: Информационные страницы
*/
get_header();
?>

<main class="main">
    <div class="container">
        <div class="breadcrumbs">
            <a class="breadcrumbs__link" href="/">Главная</a>
            <span class="breadcrumbs__link">/</span>
            <span><?php the_title(); ?></span>
        </div>
        <div class="info">
            <h1 class="info__title"><?php the_title(); ?></h1>
            <div class="info__content">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>