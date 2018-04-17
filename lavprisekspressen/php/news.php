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
        // Retrieves news from db
        require_once('retrieve_news.php');
      ?>
    </div>

    <!-- js put dots in this container later, this is to see what index you're on in the carousel -->
    <div class="dot_container"></div>
  </div>
</article>
