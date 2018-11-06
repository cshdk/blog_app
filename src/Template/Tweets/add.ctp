<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tweet $tweet
 */
?>

       <?php
        if(isset($user)):
            echo "ログイン中です";
            #後々フラッシュメッセージにする
          else:
            echo "ログインしてください";
          endif;
       ?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tweets'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tweets form large-9 medium-8 columns content">
    <?= $this->Form->create($tweet) ?>
    <fieldset>
        <legend><?= __('Add Tweet') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('body');
        ?>
        <dt>画像投稿</dt>
       <input type="file" name="image" size="35">
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>


