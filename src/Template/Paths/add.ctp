<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Paths'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="paths form large-9 medium-8 columns content">
    <?= $this->Form->create($path, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Add Path') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('lat');
            echo $this->Form->input('lng');
            echo $this->Form->input('heading');
            echo $this->Form->input('pitch');
            echo $this->Form->file('image');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>


