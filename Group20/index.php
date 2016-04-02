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
            <a href="about.php">
              <img src=images/stanleypark.jpg alt="stanley park" width="100%" height="100%" onmouseover="this.src='images/stanleypark-hover.jpg'; this.style.cursor='pointer'" onmouseout="this.src='images/stanleypark.jpg'" onclick="about.php" style="cursor: pointer;">
            </a>
          </div>
          <h1 class="title">About Us</h1>
          <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
      <div class="photo2">
        <div class="col-md-3 column2">
          <div class="center-block images">
            <a href="resources.php">
              <img src="images/BC-Place.jpg" alt="BC Place" width="100%" height="100%" onmouseover="this.src='images/BC-Place-hover.jpg'; this.style.cursor='pointer'" onmouseout="this.src='images/BC-Place.jpg'" onclick="resources.php" style="cursor: pointer;">
            </a>
          </div>
          <h1 class="title">Resources</h1>
          <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
      <div class="photo3">
        <div class="col-md-3 column3">
          <div class="center-block images">
            <a href="faq.php">
              <img src=images/gastown.jpg alt="gastown" width="100%" height="100%"  onmouseover="this.src='images/gastown-hover.jpg'; this.style.cursor='pointer'" onmouseout="this.src='images/gastown.jpg'" onclick="faq.php" style="cursor: pointer;">
            </a>
          </div>
          <h1 class="title">FAQ</h1>
          <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
      <div class="photo4">
        <div class="col-md-3 column4">
          <div class="center-block images">
            <a href="board.php">
              <img src=images/east-van.jpg alt="east-van" width="100%" height="100%"  onmouseover="this.src='images/east-van-hover.jpg'; this.style.cursor='pointer'" onmouseout="this.src='images/east-van.jpg'" onclick="board.php" style="cursor: pointer;">
            </a>
          </div>
          <h1 class="title">Board</h1>
          <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </div>
  </main>

<?php 
  //footer
  include("footer.php")
?>