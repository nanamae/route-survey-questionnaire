<h1><?= h($lesson1->title) ?></h1>
<p><?= h($lesson1->content) ?></p>
<p>Q1: <?= h($lesson1->q1) ?></p>
<p>Q2: <?= h($lesson1->q2) ?></p>
<p>Q3: <?= h($lesson1->q3) ?></p>
<p>Q4: <?= h($lesson1->q4) ?></p>
<p>Q5: <?= h($lesson1->q5) ?></p>
<p><small>Created: <?= $lesson1->created->format(DATE_RFC850) ?></small></p>

<a href="https://questionnaire-whc-nanamae.c9users.io/Samples/lesson1_list">戻る</a>
