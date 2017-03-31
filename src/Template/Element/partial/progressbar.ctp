<div class="progressbar">
    <span>回答の進行状況：</span><progress value="<?= $currentResearch->num ?>" max="<?= count(explode(',', $currentResearch->sequence)) ?>"></progress> <?= $currentResearch->num ?> / <?= count(explode(",", $currentResearch->sequence)) ?>
</div>