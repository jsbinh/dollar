<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $title_for_layout; ?> | Forexpam Manager
        </title>
        <script type="text/javascript">var BASE = '<?php echo Router::url('/admin/'); ?>';</script>


        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="okpay-verification" content="6270a581-1ed2-41cf-8726-b5604c96d8e3" />
        <meta content="INDEX,FOLLOW" name="robots" />
        <meta name="description" content="forexpam.com">
        <meta name="keywords" content="Free forex,investor,small business investor,business credit,small business idea,business,online business degree, forexpam">

        <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css('/backend/css/bootstrap-cerulean');
        echo $this->Html->css('/backend/css/charisma-app');
        echo $this->Html->css('/backend/css/jquery-ui-1.8.21.custom');
        echo $this->Html->css('/backend/css/general');
        echo $this->Html->css('/backend/css/jquery-ui');

        //Script
        echo $this->Html->script('/backend/js/jquery');
        echo $this->Html->script('/backend/js/jquery-ui');
        echo $this->Html->script('/backend/js/bootstrap-dropdown');
        echo $this->Html->script('/backend/js/jquery.cleditor.min');
        echo $this->Html->script('/backend/js/bootstrap.min');



        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        echo $this->Session->flash();
        echo $this->Session->flash('email');
        ?>


    </head>

    <body>
        <!-- topbar starts -->
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <?php echo $this->Html->link("<span>Forexpam Manager</span>", array('controller' => 'index'), array('escape' => false, 'class' => 'brand')); ?>
                    <!-- user dropdown starts -->
                    <div class="btn-group pull-right" >
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-user"></i><span class="hidden-phone">
                                <?php
                                    $user = $this->Session->read('user');
                                    echo $user['User']['username'];
                                ?></span>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <?php echo $this->Html->link('Change password', array('controller' => 'users', 'action' => 'changepassword')); ?>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout')); ?>
                            </li>

                        </ul>
                    </div>
                    <!-- user dropdown ends -->
                </div>
            </div>
        </div>
        <!-- topbar ends -->

        <div class="container-fluid">
            <div class="row-fluid">

                <!-- left menu starts -->
                <div class="span2 main-menu-span">
                    <div class="well nav-collapse sidebar-nav">
                        <ul class="nav nav-tabs nav-stacked main-menu">
                            <li class="nav-header hidden-tablet">Main</li>
                            <li>
                                <?php
                                echo $this->Html->link('<i class="icon-home"></i><span class="hidden-tablet"> Home</span>', array('controller' => 'index', 'action' => 'index'), array('escape' => false, 'class' => 'ajax-link', 'id' => 'index'));
                                ?>  
                            </li>
                            <li>
                                <?php
                                echo $this->Html->link('<i class="icon-align-justify"></i><span class="hidden-tablet"> User manager</span>', array('controller' => 'Users', 'action' => 'index'), array('escape' => false, 'class' => 'ajax-link', 'id' => 'news'));
                                ?>  
                            </li>

                            <li>
                                <?php
                                //echo $this->Html->link('<i class="icon-calendar"></i><span class="hidden-tablet"> News manager</span>', array('controller' => 'News', 'action' => 'index'), array('escape' => false, 'class' => 'ajax-link', 'id' => 'contacts'));
                                ?>
                            </li>

                            <li>
                                <?php
                                echo $this->Html->link('<i class="icon-align-justify"></i><span class="hidden-tablet"> Percent manager</span>', array('controller' => 'Percents', 'action' => 'index'), array('escape' => false, 'class' => 'ajax-link', 'id' => 'recruits'));
                                ?>
                            </li>
                            <li>
                                <?php
                                echo $this->Html->link('<i class="icon-folder-open"></i><span class="hidden-tablet"> SolidTrust manager</span>', array('controller' => 'Solidtrusts', 'action' => 'index'), array('escape' => false, 'class' => 'ajax-link', 'id' => 'candidates'));
                                ?>
                            </li>
                            <li>
                                <?php
                                echo $this->Html->link('<i class="icon-folder-open"></i><span class="hidden-tablet"> Egopay manager</span>', array('controller' => 'Egopays', 'action' => 'index'), array('escape' => false, 'class' => 'ajax-link', 'id' => 'candidates'));
                                ?>
                            </li>
                            <li>
                                <?php
                                echo $this->Html->link('<i class="icon-folder-open"></i><span class="hidden-tablet"> Perfectmoney manager</span>', array('controller' => 'Perfectmoneys', 'action' => 'index'), array('escape' => false, 'class' => 'ajax-link', 'id' => 'candidates'));
                                ?>
                            </li>
                            <li>
                                <?php
                                echo $this->Html->link('<i class="icon-folder-open"></i><span class="hidden-tablet"> Neteller manager</span>', array('controller' => 'Netellers', 'action' => 'index'), array('escape' => false, 'class' => 'ajax-link', 'id' => 'candidates'));
                                ?>
                            </li>
                            <li>
                                <?php
                                echo $this->Html->link('<i class="icon-folder-open"></i><span class="hidden-tablet"> Balance manager</span>', array('controller' => 'Balances', 'action' => 'index'), array('escape' => false, 'class' => 'ajax-link', 'id' => 'candidates'));
                                ?>
                            </li>
                            <li>
                                <?php
                                echo $this->Html->link('<i class="icon-folder-open"></i><span class="hidden-tablet"> Okpay manager</span>', array('controller' => 'Okpays', 'action' => 'index'), array('escape' => false, 'class' => 'ajax-link', 'id' => 'candidates'));
                                ?>
                            </li>

                            <li>
                                <?php
                                echo $this->Html->link('<i class="icon-folder-open"></i><span class="hidden-tablet"> Withdraw manager</span>', array('controller' => 'Withdraws', 'action' => 'index'), array('escape' => false, 'class' => 'ajax-link', 'id' => 'candidates'));
                                ?>
                            </li>




                        </ul>
                    </div><!--/.well -->
                </div><!--/span-->
                <!-- left menu ends -->

                <noscript>
                    <div class="alert alert-block span10">
                        <h4 class="alert-heading">Warning!</h4>
                        <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
                    </div>
                </noscript>

               <!--  <script type="text/javascript">
                    $("#<?php echo $current_controller; ?>").parent().addClass('active');
                </script> 
 -->
                <div id="content" class="span10">
                    <?php echo $this->fetch('content'); ?>
                    <!-- content ends -->
                </div><!--/#content.span10-->
            </div><!--/fluid-row-->

            <hr>

                <footer>
                    <p class="pull-left">&copy; <a href="http://forexpam.com" target="_blank">Forexpam</a> 2014</p>
                </footer>

        </div><!--/.fluid-container-->

        <?php //echo $this->element('sql_dump'); ?>
        <?php echo $this->fetch('script'); ?>
    </body>
</html>

<script>
    $(function() {
        $(".datepicker").datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true
        });
    });
</script>