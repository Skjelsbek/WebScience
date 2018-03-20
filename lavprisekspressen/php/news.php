</section>

<article class="news">
  <div class="background_shader">
    <div class="leftbtn_container">
      <img id="leftbtn" src="../img/arrows.png">
    </div>
    <div class="rightbtn_container">
      <img id="rightbtn" src="../img/arrows.png">
    </div>
    <div class="news_container" id="scroller">
      <?php
        require_once('retrieve_news.php');
      ?>
    </div>

    <div class="dot_container"></div>
  </div>
</article>
