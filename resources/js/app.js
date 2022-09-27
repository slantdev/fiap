//import 'tw-elements';

// Navigation toggle
// window.addEventListener('load', function () {
//   let main_navigation = document.querySelector('#primary-menu');
//   document
//     .querySelector('#primary-menu-toggle')
//     .addEventListener('click', function (e) {
//       e.preventDefault();
//       main_navigation.classList.toggle('hidden');
//     });
// });

jQuery(function ($) {
  // News Filter
  $('.filter-news').on('click', function (event) {
    $('.filter-news-buttons .filter-news').removeClass('filter-active');
    $(this).addClass('filter-active');
    $('.filter-news-loader .spinner-border')
      .removeClass('opacity-0')
      .addClass('opacity-100');
    $('.news-grid .blocker').show();
    event.preventDefault();
    $.ajax({
      type: 'POST',
      url: '/wp-admin/admin-ajax.php',
      dataType: 'html',
      data: {
        action: 'filter_news',
        category: $(this).data('id'),
      },
      success: function (res) {
        $('.news-grid').html(res);
        $('.filter-news-loader .spinner-border')
          .removeClass('opacity-100')
          .addClass('opacity-0');
      },
    });
  });

  // Case Study Filter
  $('.filter-case-study').on('click', function (event) {
    $('.filter-case-study-buttons .filter-case-study').removeClass(
      'filter-active'
    );
    $(this).addClass('filter-active');
    $('.filter-case-study-loader .spinner-border')
      .removeClass('opacity-0')
      .addClass('opacity-100');
    $('.case-study-grid .blocker').show();
    event.preventDefault();
    $.ajax({
      type: 'POST',
      url: '/wp-admin/admin-ajax.php',
      dataType: 'html',
      data: {
        action: 'filter_case_study',
        category: $(this).data('id'),
      },
      success: function (res) {
        $('.case-study-grid').html(res);
        $('.filter-case-study-loader .spinner-border')
          .removeClass('opacity-100')
          .addClass('opacity-0');
      },
    });
  });
});
