
<h1>questionnaire</h1>
<table>
    
    
    <!--ストリートビューを出す-->
    <!--<iframe src="https://www.google.com/maps/embed?pb=!1m0!3m2!1sja!2sjp!4v1472552826685!6m8!1m7!1sJt7SfOStr14CqJtIiZKeRQ!2m2!1d32.80064795091949!2d130.7083975135525!3f281.9896875461729!4f-6.755472157123776!5f0.4439911525170044" -->
    <!--width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>-->
    
    
    
<form method="post" action="../lesson1_result">
        <input type="hidden" name="path_id" value="<?= $path->id ?>">
        <!--<input type="hidden" name="research_num" value="<?= count($researches->toArray()) ?>">-->
        <!--<?php print_r($researches->toArray()); ?>-->
        
    <h3><?= $path->name ?></h3>
    
    
    <div id="map" style="height:300px; width:300px; float: left;"></div>
    <div id="pano"style="height:300px; width:300px; float: left;"></div><br>
    
    <div id="position">
        Position
    </div>
    <div id="pov">
        Pov
    </div>
    
    <input type="hidden" id="lat" name='lat' value="">
    <input type="hidden" id="lng" name='lng' value="">
    <input type="hidden" id="heading" name='heading' value="">
    <input type="hidden" id="pitch" name='pitch' value="">


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
        document.getElementById('lng').setAttribute('value', panorama.getPosition().lng());
    }
    
    function pov_changed_callback() {
    //   var headingCell = document.getElementById('heading-cell');
    //   var pitchCell = document.getElementById('pitch-cell');
    //   headingCell.firstChild.nodeValue = panorama.getPov().heading + '';
    //   pitchCell.firstChild.nodeValue = panorama.getPov().pitch + '';
        console.log(""+panorama.getPov().heading+","+panorama.getPov().pitch);
        
        var pov = document.getElementById('pov');
        pov.firstChild.nodeValue = ""+panorama.getPov().heading+","+panorama.getPov().pitch;
        
        document.getElementById('heading').setAttribute('value', panorama.getPov().heading);
        document.getElementById('pitch').setAttribute('value', panorama.getPov().pitch);
        
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
    
    <?php foreach ($researches as $research): ?>
    <p>
    Q<?= $research->id ?>. <?= $research->question ?><br>
    <input type="radio" name="<?= $research->id ?>" value="yes"> はい
    <input type="radio" name="<?= $research->id ?>" value="no"> いいえ
    <input type="radio" name="<?= $research->id ?>" value="neither"> どちらでもない
    </p>
    
    <?php endforeach; ?>

    <p><input type="submit" value="送信する"></p>
    
    </form>
</table>


