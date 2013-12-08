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
		echo $this->Html->css('bootstrap');
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
		<div class="row-fluid">
			<div class="span12">
				<div id="banner">
				</div>
			</div>
		</div>

		<div class="row-fluid">
			<ul class="span3 nav">
				<li><?php echo $this->Html->link('Home', array('controller'=>'Pages', 'action'=>'home')); ?></li>
				<li><?php echo $this->Html->link('Available Puppies', array('controller'=>'Litters', 'action'=>'available')); ?></li>
				<li><?php echo $this->Html->link('Parents', array('controller'=>'Adults', 'action'=>'index')); ?></li>
				<li><?php echo $this->Html->link('Prices/Contact', array('controller'=>'Pages', 'action'=>'prices')); ?></li>
				<li><?php echo $this->Html->link('Past Litters', array('controller'=>'Puppies', 'action'=>'past')); ?></li>
				<li><?php echo $this->Html->link('About the Breed', array('controller'=>'Pages', 'action'=>'about')); ?></li>
				<li><?php echo $this->Html->link('Puppy Care', array('controller'=>'Pages', 'action'=>'care')); ?></li>
			</ul>

			<div class="span9">
				<div class="row-fluid">
					<div class="span12">

						<div class="row-fluid">
							<?php echo $content_for_layout; ?>	
						</div>
					</div>
			</div>
		</div>
	</div>

	<div id="footer" class="row-fluid">
		<p>This website has been created and is maintained by <a href="mailto:&#109;&#105;&#115;&#115;&#121;&#119;&#105;&#108;&#108;&#105;&#097;&#109;&#115;&#056;&#053;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;">Melissa Leann Design</a></p>
		<p>©<?php echo date('Y', time()); ?> No portion of this page may be copied or distributed without permission from the webmaster.</p>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
