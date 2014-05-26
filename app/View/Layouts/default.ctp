<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = 'Home - forexpam.com';
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="okpay-verification" content="6270a581-1ed2-41cf-8726-b5604c96d8e3" />
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('style'));

		echo $this->Html->script(array('jquery.min', 'scrolltopcontrol'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="header">
		<table width="960" border="0" height="52" align="center" cellpadding="0" cellspacing="0">
		    <tbody>
		        <tr>
		        	<?php if(!$this->Session->read('user')){ ?>
			        <td width="320">
			          	<div align="left">
			          		<?php echo $this->Html->image('logo.png', array('alt' => 'LOGO', 'height' => 52, 'width' => 320)); ?>
			          	</div>
			        </td>
				    <td width="640">
					    <div align="center">
					        <?php
					        	echo $this->Html->link('Home', array('controller' =>'Home', 'action'=>'index'), array('class' => 'myButton'));
						        echo ' ';
						        echo $this->Html->link('Details', array('controller' =>'Home', 'action'=>'details'), array('class' => 'myButton'));
						        echo ' ';
						        echo $this->Html->link('Faq', array('controller' =>'Home', 'action'=>'faq'), array('class' => 'myButton'));
						        echo ' ';
						        echo $this->Html->link('Register', array('controller' =>'Users', 'action'=>'register'), array('class' => 'myButton'));
						        echo ' ';
						        echo $this->Html->link('Login', array('controller' =>'Users', 'action'=>'login'), array('class' => 'myButton'));
						        echo ' ';
						        echo $this->Html->link('Investments', array('controller' =>'Investments', 'action'=>'index'), array('class' => 'myButton'));
						        echo ' ';
						        echo $this->Html->link('Payments', array('controller' =>'Payments', 'action'=>'index'), array('class' => 'myButton'));
						        echo ' ';
						        echo $this->Html->link('Partners', array('controller' =>'Partners', 'action'=>'index'), array('class' => 'myButton'));
						        echo ' ';
						        echo $this->Html->link('Contact', array('controller' =>'Contacts', 'action'=>'index'), array('class' => 'myButton'));
						        echo ' ';

					        ?>
						</div>
					</td>
					<?php
					}else{ ?>
				          	<td>
				          		<div align="center">
				          			<?php
				          				echo $this->Html->link('My account', array('controller' =>'Users', 'action'=>'member'), array('class' => 'myButtonlogado'));
					        			echo ' ';
					        			echo $this->Html->link('Profile', array('controller' =>'Users', 'action'=>'profile'), array('class' => 'myButtonlogado'));
					        			echo ' ';
					        			echo $this->Html->link('History', array('controller' =>'Users', 'action'=>'history'), array('class' => 'myButtonlogado'));
					        			echo ' ';
					        			echo $this->Html->link('Withdraw', array('controller' =>'Users', 'action'=>'withdraw'), array('class' => 'myButtonlogado'));
					        			echo ' ';
				          			?>

									  <a href="" class="myButtonlogado">Referrals</a>

									<?php
										echo $this->Html->link('Investments', array('controller' =>'Investments', 'action'=>'admin_index'), array('class' => 'myButtonlogado'));
					        			echo ' ';
										echo $this->Html->link('Payments', array('controller' =>'Payments', 'action'=>'index'), array('class' => 'myButtonlogado'));
						        		//echo ' ';
										//echo $this->Html->link('Tools', array('controller' =>'Users', 'action'=>'tools'), array('class' => 'myButtonlogado'));
					        			echo ' ';
										echo $this->Html->link('Partners', array('controller' =>'Partners', 'action'=>'index'), array('class' => 'myButtonlogado'));
					        			echo ' ';
										echo $this->Html->link('Contact', array('controller' =>'Contacts', 'action'=>'index'), array('class' => 'myButtonlogado'));
					        			echo ' ';
				          				echo $this->Html->link('Logout', array('controller' =>'Users', 'action'=>'logout'), array('class' => 'myButtonlogado'));
					        			echo ' ';
				          			?>
						  		</div>
						  	</td>
					<?php } ?>
			       </tr>
		      </tbody>
	    </table>
	</div>
	<div id="content">
		<?php echo $this->Session->flash(); ?>

		<?php echo $this->fetch('content'); ?>
	</div>
		<div id="footer">
			<div id="footnote">
				<div class="clearfix">
					<table width="960" height="22" border="0" align="center">
					  <tbody>
						  	<tr>
							    <td width="50%">
									<div align="left">
								  		<font size="2" face="verdana">
								  			<shadowwhite>
								  			<?php
								  				echo $this->Html->link('Terms', array('controller' =>'Home', 'action'=>'tos'));
								  				echo '&nbsp;&nbsp';
								  				echo $this->Html->link('Fees', array('controller' =>'Home', 'action'=>'fees'));
								  				echo '&nbsp;&nbsp';
								  				echo $this->Html->link('Certificate Incorporation', array('controller' =>'Home', 'action'=>'certificateIncorporation'));
								  				echo '&nbsp;&nbsp';
								  				echo $this->Html->link('Certificate Trading', array('controller' =>'Home', 'action'=>'certificateTrading'));
								  				echo '&nbsp;&nbsp';
								  			?>
								  			</shadowwhite>
								  		</font>
								  	</div>
								</td>
							    <td width="50%">
							    	<div align="right">
										<font size="2" face="verdana" color="#fff">
											<shadowwhite>
												©2014 -2015 All rights reserved.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											</shadowwhite>
										</font>
									</div>
								</td>
						  	</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>

<style type="text/css">
	<!--
	body {margin-left: 0px;margin-top: 0px;margin-right: 0px;margin-bottom: 0px;}
	shadowwhite {color: white; text-shadow: 1px 1px 0px rgba(150, 145, 150, 0.4);}
	shadowwhite a:link {text-decoration: none;color: white;}
	shadowwhite a:visited {text-decoration: none;color: white;}
	shadowwhite a:hover {text-decoration: none;color: white;}
	shadowwhite a:active {text-decoration: none;color: white;}
	-->
</style>