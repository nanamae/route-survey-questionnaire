<script src="//code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="/js/masonry.pkgd.min.js"></script>
<script src="/js/imagesloaded.pkgd.js"></script>

<?= $this->Html->css('research.css') ?>

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

<h1>Masonry - imagesLoaded progress</h1>

<div class="grid">
    <div class="grid-sizer"></div>
    <div class="grid-item">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/orange-tree.jpg" />
    </div>
    <div class="grid-item">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/submerged.jpg" />
    </div>
    <div class="grid-item">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/look-out.jpg" />
    </div>
    <div class="grid-item">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/one-world-trade.jpg" />
    </div>
    <div class="grid-item">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/drizzle.jpg" />
    </div>
    <div class="grid-item">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/cat-nose.jpg" />
    </div>
    <div class="grid-item">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/contrail.jpg" />
    </div>
    <div class="grid-item">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/golden-hour.jpg" />
    </div>
    <div class="grid-item">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/flight-formation.jpg" />
    </div>
  
</div>

 