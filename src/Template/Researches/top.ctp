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
      <a class="navbar-brand" href="#">WELCOME Questionnaire</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
    </div>
  </div>
</nav>


    
<h3 style="padding-top:40px;">このアンケートについて</h3>
<div style="padding-top:20px;padding-bottom:20px">このアンケートはGoogleのストリートビューと写真を見て質問に答えるものです。<br>
これは、崇城大学情報学部の和泉研究室と建築学科の古賀研究室が合同で行っている車いす使用者に現在地から目的地までの最も移動しやすい経路を提示する研究の一貫で、対象地は熊本県熊本市の中心街の一部としています。</div>

 
<div style="border-style: dotted ; border-width: 3px; padding: 10px 5px 10px 20px;border-radius: 10px;"><img src="/img/explainimage.png"></div>
<div style="padding:10px;">経路ごとにこれらのような写真を見て以下のような質問に答えてください。</div>
<div style="border-style: dotted ; border-width: 3px; padding: 10px 5px 10px 20px;border-radius: 10px;"><img src="/img/explainimage2.png"></div>
<div style="padding:10px;">問１〜３は自身の立場として回答し、問４〜１１は車いす使用者の立場を想定して回答してください。</div>
<div style="padding:10px; padding-top:2px;">車いす使用者の方々は全て自身の立場として回答してください。</div>
<div style="padding:10p; padding-bottom:20px">評価については、</div>
<ol>
  <li><?= __('全く同意できない') ?></li>
  <li><?= __('同意できない') ?></li>
  <li><?= __('どちらともいえない') ?></li>
  <li><?= __('同意できる') ?></li>
  <li><?= __('非常に同意できる') ?></li>
</ol>
<div>となっています。</div>


<?php 
  echo $this->Html->link( __('はじめる'), ['controller' => 'Researches', 'action' => 'start', '_full' => true], ['class'=>'btn btn-primary'] );
?>
</div>
