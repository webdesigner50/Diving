<?php
/*
Template Name: about
*/
?>

<?php get_header(); ?>

      <div class="campaign-mv mv">
        <div class="mv__inner">
          <!-- トップ画像 -->
          <?php get_template_part('template/page-head'); ?>
        </div>
      </div>

      <!-- ぱんくず -->
      <?php get_template_part('template/breadcrumb'); ?>

      <section class="sub-about about-image layout-about">
        <div class="about-image__inner inner">
          <div class="about-image__img-wrap">
            <div class="about-image__img-small u-desktop">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-about-img1.jpg" alt="瓦屋根の上にシーサーが乗っている様子" />
            </div>
            <div class="about-image__img-big">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-about-img2.jpg" alt="海中で黄色の魚が泳ぐ様子" />
            </div>
          </div>
          <div class="about-image__content-wrap">
            <h3 class="about-image__content-title">Dive&nbsp;into<br />the&nbsp;Ocean</h3>
            <div class="about-image__content-text-wrap">
              <p class="about-image__content-text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
              </p>
              <div class="about-image__button u-desktop">
                <a href="#" class="button"><span>view&nbsp;more</span></a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="about-gallery layout-about-gallery">
        <div class="about-gallery__inner inner">
          <div class="about-gallery__title title">
            <p class="title__sub">gallery</p>
            <h2 class="title__main">フォト</h2>
          </div>
          <div class="about-gallery__content">
            <div class="about-gallery__modal js-modal-window"></div>
              <ul class="about-gallery__image-items">
                <?php $fields = CFS()->get('about_group'); ?>
                <?php if ($fields) : ?>
                  <?php
                  //投稿のIDを取得
                  $fields = CFS()->get('about_group', get_the_ID());
                  foreach ((array)$fields as $field): ?>

                    <li class="about-gallery__image-item js-modal">
                        <?php
                        // CFSで画像URLを取得する ?>
                        <img src="<?php echo $field['about_photo']; ?>" alt="ギャラリー画像">
                        <?php
                        ?>
                    </li>
                  <?php endforeach; ?>
                <?php endif; ?>
              </ul>
            </div>
          </div>
        </div>
      </section>
<?php get_footer(); ?>
