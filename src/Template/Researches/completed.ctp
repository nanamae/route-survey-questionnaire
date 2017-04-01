<script src="//code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="/js/masonry.pkgd.min.js"></script>
<script src="/js/imagesloaded.pkgd.js"></script>


    
<?= $this->Html->css('cake.css') ?>
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
      <a class="navbar-brand" href="#">Thank you for your coorporation</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
    </div>
  </div>
</nav>


    
<h3 style="padding-top:40px;">アンケートへの回答ありがとうございました</h3>
<div>
<?php 
  echo $this->Html->link( __('ログアウトする'), ['controller' => 'Users', 'action' => 'logout', '_full' => true], ['class'=>'btn btn-lg btn-primary'] );
?>
</div>
</div>
