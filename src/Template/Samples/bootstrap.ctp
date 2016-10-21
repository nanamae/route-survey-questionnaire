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
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
<div class="container theme-showcase nana" role="main">
<?php
    echo $this->Form->create();
    echo $this->Form->input('textbox');
    echo $this->Form->input('select box', [
        'type' => 'select',
        'options' => [1, 2, 3]
    ]);
    echo $this->Form->input('radio', [
        'label' => 'radio',
        'type' => 'radio',
        'options' => [1, 2, 3]
    ]);
    echo $this->Form->input('checkbox', [
        'multiple' => 'checkbox',
        'options' => [1, 2, 3]
    ]);
    echo $this->Form->button('Submit', [
        'class' => 'btn btn-primary'
    ]);
    echo $this->form->end();
?>
</div>