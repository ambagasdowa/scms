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

$cakeDescription = '.:: XMF Cristina ::.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="84x82" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        <?= $cakeDescription ?>:
        <?php
         //$this->fetch('title')
        ?>
    </title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('animate.min.css') ?>
    <?= $this->Html->css('paper-dashboard.css') ?>
    <?= $this->Html->css('demo.css') ?>
    <?= $this->Html->css('themify-icons.css') ?>

</head>
<body>

    <?= $this->Flash->render() ?>

    <div id="content" class="wrapper">

        <div id="sidebar-xmf" class="noprint"> <?= $this->element('Paper.xmf/sidebar'); ?> </div>

        <div class="main-panel">
          <?= $this->fetch('content') ?>
          <div id="footer-xmf" class="noprint"> <?= $this->element('Paper.xmf/footer'); ?> </div>
        </div>
    </div>
</body>

    <?= $this->Html->script('jquery-1.10.2');?>
    <?= $this->Html->script('bootstrap.min'); ?>
    <?= $this->Html->script('bootstrap-checkbox-radio'); ?>
    <?= $this->Html->script('bootstrap-notify'); ?>
    <?= $this->Html->script('chartist.min'); ?>
    <?= $this->Html->script('paper-dashboard'); ?>
    <?= $this->Html->script('demo'); ?>

    <script type="text/javascript">
        $(document).ready(function(){

            demo.initChartist();

            $.notify({
                icon: 'ti-package',
                message: "Bienvenido a <b>XMF Cristina</b> - Proceso Electoral Local."

              },{
                  type: 'warning',
                  timer: 2000
              });

        });
    </script>
</html>
