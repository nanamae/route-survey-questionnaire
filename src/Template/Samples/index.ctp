<?= $this->Html->css('index.css') ?>

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
            <li><a href="https://questionnaire-whc-nanamae.c9users.io/paths">Paths</a></li>
          </ul>
        </div>
      </div>
    </nav>
    
<div class="container theme-showcase home" role="main">
    <img src="img/papers_map.png" class="img-thumbnail" alt="Cinque Terre" width="600">
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
    