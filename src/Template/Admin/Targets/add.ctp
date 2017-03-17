<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Targets'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Paths'), ['controller' => 'Paths', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Path'), ['controller' => 'Paths', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="targets form large-9 medium-8 columns content">
    <?= $this->Form->create($target) ?>
    <fieldset>
        <legend><?= __('Add Target') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('url');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
