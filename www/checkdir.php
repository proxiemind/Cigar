<?php

if (is_ajax()) {
	if (isset($_POST["action"]) && !empty($_POST["action"])) {
		$action = $_POST["action"];
		switch($action) {
			case "test": test_function(); break;
			case 'link': generateLink(); break;
		}
	}
}

function is_ajax() {
	return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}

function test_function(){
	$return = $_POST;

	$images = glob('./skins/*.{png}', GLOB_BRACE);
	foreach ($images as &$path) {
		$path = basename($path,".png");
	}

	unset($path);
	$return["names"] = json_encode($images);
	$return["json"] = json_encode($return);
	echo json_encode($return);
}

function generateLink() {

	$return["link"] = json_encode(random_int(6000, 6999));
	$return["json"] = json_encode($return);
	echo json_encode($return);

}

?>
