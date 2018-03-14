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
  <!--   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?> -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">  <title>Welcome</title>
  <link href="/favicon.ico?1490751435" type="image/x-icon" rel="icon"><link href="/favicon.ico?1490751435" type="image/x-icon" rel="shortcut icon">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css?1490751434">
    <link rel="stylesheet" type="text/css" href="/css/bootstrapValidator.min.css?1490751434">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.css?1490751434">
    <link rel="stylesheet" type="text/css" href="/css/login.css?1490751434">

    <script type="text/javascript" src="/js/jquery-1.11.3.js?1490751434"></script>
    <script type="text/javascript" src="/js/bootstrap.js?1490751434"></script>
    <script type="text/javascript" src="/js/login.js?1490751434"></script>
    <script type="text/javascript" src="/js/bootstrapValidator.js?1490751434"></script>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                <li><a target="_blank" href="https://book.cakephp.org/3.0/">Documentation</a></li>
                <li><a target="_blank" href="https://api.cakephp.org/3.0/">API</a></li>
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
