<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Answer'), ['action' => 'edit', $answer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Answer'), ['action' => 'delete', $answer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $answer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Answers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Answer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Paths'), ['controller' => 'Paths', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Path'), ['controller' => 'Paths', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="answers view large-9 medium-8 columns content">
    <h3><?= h($answer->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Value') ?></th>
            <td><?= h($answer->value) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($answer->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Researches Id') ?></th>
            <td><?= $this->Number->format($answer->researches_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Paths Id') ?></th>
            <td><?= $this->Number->format($answer->paths_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($answer->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($answer->modified) ?></td>
        </tr>
    </table>
</div>
