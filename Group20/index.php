<?php
  //header
  $css = "style/home.css";
  $page = "home";
  include("header.php");
?>

  <!-- Content -->
  <main class="container-fluid">
    <div class="row content1">
      <div class="photo1">
        <div class="col-md-3 column1">
          <div class="center-block images">
            <div id="start">
            <a href="about.php">
              <img src=images/stanleypark.jpg alt="stanley park" width="100%" height="100%" onmouseover="this.src='images/stanleypark-hover.jpg'; this.style.cursor='pointer'" onmouseout="this.src='images/stanleypark.jpg'" onclick="about.php" style="cursor: pointer;">
            </a>
            </div>
          </div>
          <br>
          <p class="paragraph">Find out a more about what we do and how we are here to help you.</p>
        </div>
      </div>
      <div class="photo2">
        <div class="col-md-3 column2">
          <div class="center-block images">
            <a href="resources.php">
              <img src="images/BC-Place.jpg" alt="BC Place" width="100%" height="100%" onmouseover="this.src='images/BC-Place-hover.jpg'; this.style.cursor='pointer'" onmouseout="this.src='images/BC-Place.jpg'" onclick="resources.php" style="cursor: pointer;">
            </a>
          </div>
          <br>
          <p class="paragraph">Have an unanswered strata question and can't find what you're looking for on the board? We have gathered several other relevant websites that you can check and hopefully find what you're looking for.</p>
        </div>
      </div>
      <div class="photo3">
        <div class="col-md-3 column3">
          <div class="center-block images">
            <a href="faq.php">
              <img src=images/gastown.jpg alt="gastown" width="100%" height="100%"  onmouseover="this.src='images/gastown-hover.jpg'; this.style.cursor='pointer'" onmouseout="this.src='images/gastown.jpg'" onclick="faq.php" style="cursor: pointer;">
            </a>
          </div>
          <br>
          <p class="paragraph">Have a strata related question that needs to be answered? Check to see if it is one our frequently asked questions. If it isn't please feel free to use our board.</p>
        </div>
      </div>
      <div class="photo4">
        <div class="col-md-3 column4">
          <div class="center-block images">
            <a href="board.php">
              <img src=images/east-van.jpg alt="east-van" width="100%" height="100%"  onmouseover="this.src='images/east-van-hover.jpg'; this.style.cursor='pointer'" onmouseout="this.src='images/east-van.jpg'" onclick="board.php" style="cursor: pointer;">
            </a>
          </div>
          <br>
          <p class="paragraph">Have concerns about your current strata or curious about strata rules and bylaws? Check to see if the topic you're interested in is a current thread or start a new thread if it isn't.</p>
        </div>
      </div>
    </div>
  </main>

<?php 
  //footer
  include("footer.php")
?>