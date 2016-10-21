<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Research'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="researches index large-9 medium-8 columns content">
    <h3><?= __('Researches') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('question') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($researches as $research): ?>
            <tr>
                <td><?= $this->Number->format($research->id) ?></td>
                <td><?= h($research->question) ?></td>
                <td><?= h($research->created) ?></td>
                <td><?= h($research->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $research->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $research->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $research->id], ['confirm' => __('Are you sure you want to delete # {0}?', $research->id)]) ?>
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
