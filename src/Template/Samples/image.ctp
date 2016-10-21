<div class='panel-boby'>
        <div style="padding:10px">
            <?= h($path->content) ?>
        </div>
        <div style="padding:10px">
            <?php if (!empty($path->img_name)): ?>
                <a href="<?= $this->request->webroot ?>img/<?= $path->name ?>" data-lightbox='image-1'>
                <img src="<?= $this->request->webroot ?>img/mini/<?= $path->name ?>"
                   alt="<?= $path->name ?>" height="200" width="200"/>
                </a>
            <?php endif; ?>
        </div>
    </div>