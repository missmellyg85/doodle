<?php
class ModelHelper {

	public static function initApiModel($name,$ds=null){
		if(!empty($ds)){
			$ini = array(
				'class'=>$name,
				'ds'=>$ds
			);
			ClassRegistry::config(array('ds'=>$ds));
		}else{
			$ini = $name;
		}
		$out = ClassRegistry::init($ini);
		ClassRegistry::config(array('ds'=>null));
		return $out;
	}
	
	public static function initModelDS($ds) {
		if(!empty($ds)){
			ClassRegistry::config(array('ds'=>$ds));
		}
	}
	
	public static function generateModel($schema, $model){
		switch($schema) {
			case "InstitutionRothman":
				return "InstitutionRothman".$model;
				break;
		}
	}	
}

?>