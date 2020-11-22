$(function () {
  $(document).scroll(function () {
    let $nav = $(".navbar-fixed-top");
    $nav.toggleClas("scrolled", $(this).scrollTop() > $nav.height());
  });
});
