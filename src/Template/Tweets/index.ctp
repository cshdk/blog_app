<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tweet[]|\Cake\Collection\CollectionInterface $tweets
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tweet'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tweets index large-9 medium-8 columns content">
    <h2 class="main_name_head">Latest Blog List</h2>
    <table>
        <tbody>
           <?php foreach ($tweets_user as $tweet_user): ?>
            <div class="content_box">
                <div class="post_title">
                  <h2 class="name_head">Title</h2>
                  <?= h($tweet_user->title) ?>
                </div>
                <div class="post_body">
                  <h2 class="name_head">Content</h2>
                  <?php
                    $str = ($tweet_user->body);
                    $str = mb_strimwidth($str, 0, 150, '...........', 'UTF-8');
                    echo $str;
                  ?>
                </div>
                 <div class="post_body">
                      <div class="name_author-title">Author</div>
                         <div class="name_author"><?= h($tweet_user->user->username) ?></div>
                      </div>
                      <div class="button_type">
                         <?= $this->Html->link(__('View'), ['action' => 'view', $tweet_user->id]) ?>
                      </div>
                      <div class="button_type">
                         <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tweet_user->id]) ?>
                      </div>
                      <div class="button_type">
                         <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tweet_user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tweet_user->id)]) ?>
                      </div>
                       <div class="post_data">
                          <div class="post_datahead">time</div>
                            <?= date('Y/m/d h:i', strtotime($tweet_user->created)); ?>
                       </div>
                 <!--  <div class="post_date">
                    <h2 class="post_data_head">date</h2>
                    <?= h($tweet_user->created) ?>
                  </div> -->
                </div>
              <div class="nul_box">
              </div>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
