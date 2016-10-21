
<h1>Questionnaire List</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
    </tr>

    <!-- ここから、$articlesのクエリオブジェクトをループして、投稿記事の情報を表示 -->

    <?php foreach ($lesson1 as $lesson): ?>
    <tr>
        <td><?= $lesson->id ?></td>
        <td>
            <?= $this->Html->link($lesson->title, ['action' => 'lesson1_view', $lesson->id]) ?>
        </td>
        <td>
            <?= $lesson->created->format(DATE_RFC850) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>