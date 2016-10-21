 <h1> Street View</h1>
 
<div id="map" style="height:300px; width:300px; float: left;"></div>
<div id="pano"style="height:300px; width:300px; float: left;"></div>

<div id="position">
    <div>Position</div>
</div>

<div id="pov">
    <div>Pov</div>
</div>

<input type="hidden" id="lat" value="">


<script>
    var map;
    var panorama;
    
    
    function position_changed_callback() {
    //   var positionCell = document.getElementById('position-cell');
    //   positionCell.firstChild.nodeValue = panorama.getPosition() + '';
        console.log(""+panorama.getPosition().lat()+","+panorama.getPosition().lng());
        var position = document.getElementById('position');
        position.firstChild.nodeValue = ""+panorama.getPosition().lat()+","+panorama.getPosition().lng();
        
        document.getElementById('lat').setAttribute('value', panorama.getPosition().lat());
        
    }
    
    function pov_changed_callback() {
    //   var headingCell = document.getElementById('heading-cell');
    //   var pitchCell = document.getElementById('pitch-cell');
    //   headingCell.firstChild.nodeValue = panorama.getPov().heading + '';
    //   pitchCell.firstChild.nodeValue = panorama.getPov().pitch + '';
        console.log(""+panorama.getPov().heading+","+panorama.getPov().pitch);
        
        var pov = document.getElementById('pov');
        pov.firstChild.nodeValue = ""+panorama.getPov().heading+","+panorama.getPov().pitch;
        
    }
    
    function click_callback() {
    // infowindow.open(marker.get('map'), marker);
    console.log('hello');
  }
  
    
    function initialize() {
      var fenway = {lat: 42.345573, lng: -71.098326};
      
    map = new google.maps.Map(document.getElementById('map'), {
        center: fenway,
        zoom: 14
      });
      
    panorama = new google.maps.StreetViewPanorama(
        document.getElementById('pano'), {
            position: fenway,
            pov: {
              heading: 34,
              pitch: 10
            }
        }
    );
    
    panorama.addListener('position_changed', position_changed_callback);
    panorama.addListener('pov_changed', pov_changed_callback);
    map.addListener('click',click_callback);
    
      map.setStreetView(panorama);
    }
    
    
</script>

<!--<script async defer-->
<!--    src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&signed_in=true&callback=initialize">-->
<script async defer
    src="https://maps.googleapis.com/maps/api/js?callback=initialize">
</script>