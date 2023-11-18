<?php get_header(); ?>

      <div class="campaign-mv mv">
        <div class="mv__inner">
          <!-- トップ画像 -->
          <?php get_template_part('template/page-head'); ?>
        </div>
      </div>

      <div class="breadcrumb layout-breadcrumb inner">
      <?php get_template_part('template/breadcrumb'); ?>
      </div>
      <section class="voice layout-voice">
        <div class="voice__inner inner">
          <ul class="voice__body category">
            <li class="category__label">
              <a href="<?php echo esc_url(home_url('/voice/')); ?>" class="category__label-text current">ALL</a>
            </li>
            <?php
            $args = [
              'taxonomy' => 'voice_category'
            ];
            $terms = get_terms($args);
            ?>
            <?php foreach ($terms as $term): ?>
              <li class="category__label">
                <a class="category__label-text js-categories-item" href="<?php echo get_term_link($term->term_id); ?>">
                <?php echo $term->name; ?>
                </a>
              </li>
            <?php endforeach; ?>
            </li>
          </ul>

          <ul class="voice__items voice-cards">
            <?php if (have_posts()): while (have_posts()): the_post(); ?>
              <li class="voice-cards__item voice-card  js-voice-content">
                  <div class="voice-card__title">
                    <div class="voice-card__title-wrap">
                      <div class="voice-card__meta">
                        <?php
                        $age = get_field('voice-age');
                        ?>
                        <p class="voice-card__age">
                            <?php if ($age): ?>
                              <?php echo esc_html($age); ?>
                            <?php endif; ?>
                        </p>
                        <?php $term = get_the_terms($post->ID, 'voice_category');
                          if ($term) : ?>
                            <p class="voice-card__label">
                              <?php echo $term[0]->name; ?>
                            </p>
                        <?php endif; ?>
                      </div>
                      <p class="voice-card__title"><?php echo wp_trim_words(get_the_title(), 22, '…'); ?></p>
                      <!-- <p class="voice-card__title">
                      <?php
                        $taxonomy_terms = get_the_terms($post->ID, 'voice_category');
                        if ($taxonomy_terms): ?>
                          <p class="voice-card__category"><?php echo $taxonomy_terms[0]->name; ?></p>
                        <?php endif; ?>
                      </p> -->
                    </div>
                    <div class="voice-card__img-wrap js-colorbox colorbox">
                      <?php if (has_post_thumbnail()): ?>
                      <?php the_post_thumbnail('medium'); ?>
                      <?php else: ?>
                      <img src="<?php echo esc_url(get_theme_file_uri('')); ?>/assets/images/common/no-image.jpg"
                        alt="画像無し">
                      <?php endif; ?>
                    </div>
                  </div>
                  <p class="voice-card__text">
                    <!-- <?php echo substr(nl2br(the_field('voice-text')), 0, 290); ?> -->
                    <?php echo nl2br(the_field('voice-text')); ?>
                  </p>
              </li>
            <?php endwhile; else: ?>
              <p>記事が見つかりませんでした</p>
              <?php endif; ?>
          </ul>

          <div class="campaign__wp-pagenavi wp-pagenavi">
            <?php wp_pagenavi(); ?>
          </div>
        </div>
      </section>

      <?php get_footer(); ?>
