<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tweet $tweet
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
     <div class="side-nav">
        <div class="new_tweet_button"><?= $this->Html->link(__('Return Top'), ['action' => 'index']) ?></div>
    </div>
</nav>
<div class="tweets form large-9 medium-8 columns content">
    <?= $this->Form->create($tweet) ?>
    <fieldset>
        <legend><?= __('編集ページ') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('body');
        ?>
    </fieldset>
    <?= $this->Form->button(__('更新する')) ?>
    <?= $this->Form->end() ?>
</div>
