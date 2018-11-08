<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
          <div class="name2">
            <li class="name">
                <h1><a class="main_name" href='http://localhost:8765/tweets/index'>BLOG APP</a></h1>
            </li>
          </div>
        </ul>
    <div id="container">
      <div id="header">
        <div class="top-bar-section">
            <ul class="right">
                <div id="header_menu">
        <?php  $logged_in = $this->request->getSession()->read('Auth');  ?>
        <?php  if(is_null($logged_in)):   ?>
        <div class="square_btn", href="http://localhost:8765/tweets/index">
        <?php    echo $this->Html->link('ログイン', '/users/login',['class'=>'text_inbutton']); ?>
        </div>
        <div class="square_btn">
        <?php   echo $this->Html->link('新規登録','/users/add',['class'=>'text_inbutton']);     ?>
        </div>
        <?php  else:   ?>
         <div class="square_btn">
        <?php  echo $this->Html->link('ログアウト', '/users/logout',['class'=>'text_inbutton']);   ?>
         </div>
        <?php  endif;  ?>
      </div>
            </ul>
        </div>
    </nav><!-- 　ここより上は共通記述のファイル -->
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer id="blog-footer">
<!-- Blog Common Footer // -->
<div id="footer">
    <p>&copy; BLOG APP Corporation</p>
</div>
<!-- // Blog Common Footer -->
</footer>
</body>
</html>
