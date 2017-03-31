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

<div class="container" style="margin-top:20px; margin-bottom:20px; padding-top:40px;">
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