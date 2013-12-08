<?php 

class Permissions{
	
	public static function getACL($role){
		$admin=array(
    		'groups'=>'*',
    		'issues'=>array('add', 'edit', 'delete', 'index'),
            'complaints'=>array('delete'),
            'complaint_issues'=>array('delete'),
            'complaintissues'=>array('delete'),
            'locations'=>'*',
    		'users'=>array('index', 'add', 'edit', 'delete', 'view')
    	);
    	$manager=array();
    	$handler=array();
    	$logger=array('*');
    	
    	$deny=array();
    	switch($role){
    		case Configure::read('Role.administrator'):
    			$deny=array();
    			break;
    		case Configure::read('Role.manager'):
    			$deny=$admin;
    			break;
    		case Configure::read('Role.handler'):
    			$deny=array_merge($admin, $manager);
    			break;
    		case Configure::read('Role.logger'):
    			$deny=array_merge($admin, $manager, $handler);
    	}

    	return $deny;
	}

    public static function checkACL($deny, $controller, $action, $exceptions=true){

        if(array_key_exists($controller, $deny)){
            if($deny[$controller] == "*"){
                if($exceptions)
                    throw new PermissionDeniedException("You do not have access to this controller.", 501);
                else
                    return false;
            } else if(in_array($action, $deny[$controller])) {
                if($exceptions)
                    throw new PermissionDeniedException("You do not have access to this controller and action.", 501);
                else
                    return false;
            }
        }
        return true;
    }
}
?>