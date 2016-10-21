<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Research'), ['action' => 'edit', $research->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Research'), ['action' => 'delete', $research->id], ['confirm' => __('Are you sure you want to delete # {0}?', $research->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Researches'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Research'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="researches view large-9 medium-8 columns content">
    <h3><?= h($research->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($research->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($research->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($research->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Question') ?></h4>
        <?= $this->Text->autoParagraph(h($research->question)); ?>
    </div>
</div>
