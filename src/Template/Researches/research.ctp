<script src="//code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="/js/masonry.pkgd.min.js"></script>
<script src="/js/imagesloaded.pkgd.js"></script>

<!--<script async defer-->
<!--    src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&signed_in=true&callback=initialize">-->
<script async defer
    src="https://maps.googleapis.com/maps/api/js?callback=initialize">
</script>

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
        <li class="active"><a href="/researches/top">Home</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
            <div><a href="/users/add" class="btn btn-primary navbar-btn" role="button">Sign Up</a> 
            <a href="/users/logout" class="btn btn-default navbar-btn" role="button">Sign Out</a></div>
      </ul>
    </div>
  </div>
</nav>

    
    
<div class="container theme-showcase placement" style="padding: 0;">
    <div class="container clearfix" role="main">
        <div id="map" style="height:350px; width:50%; float: left;"></div>
        <div id="pano"style="height:350px; width:50%; float: left;"></div><br>
    </div>
    <!--<div id="position">-->
    <!--    Position-->
    <!--</div>-->
    <!--<div id="pov">-->
    <!--    Pov-->
    <!--</div>-->
</div>


<script type="text/javascript">
$(function(){
    var $grid = $('.grid').imagesLoaded( function() {
      $grid.masonry({
            itemSelector: '.grid-item',
            percentPosition: true,
            columnWidth: '.grid-sizer',
      }); 
    });
});
</script>

<div class="container" style="margin-top:20px; margin-bottom:20px">
  <div class="grid">
    <div class="grid-sizer"></div>
    
    <?php foreach ($path->images as $idx => $image): ?>
      <?php if($idx >= 3) break; ?>
        <div class="grid-item">
              <img src="<?= $this->Url->build(["controller" => "Images", "action" => "content", $image->id]); ?>" />
        </div>
    <?php endforeach; ?>
  </div>
</div>

    
<div class="container">
  <form method="post" action="../addAnswer">
    <input type="hidden" name="path_id" value="<?= $path->id ?>">
    <!--<input type="hidden" name="research_num" value="<?= count($researches->toArray()) ?>">-->
    <!--<?php print_r($researches->toArray()); ?>-->
    
    
    <input type="hidden" id="lat" name='lat' value="">
    <input type="hidden" id="lng" name='lng' value="">
    <input type="hidden" id="heading" name='heading' value="0">
    <input type="hidden" id="pitch" name='pitch' value="0">

    <!--<pre><?php debug($path) ?></pre>-->

    <?php foreach ($researches as $research): ?>
    
        <div class="form-group">
            <label>Q<?= $research->id ?>. <?= $research->question ?></label>
            <div class="radio">
                <label>
                    <input type="radio" name="<?= $research->id ?>" value="1"> 1 . <?= __('全く同意できない') ?>
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="<?= $research->id ?>" value="2"> 2 . <?= __('同意できない') ?>
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="<?= $research->id ?>" value="3"> 3 . <?= __('どちらともいえない') ?>
                </label>
            </div>
             <div class="radio">
                <label>
                    <input type="radio" name="<?= $research->id ?>" value="4"> 4 . <?= __('同意できる') ?>
                </label>
            </div>
             <div class="radio">
                <label>
                    <input type="radio" name="<?= $research->id ?>" value="5"> 5 . <?= __('非常に同意できる') ?>
                </label>
            </div>
        </div>
    <?php endforeach; ?>
    <button class="btn btn-prmary" type="submit">送信する</button>
  </form>
</div>




