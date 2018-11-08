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
        <legend><?= __('新規投稿') ?></legend>
        <?php
            echo $this->Form->control('title',array('placeholder' => 'タイトル'));
            echo $this->Form->control('body',array('type' => 'textarea','placeholder' => '今日の一日を書き出してみよう'));
            echo $this->Form->control('image',array('type' => 'file'));
            echo $this->Form->control('$user_id',array('type' => 'hidden'));
        ?>
    </fieldset>
    <?= $this->Form->button(__('送信')) ?>
    <?= $this->Form->end() ?>
</div>


