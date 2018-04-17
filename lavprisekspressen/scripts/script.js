// scrollerIndex is for news carousel, and scrollerIndex2 is for sub page carousel
// Used to keep track of what page you're on
var scrollerIndex = 0;
var scrollerIndex2 = 0;

// Called when document is ready
// Appending dots to the dot container in carousels
function main()
{
  var elements = $('#scroller .content').length;

  for (var i = 0; i < elements  - 1; i++)
  {
    $(".dot_container").append("<div class='dot'></div>\n");
  }

  var elements = $('#scroller2 .content').length;

  for (var i = 0; i < elements  - 1; i++)
  {
    $(".dot_container2").append("<div class='dot'></div>\n");
  }
}

// Waits for the page to fully load before running any js
$(document).ready(function()
{
    // Appending dots to carousels
    main();

    // Login dropdown button
    $("#loginbtn").click(function()
    {
      var panel = $("#login_drop");
      var btn = $("#loginbtn");

      // Slide login panel up if it already is displayed, or slides it down if it's not
      // Also change the color of the button
      if (panel.css("display") == "block")
      {
        panel.slideUp(250);
        btn.css({"background":"#181b2b","color":"#fff"});
      }
      else
      {
        panel.slideDown(250);
        btn.css({"background":"orange", "color":"#000"});
      }
    });

    // Show registration form when "create account" is clicked
    $("#create_account").click(function()
    {
      $('#login_form').css("display", "none");
      $('#registration_form').css("display","block");
      $('#rbtn').css("display", "none");
      $('#lbtn').css("display", "block");
    });

    // Show login form when "Already have an account? Log in" is clicked
    $('#log_in').click(function()
    {
      $('#login_form').css("display", "block");
      $('#registration_form').css("display", "none");
      $('#rbtn').css("display", "block");
      $('#lbtn').css("display", "none");
    });

    // Setting up datepicker
    $( function()
    {
      $(".datepicker").datepicker();
    });

    // Display return datepicker when "want return" checkbox is checked
    $("#want_return").click(function()
    {
      if (!$("#want_return").is(":checked"))
      {
        $(".return").css("display", "none");
      }
      else
      {
        $(".return").css("display", "inline-block");
      }
    });

    // Place datepicker information in hidden input fields to pass it with the post method
    $("#buy_ticket_button").click(function(){
      $("#departure_date").val($(".departure .datepicker").val());
      if ($("#want_return").is(":checked")) {
        $("#return_date").val($(".return .datepicker").val());
      }
    });

    // Sub page carousel left button functionality
    $("#leftbtn2").click(function()
    {
      var elements = $('#scroller2 .content').length;

      if (scrollerIndex2 == 0)
      {
        scrollerIndex2 = elements - 1;
        $("#scroller2 .content").css({left: (-500 * scrollerIndex2) + 'px'});
      }

      scrollerIndex2--;
      var distance = (-500 * scrollerIndex2) + 'px';
      $("#scroller2 .content").animate({left: distance});

      $(".dot_container2 .dot").css("background-color", "#fff");
      $(".dot_container2 .dot:nth-child(" + (scrollerIndex2 + 1) + ")").css("background-color", "orange");
    });

    // Sub page carousel right button functionality
    $("#rightbtn2").click(function()
    {
      var elements = $('#scroller2 .content').length;

      if (scrollerIndex2 == elements - 1)
      {
        scrollerIndex2 = 0;
        $("#scroller2 .content").css({left: '0px'});
      }

      scrollerIndex2++;
      var distance = (-500 * scrollerIndex2) + 'px';
      $("#scroller2 .content").animate({left: distance});

      $(".dot_container2 .dot").css("background-color", "#fff");
      $(".dot_container2 .dot:nth-child(" + ((scrollerIndex2) % (elements - 1) + 1) + ")").css("background-color", "orange");
    });

    // Sub page carousel dot click functionality
    $(".dot_container2 .dot").click(function()
    {
      var elements = $('#scroller2 .content').length;
      if (scrollerIndex2 == (elements - 1))
      {
        scrollerIndex2 = 0;
        $("#scroller2 .content").css({left: '0px'});
      }

      var index = $(this).index();
      var distance = (-500 * index) + 'px';
      $("#scroller2 .content").animate({left: distance});
      $(".dot_container2 .dot").css("background-color", "#fff");
      $(this).css("background-color", "orange");
      scrollerIndex2 = index;
    });

    // News carousel left button functionality
    $("#leftbtn").click(function()
    {
      var elements = $('#scroller .content').length;

      if (scrollerIndex == 0)
      {
        scrollerIndex = elements - 1;
        $("#scroller .content").css({left: (-500 * scrollerIndex) + 'px'});
      }

      scrollerIndex--;
      var distance = (-500 * scrollerIndex) + 'px';
      $("#scroller .content").animate({left: distance});

      $(".dot_container .dot").css("background-color", "#fff");
      $(".dot_container .dot:nth-child(" + (scrollerIndex + 1) + ")").css("background-color", "orange");
    });

    // News carousel right button functionality
    $("#rightbtn").click(function()
    {
      var elements = $('#scroller .content').length;

      if (scrollerIndex == elements - 1) {
        scrollerIndex = 0;
        $("#scroller .content").css({left: '0px'});
      }

      scrollerIndex++;
      var distance = (-500 * scrollerIndex) + 'px';
      $("#scroller .content").animate({left: distance});

      $(".dot_container .dot").css("background-color", "#fff");
      $(".dot_container .dot:nth-child(" + ((scrollerIndex) % (elements - 1) + 1) + ")").css("background-color", "orange");
    });

    // News carousel dot click functionality
    $(".dot_container .dot").click(function()
    {
      var elements = $('#scroller .content').length;
      if (scrollerIndex == (elements - 1))
      {
        scrollerIndex = 0;
        $("#scroller .content").css({left: '0px'});
      }

      var index = $(this).index();
      var distance = (-500 * index) + 'px';
      $("#scroller .content").animate({left: distance});
      $(".dot_container .dot").css("background-color", "#fff");
      $(this).css("background-color", "orange");
      scrollerIndex = index;
    });
});
