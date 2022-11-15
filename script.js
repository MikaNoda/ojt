$(function () {

    $('.hamburger').on('click',function () {
        // console.log('click');
      $('.sp-menu , #hamburger').toggleClass('open');
    })


    $(".slide-items").slick({
      autoplay: true, // 自動再生
      autoplaySpeed: 2500, // 再生速度（ミリ秒設定） 1000ミリ秒=1秒
      infinite: true, // 無限スライド
      cssEase: 'linear',// アニメーション
      speed: 600, // フェードアニメーションの速度設定
      fade: true, // スライドをフェードイン・フェードアウト
    
      arrows: true, // 矢印
      // dots: true, // インジケーター
    });
})

