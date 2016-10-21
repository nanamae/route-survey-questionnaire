<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $research->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $research->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Researches'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="researches form large-9 medium-8 columns content">
    <?= $this->Form->create($research) ?>
    <fieldset>
        <legend><?= __('Edit Research') ?></legend>
        <?php
            echo $this->Form->input('question');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
