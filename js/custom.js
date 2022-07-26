/**
 * Sticky Header
 **/
(function($){

  $(window).scroll(function() {
    if ( $(this).scrollTop() >= 50 ) {
      $('.sticky').addClass("activate");
    } else {
      $('.sticky').removeClass("activate");
    }
  });

  window.addEventListener("hashchange", function () {
    console.log('this fired.');
      window.scrollTo(window.scrollX, window.scrollY - 100);
  });

  $(window).on('resize', function () {

    fixHeroVideoHeight();
    setTimeout(fixBlogCardsHeight, 100);

  });

  function fixHeroVideoHeight() {
    let parent = $("#hero-video-parent");
    let child = $("#hero-video-child");
    parent.height(child.outerHeight(true));
  }

  function fixBlogCardsHeight() {
    // $('.slick-track').each(function () {
    //   let highestBox = 0;

    //   $('.slider-slide', this).each(function () {
    //     if ($(this).parent().height() > highestBox) {
    //       highestBox = $(this).height();
    //     }
    //   });

    //   $('.slider-card', this).height(highestBox - 60);
    // });
  }

  fixHeroVideoHeight();
  setTimeout(fixBlogCardsHeight, 100);

  $("#postings-cta").on("click", function (event) {
    $("html, body").animate(
      {
        scrollTop: $('#listings').offset().top - 175,
      },
      800,
      function () { }
    );
  });

  $("#search-input").on("focus", function () {
    $("#desktop-nav-links").css("visibility", "hidden");
    $("#desktop-nav-links .nav-link").css("font-size", "0rem");
  });

  $("#search-input").on("blur", function () {
    $("#desktop-nav-links").css("visibility", "visible");
    $("#desktop-nav-links .nav-link").css("font-size", "1rem");
  });

})(jQuery);

$(function () {
  $.stellar({
    horizontalScrolling: false,
    verticalScrolling: true,
    verticalOffset: 150,
  });
});

/**
* Video
**/

$('.ytvideo[data-video]').one('click', function() {

  var $this = $(this);
  var width = $this.attr("width");
  var height = $this.attr("height");
  
  $this.html('<iframe src="https://www.youtube.com/embed/' + $this.data("video") + '?autoplay=1"></iframe>');
  });
  