<div class="users form large-9 medium-8 columns content">
    <?php
        if(isset($user)):
            echo "ログイン中です";
            #後々フラッシュメッセージにする
          else:
            echo "ログインしてください";
          endif;
       ?>
    <?= $this->Flash->render() ?>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Please enter your email and password') ?></legend>
        <?= $this->Form->control('email') ?>
        <?= $this->Form->control('password') ?>
        <?= $this->Form->control('username') ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
