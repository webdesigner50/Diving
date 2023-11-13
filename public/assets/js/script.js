"use strict";

jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる

  $(".js-hamburger,.js-sp-nav, .js-sp-nav a").click(function () {
    $(".js-hamburger").toggleClass("is-active");
    $(".js-header").toggleClass("is-active");
    $(".js-sp-nav").toggleClass("is-active");
    $(".js-sp-nav").fadeToggle();
    $("html").toggleClass("is-fixed");
  });

  //リサイズ処理
  $(window).resize(function () {
    if (window.matchMedia("(min-width:768px)").matches) {
      $(".js-hamburger").removeClass("is-active");
      $(".js-header").removeClass("is-active");
      $(".js-sp-nav").removeClass("is-active");
      $(".js-sp-nav").fadeOut();
    }
  });

  //スライダー
  var swiper = new Swiper(".js-top-mv-swiper", {
    // Optional parameters
    loop: true,
    effect: "fade",
    speed: 3000,
    allowTouchMove: false,
    autoplay: {
      delay: 3000
    }
  });
  var swiper = new Swiper(".js-top-campaign-swiper", {
    loop: true,
    slidesPerView: 1.26,
    breakpoints: {
      768: {
        slidesPerView: 3.29,
        spaceBetween: 30
      },
      1024: {
        slidesPerView: 3.49,
        spaceBetween: 40
      }
    },
    spaceBetween: 24,
    speed: 2000,
    autoplay: {
      delay: 1000,
      disableOnInteraction: false
    },
    // Navigation arrows
    navigation: {
      nextEl: ".js-top-campaign-swiper-button-next",
      prevEl: ".js-top-campaign-swiper-button-prev"
    }
  });

  // ページトップボタン
  $(document).ready(function () {
    var pageTop = $(".js-top-pagetop");
    pageTop.hide();
    $(window).on("scroll", function () {
      if ($(this).scrollTop() > 100) {
        pageTop.fadeIn();
      } else {
        pageTop.fadeOut();
      }
    });

    // フッター手前でストップ
    $(".js-top-pagetop").hide();
    $(window).on("scroll", function () {
      var scrollHeight = $(document).height();
      var scrollPosition = $(window).height() + $(window).scrollTop();
      var footHeight = $("footer").innerHeight();
      if (scrollHeight - scrollPosition <= footHeight) {
        $(".js-top-pagetop").css({
          "border-color": "#fff"
        });
        //ドキュメントスタイルの取得
        var sheets = document.styleSheets;
        var sheet = sheets[sheets.length - 1];

        //スタイルルールの追加
        sheet.insertRule(".js-top-pagetop::before { border-color:#fff }", sheet.cssRules.length);
        sheet.insertRule(".js-top-pagetop::after { background-color:#fff }", sheet.cssRules.length);
      } else {
        $(".js-top-pagetop").css({
          "border-color": "#408F95"
        });
        var sheets = document.styleSheets;
        var sheet = sheets[sheets.length - 1];
        sheet.insertRule(".js-top-pagetop::before { border-color:#408F95 }", sheet.cssRules.length);
        sheet.insertRule(".js-top-pagetop::after { background-color:#408F95 }", sheet.cssRules.length);
      }
    });
    pageTop.click(function () {
      $("body,html").animate({
        scrollTop: 0
      }, 500);
      return false;
    });
  });

  //要素の取得とスピードの設定
  var box = $(".js-colorbox"),
    speed = 700;

  //.colorboxの付いた全ての要素に対して下記の処理を行う
  box.each(function () {
    $(this).append('<div class="color"></div>');
    var color = $(this).find($(".color")),
      image = $(this).find("img");
    var counter = 0;
    image.css("opacity", "0");
    color.css("width", "0%");
    //inviewを使って背景色が画面に現れたら処理をする
    color.on("inview", function () {
      if (counter == 0) {
        $(this).delay(200).animate({
          width: "100%"
        }, speed, function () {
          image.css("opacity", "1");
          $(this).css({
            left: "0",
            right: "auto"
          });
          $(this).animate({
            width: "0%"
          }, speed);
        });
        counter = 1;
      }
    });
  });
  $(function () {
    $(window).on("load", function () {
      $(".js-load").fadeOut(700);
    });
  });

  // Campaignタブメニュー
  $(function () {
    // 最初のコンテンツは表示
    $(".js-top-campaign-content:first-of-type").css("display", "block");
    // タブをクリックすると
    $(".js-top-campaign-tab").on("click", function () {
      // 現在選択されているタブからcurrentを外す
      $(".current").removeClass("current");
      // クリックされたタブにcurrentクラスを付与
      $(this).addClass("current");
      // クリックされた要素が何番目か取得（クリックしたタブのインデックス番号を取得）
      var index = $(this).index();
      // クリックしたタブのインデックス番号と同じコンテンツを表示
      $(".js-top-campaign-content").hide().eq(index).fadeIn(300);
    });
  });

  //モーダル
  $(function () {
    $(".js-modal-open").click(function () {
      var imgSrc = $(this).children().attr("src");
      $(".js-large-img").children().attr("src", imgSrc);
      $(".modal, .modal__bg, .js-large-img").fadeIn();
      $("body,html").css("overflow-y", "hidden");
      return false;
    });
    $(".js-modal-close").click(function () {
      $(".modal, .modal__bg, .js-large-img").fadeOut();
      $("body,html").css("overflow-y", "visible");
      return false;
    });
  });

  // informationタブメニュー
  $(function () {
    // 最初のコンテンツは表示
    $(".js-top-information-content:first-of-type").css("display", "block");
    // タブをクリックすると
    $(".js-top-information-tab").on("click", function () {
      // 現在選択されているタブからcurrentを外す
      $(".current").removeClass("current");
      // クリックされたタブにcurrentクラスを付与
      $(this).addClass("current");
      // クリックされた要素が何番目か取得（クリックしたタブのインデックス番号を取得）
      var index = $(this).index();
      // クリックしたタブのインデックス番号と同じコンテンツを表示
      $(".js-top-information-content").hide().eq(index).fadeIn(300);
    });
  });

  // voiceタブメニュー
  $(function () {
    // 最初のコンテンツは表示
    $(".js-top-voice-content:first-of-type").css("display", "block");
    // タブをクリックすると
    $(".js-top-voice-tab").on("click", function () {
      // 現在選択されているタブからcurrentを外す
      $(".current").removeClass("current");
      // クリックされたタブにcurrentクラスを付与
      $(this).addClass("current");
      // クリックされた要素が何番目か取得（クリックしたタブのインデックス番号を取得）
      var index = $(this).index();
      // クリックしたタブのインデックス番号と同じコンテンツを表示
      $(".js-top-voice-content").hide().eq(index).fadeIn(300);
    });
  });

  //アコーディオン
  $(function () {
    $(".js-accordion__item:first-child .js-accordion__content").css("display", "block");
    $(".js-accordion__item:first-child .js-accordion__title").addClass("is-open");
    $(".js-accordion__title").on("click", function () {
      $(this).toggleClass("is-open");
      $(this).next().slideToggle(300);
    });
  });

  //ローディングアニメーション
  var op = gsap.timeline();
  op.fromTo(".loader__text", {
    opacity: 1
  }, {
    opacity: 0
  }, "+=1");
  op.fromTo(".loader__line", {
    yPercent: 0
  }, {
    yPercent: -100,
    duration: 1,
    stagger: {
      each: 0.2,
      ease: Power4.easeInOut
    }
  }).to(".loader", {
    display: "none"
  }, ">");
});