<?php
/*
Template Name: Информационные страницы - контакты
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
        <div class="footer-inner footer-inner--contact">
          <div class="footer-item__wrapper">
            <div class="footer-item">
                <div class="footer-item__content">
                  <h3>МАГАЗИН САНТЕХНИКИ</h3>
                  <div class="footer-item__row">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/phone.svg" alt="phone">
                    <ul class="footer-item__list">
                      <li>
                        <a href="tel:+74236622888">8 (4236) 622-888</a>,
                      </li>
                      <li>
                        <a href="tel:+79147091888">8 (914) 709-18-88</a>,
                      </li>
                      <li>
                        <a href="tel:+79149759175">8 (914) 975-91-75</a>
                      </li>
                    </ul>
                  </div>
                  <div class="footer-item__row">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/pin.svg" alt="pin">
                    <p>г. Находка, Угольная, 61 ст6</p>
                  </div>
                </div>

                <div class="footer-item__content">
                  <h3>МАГАЗИН МЕБЕЛИ И САНТЕХНИКИ</h3>
                  <div class="footer-item__row">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/phone.svg" alt="phone">
                    <ul class="footer-item__list">
                      <li>
                        <a href="tel:+79147394546">8 (914) 739-45-46</a>,
                      </li>
                      <li>
                        <a href="tel:+79149759175">8 (914) 975-91-75</a>,
                      </li>
                    </ul>
                  </div>
                  <div class="footer-item__row">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/pin.svg" alt="pin">
                    <p>г. Находка, Угольная, 61 ст6</p>
                  </div>
                </div>

                <div class="footer-item__content">
                  <h3>Электронная почта</h3>
                  <div class="footer-item__row">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/email.svg" alt="email">
                    <ul class="footer-item__list">
                      <li>
                        <a href="mailto:pioneershop@mail.ru">pioneershop@mail.ru</a>,
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="footer-item__content">
                  <h3>Режим работы</h3>
                  <div class="footer-item__row">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/time.svg" alt="time">
                    <ul class="footer-item__list">
                      <li>
                        <p>Пн. – Вс.: с 9:00 до 17:00</p>
                        <p>Без обеда</p>
                        <p>Без выходных</p>
                      </li>
                    </ul>
                  </div>
                </div>

            </div>
          </div>

        </div>
    </div>
</main>

<?php get_footer(); ?>