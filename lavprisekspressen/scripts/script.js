var show = false;
var scrollerIndex = 0;

function main() {
  var elements = $('#scroller .content').length;

  for (var i = 0; i < elements  - 1; i++) {
    $(".dot_container").append("<div class='dot'></div>\n");
  }
}

$(document).ready(function(){

    main();

    // Header
    $("#loginbtn").click(function(){
      var panel = $("#login_drop");
      var btn = $("#loginbtn");

      if (panel.css("display") == "block") {
        panel.slideUp(250);
        btn.css({"background":"#181b2b","color":"#fff"});
      } else {
        panel.slideDown(250);
        btn.css({"background":"orange", "color":"#000"});
      }
    });

    $("#create_account").click(function(){
      $('#login_form').css("display", "none");
      $('#registration_form').css("display","block");
      $('#rbtn').css("display", "none");
      $('#lbtn').css("display", "block");
    });

    $('#log_in').click(function(){
      $('#login_form').css("display", "block");
      $('#registration_form').css("display", "none");
      $('#rbtn').css("display", "block");
      $('#lbtn').css("display", "none");
    });

    // News section
    $("#leftbtn").click(function(){
      var elements = $('#scroller .content').length;

      if (scrollerIndex == 0) {
        scrollerIndex = elements - 1;
        $(".content").css({left: (-500 * scrollerIndex) + 'px'});
      }

      scrollerIndex--;
      var distance = (-500 * scrollerIndex) + 'px';
      $(".content").animate({left: distance});

      $(".dot").css("background-color", "#fff");
      $(".dot:nth-child(" + (scrollerIndex + 1) + ")").css("background-color", "orange");
    });

    $("#rightbtn").click(function(){
      var elements = $('#scroller .content').length;

      if (scrollerIndex == elements - 1) {
        scrollerIndex = 0;
        $(".content").css({left: '0px'});
      }

      scrollerIndex++;
      var distance = (-500 * scrollerIndex) + 'px';
      $(".content").animate({left: distance});

      $(".dot").css("background-color", "#fff");
      $(".dot:nth-child(" + ((scrollerIndex) % (elements - 1) + 1) + ")").css("background-color", "orange");
    });

    $(".dot").click(function(){
      var elements = $('#scroller .content').length;
      if (scrollerIndex == (elements - 1)) {
        scrollerIndex = 0;
        $(".content").css({left: '0px'});
      }

      var index = $(this).index();
      var distance = (-500 * index) + 'px';
      $(".content").animate({left: distance});
      $(".dot").css("background-color", "#fff");
      $(this).css("background-color", "orange");
      scrollerIndex = index;
    });
});
