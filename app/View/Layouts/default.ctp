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

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('style'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	
		<title>Home - dollarsflowsystem.com</title>
		<div id="header">
			<table width="960" border="0" height="52" align="center" cellpadding="0" cellspacing="0">
		        <tbody>
		        	<tr>
			          	<td width="320">
			          		<div align="left">
			          			<?php echo $this->Html->image('logo.png', array('alt' => 'LOGO', 'height' => 52, 'width' => 320)); ?>
			          		</div>
			          	</td>
				        <td width="640">
					        <div align="center">					  
								<a href="#" class="myButton">Home</a>
								<a href="#" class="myButton">Details</a>
								<a href="#" class="myButton">Faq</a>
								<a href="#" class="myButton">Register</a>
								<a href="#" class="myButton">Login</a>
								<a href="#" class="myButton">Investments</a>
								<a href="#" class="myButton">Payments</a>
								<a href="#" class="myButton">Partners</a>
								<a href="#" class="myButton">Contact</a>						
							</div>
						</td>
			        </tr>
		      	</tbody>
	      	</table>
		</div>
		<div class="clearfix">
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
								  				<a href="tos.php">Terms</a>
								  &nbsp;&nbsp;<a href="fees.php">Fees</a> &nbsp;&nbsp;<a href="CertificateDFS.jpg">Certificate Incorporation</a> &nbsp;&nbsp;<a href="myforexcertificate.jpg">Certificate Trading</a> &nbsp;&nbsp;
								  			</shadowwhite>
								  		</font>
								  	</div>
								</td>
							    <td width="50%">
							    	<div align="right">
										<font size="2" face="verdana" color="#fff">
											<shadowwhite>
												© 2013 Dollars Flow System, All rights reserved.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
