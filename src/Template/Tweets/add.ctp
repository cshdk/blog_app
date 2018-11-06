<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tweet $tweet
 */
?>
        <?php
      $logged_in = $this->request->getSession()->read('Auth');
        if(is_null($logged_in)):
             echo "ログインしてください";
          else:
             echo "ログイン中です";
            #後々フラッシュメッセージにする
          endif;
          var_dump($logged_in);
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
            echo $this->Form->control('image',array('type' => 'file'));
            echo $this->Form->control('$user_id',array('type' => 'hidden'));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>


