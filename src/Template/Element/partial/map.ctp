<?= $this->Html->css('map.css') ?>
<script>
    var map;
    var panorama;
    
    
    function position_changed_callback() {
        document.getElementById('lat').setAttribute('value', panorama.getPosition().lat());
        document.getElementById('lng').setAttribute('value', panorama.getPosition().lng());
    }
    
    function pov_changed_callback() {
        document.getElementById('heading').setAttribute('value', panorama.getPov().heading);
        document.getElementById('pitch').setAttribute('value', panorama.getPov().pitch);
        
    }
    
    function click_callback() {
        console.log('');
    }
  
    
    function initialize() {
      var fenway = {
          lat: parseFloat('<?= $path->lat ?>'), 
          lng: parseFloat('<?= $path->lng ?>')
          
          };
        
        map = new google.maps.Map(document.getElementById('map'), {
            center: fenway,
            zoom: 16,
            scaleControl: false,
            zoomControl: false,
            scrollWheel: false,
            draggable: false,
            disableDefaultUI: true,
            disableDoubleClickZoom: true,
            maxZoom: 16,
            minZoom: 16
          });
          
        var marker = new google.maps.Marker({
            position: fenway,
            map: map,
            title: 'Your Here!!'
        });
        
        // var marker = google.maps.event.addListener(map, 'click', function(event) {
        //   // クリック地点の緯度経度
        //   var position = event.latLng;
        //   // マーカー生成
        //   var marker = new google.maps.Marker({
        //     position: position,
        //     map: map
        //   });
        // });
          
        panorama = new google.maps.StreetViewPanorama(
            document.getElementById('pano'), {
                position: fenway,
                pov: {
                  heading: parseFloat('<?= $path->heading ?>'),
                  pitch: parseFloat('<?= $path->pitch ?>')
                },
                disableDefaultUI: true,
                scrollwheel: false,
                disableDoubleClickZoom: true,
                clickToGo: false,
                linksControl: true,
                motionTracking: false,
                panControl: false,
                streetviewControl: false,
                draggable: false
            }
        );
        
        panorama.addListener('position_changed', position_changed_callback);
        panorama.addListener('pov_changed', pov_changed_callback);
        map.addListener('click',click_callback);
        
        map.setStreetView(panorama);
    }
    
    $(function(){
        
        $('#reset-button').click(function(e){
            map.setCenter({lat: parseFloat('<?= $path->lat ?>'), lng: parseFloat('<?= $path->lng ?>')});
            panorama.setPov({heading: parseFloat('<?= $path->heading ?>'), pitch: parseFloat('<?= $path->pitch ?>')});
            panorama.setPosition({lat: parseFloat('<?= $path->lat ?>'), lng: parseFloat('<?= $path->lng ?>')});
            
            console.log("reset");
            return false;
        });
    })
</script>

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDe6K1gRrN9SKSc499mJedzE5J18sDOPTQ&callback=initialize">
</script>


<div class="container theme-showcase placement" style="padding: 0;">
    <div class="container clearfix" role="main">
        <div id="map" style="height:350px; width:50%; float: left;"></div>
        <div id="column-right">
            <div class="streetview">
                <div id="pano"style="height:350px; width:50%; float: left;"></div>
            </div>
        </div>
        
    </div>
    <!--<div id="position">-->
        <!--Position-->
    <!--</div>-->
    <!--<div id="pov">-->
        <!--Pov-->
    <!--</div>-->
</div>