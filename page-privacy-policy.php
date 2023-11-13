<?php get_header(); ?>

      <!-- プライバシーポリシー -->
      <div class="faq-mv mv">
        <div class="mv__inner">
        <?php get_template_part('template/page-head'); ?>
        </div>
      </div>

      <!-- ぱんくず -->
      <div class="breadcrumb layout-breadcrumb inner">
        <?php get_template_part('template/breadcrumb'); ?>
      </div>

      <section class="privacy-policy layout-privacy-policy">
        <div class="privacy-policy__inner inner">
          <p class="privacy-policy__title"><?php the_title(); ?></p>
          <div class="privacy-policy__contents">
            <?php the_content(); ?>
          </div>
        </div>
      </section>
      <?php get_footer(); ?>