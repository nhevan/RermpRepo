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

$cakeDescription = __d('cake_dev', 'RERMP2 - LGED');
?>
<?php echo $this->Html->docType('html5'); ?> 
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php echo $this->Html->charset(); ?>
		<title>
			<?php echo $cakeDescription ?>:
			<?php echo $title_for_layout; ?>
		</title>
		<?php
			echo $this->Html->meta('icon');
			
			echo $this->fetch('meta');

			echo $this->Html->css('bootstrap.min');
			echo $this->Html->css('bootstrap-responsive.min');
			echo $this->Html->css('datepicker');
			echo $this->Html->css('custom');
			echo $this->Html->css('core');
			echo $this->fetch('css');
			
			echo $this->Html->script('libs/jquery');
			echo $this->Html->script('libs/bootstrap.min');
			echo $this->Html->script('libs/bootstrap-datepicker');
			
			echo $this->fetch('script');
		?>
<!--		<link href='http://fonts.googleapis.com/css?family=Kelly+Slab' rel='stylesheet' type='text/css'>-->

	</head>

	<body>
	<div id="header" class="container-fluid">
		<div class="container-fluid" style="max-width:61.571429rem;margin:0px auto;">
			<?php echo $this->element('menu/top_menu'); ?>
		</div>
	</div><!-- #header .container -->
		<div id="main-container" class="container-fluid">
		
			
			
			<div id="content" class="container-fluid fill">

				<?php echo $this->Session->flash(); ?>
				<?php echo $this->fetch('content'); ?>
			</div><!-- #header .container -->
			
		</div><!-- #main-containesr -->
		
		<div id="footer" class="container-fluid">
			
			<div>
				<p>© 2015 RERMP2 - LGED. All rights reserved. Application by <a href="http://www.syntechwebhouse.com">SynTech Web House</a></p>
			</div>

		</div><!-- #footer .container -->
		
		<div class="container">
			<div class="well">
				<small>
					<?php //echo $this->element('sql_dump');?>
				</small>
			</div>
		</div><!-- .container -->
		<? echo $this->Js->writeBuffer(); ?>
	</body>

</html>