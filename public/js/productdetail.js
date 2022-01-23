$('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  fade: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: false,
  centerMode: true,
  focusOnSelect: true,
  arrows:false
  
});
// function wcqib_refresh_quantity_increments() {
//   jQuery("div.quantity:not(.buttons_added), td.quantity:not(.buttons_added)").each(function(a, b) {
//       var c = jQuery(b);
//       c.addClass("buttons_added"), c.children().first().before('<input type="button" value="-" class="minus" />'), c.children().last().after('<input type="button" value="+" class="plus" />')
//   })
// }
// String.prototype.getDecimals || (String.prototype.getDecimals = function() {
//   var a = this,
//       b = ("" + a).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
//   return b ? Math.max(0, (b[1] ? b[1].length : 0) - (b[2] ? +b[2] : 0)) : 0
// }), jQuery(document).ready(function() {
//   wcqib_refresh_quantity_increments()
// }), jQuery(document).on("updated_wc_div", function() {
//   wcqib_refresh_quantity_increments()
// }), jQuery(document).on("click", ".plus, .minus", function() {
//   var a = jQuery(this).closest(".quantity").find(".qty"),
//       b = parseFloat(a.val()),
//       c = parseFloat(a.attr("max")),
//       d = parseFloat(a.attr("min")),
//       e = a.attr("step");
//   b && "" !== b && "NaN" !== b || (b = 0), "" !== c && "NaN" !== c || (c = ""), "" !== d && "NaN" !== d || (d = 0), "any" !== e && "" !== e && void 0 !== e && "NaN" !== parseFloat(e) || (e = 1), jQuery(this).is(".plus") ? c && b >= c ? a.val(c) : a.val((b + parseFloat(e)).toFixed(e.getDecimals())) : d && b <= d ? a.val(d) : b > 0 && a.val((b - parseFloat(e)).toFixed(e.getDecimals())), a.trigger("change")
// });

$('.responsive').slick({
 
  dots: false,
  infinite: true,
  speed: 500,
  slidesToShow: 4,
  slidesToScroll: 1,
  variableWidth: false,
  pauseOnFocus: true,
  autoplay: false,
  
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 2,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
$(document).ready(function() {
  $('[data-toggle="collapse"]').click(function() {
    $(this).toggleClass( "active" );
    if ($(this).hasClass("active")) {
      $(this).text('Thu gọn nội dung');
    } else {
      $(this).text('Xem thêm nội dung');
    }
  })
});