<?php
  //header
  $css = "style/contactusstyle.css";
  $page = "contact";
  include("header.php");
?>

<main class="container">
  <div id="start">
    <h1>Contact Us</h1> 
  </div>
    
    <div class="row contactUs">
        <div class=col-md-6>
            <div class="googlemap">
                <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
                <div style='overflow:hidden;height:380px;width:500px;'>
                    <div id='gmap_canvas' style='height:380px;width:500px;'></div>
                    <div><small><a href="http://embedgooglemaps.com">embed google map</a></small></div>
                    <div><small><a href="http://googlemapsgenerator.com">google maps html code</a></small></div>
                </div>
                <script type='text/javascript'>
                    function init_map() {
                        var myOptions = {
                            zoom: 13,
                            center: new google.maps.LatLng(49.25450289147468, -122.99938041901856),
                            mapTypeId: google.maps.MapTypeId.ROADMAP
                        };
                        map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
                        marker = new google.maps.Marker({
                            map: map,
                            position: new google.maps.LatLng(49.25450289147468, -122.99938041901856)
                        });
                        infowindow = new google.maps.InfoWindow({
                            content: '<strong>Condohub</strong><br>3700 Willingdon Ave, Burnaby, BC V5G 3H2<br>'
                        });
                        google.maps.event.addListener(marker, 'click', function() {
                            infowindow.open(map, marker);
                        });
                        infowindow.open(map, marker);
                    }
                    google.maps.event.addDomListener(window, 'load', init_map);
                </script>
            </div>
        </div>
        <div class="col-md-6 contactInfo" >
            <div style="margin: auto">
                <div>
                    <h2>Address</h2>
                    <h4>3700 Willingdon Ave<br>Burnaby, BC V5G 3H2<br>Canada</h4>
                </div>
                
                <div>
                    <br><br>
                    <h2>Email</h2>
                    <h4>info@condohub.com</h4>
                </div>
                
                <div>
                    <br>
                    <h2>Phone</h2>
                    <h4>T 604-374-9834<br>F 604-343-5565</h4>
                </div>
            </div>
        </div>
    </div>
    </main>



<?php 
  //footer
  include("footer.php")
?>