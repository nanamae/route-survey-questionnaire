<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Path'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="paths index large-9 medium-8 columns content">
    <h3><?= __('Paths') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= $this->Paginator->sort('lat') ?></th>
                <th><?= $this->Paginator->sort('lng') ?></th>
                <th><?= $this->Paginator->sort('heading') ?></th>
                <th><?= $this->Paginator->sort('pitch') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($paths as $path): ?>
            <tr>
                <td><?= $this->Number->format($path->id) ?></td>
                <td><?= h($path->name) ?></td>
                <td><?= h($path->created) ?></td>
                <td><?= h($path->modified) ?></td>
                <td><?= $this->Number->format($path->lat) ?></td>
                <td><?= $this->Number->format($path->lng) ?></td>
                <td><?= $this->Number->format($path->heading) ?></td>
                <td><?= $this->Number->format($path->pitch) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $path->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $path->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $path->id], ['confirm' => __('Are you sure you want to delete # {0}?', $path->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
