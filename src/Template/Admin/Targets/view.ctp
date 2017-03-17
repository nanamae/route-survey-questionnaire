<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Target'), ['action' => 'edit', $target->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Target'), ['action' => 'delete', $target->id], ['confirm' => __('Are you sure you want to delete # {0}?', $target->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Targets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Target'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Paths'), ['controller' => 'Paths', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Path'), ['controller' => 'Paths', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="targets view large-9 medium-8 columns content">
    <h3><?= h($target->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($target->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($target->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($target->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($target->name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Url') ?></h4>
        <?= $this->Text->autoParagraph(h($target->url)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Paths') ?></h4>
        <?php if (!empty($target->paths)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Lat') ?></th>
                <th><?= __('Lng') ?></th>
                <th><?= __('Heading') ?></th>
                <th><?= __('Pitch') ?></th>
                <th><?= __('Target Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($target->paths as $paths): ?>
            <tr>
                <td><?= h($paths->id) ?></td>
                <td><?= h($paths->name) ?></td>
                <td><?= h($paths->created) ?></td>
                <td><?= h($paths->modified) ?></td>
                <td><?= h($paths->lat) ?></td>
                <td><?= h($paths->lng) ?></td>
                <td><?= h($paths->heading) ?></td>
                <td><?= h($paths->pitch) ?></td>
                <td><?= h($paths->target_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Paths', 'action' => 'view', $paths->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Paths', 'action' => 'edit', $paths->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Paths', 'action' => 'delete', $paths->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paths->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
