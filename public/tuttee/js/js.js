/* affix the navbar after scroll below header */
$('#nav').affix({
      offset: {
        top: $('header').height()-$('#nav').height()
      }
});	

/* highlight the top nav as scrolling occurs */
$('body').scrollspy({ target: '#nav' })

/* smooth scrolling for scroll to top */
$('.scroll-top').click(function(){
  $('body,html').animate({scrollTop:0},1000);
})

/* smooth scrolling for nav sections */
$('#nav .navbar-nav li>a').click(function(){
  var link = $(this).attr('href');
  var posi = $(link).offset().top+20;
  $('body,html').animate({scrollTop:posi},700);
})


// hexa
$(document).ready(function() {
  var color = 'one';
  var counter = 0;
  $('.desc').hide();
  $('.hexagon').hover(
    function() {
      $(this).find('.desc').fadeIn('fast');
      counter++;
      if (counter === 0) {
        color = 'base';
      } else if (counter === 1) {
        color = 'one';
      } else if (counter === 2) {
        color = 'two';
      } else if (counter === 3) {
        color = 'three';
      } else if (counter >= 4){
        counter = 0 ;
        color = 'base';
      }
      $(this).find('.desc').addClass(color);
    }, 
    function() {
      $(this).find('.desc').fadeOut('fast', function() {
        $(this).removeClass(color);
      });
    });
});
////////////////////price-sw//////
$(document).ready(function() {
  // When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}

$.fn.textWidth = function(text, font) {
    
    if (!$.fn.textWidth.fakeEl) $.fn.textWidth.fakeEl = $('<span>').hide().appendTo(document.body);
    
    $.fn.textWidth.fakeEl.text(text || this.val() || this.text() || this.attr('placeholder')).css('font', font || this.css('font'));
    
    return $.fn.textWidth.fakeEl.width();
};

$('.width-dynamic').on('input', function() {
    var inputWidth = $(this).textWidth();
    $(this).css({
        width: inputWidth
    })
}).trigger('input');


function inputWidth(elem, minW, maxW) {
    elem = $(this);
    console.log(elem)
}

var targetElem = $('.width-dynamic');

inputWidth(targetElem);
// end
// select same option for more then one select option
$(document).ready(function () {
    $("#product-select").change(function () {
        var val = $(this).val();
        if (val == "item1") {
            $("#2nd-product-select").html("<option value='test2'> “Bestshine Edu App” </option>");
        } else if (val == "item2") {
            $("#2nd-product-select").html("<option value='test2'> “Mega school app” </option>");
        } else if (val == "item3") {
            $("#2nd-product-select").html("<option value='test2'> “Shine school app” </option>");
        } 

        //else if (val == "item4") {
        //     $("#2nd-product-select").html("<option value='test2'> “Shineschoolapp” </option>");
        // }
        else if (val == "item0") {
            $("#2nd-product-select").html("<option value=''>--select one--</option>");
        }
    });
});

// select-option to hide table colume
$('#sel').on('change', function () {
  var val = $(this).val(),
      target = '.' + val;
  
  $('.choice').hide();
  $(target).show();
});
// end-select-option to hide table colume
// js-end.....
});





