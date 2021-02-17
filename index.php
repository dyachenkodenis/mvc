<?php 


$app_url = '/';

if($app_url == '/'){	
	require_once __DIR__ . '/Models/AppModel.php';
	require_once __DIR__ . '/Controllers/AppController.php';	
	require_once __DIR__ . '/Views/AppView.php';

	$AppModel = new AppModel();
	$AppController = new AppController($AppModel);
	$AppView = new AppView($AppModel, $AppController);

	echo $AppView->helloMessage();

}else{
	header('HTTP/1.1 404 Not Found');
	die("Неверный url адрес!!! Ошибка 404.");
}
