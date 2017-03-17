<?= $this->Html->css('cake.css') ?>

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
          <ul class="nav navbar-nav navbar-right">
            <div>
               <a href="http://questionnaire-whc-nanamae.c9users.io/users/add" class="btn btn-primary navbar-btn" role="button">Sign Up</a> 
               <a href="http://questionnaire-whc-nanamae.c9users.io/users/login" class="btn btn-default navbar-btn" role="button">Sign In</a>
            </div>
          </ul>
    </div>
</nav>
<div class="users form content">
<?= $this->Flash->render('auth') ?>
<?= $this->Form->create() ?>
    <fieldset>
        <h4>Please enter your username and password</h4>
        <?= $this->Form->input('username') ?>
        <?= $this->Form->input('password') ?>
    </fieldset>
<button class="btn btn-prmary" type="submit">Login</button>
<?= $this->Form->end() ?>
</div>