<?php get_header(); ?>

      <div class="campaign-mv mv">
        <div class="mv__inner">
          <!-- トップ画像 -->
          <?php get_template_part('template/page-head'); ?>
        </div>
      </div>

      <!-- ぱんくず -->
      <div class="breadcrumb layout-breadcrumb inner">
        <?php get_template_part('template/breadcrumb'); ?>
      </div>

      <section class="campaign layout-campaign">
        <div class="campaign__inner inner">

        <!-- カテゴリーリスト -->
        <?php get_template_part('template/category_taxonomy'); ?>

          <ul class="campaign__items campaign__items--sub campaign-cards">
          <!-- ループ -->
          <?php
          if (have_posts()) :
            while (have_posts()) : the_post(); ?>

          <li class="campaign-cards__item campaign-card">
              <a class="campaign__link" href="#">
                <div class="campaign-card__img-wrap">
                  <!-- <img src="./assets/images/common/top-slide-img1.jpg" alt="海の中を色とりどりの魚が泳ぐ様子" /> -->

                  <?php if (has_post_thumbnail()) : ?>
                  <!-- アイキャッチ画像指定されている場合 -->
                  <?php the_post_thumbnail(); ?>
                <?php else : ?>
                  <!-- アイキャッチ画像指定されていない場合に代替画像を表示 -->
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no-image.jpg;" alt="画像がありません">
                <?php endif; ?>
                </div>


                <div class="campaign-card__body">
                  <div class="campaign-card__meta">
                    <!-- <p class="campaign-card__label">ライセンス講習</p> -->
                    <?php $term = get_the_terms($post->ID, 'campaign_category');
                    if ($term) : ?>
                      <p class="campaign-card__label">
                        <?php echo $term[0]->name; ?>
                      </p>
                    <?php endif; ?>

                  </div>
                  <h3 class="campaign-card__title campaign-card__title--sub"><?php the_title(); ?></h3>
                  <div class="campaign-card__wrap">
                    <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price">
                      <div class="campaign-card__price-before"><span>¥<?php the_field('campaign-before'); ?></span><</div>
                      <div class="campaign-card__price-after">¥<?php the_field('campaign-after'); ?></div>
                    </div>
                    <div class="campaign-card__sub-wrap">
                      <p class="campaign-card__text2">
                      <?php
                        $post_id = get_the_ID();
                        $text = get_post_meta($post_id, 'campaign-text', true);
                      ?>
                      <?php if ($text) : ?>
                        <p><?php echo $text; ?></p>
                      <?php endif; ?>
                    </p>
                      <p class="campaign-card__text3"><?php the_field('campaign-from-yyyy'); ?>/<?php the_field('campaign-from-mm'); ?>/<?php the_field('campaign-from-dd'); ?>-<?php the_field('campaign-to-mm'); ?>/<?php the_field('campaign-to-dd'); ?></p>
                      <p class="campaign-card__text4">ご予約・お問い合わせはコチラ</p>
                      <div class="campaign-card__button">
                        <a href="#" class="button"><span>contact&nbsp;us</span></a>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </li>
            <?php endwhile; endif; ?>

          </ul>
          <div class="campaign__wp-pagenavi wp-pagenavi">
            <!-- <span class="pages">3 / 100</span> -->
            <!-- <a class="first" href="#">« 先頭</a> -->
            <!-- <a class="wp-pagenavi__previouspostslink page" rel="prev" href="#"><</a>
            <div class="wp-pagenavi__page">
              <span class="current">1</span>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              <a class="u-desktop" href="#">5</a>
              <a class="u-desktop" href="#">6</a>
            </div>
            <a class="wp-pagenavi__nextpostslink" rel="next" href="#">></a> -->
            <?php wp_pagenavi(); ?>
          </div>
        </div>
      </section>

      <?php get_footer(); ?>
