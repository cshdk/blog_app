<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tweet $tweet
 */
?>
 <nav class="large-3 medium-4 columns" id="actions-sidebar">
　　<?php  $logged_in = $this->request->getSession()->read('Auth');  ?>
    <?php  if(is_null($logged_in)):   ?>
       <div class="side-nav_view">
         <div class="side-nav">
           <div class="new_tweet_button"><?= $this->Html->link(__('New Blog'), ['action' => 'add']) ?></div>
         </div>
       </div>
    <?php  else:   ?>
    <div class="side-nav_view">
     <div class="side-nav">
          <div class="new_tweet_button_view"><?= $this->Form->postLink(__('Delete Blog'), ['action' => 'delete', $tweet->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tweet->id)]) ?></div>
          </div>
          <div class="side-nav">
            <div class="new_tweet_button_view"><?= $this->Html->link(__('New Blog'), ['action' => 'add']) ?></div>
          </div>
          <div class="side-nav">
            <div class="new_tweet_button_view"><?= $this->Html->link(__('Edit Blog'), ['action' => 'edit', $tweet->id]) ?></div>
          </div>
         <div class="nul_box">
　　　　　　</div>
     </div>
　　<?php  endif;  ?>
 </nav>
 <div class="tweets view large-9 medium-8 columns content">
   <div> <?= date('Y/m/d h:i', strtotime($tweet->created)); ?></div>
      <h3><?= h($tweet->title) ?></h3>
      <div class="row">
         <h4><?= __('本文') ?></h4>
         <?= $this->Text->autoParagraph(h($tweet->body)); ?>
      </div>
  </div>
