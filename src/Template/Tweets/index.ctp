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

      <?php
        if(isset($user)):
            echo "ログイン中です";
            #後々フラッシュメッセージにする
          else:
            echo "ログインしてください";
          endif;
          var_dump($user);
       ?>

      <?php
       if (is_null($user)){
         echo "ログイン中です";
       }
      ?>
    <h2><?= __('Tweets') ?>一覧</h2>
    <table>
       <!--  <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead> -->
        <tbody>
            <?php foreach ($tweets as $tweet): ?>
          <!--   <tr> -->
              <!--   <td><?= $this->Number->format($tweet->id) ?></td> -->
                <div class="post_title">
                 <h2>タイトル</h2>
                  <?= h($tweet->title) ?>
                </div>
                <div class="post_body">
                 <h2>内容</h2>
                  <?= h($tweet->body) ?>
                </div>
           <!--      <td><?= h($tweet->created) ?></td>
                <td><?= h($tweet->modified) ?></td> -->
              <!--   <td class="actions"> -->
                  <div class="button_type">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tweet->id]) ?>
                  </div>
                  <div class="button_type">
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tweet->id]) ?>
                  </div>
                  <div class="button_type">
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tweet->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tweet->id)]) ?>
                  </div>
             <!--    </td> -->
          <!--   </tr> -->
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
