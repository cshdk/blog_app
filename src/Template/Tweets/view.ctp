<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tweet $tweet
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tweet'), ['action' => 'edit', $tweet->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tweet'), ['action' => 'delete', $tweet->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tweet->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tweets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tweet'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tweets view large-9 medium-8 columns content">
  <div><?= h($tweet->created) ?></div>
    <h3><?= h($tweet->title) ?></h3>
    <div class="row">
        <h4><?= __('本文') ?></h4>
        <?= $this->Text->autoParagraph(h($tweet->body)); ?>
    </div>
</div>
