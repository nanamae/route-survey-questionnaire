<?= $this->Html->css('research.css') ?>


    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Questionnaire　NO.<?= $path->name ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="http://questionnaire-whc-nanamae.c9users.io/samples">Home</a></li>
            <li><a href="https://questionnaire-whc-nanamae.c9users.io/paths">Paths</a></li>
          </ul>
        </div>
      </div>
    </nav>

    
    
    <div class="container theme-showcase placement">
        <div class="container clearfix" role="main">
            <div id="map" style="height:350px; width:350px; float: left;"></div>
            <div id="pano"style="height:350px; width:350px; float: left;"></div><br>
        </div>
        <!--<div id="position">-->
        <!--    Position-->
        <!--</div>-->
        <!--<div id="pov">-->
        <!--    Pov-->
        <!--</div>-->
    </div>
    
<div class="container">    
<form method="post" action="../lesson1_result">
        <input type="hidden" name="path_id" value="<?= $path->id ?>">
        <!--<input type="hidden" name="research_num" value="<?= count($researches->toArray()) ?>">-->
        <!--<?php print_r($researches->toArray()); ?>-->
    
    
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
        // console.log(""+panorama.getPosition().lat()+","+panorama.getPosition().lng());
        // var position = document.getElementById('position');
        // position.firstChild.nodeValue = ""+panorama.getPosition().lat()+","+panorama.getPosition().lng();
        
        document.getElementById('lat').setAttribute('value', panorama.getPosition().lat());
        document.getElementById('lng').setAttribute('value', panorama.getPosition().lng());
    }
    
    function pov_changed_callback() {
    //   var headingCell = document.getElementById('heading-cell');
    //   var pitchCell = document.getElementById('pitch-cell');
    //   headingCell.firstChild.nodeValue = panorama.getPov().heading + '';
    //   pitchCell.firstChild.nodeValue = panorama.getPov().pitch + '';
        // console.log(""+panorama.getPov().heading+","+panorama.getPov().pitch);
        
        // var pov = document.getElementById('pov');
        // pov.firstChild.nodeValue = ""+panorama.getPov().heading+","+panorama.getPov().pitch;
        
        document.getElementById('heading').setAttribute('value', panorama.getPov().heading);
        document.getElementById('pitch').setAttribute('value', panorama.getPov().pitch);
        
    }
    
    function click_callback() {
    // infowindow.open(marker.get('map'), marker);
    console.log('hello');
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
        linksControl: false
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

    <!--<pre><?php debug($path) ?></pre>-->

    <?php foreach ($path->images as $image): ?>
        <img src="<?= $this->Url->build(["controller" => "Images", "action" => "content", $image->id]); ?> " height="200px" />
    <?php endforeach; ?>
    
    <?php foreach ($researches as $research): ?>
    <!--<p>-->
    <!--Q<?= $research->id ?>. <?= $research->question ?><br>-->
    <!--<input type="radio" name="<?= $research->id ?>" value="yes"> はい-->
    <!--<input type="radio" name="<?= $research->id ?>" value="no"> いいえ-->
    <!--<input type="radio" name="<?= $research->id ?>" value="neither"> どちらでもない-->
    <!--</p>-->
    
        <div class="form-group">
            <label>Q<?= $research->id ?>. <?= $research->question ?></label>
            <div class="radio">
                <label>
                    <input type="radio" name="<?= $research->id ?>" value="yes"> はい
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="<?= $research->id ?>" value="no"> いいえ
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="<?= $research->id ?>" value="neither"> どちらでもない
                </label>
            </div>
        </div>
    <?php endforeach; ?>

   
    <button class="btn btn-prmary" type="submit">送信する</button>
  
    </form>



