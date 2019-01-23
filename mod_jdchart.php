<?php
	defined('_JEXEC') or die;
	require_once dirname(__FILE__) .'/helper.php';

	// $lang =  $params->get('lang');

	//title
	
	$fields = $params->get('fields');
	echo "<pre>"; print_r($fields);
	
	$result = (array) $fields;
	$result = array_values($result);
	
	
	
	
	
	
 	//query
	//$id1 = $params->get('id');

	//$title = $params->get('title');
	//$result = ModHelloWorldhelper :: GetDetailsfromdb($id1);

	//$result = modHelloWorldHelper::getQuery($user_query);


	// $hello = modHelloWorldHelper::getHello($lang);

	require JModuleHelper::getLayoutPath('mod_jdchart');
