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

$cakeDescription = __d('cake_dev', 'Valleydoodles - Specializing in Quality Miniature Goldendoodles');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('general.css');
		echo $this->Html->css('admin');
		echo $this->Html->css('bootstrap');

		echo $this->Html->script('jquery-1.10.2.min.js');
		echo $this->Html->script('alert.js');
		echo $this->Html->script('admin');
	?>
</head>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-3892637-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<body>
	<a name="top"></a>
	<div id="container" class="container">
		<div class="row">
			<div class="col-md-12">
				<?php
					if(isset($role) && !empty($role))
						echo $this->Html->tag('span',
							$this->Html->link('Log Out', array('controller'=>'Users', 'action'=>'logout')),
							array('class'=>'pull-right'));
					else
						echo $this->Html->tag('span',
							$this->Html->link('Log In', array('controller'=>'Users', 'action'=>'login')),
							array('class'=>'pull-right'));
				?>
				<div id="banner">
					<?php
						echo $this->Html->image('banner.png');
					?>
				</div>
			</div>
		</div>

		<div class="row">
			<div class='col-md-3'>
			<?php
				$list = array(
					$this->Html->link('Home', array('controller'=>'Pages', 'action'=>'home')),
					$this->Html->link('Available Puppies', array('controller'=>'Litters', 'action'=>'available')),
					$this->Html->link('Parents', array('controller'=>'Adults', 'action'=>'index')),
					$this->Html->link('Prices/Contact', array('controller'=>'Pages', 'action'=>'prices')),
					$this->Html->link('Past Litters', array('controller'=>'Puppies', 'action'=>'past')),
					$this->Html->link('About the Breed', array('controller'=>'Pages', 'action'=>'about')),
					$this->Html->link('Puppy Care', array('controller'=>'Pages', 'action'=>'care'))
					);

				if(isset($role) && !empty($role)){
					array_push(
						$list,
						$this->Html->link('Manage Litters', array('controller'=>'Litters', 'action'=>'index')),
						$this->Html->link('Manage Puppies', array('controller'=>'Puppies', 'action'=>'index'))
						);
				}

				echo $this->Html->nestedList(
					$list, 
					array('class'=>'cust_nav'), 
					array(), 
					'ul');
			?>
			</div>
			<div class="col-md-9">
				<div class="row">
					<div class="col-md-12">
							<?php echo $content_for_layout; ?>
					</div>
			</div>
		</div>

		<div class="row">
			<div id="footer" class="col-md-12">
				<p>This website has been created and is maintained by <a href="mailto:&#109;&#105;&#115;&#115;&#121;&#119;&#105;&#108;&#108;&#105;&#097;&#109;&#115;&#056;&#053;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;">Melissa Leann Design</a></p>
				<p>©<?php echo date('Y', time()); ?> No portion of this page may be copied or distributed without permission from the webmaster.</p>
			</div>
		</div>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
