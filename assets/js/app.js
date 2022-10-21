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
          category: $(this).data("id")
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
          category: $(this).data("id")
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
