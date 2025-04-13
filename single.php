<?php get_header(); ?>
    <main class="l-main">
      <section class="l-main__kv p-kv" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/kv.jpg')">
        <div class="p-kv__title c-leading">
        <h2 class="c-h2 c-leading__title"><?php the_title()?></h2>
        </div>
      </section>
      <section class="wp_content">
      <?php the_content();?>
      </section>
    </main>
    <?php get_footer(); ?>
  </body>
</html>
