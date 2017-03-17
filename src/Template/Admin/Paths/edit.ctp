<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $path->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $path->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Paths'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="paths form large-9 medium-8 columns content">
    <?= $this->Form->create($path, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Edit Path') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('lat');
            echo $this->Form->input('lng');
            echo $this->Form->input('heading');
            echo $this->Form->input('pitch');
            echo $this->Form->file('image[]');
            echo $this->Form->file('image[]');
            echo $this->Form->file('image[]');
            echo $this->Form->file('image[]');
        ?>
        <!--<pre><?php debug($path); ?></pre> -->
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
<div class="paths form large-9 medium-8 columns content">
     <?php foreach ($path['images'] as $image): ?>
        <img src="<?= $this->Url->build(["controller" => "Images", "action" => "content", $image->id]); ?> " height="200px" />
        <?= $this->Form->postLink(__('Delete'), ["controller" => "Images", 'action' => 'delete', $image->id], 
            [ 
                'data' => ['paths_id' => $path['id']],
                'confirm' => __('Are you sure you want to delete # {0}?', $image->id)
            ]) ?>
    <?php endforeach; ?>
</div>

