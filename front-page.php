<?php get_header(); ?>

<!-- <?php
$home = esc_url( home_url( '/' ) );
$campaign = esc_url(home_url('/campaign'));
$license = esc_url(home_url('/campaign_category/license/'));
$experience = esc_url(home_url('/campaign_category/diving/'));
$diving = esc_url(home_url('/campaign_category/fundiving/'));
$about = esc_url( home_url( '/about/' ) );
$information = esc_url( home_url( '/information/' ) );
$blog = esc_url( home_url( '/blog/' ) );
$voice = esc_url( home_url( '/voice/' ) );
$price = esc_url( home_url( '/price/' ) );
$faq = esc_url( home_url( '/faq/' ) );
$contact = esc_url( home_url( '/contact/' ) );
$policy = esc_url( home_url( '/privacy-policy/' ) );
$terms = esc_url( home_url( '/terms-of-service/' ) );
$sitemap = esc_url( home_url( '/sitemap/' ) );
?>

      <div class="top-mv">
        <div class="top-mv loader">
          <div class="loader__line"></div>
          <div class="loader__line"></div>
        </div>
        <div class="top-mv__title loader__text">
          <h2 class="top-mv__main-title">diving</h2>
          <p class="top-mv__sub-title">into&nbsp;the&nbsp;ocean</p>
        </div>
        <div class="top-mv__inner">
          <div class="top-mv__slider swiper js-top-mv-swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <picture>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-mv-pc-img1.jpg" media="(min-width: 768px)" />
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-mv-sp-img1.jpg" alt="海底にいるウミガメの様子" />
                </picture>
              </div>
              <div class="swiper-slide">
                <picture>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-mv-pc-img2.jpg" media="(min-width: 768px)" />
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-mv-sp-img2.jpg" alt="ダイバーが海中でウミガメと遭遇して撮影している様子" />
                </picture>
              </div>
              <div class="swiper-slide">
                <picture>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-mv-pc-img3.jpg" media="(min-width: 768px)" />
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-mv-sp-img3.jpg" alt="海上の様子" />
                </picture>
              </div>
              <div class="swiper-slide">
                <picture>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-mv-pc-img4.jpg" media="(min-width: 768px)" />
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-mv-sp-img4.jpg" alt="綺麗な砂浜の様子" />
                </picture>
              </div>
            </div>
            <div class="top-mv__title">
              <h2 class="top-mv__main-title">diving</h2>
              <p class="top-mv__sub-title">into&nbsp;the&nbsp;ocean</p>
            </div>
          </div>
        </div>
      </div>
      <section class="top-campaign layout-top-campaign">
        <div class="top-campaign__inner inner">
          <div class="top-campaign__title title">
            <p class="title__sub">Campaign</p>
            <h2 class="title__main">キャンペーン</h2>
          </div>
          <div class="top-campaign__slider campaign-cards swiper js-top-campaign-swiper">
            <ul class="campaign-cards__items swiper-wrapper">
              <li class="campaign-cards__item campaign-card swiper-slide">
                <a href="#">
                  <div class="campaign-card__img-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-slide-img1.jpg" alt="海の中を色とりどりの魚が泳ぐ様子" />
                  </div>
                  <div class="campaign-card__body">
                    <div class="campaign-card__meta">
                      <p class="campaign-card__label">ライセンス講習</p>
                    </div>
                    <h3 class="campaign-card__title">ライセンス取得</h3>
                    <div class="campaign-card__wrap">
                      <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                      <div class="campaign-card__price">
                        <div class="campaign-card__price-before">&yen;56&#44;000</div>
                        <div class="campaign-card__price-after">&yen;46&#44;000</div>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
              <li class="campaign-cards__item campaign-card swiper-slide">
                <a href="#">
                  <div class="campaign-card__img-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-slide-img2.jpg" alt="海岸からダイビングスポットまで運ぶ船の乗り場" />
                  </div>
                  <div class="campaign-card__body">
                    <div class="campaign-card__meta">
                      <p class="campaign-card__label">体験ダイビング</p>
                    </div>
                    <h3 class="campaign-card__title">貸切体験ダイビング</h3>
                    <div class="campaign-card__wrap">
                      <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                      <div class="campaign-card__price">
                        <div class="campaign-card__price-before">&yen;24&#44;000</div>
                        <div class="campaign-card__price-after">&yen;18&#44;000</div>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
              <li class="campaign-cards__item campaign-card swiper-slide">
                <a href="#">
                  <div class="campaign-card__img-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-slide-img3.jpg" alt="夜のダイビングで沢山のクラゲを撮った様子" />
                  </div>
                  <div class="campaign-card__body">
                    <div class="campaign-card__meta">
                      <p class="campaign-card__label">体験ダイビング</p>
                    </div>
                    <h3 class="campaign-card__title">ナイトダイビング</h3>
                    <div class="campaign-card__wrap">
                      <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                      <div class="campaign-card__price">
                        <div class="campaign-card__price-before">&yen;10&#44;000</div>
                        <div class="campaign-card__price-after">&yen;8&#44;000</div>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
              <li class="campaign-cards__item campaign-card swiper-slide">
                <a href="#">
                  <div class="campaign-card__img-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-slide-img4.jpg" alt="複数のダイバーが海から顔を出している様子" />
                  </div>
                  <div class="campaign-card__body">
                    <div class="campaign-card__meta">
                      <p class="campaign-card__label">ファンダイビング</p>
                    </div>
                    <h3 class="campaign-card__title">貸切ファンダイビング</h3>
                    <div class="campaign-card__wrap">
                      <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                      <div class="campaign-card__price">
                        <div class="campaign-card__price-before">&yen;20&#44;000</div>
                        <div class="campaign-card__price-after">&yen;16&#44;000</div>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
              <li class="campaign-cards__item campaign-card swiper-slide">
                <a href="#">
                  <div class="campaign-card__img-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-slide-img1.jpg" alt="海の中を色とりどりの魚が泳ぐ様子" />
                  </div>
                  <div class="campaign-card__body">
                    <div class="campaign-card__meta">
                      <p class="campaign-card__label">ライセンス講習</p>
                    </div>
                    <h3 class="campaign-card__title">ライセンス取得</h3>
                    <div class="campaign-card__wrap">
                      <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                      <div class="campaign-card__price">
                        <div class="campaign-card__price-before">&yen;56&#44;000</div>
                        <div class="campaign-card__price-after">&yen;46&#44;000</div>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
              <li class="campaign-cards__item campaign-card swiper-slide">
                <a href="#">
                  <div class="campaign-card__img-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-slide-img2.jpg" alt="海岸からダイビングスポットまで運ぶ船の乗り場" />
                  </div>
                  <div class="campaign-card__body">
                    <div class="campaign-card__meta">
                      <p class="campaign-card__label">体験ダイビング</p>
                    </div>
                    <h3 class="campaign-card__title">貸切体験ダイビング</h3>
                    <div class="campaign-card__wrap">
                      <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                      <div class="campaign-card__price">
                        <div class="campaign-card__price-before">&yen;24&#44;000</div>
                        <div class="campaign-card__price-after">&yen;18&#44;000</div>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
              <li class="campaign-cards__item campaign-card swiper-slide">
                <a href="#">
                  <div class="campaign-card__img-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-slide-img3.jpg" alt="夜のダイビングで沢山のクラゲを撮った様子" />
                  </div>
                  <div class="campaign-card__body">
                    <div class="campaign-card__meta">
                      <p class="campaign-card__label">体験ダイビング</p>
                    </div>
                    <h3 class="campaign-card__title">ナイトダイビング</h3>
                    <div class="campaign-card__wrap">
                      <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                      <div class="campaign-card__price">
                        <div class="campaign-card__price-before">&yen;10&#44;000</div>
                        <div class="campaign-card__price-after">&yen;8&#44;000</div>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
              <li class="campaign-cards__item campaign-card swiper-slide">
                <a href="#">
                  <div class="campaign-card__img-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-slide-img4.jpg" alt="複数のダイバーが海から顔を出している様子" />
                  </div>
                  <div class="campaign-card__body">
                    <div class="campaign-card__meta">
                      <p class="campaign-card__label">ファンダイビング</p>
                    </div>
                    <h3 class="campaign-card__title">貸切ファンダイビング</h3>
                    <div class="campaign-card__wrap">
                      <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                      <div class="campaign-card__price">
                        <div class="campaign-card__price-before">&yen;20&#44;000</div>
                        <div class="campaign-card__price-after">&yen;16&#44;000</div>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="swiper-button-prev top-campaign__swiper-button-prev js-top-campaign-swiper-button-prev u-desktop"></div>
          <div class="swiper-button-next top-campaign__swiper-button-next js-top-campaign-swiper-button-next u-desktop"></div>
          <div class="top-campaign__button">
            <a href="#" class="button"><span>view&nbsp;buttonmore</span></a>
          </div>
        </div>
      </section>
      <section class="top-about about-image layout-top-about">
        <div class="about-image__inner inner">
          <div class="about-image__title title">
            <p class="title__sub">about&nbsp;us</p>
            <h2 class="title__main">私たちについて</h2>
          </div>
          <div class="about-image__img-wrap">
            <div class="about-image__img-small">
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
              <div class="about-image__button">
                <a href="#" class="button"><span>view&nbsp;more</span></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="top-information layout-top-information">
        <div class="top-information__inner inner">
          <div class="top-information__title title">
            <p class="title__sub">information</p>
            <h2 class="title__main">ダイビング情報</h2>
          </div>
          <div class="top-information__content-wrap">
            <div class="top-information__img-wrap js-colorbox colorbox">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-information-img.jpg" alt="イソギンチャクの中を黄色の魚たちが泳いでいる様子" />
            </div>
            <div class="top-information__body">
              <h3 class="top-information__title">ライセンス講習</h3>
              <p class="top-information__text">
                当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br />正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
              </p>
              <div class="top-information__button">
                <a href="#" class="button"><span>view&nbsp;more</span></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="top-blog layout-top-blog">
        <div class="top-blog__bg u-desktop">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-blog-bg-img.jpg" alt="水面をアップで撮った様子" />
        </div>
        <div class="top-blog__inner inner">
          <div class="top-blog__title title">
            <p class="title__sub title__sub--white">blog</p>
            <h2 class="title__main title__main--white">ブログ</h2>
          </div>
          <ul class="top-blog__cards blog-cards">
            <li class="blog-cards__item blog-card">
              <a href="#" class="blog-card__link">
                <div class="blog-card__img-wrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-blog-img1.jpg" alt="ピンク色のきれいな珊瑚の画像" />
                </div>
                <div class="blog-card__body">
                  <div class="blog-card__meta">
                    <time class="blog-card__date" datetime="2023-11-17">2023.11.17</time>
                  </div>
                  <h3 class="blog-card__title">ライセンス取得</h3>
                  <p class="blog-card__text">
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                  </p>
                </div>
              </a>
            </li>
            <li class="blog-cards__item blog-card">
              <a href="#" class="blog-card__link">
                <div class="blog-card__img-wrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-blog-img2.jpg" alt="海の中で泳ぐウミガメのアップの写真" />
                </div>
                <div class="blog-card__body">
                  <div class="blog-card__meta">
                    <time class="blog-card__date" datetime="2023-11-17">2023.11.17</time>
                  </div>
                  <h3 class="blog-card__title">ウミガメと泳ぐ</h3>
                  <p class="blog-card__text">
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                  </p>
                </div>
              </a>
            </li>
            <li class="blog-cards__item blog-card">
              <a href="#" class="blog-card__link">
                <div class="blog-card__img-wrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-blog-img3.jpg" alt="イソギンチャクの中からカクレクマノミが顔を出している様子" />
                </div>
                <div class="blog-card__body">
                  <div class="blog-card__meta">
                    <time class="blog-card__date" datetime="2023-11-17">2023.11.17</time>
                  </div>
                  <h3 class="blog-card__title">カクレクマノミ</h3>
                  <p class="blog-card__text">
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                  </p>
                </div>
              </a>
            </li>
          </ul>
          <div class="top-blog__button">
            <a href="#" class="button"><span>view&nbsp;more</span></a>
          </div>
        </div>
      </section>
      <section class="top-voice layout-top-voice">
        <div class="top-voice__inner inner">
          <div class="top-voice__title title">
            <p class="title__sub">voice</p>
            <h2 class="title__main">お客様の声</h2>
          </div>
          <ul class="top-voice__cards voice-cards">
            <li class="voice-cards__item voice-card">
              <a href="#">
                <div class="voice-card__title">
                  <div class="voice-card__title-wrap">
                    <div class="voice-card__meta">
                      <p class="voice-card__age">20代(女性)</p>
                      <p class="voice-card__label">ライセンス講習</p>
                    </div>
                    <p class="voice-card__title">ここにタイトルが入ります。ここにタイトル</p>
                  </div>
                  <div class="voice-card__img-wrap js-colorbox colorbox">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-voice-img1.jpg" alt="笑顔の女性が麦わら帽子に両手をかけている様子" />
                  </div>
                </div>
                <p class="voice-card__text">
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。
                </p>
              </a>
            </li>
            <li class="voice-cards__item voice-card">
              <a href="#">
                <div class="voice-card__title">
                  <div class="voice-card__title-wrap">
                    <div class="voice-card__meta">
                      <p class="voice-card__age">30代(男性)</p>
                      <p class="voice-card__label">ファンダイビング</p>
                    </div>
                    <p class="voice-card__title">ここにタイトルが入ります。ここにタイトル</p>
                  </div>
                  <div class="voice-card__img-wrap js-colorbox colorbox">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-voice-img2.jpg" alt="笑顔の男性が親指を突き出してグーサインを出している様子" />
                  </div>
                </div>
                <p class="voice-card__text">
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。
                </p>
              </a>
            </li>
          </ul>
          <div class="top-voice__button">
            <a href="#" class="button"><span>view&nbsp;more</span></a>
          </div>
        </div>
        <div class="top-price layout-top-price">
          <div class="top-price__inner inner">
            <div class="top-price__title title">
              <p class="title__sub">price</p>
              <h2 class="title__main">料金一覧</h2>
            </div>
            <div class="top-price__content">
              <div class="top-price__img-wrap js-colorbox colorbox">
                <picture>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-price-pc-img.jpg" media="(min-width: 768px)" />
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/top-price-sp-img.jpg" alt="海の中で泳ぐウミガメを横からアップで撮った様子" />
                </picture>
              </div>
              <div class="top-price__table">
                <ul class="top-price__lists price-lists">
                  <li class="price-lists__item price-list">
                    <h3 class="price-list__title">ライセンス講習</h3>
                    <dl class="price-list__item">
                      <dt>オープンウォーターダイバーコース</dt>
                      <dd>&yen;50&#44;000</dd>
                      <dt>アドバンスドオープンウォーターコース</dt>
                      <dd>&yen;60&#44;000</dd>
                      <dt>レスキュー&plus;EFRコース</dt>
                      <dd>&yen;70&#44;000</dd>
                    </dl>
                  </li>
                  <li class="price-lists__item price-list">
                    <h3 class="price-list__title">体験ダイビング</h3>
                    <dl class="price-list__item">
                      <dt>ビーチ体験ダイビング(半日)</dt>
                      <dd>&yen;7&#44;000</dd>
                      <dt>ビーチ体験ダイビング(1日)</dt>
                      <dd>&yen;14&#44;000</dd>
                      <dt>ボート体験ダイビング(半日)</dt>
                      <dd>&yen;10&#44;000</dd>
                      <dt>ボート体験ダイビング(1日)</dt>
                      <dd>&yen;18&#44;000</dd>
                    </dl>
                  </li>
                  <li class="price-lists__item top-list">
                    <h3 class="price-list__title">ファンダイビング</h3>
                    <dl class="price-list__item">
                      <dt>ビーチダイビング(2ダイブ)</dt>
                      <dd>&yen;14&#44;000</dd>
                      <dt>ボートダイビング(2ダイブ)</dt>
                      <dd>&yen;18&#44;000</dd>
                      <dt>スペシャルダイビング(2ダイブ)</dt>
                      <dd>&yen;14&#44;000</dd>
                      <dt>ナイトダイビング(1ダイブ)</dt>
                      <dd>&yen;10&#44;000</dd>
                    </dl>
                  </li>
                  <li class="price-lists__item top-list">
                    <h3 class="price-list__title">スペシャルダイビング</h3>
                    <dl class="price-list__item">
                      <dt>貸切ダイビング(2ダイブ)</dt>
                      <dd>&yen;24&#44;000</dd>
                      <dt>1日ダイビング(3ダイブ)</dt>
                      <dd>&yen;32&#44;000</dd>
                    </dl>
                  </li>
                </ul>
              </div>
            </div>
            <div class="top-price__button">
              <a href="#" class="button"><span>view&nbsp;more</span></a>
            </div>
          </div>
        </div>
      </section> -->

      <?php get_footer(); ?>
