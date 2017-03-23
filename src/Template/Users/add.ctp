

<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">-->
<!--    <ul class="side-nav">-->
<!--        <li class="heading"><?= __('Actions') ?></li>-->
<!--        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>-->
<!--    </ul>-->
<!--</nav>-->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Add User</a>
      </div>
    </div>
</nav>

<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <h4>以下のユーザ登録に必要な情報を入力してください</h4>
        <?php
            echo $this->Form->input('username');
            echo $this->Form->input('email');
            echo $this->Form->input('password');
            // echo $this->Form->input('role', ['options' => ['admin' => 'Admin', 'user' => 'User']]);
        ?>
        <h6>※ アンケートの回答結果を分析する際にユーザ情報を分析材料として使用します</h6>
        <h6>※ 次回アンケートの続きをする場合はログインを行ってから回答してください</h6>
    </fieldset>
    <button class="btn btn-prmary" type="submit">登録する</button>
    <?= $this->Form->end() ?>
</div>
