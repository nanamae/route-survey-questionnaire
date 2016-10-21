<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Image'), ['action' => 'edit', $image->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Image'), ['action' => 'delete', $image->id], ['confirm' => __('Are you sure you want to delete # {0}?', $image->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Images'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Image'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Paths'), ['controller' => 'Paths', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Path'), ['controller' => 'Paths', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="images view large-9 medium-8 columns content">
    <h3><?= h($image->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Path') ?></th>
            <td><?= $image->has('path') ? $this->Html->link($image->path->name, ['controller' => 'Paths', 'action' => 'view', $image->path->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($image->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($image->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($image->modified) ?></td>
        </tr>
    </table>
</div>
