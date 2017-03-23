<?= $this->Html->css('cake.css') ?>
<?= $this->Html->css('app.css') ?>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Login</a>
      </div>
          <!--<ul class="nav navbar-nav navbar-right">-->
          <!--  <div>-->
          <!--     <a href="/users/add" class="btn btn-primary navbar-btn" role="button">Sign Up</a> -->
          <!--     <a href="/users/login" class="btn btn-default navbar-btn" role="button">Sign In</a>-->
          <!--  </div>-->
          <!--</ul>-->
    </div>
</nav>

<p class="explanation">初めての方はこちら</p>
<div class="explanation"><a href="/users/add" class="btn-lg btn btn-primary navbar-btn" role="button">登録する</a></div>
<div class="explanation">すでにユーザ登録をしている方はそのままログインしてください</div>
<div class="users form content">
<?= $this->Flash->render('auth') ?>
<?= $this->Form->create() ?>
    <fieldset>
        <h4>ユーザ名とパスワードを入力してください</h4>
        <?= $this->Form->input('username') ?>
        <?= $this->Form->input('password') ?>
    </fieldset>
<button class="btn btn-lg btn-primary" type="submit">ログインする</button>
<?= $this->Form->end() ?>
</div>