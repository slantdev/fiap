(() => {
  // resources/js/app.js
  jQuery(function($) {
    $(".filter-news").on("click", function(event) {
      $(".filter-news-buttons .filter-news").removeClass("filter-active");
      $(this).addClass("filter-active");
      $(".filter-news-loader .spinner-border").removeClass("opacity-0").addClass("opacity-100");
      $(".news-grid .blocker").show();
      event.preventDefault();
      $.ajax({
        type: "POST",
        url: "/wp-admin/admin-ajax.php",
        dataType: "html",
        data: {
          action: "filter_news",
          category: $(this).data("id"),
          postsperpage: $(this).data("postsperpage")
        },
        success: function(res) {
          $(".news-grid").html(res);
          $(".filter-news-loader .spinner-border").removeClass("opacity-100").addClass("opacity-0");
        }
      });
    });
    $(".filter-case-study").on("click", function(event) {
      $(".filter-case-study-buttons .filter-case-study").removeClass("filter-active");
      $(this).addClass("filter-active");
      $(".filter-case-study-loader .spinner-border").removeClass("opacity-0").addClass("opacity-100");
      $(".case-study-grid .blocker").show();
      event.preventDefault();
      $.ajax({
        type: "POST",
        url: "/wp-admin/admin-ajax.php",
        dataType: "html",
        data: {
          action: "filter_case_study",
          category: $(this).data("id"),
          postsperpage: $(this).data("postsperpage")
        },
        success: function(res) {
          $(".case-study-grid").html(res);
          $(".filter-case-study-loader .spinner-border").removeClass("opacity-100").addClass("opacity-0");
        }
      });
    });
    $(".filter-fiapmembers").on("click", function(event) {
      $(".filter-fiapmembers-buttons .filter-fiapmembers").removeClass("filter-active");
      $(this).addClass("filter-active");
      $(".filter-fiapmembers-loader .spinner-border").removeClass("opacity-0").addClass("opacity-100");
      $(".fiapmembers-grid .blocker").show();
      event.preventDefault();
      $.ajax({
        type: "POST",
        url: "/wp-admin/admin-ajax.php",
        dataType: "html",
        data: {
          action: "filter_fiapmembers",
          category: $(this).data("id")
        },
        success: function(res) {
          $(".fiapmembers-grid").html(res);
          $(".filter-fiapmembers-loader .spinner-border").removeClass("opacity-100").addClass("opacity-0");
        }
      });
    });
    $(".faq-dropdown-item").on("click", function(event) {
      $(".filter-faq-loader .spinner-border").removeClass("opacity-0").addClass("opacity-100");
      $(".faq-container .blocker").show();
      event.preventDefault();
      $(this).closest(".dropdown").find(".dropdown-label").html($(this).text());
      $.ajax({
        type: "POST",
        url: "/wp-admin/admin-ajax.php",
        dataType: "html",
        data: {
          action: "filter_faqs",
          category: $(this).data("id")
        },
        success: function(res) {
          $(".faq-container").html(res);
          $(".filter-faq-loader .spinner-border").removeClass("opacity-100").addClass("opacity-0");
        }
      });
    });
    $("#whitepaper-search-button").on("click", function(event) {
      let search_query = $("#whitepaper-search").val();
      let search_filter = $("#whitepaper-filter").find(":selected").val();
      console.log("Query :", search_query);
      console.log("Filter :", search_filter);
      $.ajax({
        type: "POST",
        url: "/wp-admin/admin-ajax.php",
        dataType: "html",
        data: {
          action: "filter_whitepapers",
          query: search_query,
          filter: search_filter
        },
        beforeSend: function() {
          $("#whitepaper-search-button .spinner-border").removeClass("opacity-0").addClass("opacity-100");
          $(".whitepapers-grid .blocker").show();
        },
        success: function(res) {
          $(".whitepapers-grid").html(res);
          $("#whitepaper-search-button .spinner-border").removeClass("opacity-100").addClass("opacity-0");
        }
      });
    });
    $("#mobilemenuToggle").on("click", function(event) {
      event.preventDefault;
      $(this).toggleClass("active");
      $("body").toggleClass("overflow-hidden");
      if ($(this).hasClass("active")) {
        $(this).removeClass("not-active");
      } else {
        $(this).addClass("not-active");
      }
      $("#mobilemenuDrawer").toggleClass("open");
    });
    $("#menu-mobile-menu .submenu-toggle").on("click", function(event) {
      $(this).toggleClass("open");
      $(this).closest(".menu-item").find(".sub-menu:first").slideToggle("slow", function() {
      });
    });
    const mediaQuery = window.matchMedia("(min-width: 1536px)");
    mediaQuery.addListener(setHeroSliderHeight);
    function setHeroSliderHeight(e) {
      if (e.matches) {
        if ($(".hero-slider").length) {
          let site_header = $("#site-header").outerHeight();
          let select_service = $(".select-service").outerHeight();
          let window_height = $(window).outerHeight();
          let hero_slider_height = window_height - site_header - select_service;
          $(".hero-slider .swiper-slide").outerHeight(hero_slider_height);
        }
      }
    }
    setHeroSliderHeight(mediaQuery);
    $(window).on("resize", function() {
      setHeroSliderHeight(mediaQuery);
    }).trigger("resize");
  });
  jQuery(function($) {
    var didScroll, offset, scrollPosition;
    offset = 160;
    didScroll = false;
    scrollPosition = $(document).scrollTop();
    if (scrollPosition > offset) {
      didScroll = true;
    }
    $(window).on("scroll touchmove", function() {
      return didScroll = true;
    });
    return setInterval(function() {
      if (didScroll) {
        $("#site-header").toggleClass("header-shrink", $(document).scrollTop() > offset);
        return didScroll = false;
      }
    }, 20);
  });
})();
