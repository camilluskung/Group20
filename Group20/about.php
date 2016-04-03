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
    <div id="start">
  <h1>ABOUT US</h1>
    </div>
    <div class="row aboutcontent">
      <div class="aboutus">
        <div class="col-md-6 aboutcolumn1">
          <p class="aboutparagraph section"> We are a group of property management professionals here to provide stratified property owners a source of information and answers to strata related questions that they might have (ie. repairs, regulations, warranties). This website serves as a line of communication between the owners and property management professionals.<br><br><strong>What we want to acheive:</strong><br><br>	
            Reduce the anxiousness awaiting responses from 3rd parties (ie. strata council, property manager, neighbours).<br><br>
            Reduce time spent seeking answers for common strata questions.<br><br> 
            Provide basic knowledge of what to expect from a strata as a first-time home buyer.<br><br>
            Allow users to register and post in a forum. Allow experienced property managers admin capabilities to provide non-legal answers and insight to any questions people may have.</p>
        </div> 
      </div>
      <div class="aboutpicture">
        <div class="col-md-6 aboutcolumn2"><img src=images/professionals.jpg alt="grouse" width="100%" height="100%"></div>
        </div>
      </div>
    </main>

<?php 
  //footer
  include("footer.php")
?>