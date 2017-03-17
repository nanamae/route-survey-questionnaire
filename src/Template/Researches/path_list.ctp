<?= $this->Html->css('index.css') ?>

<style>
a {
  color: black;
}
a:hover {
  color: black;
  text-decoration: none;
}
</style>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Paths List</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="http://questionnaire-whc-nanamae.c9users.io/samples">Home</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <div><a href="http://questionnaire-whc-nanamae.c9users.io/users/add" class="btn btn-primary navbar-btn" role="button">Sign Up</a> 
               <!--<a href="http://questionnaire-whc-nanamae.c9users.io/users/login" class="btn btn-default navbar-btn" role="button">Sign In</a>-->
               <a href="http://questionnaire-whc-nanamae.c9users.io/users/logout" class="btn btn-default navbar-btn" role="button">Sign Out</a></div>
          </ul>
        </div>
      </div>
    </nav>
    
<div class="container theme-showcase home" role="main">
    <img src="/img/papers_map.png" class="img-thumbnail" alt="Cinque Terre" width="100%">
</div><br>

<div class="container">
<!--<table class="table table-striped">-->
<table>
    <tr>
        <!--<th>Id</th>-->
        <h3>Path's Name</h3・>
        <!--<td>Created</td>-->
    </tr>

    <?php foreach ($paths as $path): ?>
        <tr class="list-group-item">
            <td>
                <?= $this->Html->link($path->name, ['action' => 'research', $path->id]) ?>
            </td>
            <!--<td>-->
            <!--    <?= $path->created->format(DATE_RFC850) ?>-->
            <!--</td>-->
        </tr>
    <?php endforeach; ?>
    
</table>
</div>
    