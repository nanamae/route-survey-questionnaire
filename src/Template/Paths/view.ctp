<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Path'), ['action' => 'edit', $path->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Path'), ['action' => 'delete', $path->id], ['confirm' => __('Are you sure you want to delete # {0}?', $path->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Paths'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Path'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="paths view large-9 medium-8 columns content">
    <h3><?= h($path->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($path->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($path->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Lat') ?></th>
            <td><?= $this->Number->format($path->lat) ?></td>
        </tr>
        <tr>
            <th><?= __('Lng') ?></th>
            <td><?= $this->Number->format($path->lng) ?></td>
        </tr>
        <tr>
            <th><?= __('Heading') ?></th>
            <td><?= $this->Number->format($path->heading) ?></td>
        </tr>
        <tr>
            <th><?= __('Pitch') ?></th>
            <td><?= $this->Number->format($path->pitch) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($path->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($path->modified) ?></td>
        </tr>
    </table>
</div>
