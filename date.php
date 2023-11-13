<?php get_header(); ?>

      <div class="infomation-mv mv">
        <div class="mv__inner">
          <!-- トップ画像 -->
          <?php get_template_part('template/page-head'); ?>
        </div>
      </div>
      <!-- ぱんくず -->
      <div class="breadcrumb layout-breadcrumb inner">
        <?php get_template_part('template/breadcrumb'); ?>
      </div>
      <section class="blog layout-blog">
        <div class="blog__inner inner">
          <div class="blog__contents blog-contents">
            <div class="blog-contents__main blog-contents-main">
              <ul class="blog-contents-main__cards blog-cards blog-cards--sub">
              <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>
                <li class="blog-cards__item blog-card">
                  <a href="<?php the_permalink(); ?>" class="blog-card__link">
                    <div class="blog-card__img-wrap">
                      <?php if (has_post_thumbnail()) { ?>
                      <?php the_post_thumbnail('medium'); ?>
                      <?php } else { ?>
                      <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/dist/assets/images/common/no-image.jpg"
                        alt="画像なし">
                      <?php } ?>
                    </div>
                    <div class="blog-card__body">
                      <div class="blog-card__meta">
                        <time class="blog-card__date"  datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                      </div>
                      <h3 class="blog-card__title"><?php the_title() ?></h3>
                      <p class="blog-card__text">
                        <?php echo substr(nl2br(get_the_content()), 0, 290); ?>
                      </p>
                    </div>
                  </a>
                </li>
                <?php endwhile; ?>
                <?php else: ?>
                <p>記事が見つかりませんでした</p>
                <?php endif; ?>
              </ul>
              <div class="blog-contents-main__wp-pagenavi wp-pagenavi">
              <?php wp_pagenavi(); ?>
              </div>
            </div>
            <div class="blog-contents__side blog-contents-side layout-blog-contents-side">
              <?php get_sidebar(); ?>
            </div>
          </div>
        </div>
      </section>
<?php get_footer(); ?>
