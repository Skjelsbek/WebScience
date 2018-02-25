window.onload = main;

var show = false;
var scrollerIndex = 0;

function main() {
  document.getElementById('loginbtn').onclick = toggle_login;
  document.getElementById('rbtn').onclick = reg;
  document.getElementById('lbtn').onclick = login;
}

function toggle_login() {
  var panel = document.getElementById('login_drop');
  var btn = document.getElementById('loginbtn');
  if (panel.style.display == "none") {
    panel.style.display = "block";
    btn.style.background = 'orange';
    btn.style.color = '#000';
  } else {
    panel.style.display = "none";
    btn.style.background = '#181b2b';
    btn.style.color = '#fff';
  }
}

function reg() {
  var form = document.getElementById('login_form');
  form.style.display = "none";

  form = document.getElementById('registration_form');
  form.style.display = "block";

  var btn = document.getElementById('rbtn');
  btn.style.display = "none";

  btn = document.getElementById('lbtn');
  btn.style.display = "block";
}

function login() {
  var form = document.getElementById('login_form');
  form.style.display = "block";

  form = document.getElementById('registration_form');
  form.style.display = "none";

  var btn = document.getElementById('rbtn');
  btn.style.display = "block";

  btn = document.getElementById('lbtn');
  btn.style.display = "none";
}

$(document).ready(function(){
    $("#leftbtn").click(function(){
      var elements = $('#scroller .content').length;
      if (scrollerIndex == 0) {
        scrollerIndex = elements - 1;
        var distance = (-500 * scrollerIndex) + 'px';
        $(".content").animate({left: distance});
      }
      else {
        scrollerIndex--;
        var distance = (-500 * scrollerIndex) + 'px';
        $(".content").animate({left: distance});
      }
      $("#debug").text(scrollerIndex);
    });

    $("#rightbtn").click(function(){
      var elements = $('#scroller .content').length;
      if (scrollerIndex == elements - 1) {
        scrollerIndex = 0;
        $(".content").animate({left: '0px'});
      }
      else {
        scrollerIndex++;
        var distance = (-500 * scrollerIndex) + 'px';
        $(".content").animate({left: distance});
      }
      $("#debug").text(scrollerIndex);
    });
});
