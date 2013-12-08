<?php 
class AdultsPictures extends AppModel {
	var $name ='AdultsPictures';	
	var $actsAs = array('Containable');
		
	var $belongsTo = array(
		'adults' => array(
			'className'=>'Adults'
		)
	);
}
?>