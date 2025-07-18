</main>
<?php get_sidebar(); ?>
</div>
<footer id="footer" role="contentinfo">

    <div class="footer_widget footer_widget1">
      <div id="block-12" class="inside_widget widget widget_block widget_text">
		<p>Отдел сантехники:<br>г. Находка, Угольная, 61 ст6<br>Отдел мебели:<br>г. Находка, Находскинский проспект 1М</p>
		<div class="clear"></div></div><div id="block-13" class="inside_widget widget widget_block widget_text">
		<p>© 2023<br>Пионер<br>Все права защищены</p>
			<div class="clear">
			</div>
		</div>   
		
    </div>

    <div class="rightBlockIntoFooter">


      <!--
      <div class="menuFooter">
        <?php //wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
      </div>
      -->

      <div class="footer_widget footer_widget2">
        <?php
        dynamic_sidebar( 'footer_widget2' );
        ?>
      </div>

    </div>

<div id="copyright" class="copyright">
&copy; <?php echo esc_html( date_i18n( __( 'Y', 'inside' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
</div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
