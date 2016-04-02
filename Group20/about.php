<?php
  //header
  $css = "style/about.css";
  $page = "about";
  include("header.php");
?>
  
<!-- Content -->
  <main class="container">
    <ul class="breadcrumb row">
      <li><a href="index.php">Home</a></li>
      <li class="active">About Us</li>
    </ul>
  <h1>ABOUT US</h1>
    <div class="row aboutcontent">
      <div class="aboutus">
        <div class="col-md-6 aboutcolumn1">
              
                <p class="aboutparagraph section">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div> 
      </div>
      <div class="aboutpicture">
        <div class="col-md-6 aboutcolumn2"><img src=images/camillus.jpg alt="grouse" width="400" height="400"></div>
        </div>
      </div>
    </main>

<?php 
  //footer
  include("footer.php")
?>