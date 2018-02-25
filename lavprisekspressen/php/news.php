</section>

<article class="news">
  <div class="background_shader">
    <div id=debug><p></p></div>
    <button id="leftbtn">Left</button>
    <button id="rightbtn">Right</button>
    <div class="news_container" id="scroller">
      <?php
        require_once('retrieve_news.php');
      ?>
    </div>
  </div>
</article>
