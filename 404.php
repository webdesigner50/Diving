<?php get_header(); ?>


      <section class="status-404">
        <div class="status-404__inner inner">
      <!-- ぱんくず -->
      <div class="breadcrumb layout-breadcrumb inner">
        <?php get_template_part('template/breadcrumb'); ?>
      </div>
          <div class="status-404__contents">
            <p class="status-404__title">404</p>
            <p class="status-404__text">申し訳ありません。<br />お探しのページが見つかりません。</p>
            <div class="status-404__button">
              <a href="<?php echo esc_url(home_url('/')); ?>" class="button button--reverse">
              <span>page&nbsp;TOP</span>
            </a>

            </div>
          </div>
        </div>
      </section>
<?php get_footer(); ?>
