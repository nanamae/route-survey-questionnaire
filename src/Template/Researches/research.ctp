<script src="//code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="/js/masonry.pkgd.min.js"></script>
<script src="/js/imagesloaded.pkgd.js"></script>

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
            <div><a href="/users/logout" class="btn btn-default navbar-btn" role="button">Sign Out</a></div>
      </ul>
    </div>
  </div>
</nav>

<?php 
        // map表示部分をファイル分割
        // Template/Element/map.ctp を読み込み
        // 引数として$pathを渡している
        echo $this->element('partial/map', ['path'=>$path]); 
  
?>


<div align="right" style="margin-top:5px;">
    <?php 
        echo $this->Html->link( __('もとの位置に戻る'), '', ['id' => 'reset-button', 'class'=>'btn btn-lg btn-primary'] );
    ?>
</div>


<?php if(count($path->images) > 0): // 写真があるときだけ ?>
    
    <?php 
         // 写真の表示部分をファイル分割
         // Template/Element/photos.ctp を読み込み
         // 引数として$pathを渡している
        //  echo $this->element('partial/photos', ['path'=>$path]); 
    ?>

<?php endif; ?>

    
<div class="container">
    <div class="alert alert-info" style="color:black; margin-top:10px; margin-bottom:10px; padding:10px; font-size: 14px;">
        <div>問１〜３は自身の立場として、問４〜１１は車いすを使用した場合を想定して回答してください。</div>
        <div>車いすを使用している方は自身の立場で回答してください。ストリートビューはカーソルキーで操作ができます。</div>
        <div>また、回答していただく経路の範囲は、<strong>ストリートビューを開いた最初の位置から左右の交差点まで</strong>です。</div>
    </div>

    <?php 
        // プログレスバー表示部分をファイル分割
        // Template/Element/progress.ctp を読み込み
        // 引数として$pathを渡している
        echo $this->element('partial/progressbar', ['currentResearch'=>$currentResearch]); 
    ?>

  <form method="post" action="../addAnswer">
    <input type="hidden" name="path_id" value="<?= $path->id ?>">
    
    <input type="hidden" id="lat" name='lat' value="<?= $path->lat ?>">
    <input type="hidden" id="lng" name='lng' value="<?= $path->lng ?>">
    <input type="hidden" id="heading" name='heading' value="0">
    <input type="hidden" id="pitch" name='pitch' value="0">
<div style="background: #eeeeee; width:1100px; height:500px; padding-left:10px; padding-right:10px; padding-top:5px; padding-bottom:5px; overflow: scroll;">


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
                    <input type="radio" name="<?= $research->id ?>" value="3" checked> 3 . <?= __('どちらともいえない') ?>
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
</div>
 
    <button class="btn btn-primary" type="submit" style="margin-top:10px;">送信する</button>
    <div style="margin-top:1em;">
        <?php 
            // プログレスバー表示部分をファイル分割
            // Template/Element/progress.ctp を読み込み
            // 引数として$pathを渡している
            echo $this->element('partial/progressbar', ['currentResearch'=>$currentResearch]); 
        ?>
    </div>
  </form>
</div>




